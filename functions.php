<?php
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

    // Rocket Scripts
    wp_enqueue_script(
        'rocket-web',
        'https://static.rocket.new/rocket-web.js?_cfg=https%3A%2F%2Fcuscowalk9884back.builtwithrocket.new&_be=https%3A%2F%2Fappanalytics.rocket.new&_v=0.1.14',
        array(),
        null,
        false
    );
    wp_script_add_data('rocket-web', 'type', 'module');
    wp_script_add_data('rocket-web', 'async', true);

    wp_enqueue_script(
        'rocket-shot',
        'https://static.rocket.new/rocket-shot.js?v=0.0.2',
        array(),
        null,
        false
    );
    wp_script_add_data('rocket-shot', 'type', 'module');
    wp_script_add_data('rocket-shot', 'defer', true);

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


function add_svg_to_upload_mimes($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'add_svg_to_upload_mimes');


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
			$str  .= '<h3 class="mb-4">'.$title.'</h3>';
		}
		$str .='<div class="">';
		$counter = 1;
		while ( have_posts()) {
			the_post();
			$str  .= 
			'
			<div class="flex bg-white rounded-[8px] overflow-hidden float-left mr-[16px] mb-[16px]">
				<div class="bg-orange text-[16px] font-bold p-[16px] text-white">'.$counter.'</div>
				<a href="'.get_permalink().'" class="underline p-[16px]">
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
