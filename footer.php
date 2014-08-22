</section>



<footer>

<div class="box460">

copyright &copy; <?php echo date('Y'); ?> <span class="dmarro"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></span><br>

website by <a href="http://davidtproductions.com" target="_blank"><span class="designer">DavidTProductions.com</span></a>

</div>

<div class="box460">

<ul>

<li><a href="https://www.facebook.com/dmarro.marro" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/facebook-icon.png" alt="Facebook" class="facebook"></a></li>

<li><a href="https://twitter.com/MrDMARRO" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/twitter-icon.png" alt="Twitter" class="twitter"></a></li>

<li><a href="http://www.youtube.com/dMARR0" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/youtube-icon.png" alt="Youtube" class="youtube"></a></li>

<li><a href="https://soundcloud.com/d-marro" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/soundcloud-icon.png" alt="Sound Cloud" class="soundcloud"></a></li>

</ul>

</div>

</footer>



</div>

<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>

<script>
var responsive = $('.responsive');
responsive.on('click',function(){
	$('nav').slideToggle();
});
var facebook = $('img.facebook');
var twitter = $('img.twitter');
var youtube = $('img.youtube');
var soundcloud = $('img.soundcloud');
var imgSwap = function(selector, img1, img2){
	var change = selector.hover(function(){

		selector.attr('src', img1);

	},function(){

		selector.attr('src', img2);

	});
	
	return change;
};

imgSwap(facebook, "<?php bloginfo('template_url'); ?>/images/facebook-icon-hover.png", "<?php bloginfo('template_url'); ?>/images/facebook-icon.png");

imgSwap(twitter,  "<?php bloginfo('template_url'); ?>/images/twitter-icon-hover.png", "<?php bloginfo('template_url'); ?>/images/twitter-icon.png");

imgSwap(youtube, "<?php bloginfo('template_url'); ?>/images/youtube-icon-hover.png",  "<?php bloginfo('template_url'); ?>/images/youtube-icon.png");

imgSwap(soundcloud, "<?php bloginfo('template_url'); ?>/images/soundcloud-icon-hover.png", "<?php bloginfo('template_url'); ?>/images/soundcloud-icon.png");

</script>


<?php wp_footer(); ?>

</body>

</html>

