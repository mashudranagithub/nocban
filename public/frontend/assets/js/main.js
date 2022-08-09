  $('.nav-item.nav-link').click(function() {
      $(this).addClass('active');
      $(this).siblings().removeClass('active');
  }); // THEME OPTIONS.JS
  //--------------------------------------------------------------------------------------------------------------------------------
  //This is JS file that contains principal fuctions of theme */
  // -------------------------------------------------------------------------------------------------------------------------------
  // Template Name: Sports Cup- Responsive HTML5  soccer and sports Template.
  // Author: Iwthemes.
  // Name File: main.js
  // Version 1.0 - Created on 20 May 2014
  // Website: http://www.iwthemes.com 
  // Email: support@iwthemes.com
  // Copyright: (C) 2014

  $(document).ready(function($) {

      'use strict';


      //=================================== Google Map  ==============================//

      /*
        Map Settings
        Find the Latitude and Longitude of your address:  
        - http://universimmedia.pagesperso-orange.fr/geo/loc.htm  
        - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/
      */

      function initialize() {
          var myLatlng = new google.maps.LatLng(23.7253985, 90.4143919);
          var mapOptions = {
              zoom: 18,
              center: myLatlng
          }
          var map = new google.maps.Map(document.getElementById('map'), mapOptions);

          var marker = new google.maps.Marker({
              position: myLatlng,
              map: map,
              title: '<strong>Olympic Bhaban </strong><br>Rajuk Avenue, Outer Stadium, Purana Paltan, Dhaka 1000'
          });
      }

      google.maps.event.addDomListener(window, 'load', initialize);

      //=================================== Nav Responsive =============================//

      $('#menu').tinyNav({
          active: 'selected'
      });

      //=================================== Sticky nav ===================================//

      $(".mainmenu").sticky({ topSpacing: 0 });

      //=================================== Nav Superfish ===============================//

      $('ul.sf-menu').superfish();

      //=================================== Counter  ==============================//

      $('#event-one').countdown('2022/08/11', function(event) {
          var $this = $(this).html(event.strftime('' +
              '<span>%D <br> <small>days</small></span>  ' +
              '<span>%H <br> <small>hr</small> </span>  ' +
              '<span>%M <br> <small>min</small> </span>  ' +
              '<span>%S <br> <small>sec</small></span> '));
      });


      //=================================== Slide Services  ==============================//

      $(".single-carousel").owlCarousel({
          items: 1,
          autoPlay: false,
          navigation: true,
          autoHeight: true,
          slideSpeed: 400,
          singleItem: true,
          pagination: false
      });

      //=================================== Carousel Blog  ==================================//

      $("#events-carousel").owlCarousel({
          autoPlay: 3200,
          items: 3,
          navigation: false,
          itemsDesktop: [1199, 3],
          itemsDesktopSmall: [1024, 3],
          itemsTablet: [1000, 2],
          itemsMobile: [480, 1],
          pagination: true
      });

      //=================================== Carousel media  ==================================//

      $("#media-carousel").owlCarousel({
          autoPlay: 3200,
          items: 3,
          navigation: false,
          itemsDesktop: [1199, 3],
          itemsDesktopSmall: [1024, 3],
          itemsTablet: [1000, 2],
          itemsMobile: [480, 1],
          pagination: true
      });

      //=================================== Carousel Players  ==================================//

      $("#players-carousel").owlCarousel({
          autoPlay: 3200,
          items: 4,
          navigation: false,
          itemsDesktopSmall: [1024, 3],
          itemsTablet: [768, 3],
          itemsMobile: [600, 2],
          pagination: true
      });

      //=================================== Carousel Clubs  ==================================//

      $("#links-carousel").owlCarousel({
          autoPlay: 3200,
          items: 3,
          navigation: false,
          itemsDesktop: [1199, 3],
          itemsDesktopSmall: [1024, 3],
          itemsTablet: [1000, 2],
          itemsMobile: [600, 1],
          pagination: true
      });

      //=================================== Carousel Sponsor  ==================================//

      $("#olympic-partners-carousel").owlCarousel({
          autoPlay: 4000,
          items: 5,
          navigation: false,
          itemsDesktop: [1199, 5],
          itemsDesktopSmall: [1024, 4],
          itemsTablet: [768, 3],
          itemsMobile: [500, 2],
          pagination: true
      });

      $("#sponsors").owlCarousel({
          autoPlay: 3200,
          items: 6,
          navigation: false,
          itemsDesktop: [1199, 5],
          itemsDesktopSmall: [1024, 4],
          itemsTablet: [768, 3],
          itemsMobile: [500, 2],
          pagination: true
      });

      //=================================== Carousel Testimonials  ============================//

      $("#testimonials").owlCarousel({
          autoPlay: 3200,
          items: 3,
          navigation: false,
          itemsDesktop: [1199, 3],
          itemsDesktopSmall: [1024, 3],
          itemsTablet: [1000, 2],
          itemsMobile: [600, 1],
          pagination: true
      });

      //=================================== Carousel Twitter  ===============================//

      $(".tweet_list").owlCarousel({
          items: 1,
          autoPlay: 3200,
          navigation: false,
          autoHeight: true,
          slideSpeed: 400,
          singleItem: true,
          pagination: true
      });

      //=================================== Subtmit Form  ===================================//

      $('.form-theme').submit(function(event) {
          event.preventDefault();
          var url = $(this).attr('action');
          var datos = $(this).serialize();
          $.get(url, datos, function(resultado) {
              $('.result').html(resultado);
          });
      });

      //=================================== Form Newslleter  =================================//

      $('#newsletterForm').submit(function(event) {
          event.preventDefault();
          var url = $(this).attr('action');
          var datos = $(this).serialize();
          $.get(url, datos, function(resultado) {
              $('#result-newsletter').html(resultado);
          });
      });

      //=================================== Ligbox  ===========================================//	

      $(".fancybox").fancybox({
          openEffect: 'elastic',
          closeEffect: 'elastic',

          helpers: {
              title: {
                  type: 'inside'
              }
          }
      });

      //=============================  tooltip demo ===========================================//

      $('.tooltip-hover').tooltip({
          selector: "[data-toggle=tooltip]",
          container: "body"
      });

      //=================================== Totop  ============================================//

      $().UItoTop({
          scrollSpeed: 500,
          easingType: 'linear'
      });

      //=================================== Portfolio Filters  ==============================//

      $(window).load(function() {
          var $container = $('.portfolioContainer');
          $container.isotope({
              filter: '*',
              animationOptions: {
                  duration: 750,
                  easing: 'linear',
                  queue: false
              }
          });

          $('.portfolioFilter a').click(function() {
              $('.portfolioFilter .current').removeClass('current');
              $(this).addClass('current');
              var selector = $(this).attr('data-filter');
              $container.isotope({
                  filter: selector,
                  animationOptions: {
                      duration: 750,
                      easing: 'linear',
                      queue: false
                  }
              });
              return false;
          });
      });

  });

  //=================================== Slide Home =====================================//

  $('#slide').camera({
      height: 'auto'
  });


  $(document).ready(function() {
      $('.nav-item.nav-link').click(function() {
          $(this).addClass('active');
          $(this).siblings().removeClass('active');
      });
  });