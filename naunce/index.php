<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();


?>

<main id="site-content" role="main">


	<?php
    if(have_posts()):
 		while(have_posts()):the_post(); ?>
    <?php the_content() ?>
    <?php endwhile;
    else: ?>
    <?php _e("not posts found","wp_posts") ?>
    <?php
	endif
	?>


<?php


	if (is_front_page())
	      ;
	else
	echo "not Front page" ;
?>

</main><!-- #site-content -->


<?php
get_footer();
