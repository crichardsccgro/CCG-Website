<?php
/**
 * Default Page Template
 *
 * @package CCG_Theme
 */

get_header();
?>

<section class="hero" style="padding: 8rem 0 4rem;">
    <div class="container">
        <h1><?php the_title(); ?></h1>
    </div>
</section>

<section>
    <div class="container container-narrow">
        <?php
        while (have_posts()): the_post();
            the_content();
        endwhile;
        ?>
    </div>
</section>

<?php get_footer(); ?>
