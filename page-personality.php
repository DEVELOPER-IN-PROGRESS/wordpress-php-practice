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


</div>


<main id="maincontent" role="main">

            <div class="d-none d-md-block" style="padding: 15px;"></div>
            <div class="row g-0">

                <div class="px-2 px-md-0 pe-md-5 col-12 col-sm-12 col-md-8 col-lg-8">

                        <h1 class="ni-atom-h1 ni-person__h1 pb-3 "><?php echo the_field('personality_name'); ?></h1>

                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="ni-atom-img ni-person__img" />

                        <p class="pt-md-3">&nbsp;</p>

                        <?php
                          if(have_posts()):
                            while(have_posts()):the_post(); ?>
                        <?php
                          echo the_content();
                           ?>
                        <?php endwhile;
                        else: ?>
                        <?php _e("not posts found","wp_posts") ?>
                        <?php
                        endif;
                        ?>

                        <h3 class="ni-atom-h3 ni-person__h3 pt-3">Career Highlights</h3>

                </div>

                <div class="pt-3  pt-md-0 col-12 col-sm-12 col-md-4 col-lg-4 ">
                    <?php get_template_part('template-parts/content/teamsidecard'); ?>
                </div>

            </div>

        </main>






<?php get_footer();  ?>