<?php
    /* Template Name: kontakt */
    /*Template Post Type: post, page, event*/
    ?>

<?php get_header(); ?>

<div class="page-container-contact">
    <div class="contact-site">

            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

            <section class="form">
            <h2 class="h2-contact-form">Napisz do nas</h2>
            <?php echo do_shortcode( '[contact-form-7 id="63" title="Kontakt"]' ); ?>
            <!-- <div class="expand">&#709;</div> -->
            </section>

            <section class="contact-txt">
                <h4>Napisz do nas</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                <h4>Sprawdź także</h4>
                <p>Facebook | Twitter</p>
            </section>

            <?php the_content(); ?>

        <?php endwhile; endif;?>
    </div>
</div>
<?php get_footer(); ?>