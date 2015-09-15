<!DOCTYPE html>
<head>
	<title><?php wp_title(); ?></title>
	<link rel="stylesheet" type="text/css" href="http://cloud.typography.com/6579754/612228/css/fonts.css" />
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<script type="text/javascript" src="https://widgets.shopifyapps.com/assets/widgets/embed/client.js" id="ShopifyEmbedScript"></script>
	<?php wp_head(); ?>
</head>
	<body>
		<aside class="banner-wrapper">
			<p>
				<a href="https://www.facebook.com/thislandpress" target="_blank">LAUNCH PARTY FOR OUR NEW ISSUE. FACEBOOK DETAILS</a>
			</p>
		</aside>
		<div class="main-wrapper">
			<header>
				<div role="banner" class="logo">
					<h1>
						<a href="<?php echo site_url(); ?>"><?php echo wp_get_attachment_image( 38, 'full' ); ?></a>
					</h1>
				</div>
				<nav role="navigation">
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
							<div class="main-search inner-addon left-addon">
								<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
									<button type="submit" id="searchsubmit" class="button-submit" style="
											border: none;
											background-color: white;
									"><i class="fa fa-search"></i></button>
									<input type="text" class="form-control" value="<?php echo esc_html($s, 1); ?>" name="s" id="s" />
								</form>
							</div>
						</li>
					</ul>
				</nav>
			</header>