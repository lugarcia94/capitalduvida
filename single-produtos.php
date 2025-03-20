<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package qualitycheck
 */

get_header(); ?>



<?php if (have_posts()) : the_post(); ?>
	<section class="product__single"> 
        <div class="bread__product">
            <strong><a href="/">página inicial</a></strong>
            <span>> <?php the_title(); ?></span>
        </div>

        <div class="product__wrapper">
            <div class="product__single-image"><?php the_post_thumbnail(); ?></div>
            <div class="product__single-info">
                <h1><?php the_title(); ?></h1>
                <div class="product__single-description"><?php the_field('descricao_do_produto'); ?></div>
                <div class="product__single-button">
                    <a href="#">comece a produzir hoje</a>

                </div>
            </div>
        </div>
        
        <div class="product__form">
            <h2>Comece a produzir com a sua marca hoje!</h2>
            <?php echo do_shortcode('[contact-form-7 id="53cd732" title="Contato produto"]')?>
            <div class="product__form-close"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAOxAAADsQBlSsOGwAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAALgSURBVFiFtZfLa1NBFId/ZxJq0zZJWxX8G1xZtz5qpWlNwNYHURS6LZhCNTYUl1m4EGqoYptFBSmIFMzCR2tTW/FBFYSi1o3gqgs3IrWQENObm5s5LjRtpLk3k5s4y3mc77t3mHNmCADODV/tIlCYBHukpHlud99KRKM66tiC0WiDYyM9zIROAN9kQYwlJm6u0YUrkeOS5SIAx/Z0TrpS3jPT01GtHvC+0VG3K2ckARwq6U7JgugQkuXIv3AAIP9ma/pJMBx2/Sc4AHiFs3BZAGgvu5LRI5ge1yJhAf/LoH2CGQumERg9JMnWn6gIB0BML8WmlhkDY9l0EuATBfG0GgkVOIC57+3ue2J2aiqb1TInALwynUrcLSQtBEOhlkrwgUikuUk3Zq3hnHSlPMHX0ahBxa6Tg4NNTa6WOQBd5uuwLA0tkIjHM2bwvCGfMaPTGr59wqh0qBYJO/AdAqoSBLwt5DV/UcIuvKxANRLZXc6AV0ppF24qoCoBxnsSZDDzYTtwSwFlCctWOaVbCtQmoVZPKgrYk1AvZkoCJRJJAEcrBFxqTHn6VCupUBVo9XgIpCS8R3dpymlbSaB4zsE4UmkuAx2yQV+6eOlam0rsil+klmTKBv5QENyTGB/fsC1gF17SPkrBPisJ0y1QgjMvEuGNhcBBIWkpGA6Xv/SYCSjn9rS3/1c2E4BVKf8j8eL00NDucoM7tsBOYVHME590I+d7NDn501SglqqmJkGruqF1l0psCdQCr1ZCOOGbicXWtwTqAa9KgvBZOKh7JhZbp4FIpFnPy+eocIGUbZ6zqq+lYCjUIpyN8yCrxEWrstF5TOh5eaOecABIxOMZaWgBq9s2wAeElo8JAOfrCa9OAv0CgEnwP1fnWh6pChJpwYy7ZQbmZJv3VD0ep5YShDuOvf7ed+5c7gcITjCtEdGEdzMzcj8Wy9cKL7YvKyv6fn/vA9L0LAAHA1/BfP3h7fGp3ypQ9X5jj78tAAAAAElFTkSuQmCC
" alt="Fechar Contato"  ></div>
        </div>

        <section data-aos="fade-up" class="block__info">
            <div class="wrapper">
                <ul class="list__info">
                    <li class="list__info-item">
                        <img src="<?php bloginfo('template_directory'); ?>/imgs/info1.png" alt="Formulações sob medida">
                        <span>
                            <strong>formulações sob medida</strong>
                            <p>Desenvolvidas para o seu Projeto</p>
                        </span>
                    </li>
                    <li class="list__info-item">
                        <img src="<?php bloginfo('template_directory'); ?>/imgs/info2.png" alt="Produtos completos">
                        <span>
                            <strong>produtos completos</strong>
                            <p>Rotulados e prontos para venda</p>
                        </span>
                    </li>
                    <li class="list__info-item">
                        <img src="<?php bloginfo('template_directory'); ?>/imgs/info3.png" alt="Indústria padrão anvisa">
                        <span>
                            <strong>indústria padrão anvisa</strong>
                            <p>Parque produtivo regulamentado</p>
                        </span>
                    </li>
                </ul>
            </div>
        </section>

        <div class="product__video">  
            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php the_field('url_do_video'); ?>" title="<?php the_title(); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>        
        </div>

        <div class="product__specifications">
            <h2>Especificações do produto</h2>
            <ul class="product__specifications-list">
                <?php
                    if( have_rows('especificacao_do_produto') ): 
                            while( have_rows('especificacao_do_produto') ) : the_row();
                                $sub_value = get_sub_field('especificacao');
                                $sub_value2 = get_sub_field('valor'); 
                            ?>
                            <li >
                                <span><?php echo $sub_value ?></span>
                                <strong><?php echo $sub_value2 ?></strong>
                            </li>
                            <?php 
                            endwhile;
                   
                        
                    endif;
                ?>
            </ul>
        </div>
        <div class="product__related">
            <h2>PRODUTOS RELACIONADOS</h2>
            <?php
                $featured_posts = get_field('produtos_relacionados');
                if( $featured_posts ): ?>
                    <ul class="list__products">
                        <?php foreach( $featured_posts as $post ): 

                            // Setup this post for WP functions (variable must be named $post).
                            setup_postdata($post); ?>
                            <li class="list__products-item">
                                <div class="product__image"><?php the_post_thumbnail(); ?></div> 
                                <div class="product__title"><?php the_title(); ?></div> 
                                <?php 
                                    $terms = get_field('categoria_do_produto');
                                    if( $terms ): ?>
                                        <ul>
                                            <?php foreach( $terms as $term ): ?>
                                                <li class="product__category">
                                                    <?php echo esc_html( $term->name ); ?>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                    <a class="product__link" href="<?php the_permalink(); ?>">+ Detalhes</a>
                                     
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php 
                    // Reset the global post object so that the rest of the page works correctly.
                    wp_reset_postdata(); ?>
                <?php endif; ?>
        </div>

	</section>

<?php  endif; ?>

 

<?php get_footer(); ?>
