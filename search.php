<?php global $query_string;

$query_args = explode("&", $query_string);

$search_query = array();foreach($query_args as $key => $string) {	$query_split = explode("=", $string);	$search_query[$query_split[0]] = urldecode($query_split[1]);} // foreach$search = new WP_Query($search_query);?>



<?php get_header(); ?>



<section class="content" style="background-color: <?php echo get_post_meta($post->ID, 'color', true); ?>">



<div class="search"><h1>Search Results: <?php the_search_query() ?></h1>

<ul class="search">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<li><h2><a href="<?php the_permalink(); ?>"><?php the_title(''); ?></a></h2></li>

<?php the_excerpt(); ?>



<?php endwhile; else: ?>

<p><?php _e('Sorry, no posts matched your criteria. Please try a different search'); ?></p>



<?php endif; ?>

</ul>

</div>



<div>



<?php wp_pagenavi(); ?>



</div>

<?php get_footer(); ?>