
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

//$banner = get_field('hero_banner'); $size='full' ;

?>

<main id="maincontent" role="main" >
<?php
 $image = get_field('hero__banner');
  ?>

        <div class="ni-about__banner">
            <img src="<?php echo $image['url']; ?>" class="ni-about__banner-image" alt="<?php echo $image['alt']; ?>" width="980" height="100"/>
             <h1 class="ni-atom-h1 ni-imgbanner__h1">
               <?php the_field('h1_title') ?></h1>
              <h2 style="color:transparent;"></h2>

        </div>

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

  //echo  wp_get_attachment_image($image);

// var_dump($image);
 ?>

</main>
<?php
get_footer();
?>

