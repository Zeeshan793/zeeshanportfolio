<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en-us">

<head>
	<meta charset="utf-8">
	<title><?php wp_title()?><?php if(is_front_page()){ bloginfo('name'); echo " | "; bloginfo('description'); } ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
	<meta name="description" content="This is meta description">
	<meta name="author" content="Themefisher">
	<link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/images/<?php bloginfo('template_directory') ?>/favicon.png" type="image/x-icon">
	<link rel="icon" href="<?php bloginfo('template_directory') ?>/images/<?php bloginfo('template_directory') ?>/favicon.png" type="image/x-icon">
  
  <!-- theme meta -->
  <meta name="theme-name" content="wallet" />

	<!-- # Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

	<!-- # CSS Plugins -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/plugins/slick/slick.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/plugins/font-awesome/fontawesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/plugins/font-awesome/brands.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/plugins/font-awesome/solid.css">

	<!-- # Main Style Sheet -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css">

	<?php wp_head(); ?>
</head>

<body>

<!-- navigation -->
<header class="navigation bg-tertiary">
	<nav class="navbar navbar-expand-xl navbar-light text-center py-3">
		<div class="container">
			<a class="navbar-brand" href="<?php echo site_url(); ?>">
				<?php 

					$logoimage=get_header_image();
					// echo $logoimage;
				 ?>
				<img loading="prelaod" decoding="async" class="img-fluid" width="160" src="<?php echo $logoimage; ?>" alt="Wallet">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
					<?php wp_nav_menu(array('theme-locations' => 'primary-menu' , 'menu_class'=> 'navbar-nav')) ?>
				</ul>
				<!-- account btn --> <a href="#!" class="btn btn-outline-primary">Log In</a>
				<!-- account btn --> <a href="#!" class="btn btn-primary ms-2 ms-lg-3">Sign Up</a>
			</div>
		</div>
	</nav>
</header>
<!-- /navigation -->