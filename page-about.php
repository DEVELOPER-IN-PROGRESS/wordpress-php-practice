<?php
/*
 * Template Name: About Page
 */
get_header();
?>
<main id="maincontent" role="main">
    <?php get_template_part('template-parts/content/banner'); ?>

    <div class="row g-0 space-between">

    <div class="col-sm-12 col-md-8 col-lg-9">
          <p class="px-2 px-md-0 pe-md-2 ni-atom-p ni-commentary__p1 ni-team__p1">
            Nuance Investments is a classic value investment firm headquartered in Kansas City. Nuance was formed on the belief that the ability to outperform the broad stock market is predicated on a consistent and disciplined value investing approach. The Nuance investment team's sole focus is generating investment returns for clients by diligently reviewing one company at a time on its own investment merits.
          </p>

          <div style="padding-top: 33px;"></div>

            <?php
                if(have_posts()):
                while(have_posts()):the_post(); ?>
            <?php echo the_content();  ?>
            <?php endwhile; ?>
            <?php endif; ?>

        </div>

       <div class="col-sm-12 col-md-4  col-lg-3">

        <?php get_template_part('template-parts/content/teamsidecard'); ?>

        </div>


      </div>


</main>
<?php
get_footer();
?>