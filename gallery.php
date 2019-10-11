<?php
    /* Template Name: realizacje */
    /*Template Post Type: post, page, event*/
    ?>

<?php get_header(); ?>

<div class="page-container">
    <div class="gallery">
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

            <?php the_content(); ?>

        <?php endwhile; endif;?>
    </div>
</div>
<?php get_footer(); ?>