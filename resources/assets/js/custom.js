(function($) {
    $(function() {
        var jcarousel = $('.jcarousel');

        jcarousel
            .on('jcarousel:reload jcarousel:create', function () {
                var carousel = $(this),
                    width = carousel.innerWidth() - 30/100 * carousel.innerWidth();

                if (width >= 850) {
                    width = width / 5;
                } else if (width < 850 && width > 600) {
                  width = width/4
                } else if (width < 600 && width > 350) {
                    width = width / 3;
                }
                else {
                    width = width / 1;
                }

                width = Math.ceil(width);

                carousel.jcarousel('items').css('width', width + 'px');
                carousel.find('img').css('height', width + 'px');
            })
            .jcarousel({
                wrap: 'circular'
            });

        $('.jcarousel-control-prev')
            .jcarouselControl({
                target: '-=1'
            });

        $('.jcarousel-control-next')
            .jcarouselControl({
                target: '+=1'
            });

        $('.jcarousel-pagination')
            .on('jcarouselpagination:active', 'a', function() {
                $(this).addClass('active');
            })
            .on('jcarouselpagination:inactive', 'a', function() {
                $(this).removeClass('active');
            })
            .on('click', function(e) {
                e.preventDefault();
            });
    });
})(jQuery);

$(document).ready(function(){
  $('body').scrollspy({ target: ".navbar", offset: 70 });

  $('.navbar a').click(function(event){
      
      if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(e){
        if ($(window).innerWidth() < 600) {
          $('.navbar-toggler').click();
        }
        
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;        
      });      
    }  // End if
  });

 // external js: isotope.pkgd.js, imagesloaded.pkgd.js

// init Isotope
var $grid = $('.grid').isotope({
  itemSelector: '.grid-item',
  percentPosition: true,
  masonry: {
    columnWidth: '.grid-sizer'
  }
});

});

$(window).on('load resize', function(){
  if ($(window).innerWidth() < 500) {
    var imgWidth = $(window).innerWidth()/2;
    $('.jcarousel img').css('height', imgWidth+'px');
    $('#about .section-title p').addClass('giveMeEllipsis');
  }
  if ($('.giveMeEllipsis').length > 0) {
      if ($('#readMoreEllipsis').length === 0) {
        $('.giveMeEllipsis').after("<a href='#' id='readMoreEllipsis' class='btn'>Read More ...</a>");
      }
  }

  function resizeIFrameToFitContent( iFrame ) {

    iFrame.width  = iFrame.contentWindow.document.body.scrollWidth;
    iFrame.height = iFrame.contentWindow.document.body.scrollHeight;
}

  window.addEventListener('DOMContentLoaded', function(e) {

      var iFrame = document.getElementById( 'fbIframe' );
      resizeIFrameToFitContent( iFrame );
  } );


});

function initMap() {
  var myLatLng = {lat: 22.305177, lng: 114.167972};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hongkong'
  });
}

$(function() {
  // var HttpClient = function() {
  //   this.get = function(aUrl, aCallback) {
  //       var anHttpRequest = new XMLHttpRequest();
  //       anHttpRequest.onreadystatechange = function() { 
  //           if (anHttpRequest.readyState == 4 && anHttpRequest.status == 200)
  //               aCallback(anHttpRequest.responseText);
  //       }

  //       anHttpRequest.open( "GET", aUrl, true );            
  //       anHttpRequest.send( null );
  //       }
  //   }
  //   var client = new HttpClient();
  //   client.get('https://api.instagram.com/v1/users/420477502/media/recent/?access_token=420477502.4769609.a7766211e7ad4f04b88168e9345279fc', function(response) {

  //     obj = JSON.parse(response);
  //     for (var i = 0; i < obj['data'].length; ++i) {
  //         console.log(obj['data'][i]);
  //     }
  //   });
});
