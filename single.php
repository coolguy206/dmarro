<?php get_header(); ?>

<section class="content">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<article style="background-color: <?php echo get_post_meta($post->ID, 'color', true); ?>">



<a href="<?php the_permalink(); ?>"><h1><?php the_title(''); ?></h1></a>



Posted on: <?php the_time('F j, Y') ?> | Category: <?php the_category(); ?>  | <?php the_tags(); ?>



<p><?php previous_post_link( '%link','Previous Post',TRUE); ?> |  <?php next_post_link( '%link','Next Post', TRUE); ?></p> 





<?php the_content(); ?>





<div class="paypal">



<h2><?php echo get_post_meta($post->ID, 'price', true); ?></h2>



<?php echo get_post_meta($post->ID, 'paypal', true); ?>

</div><!--.paypal-->

</article>



<?php endwhile; else: ?>



<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>



<?php endif; ?>















<?php get_footer(); ?>



