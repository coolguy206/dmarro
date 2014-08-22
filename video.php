<?php



/*



Template Name: video



*/



?>







<?php get_header(); ?>







<section class="content" style="background-color: <?php echo get_post_meta($post->ID, 'color', true); ?>">











<div class="box130">







<?php wp_nav_menu( array('menu' => 'media', 'container' => false )); ?>







</div>







<div class="box730">







<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>







<?php the_content(); ?>







<?php



$args = array( 'category_name' => 'video', 'orderby' => 'post_date', 'posts_per_page'=>-1 );



$lastposts = get_posts( $args );



foreach($lastposts as $post) : setup_postdata($post); ?>



<article>



	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>



	<?php the_content(); ?>



<div class="paypal">







<h2><?php echo get_post_meta($post->ID, 'price', true); ?></h2>







<?php echo get_post_meta($post->ID, 'paypal', true); ?>



</div><!--.paypal-->



</article>



<?php endforeach; ?>







<?php endwhile; else: ?>



<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>



<?php endif; ?>







</div>







<?php get_footer(); ?>



