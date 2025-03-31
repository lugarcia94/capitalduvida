<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Fabricio
 * Template Name: fabricio
 */
get_header(); ?>
<?php include 'language.php'; ?>
<section class="manifest__first">
  <div class="lateral__info desk"><img src="<?php bloginfo('template_directory'); ?>/imgs/fabriciolateral.png" /></div>
  <div class=" mob"><img src="<?php bloginfo('template_directory'); ?>/imgs/fabriciolateralmob.png" /></div>
  <div class="fabricio__header">
    <h2 class="ppeditorlightitalic">Fabrício</h2>
    <span class="ppeditorlightitalic"><strong>Guimarães</strong></span>
    <img src="<?php bloginfo('template_directory'); ?>/imgs/fabricio.png" />
  </div>
</section>



<section class="manifest__first three fabricio__text">
  <p>Fabrício Guimarães tem certeza de que com muita certeza não se trilha grandes caminhos. Formado em Marketing, com especialização em Business, ele acredita que viver a sua verdade totalmente, mas mudá-la de maneira fácil e rápida, quando as suas experiências lhe proporcionam mais lucidez, é o caminho para uma vida potente. </p>

  <p>Nascido em Uberlândia, Minas Gerais, ganhou a estrada cedo – primeiro os Estados Unidos, depois São Paulo e, na sequência, um período na Dinamarca, onde incubou uma startup dentro da Singularity University. </p>

  <p>Empreendedor em série, curioso e fã de tudo o que é arte, design, da mente humana, esportes e viagens, além de torta de banana, cocriou a sua primeira empresa em 2013, é pai da Musa, sócio da Be180, mediatech especializada em OOH, cocriador do Instituto Terra Livre e founder da Like Me, healthtech em fase de captação no mercado estadunidense. </p>

  <p>Por aqui, vai duvidar de algumas coisas e convidar você e outras pessoas a se inspirar em múltiplas possibilidades e abrir mão das limitações para sentir a vida da forma que se deseja.  </p>
  <a href="#" class="ppeditorlightitalic"><span>Linkedin -</span> <img class="linkedin" src="<?php bloginfo('template_directory'); ?>/imgs/linkedin.png" /></a>
</section>

<?php get_footer(); ?>