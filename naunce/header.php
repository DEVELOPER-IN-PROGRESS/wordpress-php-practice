<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=1024, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php //body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header id="site-header" class="header-footer-group" role="banner">
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

			</div>
		</header>


		<!--

		#site-header

	-->
<style>
 .ni__navmenu{
	 margin: 0 auto;
	 display: flex;
	 width: 980px;
	 justify-content: space-between;
	 align-items: center;
 }

 .ni-atom-a{
	 color:#4f97cd ;
	 text-decoration:none;
 }
 .ni-atom-a:hover , .ni-atom-a:visited , {
	text-decoration:underline ;
 }

 .ni__navmenu-a{
	 font-size:12px;
	 font-style: normal;
	font-weight: 700;
	line-height: 18px
 }

 .ni__navmenu-inner-li{
	 border-left: 1px solid #4f97cd;
 }
 .ni__navmenu-img {
	 width: 228px;
	 height: 50px;
 }

 .ni__navmenu-inner{
	 display:flex ;
	 list-style-type: none;
	 align-items:center ;
	 margin:0px;
	 height: 50px;
	 padding:0px;
 }

 .ni__navmenu-inner > li {
	 padding: 0px 6px;
 }



</style>
