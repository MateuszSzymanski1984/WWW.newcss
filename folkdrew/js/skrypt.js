  $(function () {
  	$("#nav").tinyNav({
  		header: "MENU"
  	});

  	$("#nav2").tinyNav({
  		header: "MENU"
  	});

  	
    $('.slickslider').slick();

    $("a#single_image").fancybox();
  
  /* Using custom settings */
  
  $("a#inline").fancybox({
    'hideOnContentClick': true
  });

  /* Apply fancybox to multiple items */
  
  $("a.fancybox_img").fancybox({
    'transitionIn'  : 'elastic',
    'transitionOut' : 'elastic',
    'speedIn'   : 600, 
    'speedOut'    : 200, 
    'overlayShow' : false
  });


      $('.slide-out-div').tabSlideOut({
      tabHandle: '.handle',
      pathToTabImage: 'img/zakladka.png',
      imageHeight: '120px',
      imageWidth: '40px',
      tabLocation: 'left',
      speed: 300,
      action: 'hover',
      topPos: '200px',
      leftPos: '20px',
      fixedPosition: true
    });


      ////////////////////////////////
    


  });
