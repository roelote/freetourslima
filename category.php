<?php
get_header();
?>

<div class="container mx-auto px-[12px] md:px-0 content-main-blog mb-[48px] md:mb-[88px] mt-[48px] container-blog">
    <?php
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<nav class="breadcrumbs text-[14px] mb-[16px] text-[#A49D9D]">', '</nav>');
    }
    ?>
    <h1 class="text-[26px] xl:text-[32px] !mb-[24px] md:!mb-[32px]"><?php single_cat_title(); ?></h1>

    <?php if (category_description()) : ?>
        
    <?php endif; ?>

    <div class="flex flex-col md:flex-row gap-[40px] md:gap-[43px]">
        <div class="">
            <div class="w-full lg:w-[783px] h-auto flex flex-col gap-[32px] mb-[32px] md:mb-[40px]">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>
                    <div class="w-full flex flex-col md:flex-row rounded-[8px] overflow-hidden bg-white content-card">
                        <div>
                            <div class="w-full md:w-[286px] h-[216px]">
                                <a href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium', array('class' => 'w-full h-full object-cover object-center', 'alt' => get_the_title())); ?>
                                    <?php else : ?>
                                        <img src="https://www.perurail.com/wp-content/uploads/2022/06/banner-machu-picchu-1024x576.jpg" class="w-full h-full object-cover object-center" alt="<?php the_title(); ?>">
                                    <?php endif; ?>
                                </a>
                            </div>
                        </div>
                        <div class="pt-[16px] px-[12px] pb-[24px] md:p-[20px]">
                            <h2 class="!mb-0 text-[22px] md:text-[24px]">
                                <a class="text-[18px] !font-semibold md:text-[24px] no-underline" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <p class="!my-[16px]"><?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?></p>
                            <span class="text-[14px] text-[#A49D9D] font-nunito"><?php echo get_the_date('F j, Y'); ?></span>
                        </div>
                    </div>
                <?php
                    endwhile;
                else :
                ?>
                    <p><?php echo (ICL_LANGUAGE_CODE == 'en') ? 'No posts in this category.' : 'No hay entradas en esta categoría.'; ?></p>
                <?php endif; ?>
            </div>
            
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $max_pages = $GLOBALS['wp_query']->max_num_pages;
            
            if ($max_pages > 1) : ?>
            <div class="w-full">
                <div class="flex justify-center gap-4 flex-wrap">
                    <?php
                    $big = 999999999;
                    $pagination = paginate_links(array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?paged=%#%',
                        'current' => max(1, $paged),
                        'total' => $max_pages,
                        'prev_text' => '<<',
                        'next_text' => '>>',
                        'type' => 'array',
                        'end_size' => 1,
                        'mid_size' => 2
                    ));
                    
                    if ($pagination) {
                        foreach ($pagination as $page) {
                            if (strpos($page, 'current') !== false) {
                                // Página actual
                                $page = str_replace('page-numbers current', 'py-2 px-4 rounded-[8px] !text-white bg-orange text-center inline-block', $page);
                            } elseif (strpos($page, '<a') !== false) {
                                // Enlaces
                                $page = str_replace('class="page-numbers"', 'class="py-2 px-4 rounded-[8px] !text-white bg-orange hover:bg-orange-500 text-center inline-block no-underline"', $page);
                                $page = str_replace('class="next page-numbers"', 'class="py-2 px-4 rounded-[8px] !text-white bg-orange hover:bg-orange-500 text-center inline-block no-underline"', $page);
                                $page = str_replace('class="prev page-numbers"', 'class="py-2 px-4 rounded-[8px] !text-white bg-orange hover:bg-orange-500 text-center inline-block no-underline"', $page);
                            } elseif (strpos($page, 'dots') !== false) {
                                // Puntos suspensivos
                                $page = str_replace('page-numbers dots', 'py-2 px-4 text-center inline-block text-orange', $page);
                            }
                            echo $page;
                        }
                    }
                    ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
        <div class="aside-blog ">
          <div class="md:sticky top-0 right-0">
            <div class="border-l-2 border-[#CFD1D3] pl-[12px] md:pl-[20px] mb-[48px]">
                <h2 class="!mb-[16px] text-[22px] md:text-[24px]"><?php echo (ICL_LANGUAGE_CODE == 'en') ? 'Blog Categories' : 'Categorías del Blog'; ?></h2>
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
                <h2 class="!mb-[16px] text-[22px] md:text-[24px]">Free tour in Lima</h2>
                <ul>
                    <li><a href="/en/" class="underline inline-block mb-[8px] text-[#5C5C5C]">¡Book Now!</a></li>
                </ul>
            </div>
                <?php }
                if (ICL_LANGUAGE_CODE == 'es') { ?>
                      <div class="border-l-2 border-[#CFD1D3] pl-[12px] md:pl-[20px] mb-[48px]">
                        <h2 class="!mb-[16px] text-[22px] md:text-[24px]">Free tour por Lima</h2>
                        <ul>
                            <li><a href="/es/" class="underline inline-block mb-[8px] text-[#5C5C5C]">¡Reserva aquí!</a></li>
                        </ul>
                    </div>

                <?php }
                ?>

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
                        <h2 class="!mb-[16px] text-[22px] md:text-[24px]"><?php echo esc_html($parent->post_title); ?></h2>
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

<?php
get_footer();

