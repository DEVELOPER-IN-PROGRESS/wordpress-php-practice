<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=1024, initial-scale=1.0" >
		<title><?php get_the_title()."|"." Naunce Investments";  ?> </title>

		<?php wp_head(); ?>

	</head>

	<body  <?php if(is_front_page( )):
	             body_class('ni__body-frontpage');
				else:
				 body_class('ni__common-body');
				endif;
				  ?>
	>
    <?php wp_body_open();?>

	<div class="header-wrapper">
      <header id="site-header" class="ni__header" role="banner">
        <div class="ni-header__navmenu1">
          <a href="/" id="log"  title="nuance logo">
            <img width="228"  height="50" class=" "
              style="object-fit: cover" src="<?php
			  if(is_front_page( )):
				echo get_template_directory_uri().'/assets/logowhite.png' ;
			   else:
				echo get_template_directory_uri().'/assets/logo.jpg' ;
			   endif;
			   ?>"

			   alt="naunce logo" />
          </a>

          <div class="hamburger" id="hamburgerMenu" onclick="hamBurger(this);"  >
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
          </div>
        </div>

        <div class="d-md-block">
          <ul class="ni__navmenu-inner list-style-none text-center">
            <li class="ni__navmenu-inner-li">
              <a class="ni-atom-a ni__navmenu-a" href="/">Home</a>
            </li>
            <li class="ni__navmenu-inner-li">
              <a class="ni-atom-a ni__navmenu-a" href="/about">About us</a>
            </li>
            <li class="ni__navmenu-inner-li">
              <a class="ni-atom-a ni__navmenu-a" href="/contact">Contact us</a>
            </li>
            <li class="ni__navmenu-inner-li">
              <a class="ni-atom-a ni__navmenu-a" href="/news">News</a>
            </li>
          </ul>
        </div>

        <div class="nav_wrapper d-md-block ni-header__sidebar" id="navmenu2">
          <div class="hamburger change d-md-none" style="padding:20px 0px 0px 20px;" onclick="closeSideBar();" >
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
          </div>

          <nav class="text-center">
            <ul class="ni-navmenu__nav">
              <li  class="ni-navmenu__nav-li">
                <a
                  href="/about"
                  class="d-none d-md-block ni-atom-a ni-navmenu__nav-a "
                >
                  <p >About Us</p>
                </a>
                <button class="ni-header__accordion d-md-none">
                  <a href="/tv" class="ni-atom-a"> About Us</a>
                </button>
                <div class="ni-header__accordion-panel text-left">

                    <ul class="ni-header__accordion-list">
                      <li><a href="../about" class="ni-atom-a ni-header__accordion-link">Overview</a></li>
                      <li><a href="../philosophy" class="ni-atom-a ni-header__accordion-link">Our Philosophy</a></li>
                      <li><a href="../team" class="ni-atom-a ni-header__accordion-link">Our Team</a></li>
                      <li><a href="../contact" class="ni-atom-a ni-header__accordion-link">Contact Us</a></li>
                     </ul>

                    <div class="ni-header__accordion-p">
                      <p class="ni-atom-p">We provide investment management services focused specifically on value style investments.</p>
                    </div>
                </div>
              </li>

              <li>
                <img
                  src="<?php echo get_template_directory_uri().'/assets/thin.png' ?>"
                  width="2"
                  alt="narrow"
                  class="d-none d-md-block"
                />
              </li>

              <li  class="ni-navmenu__nav-li">
                <a
                  href="/funds"
                  class="d-none d-md-block ni-atom-a ni-navmenu__nav-a  "
                >
                  <p >Mutual Funds</p>
                </a>
                <button class="ni-header__accordion d-md-none ">
                  Mutual Funds
                </button>

                <div class="ni-header__accordion-panel text-left">

                  <ul class="ni-header__accordion-list">
                    <li><a href="../funds" class="ni-atom-a ni-header__accordion-link">Overview</a></li>
                    <li>
                      <a href="../concentrated-value-fund" class="ni-atom-a ni-header__accordion-link">Nuance Concentrated Value Fund
                      </a>
                    </li>
                    <li>
                      <a href="../concentrated-value-long-short-fund" class="ni-atom-a ni-header__accordion-link">Nuance Concentrated Value <br>
                        Long-Short Fund
                      </a>
                    </li>
                    <li>
                      <a href="../mid-cap-value-fund" class="ni-atom-a ni-header__accordion-link">Nuance Mid Cap Value Fund
                      </a>
                    </li>
                    <li>
                      <a href="../invest-mutual-funds" class="ni-atom-a ni-header__accordion-link">How to Invest
                      </a>
                    </li>
                    <li>
                      <a href="../mutual-fund-news" class="ni-atom-a ni-header__accordion-link">Mutual Fund News
                      </a>
                    </li>
                   </ul>

                  <div class="ni-header__accordion-p">
                    <p class="ni-atom-p">We provide investment management services focused specifically on value style investments.</p>
                  </div>
                </div>
              </li>

              <li>
                <img
                  src="<?php echo get_template_directory_uri().'/assets/thin.png' ?>"
                  width="2"
                  alt="narrow"
                  class="d-none d-md-block"
                />
              </li>

              <li class="ni-navmenu__nav-li">
                <a
                  href="/private-accounts"
                  class="d-none d-md-block ni-atom-a ni-navmenu__nav-a  "
                >
                  <p >Private Accounts</p>
                </a>
                <button class="ni-header__accordion d-md-none ">
                  Private Accounts
                </button>
                <div class="ni-header__accordion-panel text-left">

                  <ul class="ni-header__accordion-list">
                    <li><a href="../private-accounts" class="ni-atom-a ni-header__accordion-link">Overview</a></li>
                    <li><a href="../mid-cap-value" class="ni-atom-a ni-header__accordion-link">Nuance Mid Cap Value</a></li>
                    <li><a href="../concentrated-value" class="ni-atom-a ni-header__accordion-link"> Nuance Concentrated Value</a></li>

                   </ul>

                    <div class="ni-header__accordion-p">
                      <p class="ni-atom-p">Explore the latest information on our Private Account products. </p>
                    </div>
                </div>
              </li>

              <li>
                <img
                  src="<?php echo get_template_directory_uri().'/assets/thin.png' ?>"
                  width="2"
                  alt="narrow"
                  class="d-none d-md-block"
                />
              </li>

              <li class="ni-navmenu__nav-li">
                <a
                  href="/tv"
                  class="d-none d-md-block ni-atom-a ni-navmenu__nav-a  "
                >
                  <p >NuanceTv</p>
                </a>
                <button class="ni-header__accordion d-md-none ">
                  NuanceTv
                </button>
              </li>

              <li>
                <img
                  src="<?php echo get_template_directory_uri().'/assets/thin.png' ?>"
                  width="2"
                  alt="narrow"
                  class="d-none d-md-block"
                />
              </li>

              <li class="ni-navmenu__nav-li">
                <a
                  href="/knowledge-&-news"
                  class="d-none d-md-block ni-atom-a ni-navmenu__nav-a  "
                >
                  <p >News & Awards</p>
                </a>
                <button class="ni-header__accordion d-md-none ">
                  News & Awards
                </button>
                <div class="ni-header__accordion-panel text-left">

                  <ul class="ni-header__accordion-list">
                    <li><a href="../knowledge-&-news" class="ni-atom-a ni-header__accordion-link">Overview</a></li>
                    <li><a href="../commentary" class="ni-atom-a ni-header__accordion-link">Manager Commentary</a></li>
                    <li><a href="../knowledge" class="ni-atom-a ni-header__accordion-link">Knowledge </a></li>
                     <li><a href="../news" class="ni-atom-a ni-header__accordion-link">News </a></li>
                     <li><a href="../awards" class="ni-atom-a ni-header__accordion-link">Awards </a></li>
                     <li><a href="../articles" class="ni-atom-a ni-header__accordion-link">Articles of Interest </a></li>

                   </ul>

                    <div class="ni-header__accordion-p">
                      <p class="ni-atom-p">We are defined by our philosophy as we invest and serve clients globally.  </p>
                    </div>
                </div>
              </li>

              <li>
                <img
                  src="<?php echo get_template_directory_uri().'/assets/thin.png' ?>"
                  width="2"
                  alt="narrow"
                  class="d-none d-md-block"
                />
              </li>

              <li class="ni-navmenu__nav-li">
                <a
                  href="/invest"
                  class="d-none d-md-block ni-atom-a ni-navmenu__nav-a  "
                >
                  <p >How to invest</p>
                </a>
                <button class="ni-header__accordion d-md-none">
                  How to invest
                </button>
                <div class="ni-header__accordion-panel text-left">

                  <ul class="ni-header__accordion-list">
                    <li><a href="../invest" class="ni-atom-a ni-header__accordion-link">Overview</a></li>
                    <li><a href="../forms" class="ni-atom-a ni-header__accordion-link">Forms and Applications</a></li>
                    <li><a href="../contact" class="ni-atom-a ni-header__accordion-link">Contact Us</a></li>
                   </ul>

                  <div class="ni-header__accordion-p">
                    <p class="ni-atom-p">We are committed to offering world class value style investment products. </p>
                  </div>
              </div>
              </li>
            </ul>
          </nav>
        </div>
      </header>
    </div>



