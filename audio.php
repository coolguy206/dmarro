<?php



/*



Template Name: audio



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



$args = array( 'category_name' => 'audio', 'orderby' => 'post_date', 'posts_per_page'=>-1 );



$lastposts = get_posts( $args );



foreach($lastposts as $post) : setup_postdata($post); ?>



	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>



	<?php the_content(); ?>



<?php endforeach; ?>











<?php endwhile; else: ?>



<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>



<?php endif; ?>







</div>







<?php get_footer(); ?>



