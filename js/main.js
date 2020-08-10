(function ($) {
  Drupal.behaviors.SiteHeaderSearchToggle = {
    attach: function (context, settings) {
      $('.site-search').hide();
      $('.search-toggle a', context).click(function(event){
      	event.preventDefault();
      	$('.site-search').slideToggle(320);
      });
    }
  };

  Drupal.behaviors.SiteHeaderMenuToggle = {
    attach: function (context, settings) {
      $('.menu-toggle button', context).click(function(event){
        event.preventDefault();
        $('.primary-menu').slideToggle(420);
      });
    }
  };


  Drupal.behaviors.SiteWaypoints = {
    attach: function(context,settings) {
      // Back to top button
      var wayHeader = new Waypoint({
        element: $('.site-header', context).once(),
        offset: '-52px',
        handler: function(direction) {
          $('.top-nav a').slideToggle("fast");
        }
      });

      // Back to top button
      var wayTopNav = new Waypoint({
        element: $('.site-footer', context).once(),
        offset: '99%',
        handler: function(direction) {
          $('.top-nav').toggleClass('bottom');
        }
      });
      $('.top-nav',context).click(function(event){
      	  $("html, body").animate({ scrollTop: 0 }, 444);
      	  return false;
      }).once(); 
    }
  };

})(jQuery);
