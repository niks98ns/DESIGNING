{/* <script> */}
    // window.onscroll = function() {myFunction()};
    
    // var header = document.getElementById("myHeader");
    // var sticky = header.offsetTop;
    
    // function myFunction() {
    //     if (window.pageYOffset > sticky) {
    //     header.classList.add("sticky");
    //     } else {
    //     header.classList.remove("sticky");
    //     }
    // }
// </script>


$(window).scroll(function(){
    scroll = $(window).scrollTop();
  
    if (scroll >= 600) $('nav.navbar.navbar-expand-lg.navbar-light').addClass('fixed');
    else $('nav.navbar.navbar-expand-lg.navbar-light').removeClass('fixed');
  });