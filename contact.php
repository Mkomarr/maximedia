<?php
    /* Template Name: kontakt */
    /*Template Post Type: post, page, event*/
    ?>

<?php get_header(); ?>

<div class="page-container-contact">
    <div class="contact contact-site">

            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

            <section class="form">
            <h2 class="h2-contact-form">Napisz do nas</h2>
            <?php echo do_shortcode( '[contact-form-7 id="63" title="Kontakt"]' ); ?>
            </section>

            <?php the_content(); ?>

        <?php endwhile; endif;?>
    </div>
</div>
<?php get_footer(); ?>