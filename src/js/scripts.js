( function( root, $, undefined ) {
	'use strict';

	$( function() {

		// DOM ready, take it away
		var m = new Marka( '#menu_icon' );
		m.set( 'bars' ).size( 40 );

		// Slick example
		$( document ).ready( function() {
			$( '.your-class' ).slick();
		});
	});
} ( this, jQuery ) );
