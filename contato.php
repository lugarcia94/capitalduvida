<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Fabricio
 * Template Name: contato
 */
set_query_var('header_type', 'contact');
get_header('contact'); ?>


<section class="contato">
  <div class="desk"><img src="https://w57.199.myftpupload.com/wp-content/uploads/2025/03/contato.jpg" /></div>
  <div class=" mob"><img src="<?php bloginfo('template_directory'); ?>/imgs/contatomob.jpg" /></div>
</section>



<?php get_footer(); ?>