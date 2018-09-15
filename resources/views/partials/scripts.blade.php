@include('sweet::alert')

<script>
// jQuery to collapse the navbar on scroll
  // function collapseNavbar() {
  //     if ($(".navbar").offset().top > 50) {
  //         $(".navbar-fixed-top").addClass("top-nav-collapse");
  //     } else {
  //         $(".navbar-fixed-top").removeClass("top-nav-collapse");
  //     }
  // }

  // $(window).scroll(collapseNavbar);

  // $(document).ready(collapseNavbar);

  // jQuery for page scrolling feature - requires jQuery Easing plugin
  // $(function() {
  //  $('a.page-scroll').bind('click', function(event) {
  //      var $anchor = $(this);
  //      $('html, body').stop().animate({
  //          scrollTop: $($anchor.attr('href')).offset().top
  //      }, 1500, 'easeInOutExpo');
  //      event.preventDefault();
  //  });
  // });
  //

  // Closes the Responsive Menu on Menu Item Click

$(document).ready(function() {
    // $('.summernote').summernote({
    // lang: 'fr-FR',
    // toolbar: [
    //      // [groupName, [list of button]]
    //      ['style', ['bold', 'italic', 'underline', 'clear']],
    //      ['font', ['strikethrough', 'superscript', 'subscript']],
    //      ['fontsize', ['fontsize']],
    //      ['color', ['color']],
    //      ['para', ['ul', 'ol', 'paragraph']],
    //      ['height', ['height']],
    //      ['table', ['table']]
    //    ]
    // });

  // sidenav
  $('.sidenav').sidenav();
  // $('.profile-sidenav').sidenav();

  $('.navbar-collapse ul li a').click(function() {
      if ($(this).attr('class') != 'dropdown-toggle active' && $(this).attr('class') != 'dropdown-toggle') {
      $('.navbar-toggle:visible').click();
      }
  });

  // carousel
  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });
  // slider
  $('.slider').slider();

  // dropdown trigger
  $(".dropdown-trigger").dropdown();
});
</script>