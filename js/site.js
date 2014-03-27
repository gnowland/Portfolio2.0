// REMOVE BEFORE SHIP!!! :
/*jshint devel:true */
// console.log("You are here:", this.id);

//Set body margin-top heght to bump down page height of header
$( 'body' ).css( 'margin-top', $('header').outerHeight());

// Navigation Menu
$(function() { //When the document loads

  var sections = $('section');
  var nav_a = $('nav a');
  var headerheight = $('header').outerHeight();

// remove ".external" from firing
  nav_a.parent().not('.external').on('click', function (event) {
      // Don't reload the page
      event.preventDefault();
      // Find the url
      var url = $(this).children('a').attr('href');
      // go to the section
      $('html, body').animate({
          scrollTop:  $('html').find($(this).children('a').attr('href')).offset().top-headerheight+1
          }, 400, 'swing', function () {
            window.location.hash = url ;
          });
  });

  // Highlighting

  sections.waypoint({
    handler: function(direction) {

      var active_section;
      active_section = $(this);
      if (direction === "up") { active_section = active_section.prev(); }

      var active_link = $('nav a[href="#' + active_section.attr("id") + '"]');
      nav_a.parent().removeClass('selected');
      active_link.parent().addClass('selected');

    },
    offset: headerheight
  });

// Check if at bottom of page, if so, add class to last <a> as sometimes the last div
// isnt long enough to scroll to the top of the page and trigger the active state.
  $('section:last').waypoint({
    handler: function(direction){
      if (direction === 'down') {
          nav_a.parent().removeClass('selected');
          nav_a.parent().not('.external').last().addClass('selected');
      }
      // Add class to the section above the last div once the user starts scrolling up again,
      // then the normal "highlighting" function takes back over control
      else {
          nav_a.parent().removeClass('selected');
          nav_a.parent().not('.external').eq(-2).addClass('selected');
      }
    },
    offset: 'bottom-in-view'
  });

  // Check if scrolled to top of page, if so, add class to first <a>
  // (forcefix for when all content fits on one screen)
  $('section:first').waypoint({
    handler: function(direction){
      if (direction === 'up') {
        nav_a.parent().removeClass('selected');
        nav_a.parent().not('.external').first().addClass('selected');
      }
    },
    offset: headerheight-1
  });

});
