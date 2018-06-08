jQuery(window).bind("load", function() {
  'use strict';
  jQuery(function($) {

    // Select all links with hashes
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
          // On-page links
          if (
              location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
              &&
              location.hostname == this.hostname
          ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
              // Only prevent default if animation is actually gonna happen
              event.preventDefault();

              $('.nav-trigger').prop('checked',false);

              $('html, body').animate({
                scrollTop: target.offset().top
              }, 1000, function() {
                // Callback after animation
                // Must change focus!
                var $target = $(target);
                $target.focus();
                if ($target.is(":focus")) { // Checking if the target was focused
                  return false;
                } else {
                  $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                  $target.focus(); // Set focus again
                };
              });
            }
          }
        });

    $('.team-member-dup').on('click', function(e){
      e.preventDefault();
      var clone = $('.team-member:first-child').clone(true);
      clone.find('input').val('');
      clone.appendTo('.team-members');
    });

    $('.remove-team-member').on('click', function(e){
      e.preventDefault();
      $(this).parent().parent().parent('.team-member').remove();
    });

    $('.footable').footable({
      'cascade': true
    });

    $(document).ready(function(){

      $('.spinner').fadeOut();



    });

  });
});
