<?php/*Template Name: records */?>

<?php get_header(); ?>

<section class="content" style="background-color: <?php echo get_post_meta($post->ID, 'color', true); ?>">

<div class="box130">

<?php wp_nav_menu( array('menu' => 'buy', 'container' => false )); ?>

</div><!--.box130-->



<div class="box730">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<?php the_content(); ?>

<?php $pages = get_posts(array('category_name' => 'records', 'posts_per_page'=>-1)); ?>

 <ul class="products"><?php foreach ($pages as $page): ?>



<li><a href="<?php echo get_permalink($page->ID); ?>"><h3><?php echo $page->post_title; ?></h3></a><h2><?php echo get_post_meta($page->ID, price, true); ?></h2><a href="<?php echo get_permalink($page->ID); ?>"><?php echo get_the_post_thumbnail($page->ID); ?></a></li>



<?php endforeach; ?></ul>



<?php endwhile; else: ?><p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>



</div><!--.box730-->



<?php get_footer(); ?>