window.onload= function (){


//Menu slide out
  document.getElementById("hamburger").addEventListener("click", function(){
    this.classList.toggle("active");
    document.querySelector(".mobile-menu").classList.toggle("active");
  });


//Loads purple hamburger menu when screen is smaller than 768  
  var mediaSevenLess = window.matchMedia('(max-width: 768px)');

  if (mediaSevenLess.matches) {
        $('#one').addClass('color-change-purple');
        $('#two').addClass('color-change-purple');
        $('#three').addClass('color-change-purple');
    } else {
        $('#one').removeClass('color-change-purple');
        $('#two').removeClass('color-change-purple');
        $('#three').removeClass('color-change-purple');
    };


};



$(document).on('scroll', function(){
    var mediaSevenGreater = window.matchMedia('(min-width: 769px)');
    var mediaSevenLess = window.matchMedia('(max-width: 768px)');
    var homeOneTop = $('#home-1').offset();
    var intOneTop = $('#int-1').offset();

//loads purple hamburger menu when screen is larger than 769 AND greater than 240px from top
    if ((mediaSevenGreater.matches) && $(window).scrollTop() > 240) {
        $('#one-int').addClass('color-change-purple');
        $('#two-int').addClass('color-change-purple');
        $('#three-int').addClass('color-change-purple');
    } else {
        $('#one-int').removeClass('color-change-purple');
        $('#two-int').removeClass('color-change-purple');
        $('#three-int').removeClass('color-change-purple');
    };


 //loads fixed headers when screen is less than 768px and greater than 240px from top   
    if ((mediaSevenLess.matches) && $(window).scrollTop() > 240) {
        $('#header-top').addClass('header-top-fixed');
        $('#header-top-int').addClass('header-top-fixed');
        $('#home-top-logo').addClass('show');
        $('#home-social-icons').addClass('hide');
    } else {
        $('#header-top').removeClass('header-top-fixed');
        $('#header-top-int').removeClass('header-top-fixed');
        $('#home-top-logo').removeClass('show');
        $('#home-social-icons').removeClass('hide');
    }

    if ((mediaSevenLess.matches) && $(window).scrollTop() < 240) {
        $('#one').addClass('color-change-purple');
        $('#two').addClass('color-change-purple');
        $('#three').addClass('color-change-purple');
    } else {
        $('#one').removeClass('color-change-purple');
        $('#two').removeClass('color-change-purple');
        $('#three').removeClass('color-change-purple');
    }

    if ( (mediaSevenGreater.matches) && $(window).scrollTop() > homeOneTop.top) {
        $('#one').addClass('color-change-purple');
        $('#two').addClass('color-change-purple');
        $('#three').addClass('color-change-purple');
        $('#apply-button').addClass('apply-button-show');

    } else {
        $('#one').removeClass('color-change-purple');
        $('#two').removeClass('color-change-purple');
        $('#three').removeClass('color-change-purple');
        $('#apply-button').removeClass('apply-button-show');
    };

    if ( (mediaSevenGreater.matches) && $(window).scrollTop() > intOneTop.top) {
        $('#one-int').addClass('color-change-purple');
        $('#two-int').addClass('color-change-purple');
        $('#three-int').addClass('color-change-purple');
    } else {
        $('#one-int').removeClass('color-change-purple');
        $('#two-int').removeClass('color-change-purple');
        $('#three-int').removeClass('color-change-purple');
    };

});


$(document).on('scroll', function(){
    var homeOneTop = $('#home-1').offset();
    var intOneTop = $('#int-1').offset();
    var mediaSevenGreater = window.matchMedia('(min-width: 769px)');
    var mediaSevenLess = window.matchMedia('(max-width: 768px)');


    if ((mediaSevenLess.matches) && $(window).scrollTop() < 240) {
        $('#one').addClass('color-change-purple');
        $('#two').addClass('color-change-purple');
        $('#three').addClass('color-change-purple');
    } else {
        $('#one').removeClass('color-change-purple');
        $('#two').removeClass('color-change-purple');
        $('#three').removeClass('color-change-purple');
    }

    if ( (mediaSevenGreater.matches) && $(window).scrollTop() > homeOneTop.top) {
        $('#one').addClass('color-change-purple');
        $('#two').addClass('color-change-purple');
        $('#three').addClass('color-change-purple');
        $('#apply-button').addClass('apply-button-show');

    };

    if ( (mediaSevenGreater.matches) && $(window).scrollTop() > intOneTop.top) {
        $('#one-int').addClass('color-change-purple');
        $('#two-int').addClass('color-change-purple');
        $('#three-int').addClass('color-change-purple');
    } else {
        $('#one-int').removeClass('color-change-purple');
        $('#two-int').removeClass('color-change-purple');
        $('#three-int').removeClass('color-change-purple');
    };
});
