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


		<?php
		wp_body_open();
		?>

		<div class="header-wrapper">
		<header id="site-header" class="ni__header" role="banner">
			<div class="ni__navmenu">
				<div class="logo-wrap">
					<?php $logo = "./assets/logo.png"; ?>
					<img width="228" height="50" class="ni__navmenu-img" src="<?php //echo $logo; ?>https://www.nuanceinvestments.com/img/nuance-investments.png" alt="naunce logo" />
				</div>

				<div>
				<ul class="ni__navmenu-inner">
					<li class="ni__navmenu-inner-li"><a class="ni-atom-a ni__navmenu-a" href="/">home</a></li>
					<li class="ni__navmenu-inner-li"><a class="ni-atom-a ni__navmenu-a" href="/about">About us</a></li>
					<li class="ni__navmenu-inner-li"><a class="ni-atom-a ni__navmenu-a" href="/contact">Contact us</a></li>
					<li class="ni__navmenu-inner-li"><a class="ni-atom-a ni__navmenu-a" href="/news">News</a></li>
				</ul>
				<div>

				<div class="">
				  <nav class="ni__navmenu-nav">
					 <ul>
					   <li>
					   </li>

					</ul>
				  </nav>
				</div>

			</div>


			<?php echo "this is ".  get_the_title()." | "."Naunce Investments". " page";  ?>

		</header>
		</div>

