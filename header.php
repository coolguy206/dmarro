<!DOCTYPE HTML>
<html>
<head <?php language_attributes(); ?>>

<meta name="description" content="D:MARRO and actual things pertaining to D:MARRO and the space of ideas and vibrations of said space and the transmission of ideas and vibrations of said space.. in media and unmedia form to color and texture.">
<meta name="keywords" content="art, music, audio, video, multimedia, mixed media, sound art, audio art, video art, surrealist art, drug art, psychedelic art, YTP, counter culture, noise, hard noise, psychedelic noise, power electronics,  punk, DIY, D. I. Y., do it yourself, circuit bending, circuit bent,  broken, toy, broken toy, toy art, limited edition, collector, collectable, split, CD, CDR, DVD, vinyl, cassette, comic, graphic, print, sculpture, sculptor, installation, performance, costume, mask, mic, microphone, instrument, shirts, patches, collage, paint, painting, paper, 3D, computer, computer art, guerilla art, experimental art, street art">
<meta name="author" content="Daniel Marlow">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css">
<title><?php the_title(); ?> | <?php bloginfo('name'); ?></title>

<style>
@font-face {

font-family: 'fixedsys';

	src: url("<?php bloginfo('template_url'); ?>/fonts/FSEX300.ttf"),

    	url("<?php bloginfo('template_url'); ?>/fonts/FSEX300.eot"), /* IE9 */

	url("<?php bloginfo('template_url'); ?>/fonts/FSEX300.woff"),

	url("<?php bloginfo('template_url'); ?>/fonts/FSEX300.svg"),

	url("<?php bloginfo('template_url'); ?>/fonts/FSEX300.otf"); 

}

@font-face {    

	font-family: 'eurostile';    

	src: url("<?php bloginfo('template_url'); ?>/fonts/eurosti-webfont.eot"),

	url("<?php bloginfo('template_url'); ?>/fonts/eurosti-webfont.ttf") format('truetype'),

	url("<?php bloginfo('template_url'); ?>/fonts/eurosti-webfont.svg") format('svg'),

	url("<?php bloginfo('template_url'); ?>/fonts/eurosti-webfont.woff") format('woff');

} 

</style>

<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="wrapper">

<header style="background-color:<?php
if(function_exists('header_color')) {
header_color();
}
?>;">
<div class="box460 margins">
<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="D:MARRO"></a>
</div>

<div class="box460">
<?php get_search_form(); ?> 
</div>

<div class="responsive">Menu &equiv; </div>

</header>

<nav>

<?php wp_nav_menu(array('menu' => 'main nav', 'container' => false )); ?> 


</nav>
