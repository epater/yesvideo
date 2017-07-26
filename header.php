<!DOCTYPE html>
<html class="no-js"  <?php language_attributes(); ?>>
  <head>
    <!--Util-->
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta class="foundation-mq">

    <!--Title-->
		<title>Цены | YesVideo</title>

		<!-- If Site Icon isn't set in customizer -->
    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
      <!-- Icons & Favicons -->
      <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
      <link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
      <meta name="msapplication-TileColor" content="#f01d4f">
      <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
      <meta name="theme-color" content="#121212">
    <?php } ?>

    <!--SEO-->
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<?php wp_head(); ?>
	</head>

	<body>
		<!--Header-->
		<header>
			<div id="header-box" class="row large-collapse">
				<!--Title-->
				<div id="title-box" class="small-9 large-4 columns">
					<h1>
						<a href="index.html">Yes<span>Video</span></a>
					</h1>
				</div>

				<!--ICO-->
				<div class="small-3 columns hide-for-large">
					<div id="top-menu-ico-box" data-responsive-toggle="top-menu" data-hide-for="large">
					<!-- menu-icon -->
						<button class="icofont icofont-navigation-menu" type="button" data-toggle="top-menu"></button>
					</div>
				</div>

				<!--Top menu-->
				<div class="small-12 large-8 columns small-collapse top-menu-box">
					<!--Menu-->
					<div id="top-menu">
					  <?php joints_top_nav(); ?>
					</div>
				</div>
			</div>
		</header>