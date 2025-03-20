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
	<section class="project__single"> 
        <div class="project__step first">
            <div class="project__dash">
                <h1><?php the_title(); ?></h1>
                <h3>seja bem vindo</h3>
                <span>ao seu projeto</span>
            </div>
        </div>
        <div class="project__step">
            
            <div class="project__left">
                <div class="project__author">
                    <?php
                        $featured_posts = get_field('nome_do_po');
                        if( $featured_posts ): ?>
                    
                            <?php foreach( $featured_posts as $post ):setup_postdata($post); ?>
                                <div class="project__author-left"><?php the_post_thumbnail(); ?></div>
                                <div class="project__author-right"> 
                                    <span class="project__right-namepo"><?php the_title(); ?></span>
                                    <div class="project__right-description"><strong>Olá, seja bem vindo!</strong><?php the_content(); ?></div>
                                </div> 
                            <?php endforeach; ?>
                    
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>

                <h2>INFORMAÇÕES DO PROJETO</h2>
                <span class="info__single"><strong>Cliente: </strong><?php echo esc_html( get_field('cliente') ); ?></span>
                <span class="info__single"><strong>Contato: </strong><?php echo esc_html( get_field('contato') ); ?></span>
                <span class="info__single"><strong>Data de Início do Projeto: </strong><?php echo esc_html ( get_field( 'data_inicio' ) ); ?></span>
                <span class="info__single"><strong>Data Prevista de Finalização: </strong><?php echo esc_html ( get_field( 'data_prevista_de_finalizacao' ) ); ?></span>
            </div>
            <div class="project__right"><?php the_post_thumbnail(); ?></div>
	        
        </div>

        <div class="project__step step_items">
            <div class="project__description-left">
                <div class="project__right-description"><strong>Descritivo do Projeto</strong></div>
                <div class="project__description-text"><?php the_field('descritivo_do_projeto'); ?></div>
            </div>
            <div class="project__description-right">
                <div class="project__right-description"><strong>Descrição dos Itens</strong></div>
                
                    <?php
                        if( have_rows('descricao_dos_itens') ):
                            echo "<ul class='project__right-list'>";
                                while( have_rows('descricao_dos_itens') ) : the_row();
                                $sub_value = get_sub_field('titulo_do_item');
                                $sub_value2 = get_sub_field('modelo_do_item');
                                echo "<li>";
                                    echo "<strong>";
                                        echo $sub_value;
                                    echo "</strong>";

                                    echo "<span>";
                                        echo $sub_value2;
                                    echo "</span>";
                                echo "</li>";
                                endwhile;
                            echo "</ul>";
                        endif;
                    ?>
                
            </div>
            
        </div>

        <div class="project__step">
            <div class="timeline">
                <?php
                        if( have_rows('cronograma') ):
                            echo "<ul class='timeline__list'>";
                                while( have_rows('cronograma') ) : the_row();
                                    $sub_value = get_sub_field('data_inicio');
                                    $sub_value2 = get_sub_field('data_fim');
                                    $sub_value3 = get_sub_field('titulo_da_etapa');
                                    $sub_value4 = get_sub_field('descricao_da_etapa');
                                ?>
                                <li>
                                    <span class="timeline__dates">
                                        <img src="<?php bloginfo('template_directory'); ?>/imgs/calendar.png" alt="Datas do projeto" title="Datas do projeto"/>
                                        <div>
                                            <span>
                                                Início
                                                <strong><?php echo  $sub_value; ?></strong>
                                            </span>
                                            <span>
                                                Final
                                                <strong><?php echo  $sub_value2; ?></strong>
                                            </span>
                                        </div>
                                    </span>
                                    <div class="timeline__title">
                                        <h3><?php echo  $sub_value3; ?></h3>
                                    </div>

                                    <div class="timeline__description">
                                        <strong>Detalhamento</strong>
                                        <p><?php echo  $sub_value4; ?></p>
                                    </div>
                                </li>
                                <?php 
                                endwhile;
                            echo "</ul>";
                            
                        endif;
                    ?>
            </div>
        </div>

        <div class="project__step">
            <div class="report">
                <div class="report__left">
                    <div class="project__right-description"><strong><?php echo esc_html ( get_field( 'status_report_#1' ) ); ?></strong></div>
                    <ul class="timeline__list">
                        <li>
                            <span class="timeline__dates">
                                <img src="<?php bloginfo('template_directory'); ?>/imgs/calendar.png" alt="Datas do projeto" title="Datas do projeto"/>
                                <div>
                                    <span>
                                        Início
                                        <strong><?php echo esc_html ( get_field( 'data_inicio' ) ); ?></strong>
                                    </span>
                                    <span>
                                        Final
                                        <strong><?php echo esc_html ( get_field( 'data_prevista_de_finalizacao' ) ); ?></strong>
                                    </span>
                                </div>
                            </span>
                        </li>
                    </ul>

                    <div class="report__currently">
                        <span>
                            <?php echo esc_html ( get_field( 'etapa_atual_report' ) ); ?>
                            <span style="width: <?php echo esc_html ( get_field( 'status_geral_de_conclusao' ) ); ?>"></span>
                        </span>
                        <strong>Status Geral de Conclusão: <?php echo esc_html ( get_field( 'status_geral_de_conclusao' ) ); ?></strong>
                    </div>

                    <div class="report__items">
                        <h5>Detalhamento</h5>
                        <?php
                            if( have_rows('detalhamento_report') ):
                                echo "<ul class='report__list'>";
                                    while( have_rows('detalhamento_report') ) : the_row();
                                        $sub_value = get_sub_field('etapa');
                                        $sub_value2 = get_sub_field('flag'); 
                                    ?>
                                    <li class="report__list-item">
                                        <span>
                                            <?php echo  $sub_value; ?>
                                            <strong style="background-color: <?php echo  $sub_value2; ?>"></strong>
                                        </span>
                                   
                                    </li>
                                    <?php 
                                    endwhile;
                                echo "</ul>";
                                
                            endif;
                        ?>
                    </div>
                </div>
                <div class="report__right">
                    <div class="report__header">
                        <?php
                            $featured_posts = get_field('nome_do_po');
                            if( $featured_posts ): ?>
                        
                                <?php foreach( $featured_posts as $post ):setup_postdata($post); ?>
                                    <?php the_post_thumbnail(); ?> 
                            
                                <?php endforeach; ?>
                        
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                        <div class="report__header-text">
                            <strong>Olá,</strong>
                            <span>Esses são os pontos <strong>mais importantes dessa fase</strong> do seu Projeto.
                            Veja os detalhes e os próximos passos</span>
                        </div>
                    </div>
                    <div class="design_components">
                        <span class="span__report">#Design de Componentes</span>
                        <p><?php echo esc_html ( get_field( 'design_de_componentes' ) ); ?></p> 
                    </div>
                    <div class="report__footer">
                        <div class="report__alert">
                            <span class="span__report">#Avisos Importantes</span>
                            <p><?php echo esc_html ( get_field( 'avisos_importantes' ) ); ?></p> 
                        </div>
                        <div class="report__steps">
                            <span class="span__report">#Próximos Passos</span>
                            <p><?php echo esc_html ( get_field( 'proximos_passos' ) ); ?></p> 
                            
                            <div class="report__steps-link">
                                <?php 
                                $link = get_field('link_pdf_report');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="report__steps-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                                <span>
                                    <strong>Clique para baixar</strong> um relatório 
                                    completo e detalhado dessa fase
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</section>

<?php  endif; ?>

 

<?php get_footer(); ?>
