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

    $("main.story section article p:nth-child(3)").insertAfter(<?php get_template_part('content', 'sub-category-show'); ?>)
});