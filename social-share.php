<?php
/*
This is displaying Social share
*/
defined( 'ABSPATH' ) || exit;

if( !function_exists('mazedulislam27_social_share') ){
	function mazedulislam27_social_share(){
		?>
		<ul class="share lab-ul justify-content-center">
			<li><a href="http://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink($post->ID)); ?>" class="facebook"><i class="icofont-facebook"></i></a></li>
			<li><a href="http://twitter.com/home?status=<?php the_title(); ?> <?php echo urlencode(get_permalink($post->ID)); ?>" class="twitter"><i class="icofont-twitter"></i></a></li>
			<li><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink($post->ID)); ?>&title=<?php the_title(); ?>" class="linkedin"><i class="icofont-linkedin"></i></a></li>
		</ul>
	<?php }
}