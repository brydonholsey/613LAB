window.onload= function (){
  document.getElementById("hamburger").addEventListener("click", function(){
    this.classList.toggle("active");
    document.querySelector(".mobile-menu").classList.toggle("active");
  });

}

$(document).on('scroll', function(){
    if ( $(window).scrollTop() > 240) {
        $('#one-int').addClass('color-change-purple');
        $('#two-int').addClass('color-change-purple');
        $('#three-int').addClass('color-change-purple');
    } else {
        $('#one-int').removeClass('color-change-purple');
        $('#two-int').removeClass('color-change-purple');
        $('#three-int').removeClass('color-change-purple');
    }
});

$(document).on('scroll', function(){
    var homeOneTop = $('#home-1').offset();

    if ( $(window).scrollTop() > homeOneTop.top) {
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
});



