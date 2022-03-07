<?php
/**
 * Template Name: Personality Page
 * The Team page template file
 */
get_header();
?>

<div>

<?php $image= get_field('personality_image') ;
?>
<h1 class="ni-atom-h1 ni-atom-h2--grey"><?php echo the_field('personality_name'); ?></h1>

<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="ni-atom-img" width="600" height="300"/>

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



<?php get_footer();  ?>