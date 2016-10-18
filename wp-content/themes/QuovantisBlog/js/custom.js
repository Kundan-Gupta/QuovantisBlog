//for fixed header on page scroll 
jQuery(window).scroll(function(){
  var sticky = jQuery('.home .wrapper-navbar'),
      scroll = jQuery(window).scrollTop();

if(jQuery(window).width()>700){
    if (scroll >= 300 ) {
    	sticky.addClass('navbar-fixed-top').delay(1000);
    	jQuery('.home .wrapper-navbar .navbar').removeClass('main-navbar-block');
    }
    else{
    	sticky.removeClass('navbar-fixed-top').delay(1000);
    	jQuery('.home .wrapper-navbar .navbar').addClass('main-navbar-block');
    } 
  }
});

jQuery(document).ready(function(){
	var sticky = jQuery('.home .wrapper-navbar');
	if(sticky.hasClass('navbar-fixed-top')){
  		jQuery('.home .wrapper-navbar .navbar').removeClass('main-navbar-block');
	}
	else{
	  jQuery('.home .wrapper-navbar .navbar').addClass('main-navbar-block');
	}

  jQuery('.hamburger').click(function(){
    // jQuery('.navbar').animate({
    //   'right': '0%'
    // }).delay(100, function(){
    //   jQuery('.hamburger span').removeClass('fa fa-bars').addClass('fa fa-times');
    // });

   jQuery('.hamburger span').toggleClass('fa-bars fa-times');
   jQuery('.navbar').toggleClass('animate-menu');


  });

  jQuery('.sidebar-toggle').click(function(){
    jQuery('.sidebar-toggle span').toggleClass('fa-bars fa-times');
    jQuery('.custom-sidebar').toggleClass('animate-sidebar-menu');

    if(jQuery(window).width()>700){
      RemoveCategoryText();
    }

    if(jQuery('.custom-sidebar').hasClass('animate-sidebar-menu')){
      jQuery('#page.hfeed.site').addClass('slide-searchbar');

    }else{
      jQuery('#page.hfeed.site').removeClass('slide-searchbar');

    }

   //#page.hfeed.site
});

  function RemoveCategoryText(){
    var divText;
    var newText;

    jQuery('div.animate-sidebar-menu').each( function() {
    divText = jQuery(this).html();

    if( divText.indexOf('Categories') != -1 ) {
        newText = divText.split('Categories');
        var beforeCat = newText[0];
        var afterCat = newText[1];
        jQuery(this).html(beforeCat + afterCat);
      }
    });
  }

  if(jQuery(window).width()<700){
    jQuery('.wrapper-navbar').addClass('navbar-fixed-top');
  }

  jQuery('.elm-button').click(function(){
    jQuery(".home .site-main article:last-child").css({ display:"none"});
    // jQuery(".home .site-main article:last-child").css({ display:"none"}).hover(function() {
    //   jQuery(this).addClass( "solast" );
    // }, function() {
    //   jQuery(this).removeClass( "solast" );
    // });
    
  });

});

jQuery(function() {
    jQuery('.float-right').click(function(){ 
      jQuery('html, body').animate({
          scrollTop: 0
        }, 1000);
    });
});
