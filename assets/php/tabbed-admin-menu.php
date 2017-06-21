<?php
/**
 * CMB Tabbed Theme Options
 *
 * @author    Arushad Ahmed <@dash8x, contact@arushad.org>
 * @link      http://arushad.org/how-to-create-a-tabbed-options-page-for-your-wordpress-theme-using-cmb
 * @version   0.1.0
 */
class genericMain_Admin {

    /**
     * Default Option key
     * @var string
     */
    private $key = 'generic_options_global';

    /**
     * Array of metaboxes/fields
     * @var array
     */
    protected $option_metabox = array();

    /**
     * Options Page title
     * @var string
     */
    protected $title = '';

    /**
     * Options Tab Pages
     * @var array
     */
    protected $options_pages = array();

    /**
     * Constructor
     * @since 0.1.0
     */
    public function __construct() {
        // Set our title
        $this->title = __( 'Глобальные настройки', 'generic' );
    }

    /**
     * Initiate our hooks
     * @since 0.1.0
     */
    public function hooks() {
        add_action( 'admin_init', array( $this, 'init' ) );
        add_action( 'admin_menu', array( $this, 'add_options_page' ) ); //create tab pages
    }

    /**
     * Register our setting tabs to WP
     * @since  0.1.0
     */
    public function init() {
    	$option_tabs = self::option_fields();
        foreach ($option_tabs as $index => $option_tab) {
        	register_setting( $option_tab['id'], $option_tab['id'] );
        }
    }

    /**
     * Add menu options page
     * @since 0.1.0
     */
    public function add_options_page() {
        $option_tabs = self::option_fields();
        foreach ($option_tabs as $index => $option_tab) {
        	if ( $index == 0) {
        		$this->options_pages[] = add_menu_page( $this->title, $this->title, 'manage_options', $option_tab['id'], array( $this, 'admin_page_display' ) ); //Link admin menu to first tab
        		add_submenu_page( $option_tabs[0]['id'], $this->title, $option_tab['title'], 'manage_options', $option_tab['id'], array( $this, 'admin_page_display' ) ); //Duplicate menu link for first submenu page
        	} else {
        		$this->options_pages[] = add_submenu_page( $option_tabs[0]['id'], $this->title, $option_tab['title'], 'manage_options', $option_tab['id'], array( $this, 'admin_page_display' ) );
        	}
        }
    }

    /**
     * Admin page markup. Mostly handled by CMB
     * @since  0.1.0
     */
    public function admin_page_display() {
    	$option_tabs = self::option_fields(); //get all option tabs
    	$tab_forms = array();
        ?>
        <div class="wrap cmb_options_page <?php echo $this->key; ?>">
            <h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

            <!-- Options Page Nav Tabs -->
            <h2 class="nav-tab-wrapper">
            	<?php foreach ($option_tabs as $option_tab) :
            		$tab_slug = $option_tab['id'];
            		$nav_class = 'nav-tab';
            		if ( $tab_slug == $_GET['page'] ) {
            			$nav_class .= ' nav-tab-active'; //add active class to current tab
            			$tab_forms[] = $option_tab; //add current tab to forms to be rendered
            		}
            	?>
            	<a class="<?php echo $nav_class; ?>" href="<?php menu_page_url( $tab_slug ); ?>"><?php esc_attr_e($option_tab['title']); ?></a>
            	<?php endforeach; ?>
            </h2>
            <!-- End of Nav Tabs -->

            <?php foreach ($tab_forms as $tab_form) : //render all tab forms (normaly just 1 form) ?>
            <div id="<?php esc_attr_e($tab_form['id']); ?>" class="group">
            	<?php cmb2_metabox_form( $tab_form, $tab_form['id'] ); ?>
            </div>
            <?php endforeach; ?>
        </div>
        <?php
    }

    /**
     * Defines the theme option metabox and field configuration
     * @since  0.1.0
     * @return array
     */
    public function option_fields() {

		// $prefix='generic_';

        // Only need to initiate the array once per page-load
        if ( ! empty( $this->option_metabox ) ) {
            return $this->option_metabox;
        }

        $this->option_metabox[] = array(
            'id'         => 'general_options', //id used as tab page slug, must be unique
            'title'      => 'Общие',
            'show_on'    => array( 'key' => 'options-page', 'value' => array( 'general_options' ), ), //value must be same as id
            'show_names' => true,
            'fields'     => array(
				array(
					'name' => __('Главный логотип', 'generic'),
					'desc' => __('выбрать файл для лого на всех страницах', 'generic'),
					'id' => 'header_logo', //each field id must be unique
					'default' => '',
					'type' => 'file',
				),
				array(
					'name' => __('Время работы', 'generic'),
					// 'desc' => __('Сюда пишем адрес', 'generic'),
					'id'   => 'general_options_title0',
					'type' => 'title'
				),
				array(
					'name' => __('Время работы в будние дни', 'generic'),
					// 'desc' => __('выбрать файл для лого на всех страницах', 'generic'),
					'id' => 'weekdays_hours', //each field id must be unique
					'default' => '',
					'type' => 'text',
				),
				array(
					'name' => __('Время работы в выходные дни', 'generic'),
					// 'desc' => __('выбрать файл для лого на всех страницах', 'generic'),
					'id' => 'weekends_hours', //each field id must be unique
					'default' => '',
					'type' => 'text',
				),
			)
        );

        $this->option_metabox[] = array(
            'id'         => 'social_options',
            'title'      => 'Адрес, Соцсети, Email',
            'show_on'    => array( 'key' => 'options-page', 'value' => array( $prefix.'social_options' ), ),
            'show_names' => true,
            'fields'     => array(
				array(
					'name' => __('Адрес', 'generic'),
					'desc' => __('Сюда пишем адрес', 'generic'),
					'id'   => 'social_options_title0',
					'type' => 'title'
				),
				array(
					'name' => __('Адрес', 'generic'),
					// 'desc' => __('Сюда пишем ссылки на соцсети', 'generic'),
					'id'   => 'address',
					'type' => 'text'
				),
				array(
					'name' => __('Телефоны (контакты)', 'generic'),
					'desc' => __('Данные для глобальных настроек контактных данных', 'generic'),
					'id'   => 'social_options_title1',
					'type' => 'title'
				),
				array(
					'name' => __('Горячая линия', 'generic'),
					'desc' => __('вставить телефон для вывода в шапке в разделе "горячая линия"', 'generic'),
					'id' => 'hotline',
					'default' => '',
					'type' => 'text'
				),
				array(
					'name' => __('Другие телефоны', 'generic'),
					'desc' => __('выводятся справа от расписания в футере; указать через запятую БЕЗ ПРОБЕЛА', 'generic'),
					'id' => 'footer_phones',
					'default' => '',
					'type' => 'text'
				),
				// array(
				// 	'name' => __('Телефон для футера 1 (главный)', 'generic'),
				// 	// 'desc' => __('выводятся справа от расписания в футере; указать через запятую БЕЗ ПРОБЕЛА', 'generic'),
				// 	'id' => 'phone1',
				// 	'default' => '',
				// 	'type' => 'text'
				// ),
				// array(
				// 	'name' => __('Телефон для футера 2', 'generic'),
				// 	// 'desc' => __('выводятся справа от расписания в футере; указать через запятую БЕЗ ПРОБЕЛА', 'generic'),
				// 	'id' => 'phone2',
				// 	'default' => '',
				// 	'type' => 'text'
				// ),
				// array(
				// 	'name' => __('Телефон для футера 3', 'generic'),
				// 	// 'desc' => __('выводятся справа от расписания в футере; указать через запятую БЕЗ ПРОБЕЛА', 'generic'),
				// 	'id' => 'phone3',
				// 	'default' => '',
				// 	'type' => 'text'
				// ),
				array(
					'name' => __('Соцсети', 'generic'),
					'desc' => __('Сюда пишем ссылки на соцсети', 'generic'),
					'id'   => 'social_options_title3',
					'type' => 'title'
				),
				array(
					'name' => __('Instagram', 'generic'),
					'desc' => __('вставить ссылку на страницу', 'generic'),
					'id' => 'instagram',
					'default' => '',
					'type' => 'text'
				),
				array(
					'name' => __('VK.com', 'generic'),
					'desc' => __('вставить ссылку на страницу', 'generic'),
					'id' => 'vk',
					'default' => '',
					'type' => 'text'
				),
				array(
					'name' => __('Facebook', 'generic'),
					'desc' => __('вставить ссылку на страницу', 'generic'),
					'id' => 'facebook',
					'default' => '',
					'type' => 'text'
				),
				array(
					'name' => __('Youtube', 'generic'),
					'desc' => __('вставить ссылку на страницу', 'generic'),
					'id' => 'youtube',
					'default' => '',
					'type' => 'text'
				),
				array(
					'name' => __('Email', 'generic'),
					'desc' => __('Сюда пишем разные email', 'generic'),
					'id'   => 'social_options_title2',
					'type' => 'title'
				),
				array(
					'name' => __('Email', 'generic'),
					'desc' => __('вставить email', 'generic'),
					'id' => 'email',
					'default' => '',
					'type' => 'text'
				),
				// array(
				// 	'name' => __('Шорткод формы для модального окна', 'generic'),
				// 	'desc' => __('вставить шорткод', 'generic'),
				// 	'id' => 'contact-form',
				// 	'default' => '',
				// 	'type' => 'text'
				// ),
			)
        );

        $this->option_metabox[] = array(
            'id'         => 'advanced_options',
            'title'      => 'Другие настройки',
            'show_on'    => array( 'key' => 'options-page', 'value' => array( 'advanced_options' ), ),
            'show_names' => true,
            'fields'     => array(
				array(
					'name' => __('Особый CSS', 'generic'),
					'desc' => __('Сюда вносим кастомный css.<br><b>Теги <code>&lt;style&gt; и &lt;/style&gt;</code> опускаем - сюда пишем ТОЛЬКО ЧИСТЫЙ CSS</b>', 'generic'),
					'id' => 'custom_css',
					'default' => ' ',
					'type' => 'textarea',
				),
				array(
					'name' => __('Особый JS', 'generic'),
					'desc' => __('Пиксели, метрики и другие важные js-вещи. Будет выводиться где надо и как надо.<br><b>Теги <code>&lt;script&gt; и &lt;/script&gt;</code> опускаем - сюда пишем ТОЛЬКО ЧИСТЫЙ JS</b>', 'generic'),
					'id' => 'custom_js',
					'default' => ' ',
					'type' => 'textarea',
				),
				array(
					'name' => __('Особый noscript', 'generic'),
					'desc' => __('Если к коду идет дополнение в тегах noscript.<br><b>Теги <code>&lt;noscript&gt; и &lt;/noscript&gt;</code> опускаем</b>', 'generic'),
					'id' => 'custom_noscript',
					'default' => ' ',
					'type' => 'textarea',
				),
			)
        );

        //insert extra tabs here

        return $this->option_metabox;
    }

    /**
     * Returns the option key for a given field id
     * @since  0.1.0
     * @return array
     */
    public function get_option_key($field_id) {
    	$option_tabs = $this->option_fields();
    	foreach ($option_tabs as $option_tab) { //search all tabs
    		foreach ($option_tab['fields'] as $field) { //search all fields
    			if ($field['id'] == $field_id) {
    				return $option_tab['id'];
    			}
    		}
    	}
    	return $this->key; //return default key if field id not found
    }

    /**
     * Public getter method for retrieving protected/private variables
     * @since  0.1.0
     * @param  string  $field Field to retrieve
     * @return mixed          Field value or exception is thrown
     */
    public function __get( $field ) {

        // Allowed fields to retrieve
        if ( in_array( $field, array( 'key', 'fields', 'title', 'options_pages' ), true ) ) {
            return $this->{$field};
        }
        if ( 'option_metabox' === $field ) {
            return $this->option_fields();
        }

        throw new Exception( 'Invalid property: ' . $field );
    }

}

// Get it started
$my_Admin = new genericMain_Admin();
$my_Admin->hooks();

/**
 * Wrapper function around cmb_get_option
 * @since  0.1.0
 * @param  string  $key Options array key
 * @return mixed        Option value
 */
function genericMain_option( $key = '' ) {
    global $my_Admin;
    return cmb2_get_option( $my_Admin->get_option_key($key), $key );
}

// theme config admin page
/**
 * CMB2 Theme Options
 * @version 0.1.0
 */
class generic_Admin {
	/**
 	 * Option key, and option page slug
 	 * @var string
 	 */
	private $key = 'generic_options';
	/**
 	 * Options page metabox id
 	 * @var string
 	 */
	private $metabox_id = 'generic_option_metabox';
	/**
	 * Options Page title
	 * @var string
	 */
	protected $title = '';
	/**
	 * Options Page hook
	 * @var string
	 */
	protected $options_page = '';
	/**
	 * Holds an instance of the object
	 *
	 * @var generic_Admin
	 **/
	private static $instance = null;
	/**
	 * Constructor
	 * @since 0.1.0
	 */
	private function __construct() {
		// Set our title
		$this->title = __( 'Филиалы', 'generic' );
	}
	/**
	 * Returns the running object
	 *
	 * @return generic_Admin
	 **/
	public static function get_instance() {
		if( is_null( self::$instance ) ) {
			self::$instance = new self();
			self::$instance->hooks();
		}
		return self::$instance;
	}
	/**
	 * Initiate our hooks
	 * @since 0.1.0
	 */
	public function hooks() {
		add_action( 'admin_init', array( $this, 'init' ) );
		add_action( 'admin_menu', array( $this, 'add_options_page' ) );
		add_action( 'cmb2_admin_init', array( $this, 'add_options_page_metabox' ) );
	}
	/**
	 * Register our setting to WP
	 * @since  0.1.0
	 */
	public function init() {
		register_setting( $this->key, $this->key );
	}
	/**
	 * Add menu options page
	 * @since 0.1.0
	 */
	public function add_options_page() {
		$this->options_page = add_menu_page( $this->title, $this->title, 'manage_options', $this->key, array( $this, 'admin_page_display' ) );
		// Include CMB CSS in the head to avoid FOUC
		add_action( "admin_print_styles-{$this->options_page}", array( 'CMB2_hookup', 'enqueue_cmb_css' ) );
	}
	/**
	 * Admin page markup. Mostly handled by CMB2
	 * @since  0.1.0
	 */
	public function admin_page_display() {
		?>
		<div class="wrap cmb2-options-page <?php echo $this->key; ?>">
			<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
			<?php cmb2_metabox_form( $this->metabox_id, $this->key ); ?>
		</div>
		<?php
	}
	/**
	 * Add the options metabox to the array of metaboxes
	 * @since  0.1.0
	 */
	function add_options_page_metabox() {
		$prefix='generic_';
		// hook in our save notices
		add_action( "cmb2_save_options-page_fields_{$this->metabox_id}", array( $this, 'settings_notices' ), 10, 2 );
		$cmb = new_cmb2_box( array(
			'title'         => 'Филиалы',
			'id'         => $this->metabox_id,
			'hookup'     => false,
			'cmb_styles' => true,
			'show_on'    => array(
				// These are important, don't remove
				'key'   => 'options-page',
				'value' => array( $this->key, )
			),
		) );
		$cmb->add_field(array(
		    'name' => __( 'Центральный офис', 'generic' ),
		    'id'   => 'main_tel',
		    'type' => 'text',
			// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
		) );
		$cmb->add_field(array(
		    'name' => __( 'Отдел продаж', 'generic' ),
		    'id'   => 'main_sales',
		    'type' => 'text',
			// 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
		) );
		$group_field_id = $cmb->add_field( array(
		    'id'          => $prefix.'branches',
		    'type'        => 'group',
		    'description' => __( 'Адреса и описания филиалов', 'generic' ),
		    // 'repeatable'  => false, // use false if you want non-repeatable group
		    'options'     => array(
		        'group_title'   => __( 'Филиал {#}', 'generic' ), // since version 1.1.4, {#} gets replaced by row number
		        'add_button'    => __( 'Добавить еще филиал', 'generic' ),
		        'remove_button' => __( 'Удалить филиал', 'generic' ),
		        'sortable'      => true, // beta
		        // 'closed'     => true, // true to have the groups closed by default
		    ),
		) );
		// Id's for group's fields only need to be unique for the group. Prefix is not needed.
		$cmb->add_group_field( $group_field_id, array(
		    'name' => __( 'Название филиала', 'generic' ),
		    'id'   => 'branch_title',
		    'type' => 'text',
		    // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
		) );
		$cmb->add_group_field( $group_field_id, array(
		    'name' => __( 'Название филиала - для страницы контактов', 'generic' ),
		    'id'   => 'branch_title_full',
		    'type' => 'text',
		    // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
		) );
		$cmb->add_group_field( $group_field_id, array(
		    'name' => __( 'Телефон филиала', 'generic' ),
		    'id'   => 'branch_tel',
		    'type' => 'text',
			'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
		) );
	}
	/**
	 * Register settings notices for display
	 *
	 * @since  0.1.0
	 * @param  int   $object_id Option key
	 * @param  array $updated   Array of updated fields
	 * @return void
	 */
	public function settings_notices( $object_id, $updated ) {
		if ( $object_id !== $this->key || empty( $updated ) ) {
			return;
		}
		add_settings_error( $this->key . '-notices', '', __( 'Настройки обновлены.', 'generic' ), 'updated' );
		settings_errors( $this->key . '-notices' );
	}
	/**
	 * Public getter method for retrieving protected/private variables
	 * @since  0.1.0
	 * @param  string  $field Field to retrieve
	 * @return mixed          Field value or exception is thrown
	 */
	public function __get( $field ) {
		// Allowed fields to retrieve
		if ( in_array( $field, array( 'key', 'metabox_id', 'title', 'options_page' ), true ) ) {
			return $this->{$field};
		}
		throw new Exception( 'Неверное значение: ' . $field );
	}
}
/**
 * Helper function to get/return the generic_Admin object
 * @since  0.1.0
 * @return generic_Admin object
 */
function generic_admin() {
	return generic_Admin::get_instance();
}
/**
 * Wrapper function around cmb2_get_option
 * @since  0.1.0
 * @param  string  $key Options array key
 * @return mixed        Option value
 */
function generic_get_option( $key = '' ) {
	return cmb2_get_option( generic_admin()->key, $key );
}
// Get it started
// generic_admin();
