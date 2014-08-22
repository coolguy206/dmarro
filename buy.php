<?php/*Template Name: buy*/?>







<?php get_header(); ?>







<section class="content" style="background-color: <?php echo get_post_meta($post->ID, 'color', true); ?>">







<div class="box130">



<?php wp_nav_menu( array('menu' => 'buy', 'container' => false )); ?>



</div><!--.box130-->







<div class="box730">







<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>




<?php the_content(); ?>




<?php endwhile; else: ?>



<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>



<?php endif; ?>





 <?php 
$query1 = new WP_Query(array('orderby' => 'post__in','post_type' => 'page', 'post__in' => array( 26, 28, 30, 33, 35 ))); ?>

<?php while ($query1->have_posts() ) : $query1->the_post(); ?>

    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	<?php the_excerpt(); ?>

<?php endwhile; ?>


</div><!--.box730-->



<?php get_footer(); ?>