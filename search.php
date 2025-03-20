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
 * @package auaha
 */

get_header(); ?>

    <div id="primary" class="content-area wrapper">
        <main id="main" class="site-main">
            <div class="container">
                <div class="row">
                    <div class="category__page">

			<div style="margin-top: 50px;">
            <div class="titulo__busca">
                <h1>Resultado da sua busca</h1>
            </div>
            <div class="row search-page">
            <?php
            // Check if there are any posts to display

            if (have_posts()) : ?>
<ul  class="list__products">
                <?php

                while (have_posts()) : the_post(); ?>
           
          
                 
                            <li class="list__products-item">
                                <div class="product__image"><?php the_post_thumbnail(); ?></div> 
                                <div class="product__title"><?php the_title(); ?></div> 
                                                          <ul> 
                                                <li class="product__category">
                                                    <?php echo get_field('tag_de_produto');
 ?>
                                                </li>
                                    
                                        </ul>
                                
                                    <a class="product__link" href="<?php the_permalink(); ?>">+ Detalhes</a>
                                    
                            </li>
                  
                
                    
                <?php endwhile; ?>
</ul>
            <?php endif; ?>

        </main>
    </div>

<?php
get_footer();