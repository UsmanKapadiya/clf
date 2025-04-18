<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<meta property="og:image" content="http://www.clfcanada.com/wp-content/uploads/2016/09/clfcanada_og.png" />
  <meta property="og:title" content="CLF Kung Fu Club" />
  <meta name="description" property="og:description" content="We offer professional instructions on Chen’s Tai Chi and Choy Lee Fat">
	<title><?php ci_e_title(); ?></title>

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<?php // JS files are loaded via /theme_functions/scripts.php ?>

	<?php // CSS files are loaded via /theme_functions/styles.php ?>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-10237768-14', 'auto');
  ga('send', 'pageview');

</script>

<?php// get_template_part('inc_mobile_nav'); ?>

<div id="wrap">

		<!-- ########################### HEADER ########################### -->
		<header id="header" class="group">
			<div class="header-wrap">

			<div id="logo" class="four columns <?php logo_class(); ?>">
				<?php ci_e_logo('<h1>', '</h1>'); ?>
			</div>

			<nav id="nav" class="nav twelve columns">
				<?php
					if(has_nav_menu('ci_main_menu'))
						wp_nav_menu( array(
							'theme_location' 	=> 'ci_main_menu',
							'fallback_cb' 		=> '',
							'container' 		=> '',
							'menu_id' 			=> 'navigation',
							'menu_class' 		=> 'sf-menu group'
						));
					else
						wp_page_menu();
				?>
			</nav><!-- /nav -->

		</div>
		</header><!-- /header -->
	<div class="container">
