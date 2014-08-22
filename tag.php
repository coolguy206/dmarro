<?php get_header(); ?>



<section class="content">



<h1>Tag: <?php single_tag_title(); ?></h1>

<ol class="search">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<li>

<div style="overflow: hidden;">



<div class="box130">

<?php if ( has_post_thumbnail()) : ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(array(130,9999)); ?></a>



<?php endif; ?>



</div><!--.box130-->



<div class="box730">

<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

Posted on <?php the_time('F j, Y'); ?> | Tags: <?php echo get_the_tag_list('','','');?> 

<?php the_excerpt(); ?>

</div><!--.box7300-->



</div>

</li>

<?php endwhile; else: ?>

<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

</ol>

<div>

<?php wp_pagenavi(); ?>

</div>
<?php get_footer(); ?>