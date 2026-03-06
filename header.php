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

    <!-- header -->
    <header class="w-full sticky top-0 z-40 bg-[#efede7] lg:static lg:z-auto">
        <div class="container mx-auto mt-[14px] md:my-[16px] px-4 md:px-0 relative">
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

                        <div class="hidden lg:flex flex-row items-center">
                            <div class="flex items-center gap-3">


                                <?php
                                if (have_rows('box_top', 'option')):
                                    while (have_rows('box_top', 'option')) : the_row(); ?>
                                        <?php if (get_row_index() > 1): ?>
                                            <span class="text-[#5c5c5c]">|</span>
                                        <?php endif; ?>
                                        <a href="<?php echo get_sub_field('url'); ?>" class="text-[14px] font-bold leading-[20px] text-[#5c5c5c] hover:text-[#FF8110] transition-colors !no-underline"><?php echo get_sub_field('texto'); ?></a>
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
                                <div class="relative ml-[20px]" id="user-dropdown-container">
                                    <button id="user-dropdown-trigger" class="flex items-center gap-2 hover:bg-[#FF8110] bg-[#5c5c5c] text-white rounded-[8px] px-3 py-1 transition-all border border-[#5c5c5c]">
                                        <div class="w-5 h-5 rounded-full bg-[#FF8110] flex items-center justify-center text-white font-bold text-sm">
                                            <?php echo esc_html($user_initial); ?>
                                        </div>
                                        <svg class="w-4 h-4 transition-transform" id="dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="user-dropdown-menu" class="absolute right-0 mt-2 w-56 z-[9999] bg-white rounded-lg shadow-lg border border-gray-200 hidden">
                                        <div class="py-2">
                                            <a href="<?php echo admin_url('admin.php?page=comentarios-free-user-panel'); ?>" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 transition-colors">
                                                <svg class="w-5 h-5 mr-3 text-[#FF8110]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
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
                                    <button id="user-dropdown-trigger" class="flex items-center gap-2  border-[#5c5c5c] border-2 rounded-full hover:text-white  text-white  px-3 py-1 transition-all">
                                        <svg class="w-4 h-4" fill="none" stroke="#FF8110" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                        <svg class="w-4 h-4 transition-transform" id="dropdown-arrow" fill="none" stroke="#FF8110" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="user-dropdown-menu" class="absolute right-0 mt-2 w-48 z-[999] bg-white rounded-lg shadow-lg border border-gray-200 hidden">
                                        <div class="py-2">
                                            <button id="open-login-modal" class="w-full text-left flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 transition-colors">
                                                <svg class="w-5 h-5 mr-3 text-[#FF8110]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                                                </svg>
                                                <span class="font-medium"><?php echo fw_trans('login_title', 'Iniciar sesión'); ?></span>
                                            </button>
                                            <button id="open-register-modal" class="w-full text-left flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 transition-colors">
                                                <svg class="w-5 h-5 mr-3 text-[#FF8110]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                                </svg>
                                                <span class="font-medium"><?php echo fw_trans('register_title', 'Registrarse'); ?></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="block lg:hidden">
                            <div class="max-w-7xl mx-auto px-4">
                                <div class="flex items-center justify-between">
                                    <div class="hidden lg:flex justify-center flex-1">
                                        <?php renderMenuDesktop($menu_items, $current_url); ?>
                                    </div>

                                    <button onclick="openMenu()" class="lg:hidden text-3xl text-[#5c5c5c]">
                                        ☰
                                    </button>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </header>
    <div class="relative" id="fwt-nav-bar">
        <?php
        $current_lang = defined('ICL_LANGUAGE_CODE') ? ICL_LANGUAGE_CODE : 'en';
        $api_url = "https://freewalkingtourcusco.org/wp-json/wp/v2/top-nav?lang=" . $current_lang;
        $response = file_get_contents($api_url);
        $menu_items = json_decode($response, true);

        $current_url = home_url(add_query_arg([], $_SERVER['REQUEST_URI']));
        $current_url = rtrim($current_url, '/');

        function isActive($url, $current_url)
        {
            return rtrim($url, '/') === $current_url;
        }

        function renderMenuDesktop($items, $current_url)
        {
            if (!empty($items)) {
                echo "<ul class='flex gap-8' id='desktopMenu'>";

                foreach ($items as $item) {

                    $active_class = isActive($item['href'], $current_url) ? 'menu-active' : '';

                    echo "<li class='relative group'>";
                    echo "<a href='" . htmlspecialchars($item['href']) . "' 
                        class='menu-link font-medium transition $active_class'>";
                    echo htmlspecialchars($item['name']);
                    echo "</a>";

                    if (!empty($item['children'])) {
                        echo "<ul class='absolute left-0 top-full hidden group-hover:block bg-white shadow-lg rounded-lg mt-3 min-w-[200px] p-4 space-y-2'>";

                        foreach ($item['children'] as $child) {

                            $child_active = isActive($child['href'], $current_url) ? 'menu-active' : '';

                            echo "<li>";
                            echo "<a href='" . htmlspecialchars($child['href']) . "' 
                                class='menu-link block transition $child_active'>";
                            echo htmlspecialchars($child['name']);
                            echo "</a>";
                            echo "</li>";
                        }

                        echo "</ul>";
                    }

                    echo "</li>";
                }

                echo "</ul>";
            }
        }

        function renderMenuMobile($items, $current_url)
        {
            if (!empty($items)) {
                echo "<ul class='mobileMenu' class='text-center underline'>";

                foreach ($items as $index => $item) {

                    $hasChildren = !empty($item['children']);
                    $active_class = isActive($item['href'], $current_url) ? 'menu-active' : '';

                    echo "<li>";

                    if ($hasChildren) {

                        echo "
                <button onclick='toggleSubmenu($index)' 
                    class='flex justify-between items-center w-full text-left text-lg font-medium py-3 border-b border-neutral-200'>
                    " . htmlspecialchars($item['name']) . "
                    <span>+</span>
                </button>
                ";

                        echo "<ul id='submenu-$index' class='hidden mt-3 px-4 border-l bg-gray-200 rounded-lg'>";

                        foreach ($item['children'] as $child) {

                            $child_active = isActive($child['href'], $current_url) ? 'menu-active' : '';

                            echo "<li>";
                            echo "<a href='" . htmlspecialchars($child['href']) . "' 
                            class='menu-link text-base py-3 block border-b border-white $child_active'>";
                            echo htmlspecialchars($child['name']);
                            echo "</a>";
                            echo "</li>";
                        }

                        echo "</ul>";
                    } else {

                        echo "<a href='" . htmlspecialchars($item['href']) . "' 
                        class='menu-link block border-b border-neutral-200 text-center no-underline text-base font-inter text-[#5c5c5c] uppercase font-medium py-[23.5px] $active_class'>";
                        echo htmlspecialchars($item['name']);
                        echo "</a>";
                    }

                    echo "</li>";
                }

                echo "</ul>";
            }
        }
        ?>

        <nav class="bg-white border-b absolute right-0 lg:relative hidden lg:flex lg:items-center h-[56px]">
            <div class="max-w-7xl mx-auto px-4">
                <div class="flex items-center justify-between">
                    <div class="justify-center flex-1">
                        <?php renderMenuDesktop($menu_items, $current_url); ?>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div id="mobileMenu"
        class="fixed <?php echo is_user_logged_in() ? 'top-[30px]' : 'top-0'; ?> right-0 w-full min-h-screen bg-white transform translate-x-full transition-transform duration-300 ease-in-out z-50 lg:hidden">

        <div class="flex items-center justify-between p-6 border-b">
            <div class="text-2xl font-bold mobilelogo">
                <?php
                if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="text-2xl font-bold" style="color: #3E593C;">
                        <?php bloginfo('name'); ?>
                    </a>
                <?php
                }
                ?>
            </div>
            <button onclick="closeMenu()" class="text-3xl text-[#5c5c5c]">✕</button>
        </div>
        <div class="px-5 overflow-auto">
            <?php renderMenuMobile($menu_items, $current_url); ?>
            <!-- contenido adicional menu -->
            <div class="py-5">

            <?php dynamic_sidebar( 'fwt-lang-area' ); ?>

            <!-- login  - sing up -->
            <?php if ( is_user_logged_in() ) :
                $current_user  = wp_get_current_user();
                $user_name     = $current_user->display_name;
                $user_initial  = mb_strtoupper( mb_substr( $user_name, 0, 1 ) );
            ?>
                <!-- Usuario logueado -->
                <div class="flex flex-col gap-2 mt-4">
                    <div class="flex items-center gap-3 px-1 mb-2">
                        <div class="w-8 h-8 rounded-full bg-[#FF8110] flex items-center justify-center text-white font-bold text-sm flex-shrink-0">
                            <?php echo esc_html( $user_initial ); ?>
                        </div>
                        <span class="text-sm font-medium text-gray-700 truncate"><?php echo esc_html( $user_name ); ?></span>
                    </div>
                    <a href="<?php echo admin_url('admin.php?page=comentarios-free-user-panel'); ?>" class="flex items-center gap-2 w-full px-4 py-3 rounded-lg border border-[#FF8110] text-[#FF8110] font-medium text-sm hover:bg-[#FF8110] hover:text-white transition-colors">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                        </svg>
                        <?php echo (defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'en') ? 'My comments' : 'Mis comentarios'; ?>
                    </a>
                    <a href="<?php echo wp_logout_url( home_url() ); ?>" class="flex items-center gap-2 w-full px-4 py-3 rounded-lg border border-red-400 text-red-500 font-medium text-sm hover:bg-red-500 hover:text-white transition-colors">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                        <?php echo (defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE == 'en') ? 'Log out' : 'Cerrar sesión'; ?>
                    </a>
                </div>
            <?php else : ?>
                <!-- Usuario no logueado -->
                <div class="flex flex-col gap-5 mt-4">
                    <button id="mobile-open-login-modal" class="flex items-center justify-center gap-2 w-full px-4 py-[1.1rem] rounded-lg  bg-[#FEB370]  text-white font-medium text-base hover:bg-[#1ab6b6] transition-colors">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                        </svg>
                        <?php echo fw_trans('login_title'); ?>
                    </button>
                    <button id="mobile-open-register-modal" class="flex items-center justify-center gap-2 w-full px-4 py-[1rem] rounded-lg border-2 border-[#FEB370] text-[#FEB370] font-medium text-base hover:bg-[#1ab6b6] hover:border-[#1ab6b6] hover:text-white transition-colors">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                        </svg>
                        <?php echo fw_trans('register_title'); ?>
                    </button>
                </div>
            <?php endif; ?>

                
            </div>
        </div>
    </div>
    <script>
        function openMenu() {
            document.getElementById('mobileMenu')
                .classList.remove('translate-x-full');

            document.querySelector("body").style.overflow = "hidden"
        }

        function closeMenu() {
            document.getElementById('mobileMenu')
                .classList.add('translate-x-full');
            document.querySelector("body").style.overflow = "visible"
        }

        function toggleSubmenu(id) {
            const submenu = document.getElementById('submenu-' + id);
            submenu.classList.toggle('hidden');
        }
    </script>

    <script>
        (function() {
            var bar = document.getElementById('fwt-nav-bar');
            var hdr = document.querySelector('header');
            window.addEventListener('scroll', function() {
                if (window.scrollY > 10) {
                    if (bar) bar.classList.add('fwt-scrolled');
                    if (hdr) hdr.classList.add('fwt-header-scrolled');
                } else {
                    if (bar) bar.classList.remove('fwt-scrolled');
                    if (hdr) hdr.classList.remove('fwt-header-scrolled');
                }
            }, {
                passive: true
            });
        })();
    </script>


    <!-- Script del dropdown de usuario (debe estar fuera del condicional para funcionar con usuarios logueados) -->
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
        });
    </script>

    <!-- Modal de Login/Registro -->
    <?php if (!is_user_logged_in()) : ?>
        <!-- Modal de autenticación compartido -->
        <div id="cf-auth-modal" class="cf-modal" style="display: none;">
            <div class="cf-modal-backdrop"></div>
            <div class="cf-modal-content">
                <div class="cf-modal-header">
                    <h3 class="text-[18px] xl:text-[20px]" id="cf-auth-modal-title"><?php echo fw_trans('login_title', 'Iniciar sesión'); ?></h3>
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
                // Abrir modal cuando se hace clic en login/registro del header
                $('#header-login-btn, #header-register-btn, #open-login-modal, #open-register-modal, #mobile-open-login-modal, #mobile-open-register-modal').on('click', function(e) {
                    e.preventDefault();

                    // Cerrar dropdown primero
                    $('#user-dropdown-menu').addClass('hidden');
                    $('#dropdown-arrow').removeClass('rotate-180');

                    // Cerrar menú móvil si está abierto
                    if (typeof closeMenu === 'function') closeMenu();

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