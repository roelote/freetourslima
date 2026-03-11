<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package freewalking
 */

get_header();
?>

<section class="mt-[48px] mb-[88px] content-pages">
	<div class="container px-4 md:px-0">
		<main id="primary" class="site-main">
			<div class="flex items-start gap-[40px] md:gap-[81px] flex-col lg:flex-row">
				<div class="w-full md:w-[640px]">
					<?php
					if (function_exists('yoast_breadcrumb')) {
						yoast_breadcrumb('<nav class="breadcrumbs text-[14px] text-[#A49D9D] mb-[16px]">', '</nav>');
					}
					the_title("<h1 class=\"text-[26px] xl:text-[32px] !mb-[24px] md:!mb-[32px]\">", '</h1>');
					while (have_posts()):
					?>
					<?php
						the_post();
						the_content();
					endwhile;
					?>
				</div>
				<div class="md:sticky top-[-107px] right-0">
					 <div class="">
						<div class="aside-blog aside-blog-page ">
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
		</main>
	</div>
</section>
<?php

get_footer();
