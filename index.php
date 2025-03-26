<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fabricio
 */

get_header(); ?>
<?php include 'home-content.php'; ?>
<!-- <section class="scroll-first landing-page" style="background-image: url('<?php bloginfo('template_directory'); ?>/imgs/bgland.jpg'">
    <div class="header__landing"><p>Lançamento</p><p>03 . Abril</p></div>
    <div class="mid__landing"><img src="<?php bloginfo('template_directory'); ?>/imgs/mid-content.png"/></div>
    <div class="footer__landing">
        <div class="text__wrapper" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
            <p>Conecte-se com <span class="ppeditorlightitalic">Capital <strong>da</strong></span> <span class="ppeditorlight">DÚVIDA</span></p>
        </div> 
        <div class="form__home">
            <?php echo do_shortcode('[contact-form-7 id="3d33842" title="Form br"]'); ?>
        </div>
    </div>
</section> -->


<?php get_footer(); ?>