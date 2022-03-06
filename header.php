<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta name="description" content="This is <?php wp_title($sep=''); ?> Page" >
		<title><?php if(is_front_page( )):
      echo "Home | Nuance Investments" ;
       else:
       wp_title($sep='');
       endif;  ?></title>
    <link rel="icon" type="image/icon" href="<?php echo get_template_directory_uri().'/assets/favicon.ico' ?>" >
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
          <a href="/" id="log"  title="Nuance logo">
            <img width="228"  height="50" class="ni-atom-logo"
               src="<?php
			  if(is_front_page( )):
				echo get_template_directory_uri().'/assets/logowhite.png' ;
			   else:
				echo get_template_directory_uri().'/assets/logo.jpg' ;
			   endif;
			   ?>"
			   alt="Nuance Investments logo"
         />
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
              <?php
              $menu = wp_get_nav_menu_items('Navigation Menu');

              $thinline = get_template_directory_uri().'/assets/thin.png' ;
                $i = 0 ;

                for ($i=0 ; $i<28; $i++) {
                    if(!$menu[$i]->menu_item_parent){
                      $menuid = $menu[$i]->ID ;  //1630
                      echo "<li  class=\"ni-navmenu__nav-li\">".
                      "\n <a class=\"d-none d-md-block ni-atom-a ni-navmenu__nav-a \"
                              href=\"".$menu[$i]->url."\">" .
                                "\n<p>".$menu[$i]->post_title."</p>".
                                "</a>" ;

                      echo  "<button onclick=\"niAccordion();\" class=\"ni-header__accordion d-md-none\">
                      <a href=\"".$menu[$i]->url."\" class=\"ni-atom-a\">".
                      $menu[$i]->post_title. // About us
                      "</a>".
                          "</button>" ;

                          $description = $menu[$i]->description ;
                        ++$i;

                        $menuid =(string)$menuid ;

                        if($menu[$i]->menu_item_parent == $menuid){
                          echo "<div class=\"ni-header__accordion-panel text-left\">
                          \n<ul class=\"ni-header__accordion-list\">";
                          while($menu[$i]->menu_item_parent == $menuid){
                            echo "<li>
                                  <a target=\"__blank\" class=\"ni-atom-a ni-header__accordion-link\"".
                                "href=\"".$menu[$i]->url."\">".$menu[$i]->post_title .
                              "</a></li>";
                              ++$i;
                          }
                          echo "</ul>";

                          if($description){
                            echo "<div class=\"ni-header__accordion-p\">
                            <p class=\"ni-atom-p\">";
                            echo $description;
                            echo  "</p>
                            </div>" ;
                          }

                          echo "</div>" ;
                        }

                        --$i;
                        // while loop

                      echo  "\n</li>".
                          "\n<li>".
                          "<img src=".$thinline."
                              width=\"2\"
                              alt=\"narrow\"
                              class=\"d-none d-md-block\"
                            />
                          </li>" ;
                    }
                }
              ?>
              </ul>
          </nav>
        </div>
      </header>
    </div>
