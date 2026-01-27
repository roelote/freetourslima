<?php
get_header();
?>

<main id="main" class="site-main">

    <header class="category-header">
        <h1 class="category-title">
            <?php single_cat_title(); ?>
        </h1>

        <?php if (category_description()) : ?>
            <div class="category-description">
                <?php echo category_description(); ?>
            </div>
        <?php endif; ?>
    </header>

    <?php if (have_posts()) : ?>

        <div class="category-posts">

            <?php while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium'); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <h2 class="post-title">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>

                    <div class="post-excerpt">
                        <?php the_excerpt(); ?>
                    </div>

                </article>

            <?php endwhile; ?>

        </div>

        <div class="pagination">
            <?php the_posts_pagination(); ?>
        </div>

    <?php else : ?>

        <p>No hay entradas en esta categoría.</p>

    <?php endif; ?>

</main>

<?php
get_footer();
