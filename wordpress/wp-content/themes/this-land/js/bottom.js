jQuery(document).ready(function($){
    $('#menu').slicknav({
    	'label' : '',
    	'brand': '<a href="/"><img src="http://devthisland.wpengine.com/wp-content/uploads/2015/09/this-land-logo.png" width="91%"></a>'
    });



    $('#slider').nivoSlider({
    			effect: 'fade',
    			animSpeed: 700,
    			pauseTime: 6000,
      		directionNav: false,             // Next & Prev navigation
          controlNav: false,                 // 1,2,3... navigation
          controlNavThumbs: false,         // Use thumbnails for Control Nav
          pauseOnHover: false,
    });

    $("<div id='div-gpt-ad-1446672708370-0'><script type='text/javascript'>googletag.cmd.push(function() { googletag.display('div-gpt-ad-1446672708370-0'); });</script></div>").insertAfter("main.story section article p:nth-child(2)")

    $("<div id='div-gpt-ad-1446681124572-0'><script type='text/javascript'>googletag.cmd.push(function() { googletag.display('div-gpt-ad-1446681124572-0'); });</script></div>").insertAfter("main.story section article p:nth-child(8)")

    $("<div id='div-gpt-ad-1446694122046-0'><script type='text/javascript'>googletag.cmd.push(function() { googletag.display('div-gpt-ad-1446694122046-0'); });</script></div>").insertAfter("main.story section article p:nth-last-child(2)")

});
