<?php

class phpDump {

	var $tableAtts = 'border="1" cellpadding="2" cellspacing="0"';
	var $tdAtts = 'valign="top"';
	var $titleText = NULL;

	var $query_tabSize = 4;
	var $query_expandFunctions = false;

	/*
	ROOT FUNCTIONS
	==============
	*/

	/*----------------------------------------------------------------------
	dump(variable)
	Root function to output result with CSS formatting.
	----------------------------------------------------------------------*/

	function dump($input, $return = false) {

		global $phpDumpCSS;

		$output = NULL;

		if (! isset ( $phpDumpCSS )) {
			$output .= $this->css ();
			$phpDumpCSS = true;
		}

		$output .= '<div id="phpdump">' . $this->getDump ( $input ) . '</div><div style="clear: both;"></div>';

		if ($return)
			return $output;
		else
			echo $output;

	}

	/*----------------------------------------------------------------------
	dumps(variable) : Simple Output
	Root function to output result with basic HTML formatting.
	----------------------------------------------------------------------*/

	function dumps($input, $return = false) {

		$output = $this->getDump ( $input );

		if ($return)
			return $output;
		else
			echo $output;

	}

	/*----------------------------------------------------------------------
	dumpq(variable) : Query Output
	Root function to output a query (if not detected as a query).
	----------------------------------------------------------------------*/

	function dumpq($input, $return = false, $expandFunctions = false) {

		$this->query_expandFunctions = $expandFunctions;

		$output = $this->css ();

		$output .= '<div id="phpdump">' . $this->getDump ( $input, 'query' ) . '</div><div style="clear: both;"></div>';

		if ($return)
			return $output;
		else
			echo $output;

	}

	/*
	FLOW FUNCTIONS
	==============
	*/

	/*----------------------------------------------------------------------
	getDump(variable)
	Call appropirate function.
	----------------------------------------------------------------------*/

	function getDump($input, $type = NULL) {

		if (! $type) {
			$inputtype = $this->checkType ( $input );
			$type = $inputtype [0];
		}

		switch ($type) {

			case 'array' :
				$output = $this->dumpArray ( $input );
				break;
			case 'mysql' :
				$output = $this->dumpMysql ( $input );
				break;
			case 'stream' :
				$output = $this->dumpStream ( $input );
				break;
			case 'object' :
				$output = $this->dumpObject ( $input );
				break;
			case 'query' :
				$output = $this->dumpQuery ( $input );
				break;
			case 'integer' :
			case 'float' :
			case 'string' :
			case 'boolean' :
			case 'null' :
			case 'other' :
				$output = $this->dumpStandard ( $input, $type );
				break;

		}

		return $output;

	}

	/*----------------------------------------------------------------------
	checkType(variable) : Check Type
	Detect variable type.
	----------------------------------------------------------------------*/

	function checkType($input) {

		if (is_array ( $input )) {
			$type [0] = 'array';
			$type [1] = true;
		} elseif (@get_resource_type ( $input ) == 'mysql result') {
			$type [0] = 'mysql';
			$type [1] = true;
		} elseif (@get_resource_type ( $input ) == 'stream') {
			$type [0] = 'stream';
			$type [1] = true;
		} elseif (is_object ( $input )) {
			$type [0] = 'object';
			$type [1] = true;
		} elseif (is_int ( $input )) {
			$type [0] = 'integer';
			$type [1] = false;
		} elseif (is_float ( $input )) {
			$type [0] = 'float';
			$type [1] = false;
		} elseif ($this->is_query ( $input )) {
			$type [0] = 'query';
			$type [1] = false;
		} elseif (is_string ( $input )) {
			$type [0] = 'string';
			$type [1] = false;
		} elseif (is_bool ( $input )) {
			$type [0] = 'boolean';
			$type [1] = false;
		} elseif (is_null ( $input )) {
			$type [0] = 'null';
			$type [1] = false;
		} else {
			$type [0] = 'other';
			$type [1] = false;
		}

		return $type;

	}

	/*----------------------------------------------------------------------
	is_query(variable) : Check if a string matches query syntax
	Detect variable type.
	----------------------------------------------------------------------*/

	function is_query($input) {

		$matches [] = '/^SELECT.*FROM.*/is';
		$matches [] = '/^INSERT INTO.*VALUES.*/is';
		$matches [] = '/^UPDATE.*SET.*/is';
		$matches [] = '/^DELETE FROM.*WHERE.*/is';

		$result = false;

		foreach ( $matches as $key => $value ) {
			if (! $result)
				$result = preg_match ( $value, trim ( $input ) );
		}

		return $result;

	}

	/*
	TYPE FUNCTIONS
	==============
	*/

	/*----------------------------------------------------------------------
	dumpArray(variable, dimension) : Dump Array
	Loop through array elements and output.
	----------------------------------------------------------------------*/

	function dumpArray($input, $dimension = 1) {

		if ($dimension > 5)
			$class = 'dimension5';
		else
			$class = 'dimension' . $dimension;

		$output = '<table ' . $this->tableAtts . ' class="array ' . $class . '">';
		$output .= '<thead>';
		$output .= '<tr class="' . $class . ' title">';

		$output .= '<th colspan="2"><span>Array&nbsp;:&nbsp;Dimension&nbsp;' . $dimension . '</span></th>';

		$output .= '</tr>';
		$output .= '</thead>';
		$output .= '<tbody>';

		foreach ( $input as $key => $value ) {
			$output .= $this->row ( $key, $value, $dimension );
		}

		$output .= '</tbody>';
		$output .= '</table>';

		return $output;

	}

	/*----------------------------------------------------------------------
	dumpMysql(variable) : Dump MySQL Result Resource
	Loop through results and output.
	----------------------------------------------------------------------*/

	function dumpMysql($input) {

		$rows = mysql_num_rows ( $input );

		$row = mysql_fetch_assoc ( $input );

		$colspan = count ( $row );

		$output = '<table ' . $this->tableAtts . ' class="mysql">';
		$output .= '<thead>';
		$output .= '<tr class="mysql title">';

		$output .= '<th colspan="' . $colspan . '"><span>MySQL&nbsp;Result : ' . $rows . ' Rows</span></th>';

		$output .= '</tr>';
		$output .= '<tr class="names">';

		if ($rows)
			foreach ( $row as $key => $value ) {
				$output .= '<th>' . $key . '</th>';
			}

		$output .= '</tr>';
		$output .= '</thead>';
		$output .= '<tbody>';

		if ($rows) {

			mysql_data_seek ( $input, 0 );

			while ( $row = mysql_fetch_assoc ( $input ) ) {

				$output .= '<tr>';

				$cols = 0;
				foreach ( $row as $key => $value ) {

					$mySQLtype = mysql_field_type ( $input, $cols );

					$value = $this->mysqlType ( $mySQLtype, $value );

					$inputtype = $this->checkType ( $value );
					$type = $inputtype [0];
					$box = $inputtype [1];

					if ($box)
						$output .= '<td ' . $this->tdAtts . ' class="box">' . $this->getDump ( $value, $type ) . '</td>';
					else
						$output .= '<td ' . $this->tdAtts . '>' . $this->getDump ( $value, $type ) . '</td>';

					$cols ++;

				}

				$output .= '</tr>';

			}

			mysql_data_seek ( $input, 0 );

		}

		$output .= '</tbody>';
		$output .= '</table>';

		return $output;

	}

	/*----------------------------------------------------------------------
	dumpObject(variable) : Dump Object
	Dump an objects class name, variables and the class methods
	----------------------------------------------------------------------*/

	private function retrieveProtectedInfo($input){

		$reflDb = new ReflectionClass($input);

		$protectedProperties = $reflDb->getProperties(ReflectionProperty::IS_PROTECTED);
		$pNames = array();
		foreach($protectedProperties as $keyP => $property){
			$pNames[] = $property->name;
		}
		$output='';
		foreach($pNames as $key=>$nome){
			$reflDbh = $reflDb->getProperty($nome);
			$reflDbh->setAccessible(true);

			$singleValue = $reflDbh->getValue($input);

			if(!empty($singleValue) && !is_null($singleValue) && is_object($singleValue)){
				$vars = get_object_vars($singleValue);
				foreach($vars as $rr=>$vv){
					$valoriDbh[$nome][$rr] = $singleValue->$rr;
				}
				$output .= $this->row ( $nome, $valoriDbh );
			}
		}
		return $output;
	}

	function dumpObject($input) {
		$className = get_class ( $input );

		$output = '<table ' . $this->tableAtts . ' class="object">';
		$output .= '<thead>';
		$output .= '<tr class="object title">';

		$output .= '<th colspan="2"><span>Object&nbsp;:&nbsp;' . $className . '</span></th>';

		$output .= '</tr>';
		$output .= '</thead>';
		$output .= '<tbody>';
		foreach ( (array)$input as $key => $value ) {
			$output .= $this->row ( $key, $value );
		}
		$output .= self::retrieveProtectedInfo($input);

		$output .= '</tbody>';
		$output .= '</table>';

		return $output;

	}

	/*----------------------------------------------------------------------
	dumpStream(variable) : Dump Stream Meta Data
	Dump stream meta data
	----------------------------------------------------------------------*/

	function dumpStream($input) {

		$metaData = stream_get_meta_data ( $input );

		$output = '<table ' . $this->tableAtts . ' class="stream">';
		$output .= '<thead>';
		$output .= '<tr class="stream title">';

		$output .= '<th colspan="2"><span>Stream</span></th>';

		$output .= '</tr>';
		$output .= '</thead>';
		$output .= '<tbody>';

		foreach ( $metaData as $key => $value ) {
			$output .= $this->row ( $key, $value );
		}

		$output .= '</tbody>';
		$output .= '</table>';

		return $output;

	}

	/*----------------------------------------------------------------------
	dumpQuery(variable) : Dump SQL Query
	----------------------------------------------------------------------*/

	function dumpQuery($input) {

		$expandFunctions = $this->query_expandFunctions;

		$input = preg_replace ( "/\s*\r\n\s*/is", ' ', $input );
		$input = preg_replace ( "/\s*\n\s*/is", ' ', $input );
		$input = preg_replace ( "/\s+/is", ' ', $input );
		$input = ' ' . $input;

		$output = '<div class="query" title="' . $this->title ( 'SQL Query' ) . '">';

		$words ['clauseG'] = ' (SELECT|FROM|WHERE|ORDER BY|GROUP BY|LIMIT|INSERT INTO|VALUES|UPDATE|SET) ';
		$words ['clauseL'] = ' (AND|INNER JOIN|OR|OUTER JOIN|LEFT JOIN|RIGHT JOIN) ';
		$words ['clauseI'] = ' (AS|ON|DESC|DISTINCT|SQL_CALC_FOUND_ROWS) ';
		$words ['function'] = ' (AVG|MAX|IF|CONCAT|DATE_FORMAT|SUBSTRING) ';
		$words ['operator'] = '([^<>]=|!=|<>|>[^=]|<[^=]|>=|<=|\+|-|\/)';
		$words ['numeric'] = '([0-9]+)';
		$words ['string'] = '(\'[^\']*\')';
		$words ['comma'] = '(,)';
		$words ['period'] = '(\.)';
		$words ['asterix'] = '(\*)';
		$words ['open'] = '(\()';
		$words ['close'] = '(\))';

		$array = preg_split ( '/' . implode ( '|', $words ) . '/is', $input, - 1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY );

		$functionDepth = 0;
		$lastType = NULL;
		$nextSpaceBefore = false;
		$level = 0;
		$code = NULL;

		foreach ( $array as $key => $value ) {

			if (trim ( $value ) != '') {

				$value = trim ( $value );

				$thisType = NULL;
				$prefix = NULL;
				$suffix = NULL;
				$levelResetBefore = false;
				$levelUpBefore = false;
				$levelDownBefore = false;
				$levelResetAfter = false;
				$levelUpAfter = false;
				$levelDownAfter = false;
				$newLineBefore = false;
				$newLineAfter = false;
				$spaceBefore = false;
				$spaceAfter = false;
				$uppercase = false;

				foreach ( $words as $tkey => $tvalue ) {
					if (preg_match ( '/' . $tvalue . '/is', ' ' . $value . ' ' ))
						$thisType = $tkey;
				}

				if ($thisType) {

					switch ($thisType) {
						case 'clauseG' :
							$levelResetBefore = true;
							$levelUpAfter = true;
							$newLineAfter = true;
							$newLineBefore = true;
							$uppercase = true;
							break;
						case 'clauseL' :
							$newLineBefore = true;
							$spaceAfter = true;
							$uppercase = true;
							break;
						case 'clauseI' :
							$spaceBefore = true;
							$spaceAfter = true;
							$uppercase = true;
							break;
						case 'function' :
							if ($expandFunctions)
								$newLineBefore = true;
							$uppercase = true;
							break;
						case 'operator' :
							$spaceBefore = true;
							$spaceAfter = true;
							break;
						case 'comma' :
							if (! $functionDepth || $expandFunctions)
								$newLineAfter = true;
							else
								$spaceAfter = true;
							break;
						case 'open' :
							if ($lastType == 'function')
								$functionDepth ++;
							if (! $functionDepth || $expandFunctions) {
								$levelUpAfter = true;
								$newLineBefore = true;
								$newLineAfter = true;
							}
							break;
						case 'close' :
							if (! $functionDepth || $expandFunctions) {
								$levelDownBefore = true;
								$newLineBefore = true;
								$newLineAfter = true;
							}
							if ($functionDepth)
								$functionDepth --;
							break;
					}

					if (! $nextSpaceBefore)
						$spaceBefore = false;

				}

				$value = htmlentities ( $value );

				if ($uppercase)
					$value = strtoupper ( $value );

				if ($levelResetBefore)
					$level = 0;
				if ($levelUpBefore)
					$level ++;
				if ($levelDownBefore)
					$level --;
				if ($newLineBefore)
					$code .= '<br />' . str_repeat ( "\t", $level );
				if ($spaceBefore)
					$code .= ' ';

				if ($thisType)
					$value = '<span class="' . $thisType . '">' . $value . '</span>';
				$code .= $value;

				if ($spaceAfter)
					$code .= ' ';
				if ($levelResetAfter)
					$level = 0;
				if ($levelUpAfter)
					$level ++;
				if ($levelDownAfter)
					$level --;
				if ($newLineAfter)
					$code .= '<br />' . str_repeat ( "\t", $level );

				$lastType = $thisType;

				if ($spaceAfter || $newLineAfter)
					$nextSpaceBefore = false;
				else
					$nextSpaceBefore = true;

			}

		}

		$code = preg_replace ( '/^<br \/>/is', '', $code );
		$code = preg_replace ( '/<br \/>(&nbsp;)*<br \/>/is', '<br />', $code );
		$code = preg_replace ( '/<br \/>(&nbsp;)*$/is', '', $code );

		$output .= '<pre>' . $code . '</pre>';
		$output .= '</div>';

		return $output;

	}

	/*----------------------------------------------------------------------
	dumpStandard(variable, type) : Dump Standard Variable Type
	----------------------------------------------------------------------*/

	function dumpStandard($input, $type) {

		$class = $type;
		$title = ucwords ( $type );
		$tag = 'span';

		switch ($type) {

			case 'string' :
				$subType = $this->subTypeString ( $input );
				break;

			case 'integer' :
				$subType = $this->subTypeInteger ( $input );
				break;

			case 'boolean' :
				if ($input)
					$input = 'True';
				else
					$input = 'False';
				$class .= ' ' . strtolower ( $input );
				break;

			case 'null' :
				$input = 'Null';
				break;

			case 'other' :
				ob_start ();
				var_dump ( $input );
				$input = ob_get_contents ();
				ob_end_clean ();
				$tag = 'pre';
				break;

		}

		if (isset ( $subType )) {

			$input = $subType ['data'];
			if (isset ( $subType ['class'] ))
				$class .= ' ' . $subType ['class'];
			if (isset ( $subType ['title'] ))
				$title .= ' - ' . $subType ['title'];

		}

		$output = '<' . $tag . ' title="' . $this->title ( $title ) . '" class="' . $class . '">' . $input . '</' . $tag . '>';

		return $output;

	}

	/*
	SUB-TYPE FUNCTIONS
	==================
	*/

	/*----------------------------------------------------------------------
	subTypeString() : Sub Type String
	----------------------------------------------------------------------*/

	function subTypeString($input) {

		if ($input == "") {
			$output ['data'] = 'Empty&nbsp;String';
			$output ['class'] = 'empty';
			$output ['title'] = 'Empty';
		} else if (preg_match ( '/^[^\s]*@[a-z][a-z0-9\.-]*\.[a-z]+$/is', $input )) {
			$output ['data'] = '<a href="mailto: ' . $input . '">' . $input . '</a>';
		} else if (preg_match ( '/^(ht|f)tps?:\/\/[a-z][a-z0-9\.-]*\.[a-z]+$/is', $input )) {
			$output ['data'] = '<a href="' . $input . '" target="_blank">' . $input . '</a>';
		} else if (strlen ( $input ) <= 100) {
			$output ['data'] = str_replace ( ' ', '&nbsp;', $input );
		} else {
			$output ['data'] = '<pre>' . htmlentities ( $input ) . '</pre>';
		}

		return $output;

	}

	/*----------------------------------------------------------------------
	subTypeInteger(variable) : Integer
	----------------------------------------------------------------------*/

	function subTypeInteger($input) {

		if ($input >= 946684800 && $input <= 2147471999) {
			$date = date ( 'Y-m-d H:i:s', $input );
			$date = str_replace ( ' ', '&nbsp;', $date );
			$output ['data'] = $input . ' <span class="smalltext">(' . $date . ')</span>';
			$output ['class'] = 'timestamp';
			$output ['title'] = 'Timestamp';
		} else {
			$output ['data'] = $input;
		}

		return $output;

	}

	/*
	EXTRA FUNCTIONS
	===============
	*/

	/*----------------------------------------------------------------------
	dumpMysqlType(variable, type) : Force Variable to Correct Type

	Sets the correct variable type based on the database column type.
	This is required because no matter what the originating column
	type is, if you ask php if the variable is a string it always
	returns true, and functions such as is_int always return false.
	----------------------------------------------------------------------*/

	function mysqlType($type, $input) {

		$this->titleText = 'String (Actual: [Actual], MySQL: ' . $type . ')';

		switch ($type) {

			case 'bigint' :
			case 'int' :
			case 'smallint' :
			case 'tinyint' :
				settype ( $input, 'integer' );
				break;

			case 'varchar' :
			case 'tinytext' :
			case 'text' :
			case 'longtext' :
				settype ( $input, 'string' );
				break;

			case 'real' :
			case 'double' :
				settype ( $input, 'float' );
				break;

		}

		return $input;

	}

	/*----------------------------------------------------------------------
	row(key, value) : Create a table row
	----------------------------------------------------------------------*/

	function row($key, $value, $dimension = NULL) {
		$output = '<tr>';

		$output .= '<td ' . $this->tdAtts . ' class="id">';
		$key = str_replace ( ' ', '&nbsp;', $key );
		$output .= $key;
		$output .= '</td>';

		$type = $this->checkType ( $value );

		if ($type [0] == 'array') {
			$output .= '<td class="box">';
			$output .= $this->dumpArray ( $value, $dimension + 1 );
			$output .= '</td>';
		} else if ($type [1]) {
			$output .= '<td class="box">';
			$output .= $this->getDump ( $value, $type [0] );
			$output .= '</td>';
		} else {
			$output .= '<td>';
			$output .= $this->getDump ( $value, $type [0] );
			$output .= '</td>';
		}

		$output .= '</tr>';

		return $output;

	}

	/*----------------------------------------------------------------------
	title(title) : Create string for 'title' span attribute
	----------------------------------------------------------------------*/

	function title($title) {

		if ($this->titleText) {
			$title = str_replace ( '[Actual]', $title, $this->titleText );
			$this->titleText = NULL;
		}

		return $title;

	}

	/*----------------------------------------------------------------------
	css() : CSS
	----------------------------------------------------------------------*/

	function css() {

		$output = '
                <style>

                    /* Generic Formatting */

                    div#phpdump {
                        font-family: Verdana, Arial, Helvetica, sans-serif;
                        background-color: #ffffff;
                        padding: 5px;
                        margin: 5px;
                        float: left;
                        font-size: 12px;
                        line-height: 15px;
                        border: 1px solid #DDDDDD;
                    }

                    div#phpdump td, div#phpdump th {
                        font-family: Verdana, Arial, Helvetica, sans-serif;
                        font-size: 12px;
                        line-height: 15px;
                        vertical-align: top;
                        border: 1px solid #DDDDDD;
                        text-align: left;
                    }

                    div#phpdump td {
                        padding: 2px 4px 3px 4px;
                    }

                    div#phpdump th {
                        color: #FFFFFF;
                        padding: 2px 4px 2px 4px;
                    }

                    div#phpdump table {
                        border: 2px solid;
                        border-spacing: 0;
                        border-collapse: collapse;
                        width: 200px;
                    }

                    div#phpdump th span {
                        position: relative;
                        top: -1px;
                    }

                    div#phpdump tr.title th {
                        font-size: 10px;
                    }

                    div#phpdump tr.names th {
                        background-color: #F7F7F7;
                        color: #000000;
                    }

                    div#phpdump td.id {
                        font-weight: bold;
                        width: 1px;
                    }

                    div#phpdump td.box {
                        padding: 5px;
                    }

                    div#phpdump table td table {
                        width: 100%;
                    }

                    div#phpdump span.smalltext {
                        font-size: 9px;
                        line-height: 12px;
                    }

                    div#phpdump a {
                        color: #000000;
                        text-decoration: underline;
                    }

                    div#phpdump pre {
                        margin: 0;
                        font-family: Verdana, Arial, Helvetica, sans-serif;
                        font-size: 12px;
                    }

                    /* Array Formatting */

                    div#phpdump table.dimension1 {
                        border-color: #004971;
                    }
                    div#phpdump table.dimension2 {
                        border-color: #21678D;
                    }
                    div#phpdump table.dimension3 {
                        border-color: #4285AA;
                    }
                    div#phpdump table.dimension4 {
                        border-color: #64A4C6;
                    }
                    div#phpdump table.dimension5 {
                        border-color: #85C2E3;
                    }

                    div#phpdump table.dimension1 tr.dimension1 {
                        background-color: #004971;
                    }
                    div#phpdump table.dimension2 tr.dimension2 {
                        background-color: #21678D;
                    }
                    div#phpdump table.dimension3 tr.dimension3 {
                        background-color: #4285AA;
                    }
                    div#phpdump table.dimension4 tr.dimension4 {
                        background-color: #64A4C6;
                    }
                    div#phpdump table.dimension5 tr.dimension5 {
                        background-color: #85C2E3;
                    }

                    /* MySQL Formatting */

                    div#phpdump table.mysql {
                        border-color: #8CBB00;
                    }

                    div#phpdump table.mysql tr.mysql {
                        background-color: #8CBB00;
                    }

                    /* Object Formatting */

                    div#phpdump table.object {
                        border-color: #FF6600;
                    }

                    div#phpdump table.object tr.object {
                        background-color: #FF6600;
                    }

                    /* Stream Formatting */

                    div#phpdump table.stream {
                        border-color: #883694;
                    }

                    div#phpdump table.stream tr.stream {
                        background-color: #883694;
                    }

                    /* Query Formatting */

                    div#phpdump div.query span.operator {
                        color: red;
                    }

                    div#phpdump div.query span.clauseG {
                        color: blue;
                        font-weight: bold;
                    }

                    div#phpdump div.query span.clauseL, div#phpdump div.query span.clauseI, div#phpdump div.query span.function {
                        color: blue;
                    }

                    div#phpdump div.query span.numeric {
                        color: purple;
                    }

                    div#phpdump div.query span.string {
                        color: green;
                    }

                    div#phpdump div.query span.asterix {
                        font-weight: bold;
                    }

                    div#phpdump div.query span.open, div#phpdump div.query span.close {
                        color: #999999;
                        font-weight: bold;
                    }

                    /* Standard Formatting */

                    div#phpdump span.true {
                        color: #009900;
                        font-weight: bold;
                    }

                    div#phpdump span.false {
                        color: #CC0000;
                        font-weight: bold;
                    }

                    div#phpdump span.null, div#phpdump span.empty {
                        color: #bbbbbb;
                        font-weight: bold;
                    }

                    div#phpdump span.error {
                        color: #CC0000;
                    }

                </style>
            ';

		$output = str_replace ( "\r", '', $output );
		$output = str_replace ( "\n", '', $output );
		$output = preg_replace ( '/\s+/is', ' ', $output );
		$output = trim ( $output );

		return $output;

	}
}

/*-----------------------------------------------------------------
In order to minimise the code you have to type to quickly use this
class, these functions are predefined, and they create the PHP Dump
object for you. If you would rather create the PHP Dump object
yourself just remove or ignore these functions.
------------------------------------------------------------------*/

function _dump($input, $return = false) {
	$dump = new phpDump ( );
	return $dump->dump ( $input, $return );
}

function _dumps($input, $return = false) {
	$dump = new phpDump ( );
	return $dump->dumps ( $input, $return );
}

function _dumpq($input, $return = false, $expandFunctions = false) {
	$dump = new phpDump ( );
	return $dump->dumpq ( $input, $return, $expandFunctions );
}

function dump($var) {
	echo "<xmp>";
	print_r ( $var );
	echo "</xmp>";
}
