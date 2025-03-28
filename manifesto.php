<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Fabricio
 * Template Name: manifesto
 */
get_header(); ?>
<?php include 'language.php'; ?>
<section class="manifest__first">
   <div class="lateral__info desk"><img src="<?php bloginfo('template_directory'); ?>/imgs/manifestolateral.png" /></div>
   <div class=" mob"><img src="<?php bloginfo('template_directory'); ?>/imgs/manifestolateralmob.png" /></div>
   <h2 class="ppeditorlightitalic">Manifesto</h2>
   <span class="ppeditorlightitalic">Muita das vezes tudo começa com um <strong>“e se?”</strong></span>

</section>

<section class="manifest__first second">
   <img class="desk" src="https://w57.199.myftpupload.com/wp-content/uploads/2025/03/manifestimage.png" />
   <img class="mob" src="<?php bloginfo('template_directory'); ?>/imgs/manifestimagemob.png" />

</section>

<section class="manifest__first three">
   <p>E se eu criasse um filamento que brilhasse sem queimar com a passagem da eletricidade?, pensou Thomas Edison, sem ter certeza de que uma de suas mais de mil tentativas resultariam na lâmpada elétrica. </p>

   <p>E se eu acrescentasse um motor movido a gasolina a um balão dirigível?, imaginou Santos Dumont, pai da aviação moderna.</p>

   <p>E se eu juntasse música, telefone e comunicação via internet em um único aparelho?, indagou Steve Jobs, antes de lançar o iPhone, em 2007.</p>

   <p>Sim, dúvidas, por mais irônico que possa parecer, têm sido as maiores alavancas da criatividade desde a invenção da roda.</p>

   <p>E num mundo com cada vez menos certezas, o mundo areia-movediça em que vivemos agora, elas se tornam fundamentais não só para grandes inventores, mas também para todos que desejam viver a vida que querem ter.  </p>

   <p>Dúvida como capital, centro de partida, dúvida como capital intelectual e financeiro, dúvida como geração de consciência, capaz de abrir mentes, criar negócios e mudar hábitos, é o nosso ponto de partida para conversas que tragam novas visões sobre conhecidos temas – e, acima de tudo, eliminem as limitações que as certezas herdadas costumam impor. </p>

   <p><span><strong>Seja bem-vindo.</strong> Aqui, você pode <span class="ppeditorlightitalic">(e deve)</span> duvidar à vontade.</span></p>
</section>
<?php include 'backbutton.php'; ?>
<?php get_footer(); ?>