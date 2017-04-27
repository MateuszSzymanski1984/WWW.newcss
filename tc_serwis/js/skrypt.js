  $(function () {
  	
  	jQuery('ul.sf-menu').superfish({
  		popUpSelector: 'ul,.sf-mega',
  		hoverClass:    'sfHover',
  		pathClass:     'overideThisToUse',
  		pathLevels:    1, 
  		delay:         800,
  		animation:     {opacity:'show'},
  		animationOut:  {opacity:'hide'},
  		speed:         'normal',
  		speedOut:      'fast',  	});


    $(".menu").tinyNav({
       active: 'selected', // String: Set the "active" class
       header: 'Menu',
     });

    $(".menu2").tinyNav({
       active: 'selected', // String: Set the "active" class
       header: 'Menu',
     });

    $(document).ready(function(){
      $('.partnerzy_slick').slick({
        slidesToScroll: 1,
        slidesToShow: 5,
        focusOnSelect: true
      });
    });

    $(document).ready(function(){
      $('.oferta_slider').slick({
        dots: true
      });
    });

  });