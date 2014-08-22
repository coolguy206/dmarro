<?php get_header(); ?>

<section class="content">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article style="background-color: <?php echo get_post_meta($post->ID, 'color', true); ?>">

<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<div style="margin-bottom: 20px;">
Posted on: <?php the_time('F j, Y') ?>  | Category: <?php the_category(); ?>  | <?php the_tags(); ?>
</div>

<?php the_content(); ?>

<div class="paypal">

<h2><?php echo get_post_meta($post->ID, 'price', true); ?></h2>

<?php echo get_post_meta($post->ID, 'paypal', true); ?>
</div><!--.paypal-->
</article>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<div>
<?php wp_pagenavi(); ?>
</div>

<?php get_footer(); ?>
