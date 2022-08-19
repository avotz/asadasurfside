
require('./config.js');

const hoverintent = require('hoverintent');

$( document ).ready(function() {

  // select fancy
  [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {  
        new SelectFx(el);
      } );

  var $btnMenu = $('#btn-menu'),
    $headerMenu = $('.header-menu'),
    $menu = document.querySelectorAll('.header-menu .menu-item-has-children');
  
  //new WOW().init();

  $btnMenu.on('click', function (e) {
    
      $headerMenu.toggle();

  });

  $menu.forEach(element => {
    hoverintent(element,
        function () {
            $(element).find('>.sub-menu').slideDown(200);
        }, function () {
            $(element).find('>.sub-menu').slideUp(200);
        }).options({
            timeout: 200,
            interval: 50
        });
});


 $("#home-slider").owlCarousel({
      items : 1,
      autoplay : true,
      loop : true,
      nav : false,
      dots:false
      //navText : ['','']
      /*onChange : function (e) {
        console.log(e.target);
        $('.owl-item.active span').addClass('animated');
        $('.owl-item.active h1').addClass('animated');
      }*/
      /*slideSpeed : 300,
      paginationSpeed : 400,*/
      /*singleItem:true*/
 });


 $("#properties-slider").owlCarousel({
          center:true,
          mouseDrag:true,
          items : 4,
          autoplay : false,
          loop : true,
          nav : true,
          navText : ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
          margin: 30,
          responsiveClass:true,
          responsive:{
              0:{
                  items:1,
                
              },
              /*480:{
                  items:2,
                  nav:true
              },*/
              640:{
                  items:2,
                  
              },
            //   1024:{
            //       items:3,
                  
            //   },
            //   1368:{
            //       items:4,
                  
                  
            //   },
            //   1680:{
            //       items:4,
                 
            //   }
          }
         
     });

 // SMOOTH ANCHOR SCROLLING
    var $root = $('html, body');
    $('a.anchor').click(function(e) {
        var href = jQuery.attr(this, 'href');

        if (typeof(jQuery(href)) != 'undefined' && jQuery(href).length > 0) {
            var anchor = '';

            if (href.indexOf("#") != -1) {
                anchor = href.substring(href.lastIndexOf("#"));
            }
           
            if (anchor.length > 0) {
                /*console.log(jQuery(anchor).offset().top);
                console.log(anchor);*/


                $root.animate({
                    scrollTop: jQuery(anchor).offset().top-155
                }, 500, function() {
                    window.location.hash = anchor;
                });
                e.preventDefault();
            }
        }else{ // si no esta la seccion se va al home
           window.location.replace('/' + href);
        }
    });

  /*$(window).scroll(function () {
          if ($(this).scrollTop() > 50) {
              $('.header').addClass("header--fixed");
          } else {
              $('.header').removeClass("header--fixed");
          }
      });*/
 /*$(window).load(function() {
     
     
      resizes();

    });

    $(window).resize(resizes);

    function resizes()
     {
      
      
        

          $('.tours-img').height($(".tours").height());
        
        
       
      

     }*/
  

    
});