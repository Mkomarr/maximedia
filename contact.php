<?php
    /* Template Name: kontakt */
    /*Template Post Type: post, page, event*/
    ?>

<?php get_header(); ?>

<div class="page-container">
    <div class="kontact">
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

            <?php the_content(); ?>

        <?php endwhile; endif;?>
    </div>
</div>
<?php get_footer(); ?>