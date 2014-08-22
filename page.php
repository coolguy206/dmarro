<?php get_header(); ?>

<section class="content" style="background-color: <?php echo get_post_meta($post->ID, 'color', true); ?>">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_content(); ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>



<?php get_footer(); ?>
