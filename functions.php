<?php

// Widget: Lang
class FWT_Lang_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'fwt_lang_widget',
            'Lang',
            array( 'description' => 'Widget de idiomas (Lang)' )
        );
    }

    public function widget( $args, $instance ) {
        echo $args['before_widget'];

        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', esc_html( $instance['title'] ) ) . $args['after_title'];
        }

        if ( ! empty( $instance['content'] ) ) {
            echo '<div class="fwt-lang-content">' . wp_kses_post( $instance['content'] ) . '</div>';
        }

        echo $args['after_widget'];
    }

    public function form( $instance ) {
        $title   = isset( $instance['title'] )   ? $instance['title']   : '';
        $content = isset( $instance['content'] ) ? $instance['content'] : '';
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">Título:</label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'content' ) ); ?>">Texto / HTML:</label>
            <textarea class="widefat" rows="5" id="<?php echo esc_attr( $this->get_field_id( 'content' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'content' ) ); ?>"><?php echo esc_textarea( $content ); ?></textarea>
        </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        return array(
            'title'   => sanitize_text_field( $new_instance['title'] ),
            'content' => wp_kses_post( $new_instance['content'] ),
        );
    }
}

function fwt_register_lang_widget() {
    register_widget( 'FWT_Lang_Widget' );
}
add_action( 'widgets_init', 'fwt_register_lang_widget' );

// Sidebar para el widget Lang (menú móvil)
function fwt_register_sidebars() {
    register_sidebar( array(
        'name'          => 'Lang (Menú móvil)',
        'id'            => 'fwt-lang-area',
        'description'   => 'Área para el widget Lang en el menú móvil.',
        'before_widget' => '<div class="fwt-widget-lang">',
        'after_widget'  => '</div>',
        'before_title'  => '<span class="fwt-widget-title">',
        'after_title'   => '</span>',
    ) );
}
add_action( 'widgets_init', 'fwt_register_sidebars' );

function enqueue_styles()
{
    // Tailwind CSS compilado
    wp_enqueue_style('tailwind-output', get_template_directory_uri() . '/src/output.css', array(), filemtime(get_template_directory() . '/src/output.css'));
    
    // Estilos del menú
    wp_enqueue_style('menu-styles', get_template_directory_uri() . '/src/menu-styles.css', array(), filemtime(get_template_directory() . '/src/menu-styles.css'));
    
    // Style.css del tema
    wp_enqueue_style('style', get_stylesheet_uri(), array('tailwind-output'));
}
add_action('wp_enqueue_scripts', 'enqueue_styles');


function enqueue_custom_scripts()
{
    // Swiper CSS y JS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11', true);

    // Gallery Modal CSS y JS
    wp_enqueue_style('gallery-modal-css', get_template_directory_uri() . '/src/gallery-modal.css', array(), filemtime(get_template_directory() . '/src/gallery-modal.css'));
    wp_enqueue_script('gallery-modal-js', get_template_directory_uri() . '/src/gallery-modal.js', array('swiper-js'), filemtime(get_template_directory() . '/src/gallery-modal.js'), true);

    // Air Datepicker CSS y JS
    wp_enqueue_style('air-datepicker-css', 'https://cdn.jsdelivr.net/npm/air-datepicker@3.5.0/air-datepicker.css', array(), '3.5.0');
    wp_enqueue_script('air-datepicker-js', 'https://cdn.jsdelivr.net/npm/air-datepicker@3.5.0/air-datepicker.js', array(), '3.5.0', true);
    
    // Calendar Custom Styles
    wp_enqueue_style('calendar-styles', get_template_directory_uri() . '/src/calendar-styles.css', array('air-datepicker-css'), filemtime(get_template_directory() . '/src/calendar-styles.css'));
    
    // Calendar Init
    wp_enqueue_script('calendar-init', get_template_directory_uri() . '/src/calendar-init.js', array('air-datepicker-js'), filemtime(get_template_directory() . '/src/calendar-init.js'), true);

    // Script personalizado para el menú móvil
    wp_add_inline_script(
        'jquery',
        "document.addEventListener('DOMContentLoaded', () => {
            const toggle = document.getElementById('menuToggle');
            const menu = document.getElementById('mobileMenu');
            
            if (toggle && menu) {
                toggle.addEventListener('click', () => {
                    menu.classList.toggle('hidden');
                    menu.classList.toggle('absolute');
                    menu.classList.toggle('flex');
                    toggle.classList.toggle('active');
                });
            }
        });",
        'after'
    );
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


function theme_setup()
{
    add_theme_support('title-tag');

    add_theme_support('custom-logo', [
        'height' => 80,
        'width' => 240,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => ['site-title', 'site-description'],
    ]);

    // Registrar ubicaciones de menú
    register_nav_menus([
        'header-main-menu' => __('Menú Principal Header', 'freewalkingtemplate'),
    ]);
}
add_action('after_setup_theme', 'theme_setup');


// Permitir subir SVG al media de WordPress
function add_svg_to_upload_mimes($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'add_svg_to_upload_mimes');

// Corregir la detección de tipo MIME para SVG
function fix_svg_mime_type($data, $file, $filename, $mimes)
{
    $ext = isset($data['ext']) ? $data['ext'] : '';
    if (strlen($ext) < 1) {
        $exploded = explode('.', $filename);
        $ext = strtolower(end($exploded));
    }
    if ($ext === 'svg') {
        $data['type'] = 'image/svg+xml';
        $data['ext'] = 'svg';
    } elseif ($ext === 'svgz') {
        $data['type'] = 'image/svg+xml';
        $data['ext'] = 'svgz';
    }
    return $data;
}
add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 4);

// Habilitar vista previa de SVG en la biblioteca de medios
function svg_media_thumbnails($response, $attachment, $meta)
{
    if ($response['type'] === 'image' && $response['subtype'] === 'svg+xml' && class_exists('SimpleXMLElement')) {
        try {
            $path = get_attached_file($attachment->ID);
            if (file_exists($path)) {
                $svg = file_get_contents($path);
                $svg = simplexml_load_string($svg);
                if ($svg !== false) {
                    $response['image'] = array(
                        'src' => $response['url'],
                    );
                    $response['thumb'] = array(
                        'src' => $response['url'],
                    );
                    $response['sizes'] = array(
                        'full' => array(
                            'url' => $response['url'],
                        ),
                    );
                }
            }
        } catch (Exception $e) {
            // Error al procesar SVG
        }
    }
    return $response;
}
add_filter('wp_prepare_attachment_for_js', 'svg_media_thumbnails', 10, 3);


add_theme_support('post-thumbnails');


	add_image_size('slidert', 1000, 586, true);
	add_image_size('cityt', 1500, 690, true);
	add_image_size('boxst', 550, 365, true);
	add_image_size('slidercity', 1200, 550, true);
	


function register_acf_block_types()
{
	// register block gallery
	acf_register_block_type(array(
		'name'              => 'gallery',
		'title'             => __('Gallery FWT'),
		'description'       => __('A custom gallery block.'),
		'render_template'   => 'template-parts/block/gallery.php',
		'category'          => 'formatting',
		'icon'              => 'format-gallery',
		'keywords'          => array('gallery', 'tour'),
	));

}
// Check if function exists and hook into setup.
if (function_exists('acf_register_block_type')) {
	add_action('acf/init', 'register_acf_block_types');
}




// Función para generar el contenido con botón de "Leer más" y "Ocultar"
function leer_mas_func($atts, $content = null)
{
    // Determina el idioma actual
    if (ICL_LANGUAGE_CODE == 'en') {
        $mostrar_texto = 'Read more';
        $ocultar_texto = 'Hide';
    } elseif (ICL_LANGUAGE_CODE == 'es') {
        $mostrar_texto = 'Leer más';
        $ocultar_texto = 'Ocultar';
    }

    // Establece los atributos por defecto
    $atts = shortcode_atts(array(
        'mostrar_texto' => $mostrar_texto,
        'ocultar_texto' => $ocultar_texto,
    ), $atts, 'leer_mas');

    // Genera un identificador único para cada instancia del shortcode
    $shortcode_id = 'leer_mas_' . uniqid();

    // Crea el contenido
    $output = '<div class="text-left -mt-4 mb-4 mr-4" id="' . $shortcode_id . '">';
    $output .= '<div class="leer-mas-contenido pt-2" style="display: none;">' . $content . '</div>';
    $output .= '<a href="#" class="leer-mas-boton underline">' . $atts['mostrar_texto'] . '</a>';
    $output .= '</div>';

    // Agrega el script para mostrar/ocultar el contenido con efecto lento
    $output .= '<script>
        jQuery(document).ready(function($){
            $("#' . $shortcode_id . ' .leer-mas-boton").click(function(e){
                e.preventDefault();
                $("#' . $shortcode_id . ' .leer-mas-contenido").fadeToggle("slow");
                if ($(this).text() === "' . $atts['mostrar_texto'] . '") {
                    $(this).text("' . $atts['ocultar_texto'] . '");
                } else {
                    $(this).text("' . $atts['mostrar_texto'] . '");
                }
            });
        });
    </script>';

    return $output;
}
add_shortcode('leer_mas', 'leer_mas_func');


add_action( 'init', 'dcms_agregar_shortcode' );

function dcms_agregar_shortcode(){
	add_shortcode('EntradasRecientes', 'dcms_entradasrecientes');
}

function dcms_entradasrecientes( $atts , $content )
{
	
	//Valores por defecto
	$atts 		= shortcode_atts(['cantidad' => '10'], $atts, 'EntradasRecientes' );
	$quantity 	= (int) $atts['cantidad'];
	$title 		= ($content) ? $content : '';
	$str 		= '';
	//Consulta entradas
	query_posts(['orderby' => 'date', 'order' => 'DESC' , 'showposts' => $quantity]);
	if ( have_posts() ) {
		if($title) {
			$str  .= '<h3 class="text-[18px] xl:text-[20px] mb-4">'.$title.'</h3>';
		}
		$str .='<div class="">';
		$counter = 1;
		while ( have_posts()) {
			the_post();
			$str  .= 
			'
			<div class="flex bg-white rounded-[8px] overflow-hidden float-left mr-[16px] mb-[16px]">
				<div class="bg-orange text-[16px] font-bold md:h-[40px] flex px-[16px] items-center text-white">'.$counter.'</div>
				<a href="'.get_permalink().'" class="underline md:h-[40px] flex px-[16px] py-[8px] xl:py-[auto] items-center">
					'.get_the_title().'
				</a>
			</div>
			';
			$counter++;
		}
		$str .='</div><div class="clear-both"></div>';
		
	}
	wp_reset_query();
	return $str;
}


function limit_words($string, $word_limit) {

	$words = explode(' ', $string);

	return implode(' ', array_slice($words, 0, $word_limit));
}

add_filter('wpcf7_autop_or_not', '__return_false');

/**
 * AJAX: Verificar si el email existe en el sistema
 */
function fwt_check_email_ajax() {
	check_ajax_referer('fwt_login_nonce', 'nonce');
	
	$email = sanitize_email($_POST['email']);
	
	if (!is_email($email)) {
		wp_send_json_error(array('message' => __('Email inválido', 'freewalking')));
	}
	
	$user = get_user_by('email', $email);
	
	wp_send_json_success(array(
		'exists' => $user !== false,
		'email' => $email
	));
}
add_action('wp_ajax_fwt_check_email', 'fwt_check_email_ajax');
add_action('wp_ajax_nopriv_fwt_check_email', 'fwt_check_email_ajax');

/**
 * AJAX: Registrar nuevo usuario
 */
function fwt_register_user_ajax() {
	check_ajax_referer('fwt_login_nonce', 'nonce');
	
	$email = sanitize_email($_POST['email']);
	$full_name = sanitize_text_field($_POST['full_name']);
	$password = $_POST['password'];
	
	// Validaciones
	if (!is_email($email)) {
		wp_send_json_error(array('message' => __('Email inválido', 'freewalking')));
	}
	
	if (empty($full_name)) {
		wp_send_json_error(array('message' => __('El nombre es requerido', 'freewalking')));
	}
	
	if (strlen($password) < 6) {
		wp_send_json_error(array('message' => __('La contraseña debe tener al menos 6 caracteres', 'freewalking')));
	}
	
	// Verificar si el email ya existe
	if (email_exists($email)) {
		wp_send_json_error(array('message' => __('Este email ya está registrado', 'freewalking')));
	}
	
	// Crear usuario
	$username = sanitize_user(current(explode('@', $email)));
	
	// Si el username ya existe, agregar números
	if (username_exists($username)) {
		$username = $username . rand(100, 999);
	}
	
	$user_id = wp_create_user($username, $password, $email);
	
	if (is_wp_error($user_id)) {
		wp_send_json_error(array('message' => $user_id->get_error_message()));
	}
	
	// Actualizar nombre completo
	wp_update_user(array(
		'ID' => $user_id,
		'display_name' => $full_name,
		'first_name' => $full_name
	));
	
	// Enviar email de verificación (si el plugin loginfree lo requiere)
	// Esto debería integrarse con el sistema de verificación de loginfree
	
	wp_send_json_success(array(
		'message' => __('Usuario registrado exitosamente', 'freewalking'),
		'user_id' => $user_id
	));
}
add_action('wp_ajax_fwt_register_user', 'fwt_register_user_ajax');
add_action('wp_ajax_nopriv_fwt_register_user', 'fwt_register_user_ajax');



/**
 * Código para agregar en functions.php de tu tema de WordPress
 * Expone los menús en la REST API sin necesidad de plugins
 */

// Registrar endpoint personalizado para obtener menús
add_action('rest_api_init', function () {
    register_rest_route('menus/v1', '/menus/(?P<location>[a-zA-Z0-9-_]+)', array(
        'methods' => 'GET',
        'callback' => 'get_menu_by_location',
        'permission_callback' => '__return_true',
    ));
});

/**
 * Obtener menú por ubicación (location)
 * Endpoint: /wp-json/menus/v1/menus/{location}
 * Ejemplo: /wp-json/menus/v1/menus/primary
 */
function get_menu_by_location($request) {
    $location = $request->get_param('location');
    
    // Obtener todas las ubicaciones de menú registradas
    $locations = get_nav_menu_locations();
    
    // Verificar si existe la ubicación solicitada
    if (!isset($locations[$location])) {
        return new WP_Error('menu_not_found', 'Menú no encontrado en esa ubicación', array('status' => 404));
    }
    
    // Obtener el ID del menú asignado a esa ubicación
    $menu_id = $locations[$location];
    
    // Obtener los items del menú
    $menu_items = wp_get_nav_menu_items($menu_id);
    
    if (!$menu_items) {
        return new WP_Error('no_menu_items', 'No hay items en este menú', array('status' => 404));
    }
    
    // Formatear los items del menú
    $formatted_items = array();
    
    foreach ($menu_items as $item) {
        $formatted_items[] = array(
            'ID' => $item->ID,
            'title' => $item->title,
            'url' => $item->url,
            'menu_order' => $item->menu_order,
            'parent' => $item->menu_item_parent,
            'target' => $item->target,
            'classes' => implode(' ', $item->classes),
            'description' => $item->description,
            'object_id' => $item->object_id,
            'object' => $item->object,
            'type' => $item->type,
        );
    }
    
    // Construir jerarquía de menú (items con hijos)
    $menu_tree = build_menu_tree($formatted_items);
    
    return array(
        'id' => $menu_id,
        'location' => $location,
        'count' => count($formatted_items),
        'items' => $menu_tree,
    );
}

/**
 * Construir estructura jerárquica del menú
 */
function build_menu_tree($items, $parent_id = 0) {
    $branch = array();
    
    foreach ($items as $item) {
        if ($item['parent'] == $parent_id) {
            $children = build_menu_tree($items, $item['ID']);
            if ($children) {
                $item['children'] = $children;
            }
            $branch[] = $item;
        }
    }
    
    return $branch;
}

/**
 * OPCIONAL: Endpoint para listar todas las ubicaciones de menú disponibles
 * Endpoint: /wp-json/menus/v1/locations
 */
add_action('rest_api_init', function () {
    register_rest_route('menus/v1', '/locations', array(
        'methods' => 'GET',
        'callback' => 'get_menu_locations',
        'permission_callback' => '__return_true',
    ));
});

function get_menu_locations() {
    $locations = get_nav_menu_locations();
    $registered_menus = get_registered_nav_menus();
    
    $result = array();
    
    foreach ($registered_menus as $location => $description) {
        $menu_id = isset($locations[$location]) ? $locations[$location] : null;
        $menu_obj = $menu_id ? wp_get_nav_menu_object($menu_id) : null;
        
        $result[] = array(
            'location' => $location,
            'description' => $description,
            'menu_id' => $menu_id,
            'menu_name' => $menu_obj ? $menu_obj->name : null,
        );
    }
    
    return $result;
}

/**
 * OPCIONAL: Endpoint para obtener todos los menús (sin ubicación específica)
 * Endpoint: /wp-json/menus/v1/all
 */
add_action('rest_api_init', function () {
    register_rest_route('menus/v1', '/all', array(
        'methods' => 'GET',
        'callback' => 'get_all_menus',
        'permission_callback' => '__return_true',
    ));
});

function get_all_menus() {
    $menus = wp_get_nav_menus();
    $result = array();
    
    foreach ($menus as $menu) {
        $menu_items = wp_get_nav_menu_items($menu->term_id);
        
        $formatted_items = array();
        foreach ($menu_items as $item) {
            $formatted_items[] = array(
                'ID' => $item->ID,
                'title' => $item->title,
                'url' => $item->url,
                'menu_order' => $item->menu_order,
                'parent' => $item->menu_item_parent,
            );
        }
        
        $result[] = array(
            'id' => $menu->term_id,
            'name' => $menu->name,
            'slug' => $menu->slug,
            'count' => $menu->count,
            'items' => build_menu_tree($formatted_items),
        );
    }
    
    return $result;
}

/**
 * Helper simple para traducciones usando ICL_LANGUAGE_CODE de WPML
 */
function fw_trans($key) {
    $lang = defined('ICL_LANGUAGE_CODE') ? ICL_LANGUAGE_CODE : 'es';
    
    $translations = array(
        'login_title' => array(
            'es' => 'Iniciar sesión',
            'en' => 'Log in',
            'pt-br' => 'Entrar',
            'fr' => 'Se connecter',
            'it' => 'Accedi'
        ),
        'register_title' => array(
            'es' => 'Registrarse',
            'en' => 'Sign up',
            'pt-br' => 'Registrar',
            'fr' => 'S\'inscrire',
            'it' => 'Registrati'
        ),
        'my_bookings' => array(
            'es' => 'Mis reservas',
            'en' => 'My bookings',
            'pt-br' => 'Minhas reservas',
            'fr' => 'Mes réservations',
            'it' => 'Le mie prenotazioni'
        ),
        'auth_welcome_message' => array(
            'es' => '👋 Inicia sesión o crea una cuenta para continuar.',
            'en' => '👋 Log in or create an account to continue.',
            'pt-br' => '👋 Entre ou crie uma conta para continuar.',
            'fr' => '👋 Connectez-vous ou créez un compte pour continuer.',
            'it' => '👋 Accedi o crea un account per continuare.'
        ),
    );
    
    if (isset($translations[$key][$lang])) {
        return $translations[$key][$lang];
    }
    
    // Fallback a español
    if (isset($translations[$key]['es'])) {
        return $translations[$key]['es'];
    }
    
    return $key;
}



function cf7_set_hidden_fields() {
    // Recuperar datos usando PHP
    $nametour = isset($_GET['nametour']) ? $_GET['nametour'] : '';
    $fechat = isset($_GET['date']) ? $_GET['date'] : '';
    $paxs = isset($_GET['personas']) ? $_GET['personas'] : '';
	$paxss = str_replace("/", "", $paxs);

    // Pasar los datos a JavaScript
    ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Establecer valores de los campos ocultos solo si los elementos existen
            var nametourEl = document.getElementById('nametour');
            var fechatEl = document.getElementById('fechat');
            var paxsEl = document.getElementById('paxs');
            
            if (nametourEl) {
                nametourEl.value = "<?php echo esc_js($nametour); ?>";
            }
            if (fechatEl) {
                fechatEl.value = "<?php echo esc_js($fechat); ?>";
            }
            if (paxsEl) {
                paxsEl.value = "<?php echo esc_js($paxss); ?>";
            }
        });
    </script>
    <?php
}
add_action('wp_footer', 'cf7_set_hidden_fields');

if (function_exists('acf_add_options_page')) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
}


function top_nav_menu( $request ) {

    // Prioridad: parámetro ?lang= > ICL_LANGUAGE_CODE > 'en'
    $lang = $request->get_param('lang');
    if ( empty($lang) ) {
        $lang = defined('ICL_LANGUAGE_CODE') ? ICL_LANGUAGE_CODE : 'en';
    }
    $lang = sanitize_key( $lang );

    $menu = wp_get_nav_menu_items('menu-' . $lang);

    // Fallback a inglés si no existe el menú del idioma actual
    if ( empty($menu) ) {
        $menu = wp_get_nav_menu_items('menu-en');
    }

    if ( empty($menu) ) {
        return [];
    }

    $items = [];
    $tree  = [];

    // Paso 1: normalizar items
    foreach ( $menu as $item ) {
        $items[ $item->ID ] = [
            'id'       => $item->ID,
            'parent'   => (int) $item->menu_item_parent,
            'name'     => $item->title,
            'href'     => $item->url,
            'children' => []
        ];
    }

    // Paso 2: construir jerarquía
    foreach ( $items as $id => &$item ) {
        if ( $item['parent'] === 0 ) {
            // Es padre
            $tree[] = &$item;
        } else {
            // Es hijo
            if ( isset( $items[ $item['parent'] ] ) ) {
                $items[ $item['parent'] ]['children'][] = &$item;
            }
        }
    }

    return $tree;
}

// add endpoint
add_action( 'rest_api_init', function() {

    // top-nav menu
    register_rest_route( 'wp/v2', 'top-nav', array(
        'methods'             => 'GET',
        'callback'            => 'top_nav_menu',
        'permission_callback' => '__return_true',
        'args'                => array(
            'lang' => array(
                'description'       => 'Código de idioma (ej: en, es, pt-br)',
                'type'              => 'string',
                'sanitize_callback' => 'sanitize_key',
                'required'          => false,
            ),
        ),
    ) );

});