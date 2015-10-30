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
    (function() {
      var useSSL = 'https:' == document.location.protocol;
      var src = (useSSL ? 'https:' : 'http:') +
          '//www.googletagservices.com/tag/js/gpt.js';
      document.write('<scr' + 'ipt src="' + src + '"></scr' + 'ipt>');
    })();
  </script>

  <script type='text/javascript'>
    googletag.cmd.push(function() {
      googletag.defineSlot('/4053978/1stAdonPost', [[300, 250], [300, 600]], 'div-gpt-ad-1445975693653-0').addService(googletag.pubads());
      googletag.pubads().enableSyncRendering();
      googletag.enableServices();
    });
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
      <main role="index" class="main error">
        <section class="text-center">
          <h1>
            <a href="<?php echo site_url(); ?>"><img src="http://devthisland.wpengine.com/wp-content/uploads/2015/09/this-land-logo.png"></a>
          </h1>
          <h1 class="text-uppercase">
            Page not Found
          </h1>
          <p>
            This page you were trying to reach at this address doesn't seem to exist. This is usually the result of a bad or outdated link. We apologize for any inconvenience.
          </p>
          <p>
            Please click on one of the links above to resume your session.
          </p>
        </section>
      </main>
      </div>
    <?php get_footer(); ?>