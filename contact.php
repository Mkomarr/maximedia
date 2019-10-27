<?php
    /* Template Name: kontakt */
    /*Template Post Type: post, page, event*/
    ?>

<?php get_header(); ?>
<?php $napiszTytul = get_field('napisz_do_nas'); ?>
<?php $napiszTxt = get_field('napisz_do_nas_tekst'); ?>
<?php $sm = get_field('social_media'); ?>

<div class="page-container-contact">
    <div class="contact-site">

            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

            <section class="form">
            <h2 class="h2-contact-form">Napisz do nas</h2>
            <?php echo do_shortcode( '[contact-form-7 id="63" title="Kontakt"]' ); ?>
            <!-- <div class="expand">&#709;</div> -->
            </section>

            <section class="contact-txt">
                <h4 class="hidden"><?php echo $napiszTytul ?></h4>
                <p><?php echo $napiszTxt ?></p>
                <h4><?php echo $sm['tytul']; ?></h4>
                <p class="sm">
                    <a href="<?php echo $sm['fb']; ?>" target="_blank"><i class="icon-facebook-squared"></i></a>
                    <a href="<?php echo $sm['tt']; ?>" target="_blank"><i class="icon-twitter-squared"></i></a>
                </p>
            </section>

            <?php the_content(); ?>

        <?php endwhile; endif;?>
    </div>
</div>
<?php get_footer(); ?>