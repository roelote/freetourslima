<?php

get_header();

?>

<main>
    <div class="container mx-auto px-5 md:px-0 content-blogs mb-[88px] mt-[48px]">
        <div class="flex flex-col md:flex-row gap-[81px]">
            <div class="w-full md:w-[640px]">
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<nav class="breadcrumbs text-[14px] text-[#A49D9D] mb-[16px]">', '</nav>');
                }
                the_title('<h1 class="!mb-[24px] md:!mb-[32px]">', '</h1>');

                if (have_posts()) :
                    while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                endif;
                ?>
                <p class="capitalize text-[14px] text-[#A49D9D] my-[32px]"><?php echo get_the_date('F j, Y'); ?></p>
                
            </div>
            <div>
                <div class="sticky top-0 right-0">
                    <div class="border-l-2 border-[#CFD1D3] pl-[12px] md:pl-[20px] mb-[48px]">
                        <h2 class="!mb-[16px]"><?php echo (ICL_LANGUAGE_CODE == 'en') ? 'Blog Categories' : 'Categorías del Blog'; ?></h2>
                        <ul>
                            <?php
                            $categories = get_categories(array(
                                'orderby' => 'name',
                                'order' => 'ASC',
                                'hide_empty' => true
                            ));
                            foreach ($categories as $category) :
                            ?>
                                <li>
                                    <a href="<?php echo get_category_link($category->term_id); ?>" class="underline inline-block mb-[8px] text-[#5C5C5C]">
                                        <?php echo esc_html($category->name); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <?php if (ICL_LANGUAGE_CODE == 'en') { ?>
                        <div class="border-l-2 border-[#CFD1D3] pl-[12px] md:pl-[20px] mb-[48px]">
                            <h2 class="!mb-[16px]">Free tour in Cusco</h2>
                            <ul>
                                <li><a href="/en/things-to-do-cusco/" class="underline inline-block mb-[8px] text-[#5C5C5C]">¡Book Now!</a></li>
                            </ul>
                        </div>
                    <?php }
                    if (ICL_LANGUAGE_CODE == 'es') { ?>
                        <div class="border-l-2 border-[#CFD1D3] pl-[12px] md:pl-[20px] mb-[48px]">
                            <h2 class="!mb-[16px]">Free tour por Cusco</h2>
                            <ul>
                                <li><a href="/es/que-hacer-en-cusco/" class="underline inline-block mb-[8px] text-[#5C5C5C]">¡Reserva aquí!</a></li>
                            </ul>
                        </div>
                    <?php } ?>

                    <!-- seccion hijos de paginas -->
                    <?php
                    // Obtener todas las páginas padre (páginas sin parent)
                    $parent_pages = get_pages(array(
                        'parent' => 0,
                        'sort_column' => 'menu_order',
                        'sort_order' => 'ASC'
                    ));
                    
                    // Recorrer cada página padre
                    foreach ($parent_pages as $parent) {
                        // Obtener las páginas hijas de este padre
                        $child_pages = get_pages(array(
                            'child_of' => $parent->ID,
                            'parent' => $parent->ID,
                            'sort_column' => 'menu_order',
                            'sort_order' => 'ASC'
                        ));
                        
                        // Solo mostrar si tiene hijos
                        if ($child_pages) : ?>
                            <div class="border-l-2 border-[#CFD1D3] pl-[12px] md:pl-[20px] mb-[48px]">
                                <h2 class="!mb-[16px]"><?php echo esc_html($parent->post_title); ?></h2>
                                <ul>
                                    <?php foreach ($child_pages as $child) : ?>
                                        <li>
                                            <a href="<?php echo get_permalink($child->ID); ?>" class="underline inline-block mb-[8px] text-[#5C5C5C]">
                                                <?php echo esc_html($child->post_title); ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>



