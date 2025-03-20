
<?php
 /**
  * The template for displaying all single posts
  *
  * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
  *
  * @package qualitycheck
   * Template Name: institucional
  */
 get_header(); ?>

<section data-aos="zoom-in-up" class="info__banner list-image">
    <div class="wrapper banner">
        <div class="products__info">
            <h3>SOBRE A AMERICAN FACTORY</h3>
            <span>Um parque produtivo completo com salas de produção completas para manufaturar mais de 1.500 produtos</span>
        </div>
        <div class="list__icons">
            <img src="<?php bloginfo('template_directory'); ?>/imgs/sub6.png" alt="SOBRE A AMERICAN FACTORY">
            <img src="<?php bloginfo('template_directory'); ?>/imgs/sub5.png" alt="SOBRE A AMERICAN FACTORY">
            <img src="<?php bloginfo('template_directory'); ?>/imgs/sub4.png" alt="SOBRE A AMERICAN FACTORY">
            <img src="<?php bloginfo('template_directory'); ?>/imgs/sub3.png" alt="SOBRE A AMERICAN FACTORY">
            <img src="<?php bloginfo('template_directory'); ?>/imgs/sub2.png" alt="SOBRE A AMERICAN FACTORY">
            <img src="<?php bloginfo('template_directory'); ?>/imgs/sub1.png" alt="SOBRE A AMERICAN FACTORY">
        </div>
    </div>
</section>

<section class="institucional__page">
    <div data-aos="zoom-in-up" class="info__banner reverse">
        <div class="wrapper banner">
            <img alt="A Factory" title="A Factory" src="<?php bloginfo('template_directory'); ?>/imgs/bannermid.png"/>
            <div class="products__info">
                <h3>Produção de Ponta a Ponta</h3>
                <span>Produzimos produtos completos, desde a formulação até a rotulagem. Temos uma estrutura completa de salas de produção equipadas para a manufatura de cápsulas, comprimidos, suplementos em pó, gummys e mais. Traga apenas a sua ideia e entregaremos a você um produto pronto para ser comercializado</span>
            </div>
            
        </div>
    </div>
</section>


<section class="fullabout">
    <div class="wrapper">
        <div class="fullabout__left">
            <h2>
                Produto Pronto e Padronizado
            </h2> 
            <p>
                A American Factory conta com uma estrutura de 
                equipamentos, tecnologia e pessoas para a produção completa em nível de classe mundial  de suplementos, alimentos funcionais e nutracêuticos.
            </p>
            <ul class="fullabout__list">
                <li><img src="<?php bloginfo('template_directory'); ?>/imgs/full1.png" alt="SOBRE A AMERICAN FACTORY"></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/imgs/full2.png" alt="SOBRE A AMERICAN FACTORY"></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/imgs/full3.png" alt="SOBRE A AMERICAN FACTORY"></li>
            </ul>
        </div>
        <div class="fullabout__right">
            <img src="<?php bloginfo('template_directory'); ?>/imgs/fullright.png" alt="SOBRE A AMERICAN FACTORY">
        </div>
    </div>
</section>

<section data-aos="zoom-in-up" class="info__banner">
    <div class="wrapper banner">
        <div class="products__info">
            <h3>Consultoria para Desenvolver e Implementar</h3>
            <span>Nosso time é capaz de apoiar a transformação da sua ideia em produtos prontos para acessar os mercados mais exigentes. Desde o desenho da marca até a publicação dela nos canais de e-commerce, nós somos capazes de implementar um projeto completo ou auxilia-lo apenas na etapa desejada, atendendo 
            lacunas específicas.</span>
        </div>
        <img alt="A Factory" title="A Factory" src="<?php bloginfo('template_directory'); ?>/imgs/bannermid2.png"/>
    </div>
</section>


<section class="fullabout fullabout2">
    <div class="wrapper">
        <div class="fullabout__left">
            <img src="<?php bloginfo('template_directory'); ?>/imgs/fullleft.png" alt="SOBRE A AMERICAN FACTORY">
        </div>
        <div class="fullabout__right">
        <h2>
            Conheça a Estrutra
            da American Factory
            </h2> 
            <p>
                Localizada em Bauru, interior de São Paulo, a 
                American Factory conta com um parque produtivo
                de dez mil metros quadrados, distribuídos em 14 salas de produção perfeitamente dimensionadas e regulamentadas para cada tipo de produto
            </p>
        </div>
    </div>
</section>

 <?php get_footer(); ?>
