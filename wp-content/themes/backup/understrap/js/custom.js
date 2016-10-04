//for fixed header on page scroll 
jQuery(window).scroll(function(){
  var sticky = jQuery('.home .wrapper-navbar'),
      scroll = jQuery(window).scrollTop();

  if (scroll >= 300) sticky.addClass('navbar-fixed-top').delay(1000);
  else sticky.removeClass('navbar-fixed-top').delay(1000);
});

