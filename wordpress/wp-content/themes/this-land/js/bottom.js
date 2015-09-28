jQuery(document).ready(function($){
    $('#menu').slicknav({
    	'label' : '',
    	'brand': '<img src="http://devthisland.wpengine.com/wp-content/uploads/2015/09/this-land-logo.png" width="91%">'
    });

    $('.slicknav_menu').prepend('');


    $('#slider').nivoSlider({
    			effect: 'fade',
    			animSpeed: 700,
    			pauseTime: 6000,
      		directionNav: false,             // Next & Prev navigation
          controlNav: false,                 // 1,2,3... navigation
          controlNavThumbs: false,         // Use thumbnails for Control Nav
          pauseOnHover: false,
    $

    });

    $('main.search aside ul li a').click(function() {
      $(this).addClass('test')
    });
});