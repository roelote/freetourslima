<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

<!-- header nuevo -->

    <header class="w-full">
        <div class="container mx-auto mt-[8px] md:my-[10px] px-5 md:px-0 relative">
            <div class="flex flex-col gap-[18px] justify-start items-center">
                <div class="w-full">
                    <div class="flex flex-row justify-between items-center w-full h-[52px]">
                        <div class="custom-logo">
                            <?php if (has_custom_logo()): ?>
                                <?php the_custom_logo(); ?>
                            <?php else: ?>
                                <a href="<?php echo esc_url(home_url('/')); ?>" class="site-title">
                                    <img decoding="async" src="<?php echo get_custom_logo(); ?>" alt="" loading="eager">
                                </a>
                            <?php endif; ?>
                        </div>

                        <div class="hidden md:flex flex-row items-center gap-4">
                            <div class="flex items-center gap-3">
                                <a href="<?php the_field('whatsapp_link', 'option'); ?>" class="text-[14px] font-bold leading-[20px] text-[#5c5c5c] hover:text-[#f57921] transition-colors"><?php the_field('whatsapp_numero', 'option'); ?></a>
                                
                                <?php
                                if( have_rows('box_top','option') ):
                                while( have_rows('box_top','option') ) : the_row(); ?>
                                    <span class="text-[#5c5c5c]">|</span>
                                    <a href="<?php echo get_sub_field('url'); ?>" class="text-[14px] font-bold leading-[20px] text-[#5c5c5c] hover:text-[#f57921] transition-colors"><?php echo get_sub_field('texto'); ?></a>
                                <?php
                                endwhile;
                                endif;
                                ?>
                                
                                <span class="text-[#5c5c5c]">|</span>
                                <?php echo do_shortcode('[wpml_language_selector_widget]'); ?>
                            </div>

                            <!-- Seccion login -->
                            <?php if (is_user_logged_in()) : 
                                $current_user = wp_get_current_user();
                                $user_name = $current_user->display_name;
                                $user_initial = mb_strtoupper(mb_substr($user_name, 0, 1));
                            ?>
                                <!-- Usuario logueado -->
                                <div class="relative ml-3" id="user-dropdown-container">
                                    <button id="user-dropdown-trigger" class="flex items-center gap-2 hover:bg-[#f57921] hover:text-white bg-[#5c5c5c] text-white rounded px-3 py-1 transition-all">
                                        <div class="w-5 h-5 rounded-full bg-[#f57921] flex items-center justify-center text-white font-bold text-sm">
                                            <?php echo esc_html($user_initial); ?>
                                        </div>
                                        <svg class="w-4 h-4 transition-transform" id="dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="user-dropdown-menu" class="absolute right-0 mt-2 w-56 bg-white rounded-lg shadow-lg border border-gray-200 hidden z-50">
                                        <div class="py-2">
                                            <a href="<?php echo admin_url('admin.php?page=comentarios-free-user-panel'); ?>" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 transition-colors">
                                                <svg class="w-5 h-5 mr-3 text-[#f57921]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                                </svg>
                                                <span class="font-medium"><?php _e('Mis comentarios', 'freewalking'); ?></span>
                                            </a>
                                            <div class="border-t border-gray-200 my-2"></div>
                                            <a href="<?php echo wp_logout_url(home_url()); ?>" class="flex items-center px-4 py-2 text-red-600 hover:bg-red-50 transition-colors">
                                                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                                </svg>
                                                <span class="font-medium"><?php _e('Cerrar sesión', 'freewalking'); ?></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php else : ?>
                                <!-- Usuario no logueado -->
                                <div class="relative ml-3" id="user-dropdown-container">
                                    <button id="user-dropdown-trigger" class="flex items-center gap-2 hover:bg-[#f57921] hover:text-white bg-[#5c5c5c] text-white rounded px-3 py-1 transition-all">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 transition-transform" id="dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="user-dropdown-menu" class="absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg border border-gray-200 hidden z-50">
                                        <div class="py-2">
                                            <button id="open-login-modal" class="w-full text-left flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 transition-colors">
                                                <svg class="w-5 h-5 mr-3 text-[#f57921]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                                </svg>
                                                <span class="font-medium"><?php echo fw_trans('login_title', 'Iniciar sesión'); ?></span>
                                            </button>
                                            <button id="open-register-modal" class="w-full text-left flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 transition-colors">
                                                <svg class="w-5 h-5 mr-3 text-[#f57921]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                                </svg>
                                                <span class="font-medium"><?php echo fw_trans('register_title', 'Registrarse'); ?></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="block md:hidden">
                            <button id="menuToggle" class="inline-flex flex-col justify-center items-center p-2 w-10 h-10 rounded-md hover:bg-gray-100 transition-colors">
                                <span class="hamburger-line w-6 h-0.5 bg-[#5c5c5c] transition-all duration-300 ease-in-out"></span>
                                <span class="hamburger-line w-6 h-0.5 bg-[#5c5c5c] my-1 transition-all duration-300 ease-in-out"></span>
                                <span class="hamburger-line w-6 h-0.5 bg-[#5c5c5c] transition-all duration-300 ease-in-out"></span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="relative">
            <?php
            wp_nav_menu([
                'theme_location' => 'header-main-menu',
                'container' => false,
                'menu_id' => 'mobileMenu',
                'menu_class' => 'w-full hidden top-3 left-0 z-50 flex-col md:flex-row items-center justify-center bg-white py-4 gap-5 md:static md:flex shadow-lg md:shadow-none rounded-lg md:rounded-none md:w-auto',
                'fallback_cb' => false,
            ]);
            ?>
        </div>
    </header>

<!-- Modal de Login/Registro -->
<?php if (!is_user_logged_in()) : ?>
<!-- Modal de autenticación compartido -->
<div id="cf-auth-modal" class="cf-modal" style="display: none;">
    <div class="cf-modal-backdrop"></div>
    <div class="cf-modal-content">
        <div class="cf-modal-header">
            <h3 id="cf-auth-modal-title"><?php echo fw_trans('login_title', 'Iniciar sesión'); ?></h3>
            <button class="cf-modal-close">×</button>
        </div>
        
        <!-- Info de autenticación -->
        <div class="cf-auth-info" style="background: #fff5ed; border: 1px solid #ffd9b3; border-radius: 8px; padding: 15px; margin-bottom: 20px; text-align: center;">
            <p style="margin: 0; color: #333;"><?php echo function_exists('lf_trans') ? lf_trans('auth_welcome_message') : '👋 Inicia sesión o crea una cuenta para continuar.'; ?></p>
        </div>
        
        <div class="cf-auth-container">
            <?php 
            // Usar el shortcode de loginfree con modo modal
            if (function_exists('do_shortcode')) {
                echo do_shortcode('[advanced_registration_form no_redirect="true" modal_mode="true"]');
            } else {
                echo '<p style="color: red; text-align: center;">Error: Plugin LoginFree requerido</p>';
            }
            ?>
        </div>
    </div>
</div>

<script>
jQuery(document).ready(function($) {
    // Funcionalidad del dropdown de usuario
    $('#user-dropdown-trigger').on('click', function(e) {
        e.stopPropagation();
        $('#user-dropdown-menu').toggleClass('hidden');
        $('#dropdown-arrow').toggleClass('rotate-180');
    });
    
    // Cerrar dropdown al hacer clic fuera
    $(document).on('click', function(e) {
        if (!$(e.target).closest('#user-dropdown-container').length) {
            $('#user-dropdown-menu').addClass('hidden');
            $('#dropdown-arrow').removeClass('rotate-180');
        }
    });
    
    // Abrir modal cuando se hace clic en login/registro del header
    $('#header-login-btn, #header-register-btn, #open-login-modal, #open-register-modal').on('click', function(e) {
        e.preventDefault();
        
        // Cerrar dropdown primero
        $('#user-dropdown-menu').addClass('hidden');
        $('#dropdown-arrow').removeClass('rotate-180');
        
        // Abrir el modal de autenticación del header (shortcode único)
        $('#cf-auth-modal').fadeIn(300);
        $('body').css('overflow', 'hidden');
        
        // Reinicializar botón de Google después de un momento
        setTimeout(function() {
            if (typeof google !== 'undefined' && google.accounts && typeof arp_ajax !== 'undefined' && arp_ajax.google_client_id) {
                var googleButtonContainer = document.getElementById('gmail-signin-button');
                if (googleButtonContainer) {
                    googleButtonContainer.innerHTML = '';
                    try {
                        google.accounts.id.renderButton(googleButtonContainer, {
                            type: 'standard',
                            theme: 'outline',
                            size: 'large',
                            text: 'signup_with',
                            locale: 'es',
                            shape: 'pill'
                        });
                    } catch (error) {
                        console.error('Error al renderizar botón de Google:', error);
                    }
                }
            }
        }, 300);
    });
    
    // Cerrar modal de autenticación
    $(document).on('click', '#cf-auth-modal .cf-modal-close, #cf-auth-modal .cf-modal-backdrop', function(e) {
        if (e.target === this) {
            $('#cf-auth-modal').fadeOut(300);
            $('body').css('overflow', 'auto');
        }
    });
    
    // Listener para evento de login exitoso desde loginfree
    window.addEventListener('cf_user_logged_in', function(event) {
        if (event.detail && event.detail.success) {
            // Cerrar cualquier modal abierto
            $('#cf-auth-modal, #cf-comment-modal').fadeOut(300);
            $('body').css('overflow', 'auto');
            
            // Verificar si venimos de "escribir reseña" para reabrir el modal después del login
            var returnToReview = sessionStorage.getItem('cf_return_to_review');
            if (returnToReview === 'true') {
                sessionStorage.setItem('cf_open_review_on_load', 'true');
            }
            sessionStorage.removeItem('cf_return_to_review');
            
            // Recargar la página para actualizar el estado de autenticación
            setTimeout(function() {
                location.reload();
            }, 1000);
        }
    });
    
    // Al cargar la página, verificar si debemos abrir el modal de reseña
    $(document).ready(function() {
        var shouldOpenReview = sessionStorage.getItem('cf_open_review_on_load');
        if (shouldOpenReview === 'true' && $('#cf-comment-modal').length > 0) {
            sessionStorage.removeItem('cf_open_review_on_load');
            // Esperar un momento para que la página cargue completamente
            setTimeout(function() {
                $('#cf-add-comment-btn').trigger('click');
            }, 500);
        }
    });
});
</script>
<?php endif; ?>
