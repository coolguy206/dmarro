<?php get_header(); ?>







<section class="content">







<h1>Category: <?php single_cat_title(); ?></h1>



<ul class="search">



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<li>



<div style="overflow: hidden;">



<div class="box130">



<?php if ( has_post_thumbnail()) : ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(array(130,9999)); ?></a>







<?php endif; ?>







</div><!--.box130-->







<div class="box730">







<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>



Posted on: <?php the_time('F j, Y') ?>  | Category: <?php the_category(); ?>



<?php the_excerpt(); ?>



</div><!--.box730-->







</div>



</li>



<?php endwhile; else: ?>



<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>



<?php endif; ?>



</ul>



<div>



<?php wp_pagenavi(); ?>



</div>

<?php get_footer(); ?>