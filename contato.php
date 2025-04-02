<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Fabricio
 * Template Name: contato
 */
get_header(); ?>
<?php include 'language.php'; ?>

<section class="contato">
  <div class="desk contato__mob">
    <div class="contato_page contato__title mobile">
      <span class="ppeditorlightitalic contato__logo">Capital</span><br>
      <span>
        <span class="ppeditorbold">da</span>
        <span class="ppeditorlight"> DÚVIDA</span>
      </span>
      <br />

      <span class="contato__page__by">
        <span class="ppeditorlightitalic">por</span>
        <span class="inter spacing"> Fabrício Guimarães</span>
      </span>

      <span class="contato__page__mail">
        <span class="inter"><a href="mailto:CONTATO@CAPITALDADUVIDA.COM.BR">CONTATO@CAPITALDADUVIDA.COM.BR</a></span>
      </span>
    </div>

    <img class="scroll-first image__contact__background" src="<?php bloginfo('template_directory'); ?>/imgs/background_contacts.jpg" />
    <img class="image__group" src="<?php bloginfo('template_directory'); ?>/imgs/Group.png" />
    <img class="image__underground__mobile" src="<?php bloginfo('template_directory'); ?>/imgs/headermanifest.png" />


  </div>
  <!-- <div class=" mob"><img src="<?php bloginfo('template_directory'); ?>/imgs/contatomob.jpg" /></div> -->
</section>



<?php get_footer(); ?>