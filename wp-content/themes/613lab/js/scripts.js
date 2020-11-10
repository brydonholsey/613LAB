window.onload= function (){
  document.getElementById("hamburger").addEventListener("click", function(){
    this.classList.toggle("active");
    document.querySelector(".mobile-menu").classList.toggle("active");
  });


//   var menuHoverItems = document.getElementById("slide-out-nav").getElementsByTagName("li");

//   menuHoverItems.addEventListener('mouseover', function(){
//     this.classList.toggle('show-line');
//     document.querySelector("#slide-out-nav").classList.toggle("show-line");
// });

}


window.scroll= function() {

    var hamburgerMenu = document.getElementById('hamburger');

    if hamburgerMenu.scrollTop() > 50 {
        // hamburgerColorChange.addClass('colorChangePurple');
        console.log('test');
    };
}

// $(function() {
//     $(window).scroll(function () {
//        if ($(this).scrollTop() > 50) {
//           $('header').addClass('colorChangePurple')
//        } 
//        if ($(this).scrollTop() < 50) {
//           $('header').removeClass('colorChangePurple')
//        } 
//     });
//     });


