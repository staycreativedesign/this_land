<!DOCTYPE html>
<head>
	<title>This Land Press - Made by You and Me <?php wp_title(); ?></title>

	<link rel="stylesheet" type="text/css" href="http://cloud.typography.com/6579754/612228/css/fonts.css" />
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<script type="text/javascript" src="https://widgets.shopifyapps.com/assets/widgets/embed/client.js" id="ShopifyEmbedScript"></script>
	<?php wp_head(); ?>
	<script type="text/javascript">
	    $(document).ready(function(){
	        $('.slicknav_menu').prepend('<a href="/"><img class="logo" src="images/this-land-logo.png" alt="Website Logo" /></a>');
	    });
	</script>
	<script type='text/javascript'>
	  var googletag = googletag || {};
	  googletag.cmd = googletag.cmd || [];
	  (function() {
	    var gads = document.createElement('script');
	    gads.async = true;
	    gads.type = 'text/javascript';
	    var useSSL = 'https:' == document.location.protocol;
	    gads.src = (useSSL ? 'https:' : 'http:') +
	      '//www.googletagservices.com/tag/js/gpt.js';
	    var node = document.getElementsByTagName('script')[0];
	    node.parentNode.insertBefore(gads, node);
	  })();
	</script>

	<script type='text/javascript'>
	  googletag.cmd.push(function() {
	    googletag.defineSlot('/4053978/1stAdonPost', [[300, 600], [300, 250]], 'div-gpt-ad-1446672708370-0').addService(googletag.pubads());

	    googletag.defineSlot('/4053978/MiddleAdinStory', [[300, 600], [300, 250]], 'div-gpt-ad-1446681124572-0').addService(googletag.pubads());
	    googletag.defineSlot('/4053978/BottomAdinStory', [[300, 250], [300, 600]], 'div-gpt-ad-1446694122046-0').addService(googletag.pubads());
	    googletag.pubads().enableSingleRequest();
	    googletag.enableServices();
	  });
	</script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-12868219-1', 'auto');
	  ga('send', 'pageview');

	</script>
</head>
	<body>
		<?php include_once("analyticstracking.php") ?>
		<aside class="banner-wrapper-mobile">
			<p>
				LAUNCH PARTY FOR OUR NEW ISSUE. FACEBOOK DETAILS
			</p>
		</aside>
		<div class="nav-wrapper nav-down">
			<aside class="banner-wrapper">
				<p>
					<a href="https://www.facebook.com/thislandpress" target="_blank">LAUNCH PARTY FOR OUR NEW ISSUE. FACEBOOK DETAILS</a>
				</p>
			</aside>
			<div class="header-wrapper">
				<header>
					<div role="banner" class="logo">
						<h1>
							<a href="<?php echo site_url(); ?>"><img src="http://devthisland.wpengine.com/wp-content/uploads/2015/09/this-land-logo.png"></a>
						</h1>
					</div>
					<nav role="navigation ">
						<ul id="menu">
							<li>
								<a href="<?php echo site_url('/stories'); ?>">Explore</a>
							</li>
							<li>
								<a href="https://thislandpress.myshopify.com/">Shop</a>
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
		</div>
		<div class="main-wrapper">