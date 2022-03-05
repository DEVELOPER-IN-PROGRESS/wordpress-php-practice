<?php
/**
 * Template Name: Team Page
 * The Team page template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 *
 * E.g., it puts together the home page when no home.php file exists.
 *
 */

get_header();
?>

<main id="maincontent" role="main">

<?php get_template_part('template-parts/content/banner'); ?>

      <div class="row g-0 space-between">
        <div class="col-sm-12 col-md-4  col-lg-3 order-sm-0 order-md-2">

          <div class="sidecard-wrapper ">

            <div class="centerdiv ni-about__sidebar ni-team__sidebar">
                <h3 class="ni-atom-h2 ni__greycard-h2">How to invest</h3>

                <p class="ni-atom-p ni__greycard-p">Nuance has been managing portfolios for individuals and institutions using the same classic value investment philosophy since first registering as an investment advisor in 2008. If you would like to receive material describing our services, including our historical performance records, please contact us.<br><br>

                <address class="ni-atom-p ni__greycard-p">Nuance Investments, LLC<br>
                    4900 Main Street, Suite 220<br>
                    Kansas City, MO 64112<br>
                    Telephone: (816) 743-7080<br>
                    Fax: (913) 387-2729<br>
                </address>
                </p>

                <div style="height:21px" aria-hidden="true" ></div>
                <a href="#" class="ni-atom-button" >How to Invest</a>
            </div>

          </div>
        </div>

        <div class="col-sm-12 col-md-8 col-lg-9 order-sm-1 order-md-1">
          <p class="ni-atom-p ni-commentary__p1 ni-team__p1">
            Nuance Investments is a classic value investment firm headquartered in Kansas City. Nuance was formed on the belief that the ability to outperform the broad stock market is predicated on a consistent and disciplined value investing approach. The Nuance investment team's sole focus is generating investment returns for clients by diligently reviewing one company at a time on its own investment merits.
          </p>

          <div style="padding-top: 33px;"></div>

          <h3 class="ni-atom-h3 ni-team__h3">Investment Team</h3>

          <div class="ni-team__gridwrapper ni-team__gridwrapper--my">

              <div class="ni-team__card">
                <a href="#" target="__self" >
                  <img src="https://www.nuanceinvestments.com/img/Aditya-Narvekar-thumb.jpg" alt="team member [name]" class="ni-team__card-image" width="174" height="130" />
                </a>

                <p class="ni-atom-p ni-team__card-p">
                  <a href="#" class="ni-atom-a ni-atom-a--bold ni-team__card-a" target="__self">Aditya Narvekar, CFA®</a><br>
                  Associate Investment Analyst
                </p>
              </div>

              <div class="ni-team__card">
                <a href="#" target="__self">
                  <img src="https://www.nuanceinvestments.com/uploads/images/rossy-esenberg-thumb.jpg" alt="team member [name]" class="ni-team__card-image" width="174" height="130" />
                </a>

                <p class="ni-atom-p ni-team__card-p">
                  <a href="#" class="ni-atom-a ni-atom-a--bold ni-team__card-a" target="__self">Rossy Esenberg</a><br>
                  Vice President, Chief Compliance Officer
                </p>
              </div>

              <div class="ni-team__card">
                <a href="#" target="__self" >
                  <img src="https://www.nuanceinvestments.com/img/Aditya-Narvekar-thumb.jpg" alt="team member [name]" class="ni-team__card-image" width="174" height="130" />
                </a>

                <p class="ni-atom-p ni-team__card-p">
                  <a href="#" class="ni-atom-a ni-atom-a--bold ni-team__card-a" target="__self">Aditya Narvekar, CFA®</a><br>
                  Associate Investment Analyst
                </p>
              </div>

              <div class="ni-team__card">
                <a href="#" target="__self">
                  <img src="https://www.nuanceinvestments.com/uploads/images/rossy-esenberg-thumb.jpg" alt="team member [name]" class="ni-team__card-image" width="174" height="130" />
                </a>

                <p class="ni-atom-p ni-team__card-p">
                  <a href="#" class="ni-atom-a ni-atom-a--bold ni-team__card-a" target="__self">Rossy Esenberg</a><br>
                  Vice President, Chief Compliance Officer
                </p>
              </div>

              <div class="ni-team__card">
                <a href="#" target="__self" >
                  <img src="https://www.nuanceinvestments.com/img/Aditya-Narvekar-thumb.jpg" alt="team member [name]" class="ni-team__card-image" width="174" height="130" />
                </a>

                <p class="ni-atom-p ni-team__card-p">
                  <a href="#" class="ni-atom-a ni-atom-a--bold ni-team__card-a" target="__self">Aditya Narvekar, CFA®</a><br>
                  Associate Investment Analyst
                </p>
              </div>

              <div class="ni-team__card">
                <a href="#" target="__self">
                  <img src="https://www.nuanceinvestments.com/uploads/images/rossy-esenberg-thumb.jpg" alt="team member [name]" class="ni-team__card-image" width="174" height="130" />
                </a>

                <p class="ni-atom-p ni-team__card-p">
                  <a href="#" class="ni-atom-a ni-atom-a--bold ni-team__card-a" target="__self">Rossy Esenberg</a><br>
                  Vice President, Chief Compliance Officer
                </p>
              </div>
          </div>


        </div>
      </div>

</main>

<?php
get_footer();
?>