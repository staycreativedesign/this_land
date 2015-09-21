<!DOCTYPE html>
<head>
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" type="text/css" href="http://cloud.typography.com/6579754/612228/css/fonts.css" />
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<script type="text/javascript" src="https://widgets.shopifyapps.com/assets/widgets/embed/client.js" id="ShopifyEmbedScript"></script>
	<?php wp_head(); ?>
</head>
	<body>
		<div class="nav-wrapper nav-down">
			<aside class="banner-wrapper">
				<p>
					<a href="https://www.facebook.com/thislandpress" target="_blank">LAUNCH PARTY FOR OUR NEW ISSUE. FACEBOOK DETAILS</a>
				</p>
			</aside>
			<header>
				<div role="banner" class="logo">
					<h1>
						<a href="<?php echo site_url(); ?>"><?php echo wp_get_attachment_image( 38, 'full' ); ?></a>
					</h1>
				</div>
				<nav role="navigation ">
					<ul id="menu">
						<li>
							<a href="<?php echo site_url('/stories'); ?>">Explore</a>
						</li>
						<li>
							<a href="https://thislandpress.myshopify.com/" target="_blank">Shop</a>
						</li>
						<li>
							<a href="https://thislandpress.myshopify.com/collections/magazine" target="_blank">Subscribe</a>
						</li>
						<li>
							<?php get_search_form(); ?>
						</li>
					</ul>
				</nav>
			</header>
		</div>
		<div class="main-wrapper">