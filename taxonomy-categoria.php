
<?php
 /**
  * The template for displaying all single posts
  *
  * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
  *
  * @package qualitycheck
   * Template Name: produto
  */
 get_header(); ?>

<section class="category__product wrapper">
    <div class="category__top">
        <?php $term = get_queried_object(); $tax_id = $term->slug ?>
            <h1> <?php echo $term->name;?></h1>
            <p> <?php  echo $term->description;?></p>
    </div>
    <div class="category__wrapper">
        <div class="category__filter">
            <span>Categorias</span>
            <ul>
                <?php $wcatTerms = get_terms('categoria', array('hide_empty' => 0, 'parent' =>0)); 
        
                    foreach($wcatTerms as $wcatTerm) : 
                ?>

                        <?php 
                            if($term->term_taxonomy_id == $wcatTerm->term_taxonomy_id) {?>
                                <li><a class="filter__selected" href="<?php echo get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy ); ?>"><?php echo $wcatTerm->name; ?></a></li>
                        <?php 
                        }
                            if($term->term_taxonomy_id !== $wcatTerm->term_taxonomy_id) {?>
                                <li><a href="<?php echo get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy ); ?>"><?php echo $wcatTerm->name; ?></a></li>
                        <?php } ?>
                <?php 
                    endforeach; 
                ?>
            </ul>
        </div>

        <div class="category__list">
            <ul  class="list__products">
                    <?php 
                    $args = array(
                        'post_type' => 'produtos',
                        'showposts' => -1
                        ); 
                    $wp_query = new WP_Query($args); 
                    if ($wp_query->have_posts()) {
                
                        while ($wp_query->have_posts()) {
                            $wp_query->the_post();
                            
                    ?>
                          
                          
                        <?php 

                            $cat__product = get_field('categoria_do_produto'); 
                            foreach( $cat__product as $term ): $cat__slugnow = $term->name; endforeach;
                          	$normalized = Normalizer::normalize($cat__slugnow, Normalizer::NFD);
                          	if (str_contains(strtolower(preg_replace('/[\x{0300}-\x{036F}]/u', '', $normalized)), iconv('UTF-8', 'ASCII//TRANSLIT', $tax_id))) {            
                        ?>
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
                                    <?php }} wp_reset_query()?>
                            </li>
                    <?php } ?>
                </ul>
            
        </div>
    </div>
</section>



 <?php get_footer(); ?>