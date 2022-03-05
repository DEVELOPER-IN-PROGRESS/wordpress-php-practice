<?php
/**
 * Template Name: Personality Page
 * The Team page template file
 */
get_header();
?>

<h1 class="ni-atom-h1"><?php the_field('personality_name');?><h1>


<?php $image= get_field('personality_image') ?>

<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="ni-atom-img" width="600" height="300"/>

<?php get_footer();  ?>