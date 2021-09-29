$(window).scroll(function () {
    if ($(window).scrollTop() >= 99) {
        $('#nav-control').addClass('navbar-fixed-top');
    }
  
  
    if ($(window).scrollTop() >= 100) {
        $('#nav-control').addClass('show');
    } else {
        $('#nav-control').removeClass('show navbar-fixed-top');
    }
  });