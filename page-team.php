<?php
/**
 * Template Name: Team Page
 * The Team page template file
 */
get_header();
?>

<main id="maincontent" role="main">

<?php get_template_part('template-parts/content/banner'); ?>

      <div class="row g-0 space-between">
        <div class="col-sm-12 col-md-4  col-lg-3 order-sm-0 order-md-2">

        <?php get_template_part('template-parts/content/teamsidecard'); ?>

        </div>

        <div class="col-sm-12 col-md-8 col-lg-9 order-sm-1 order-md-1">
          <p class="ni-atom-p ni-commentary__p1 ni-team__p1">
            Nuance Investments is a classic value investment firm headquartered in Kansas City. Nuance was formed on the belief that the ability to outperform the broad stock market is predicated on a consistent and disciplined value investing approach. The Nuance investment team's sole focus is generating investment returns for clients by diligently reviewing one company at a time on its own investment merits.
          </p>

          <div style="padding-top: 33px;"></div>

          <?php get_template_part('template-parts/content/teamgrid'); ?>

        </div>
      </div>

</main>

<?php
get_footer();
?>