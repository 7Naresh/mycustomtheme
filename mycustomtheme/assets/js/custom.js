jQuery(document).ready(function($){
    //preloader
    // $(window).load(function() {
    //     $(".loader").delay(2000).fadeOut("slow");
    //   $("#overlayer").delay(2000).fadeOut("slow");
    // });
    $('.custom-logo-link').addClass('navbar-brand');
    $('#author').removeAttr('required');
    $('aside a').addClass('badge badge-danger p-2 w-50 mb-1');
    $('.searchform').attr('autocomplete', 'off');
    // current menu link
    var path = window.location.href;
    $('#menu-primary-menu a').each(function() {
      if (this.href === path) {
        $(this).addClass('active');
      }
    });
});