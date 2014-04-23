// REMOVE BEFORE SHIP!!! :
/*jshint devel:true */

// DEBUGGING CODE:
// console.log("You are here:", this.id);



$(function() { //When the document loads

  // Tell the DOM that JS is enabled and page is loaded
  $('html').addClass('loaded').removeClass('no-js');

  // FADE IN/OUT PAGES:
  //  $('body').css('display', 'none');
  //  $('body').fadeIn(1000);
  //
  //  $('.external').click(function(event) {
  //    event.preventDefault();
  //    newLocation = this.href;
  //    $('body').fadeOut(1000, newpage);
  //  });
  //
  //  function newpage() {
  //    window.location = newLocation;
  //  }


  // NAVIGATION MENU

  var sections = $('section');
  var nav_a = $('nav a');
  var headercompact = 7;// $('header').outerHeight(); // Overridden by adding a psudo-element to all sections

// remove ".external" from firing
  nav_a.parent().not('.external').on('click', function (event) {
    // Don't reload the page
    event.preventDefault();
    // Find the url
    var url = $(this).children('a').attr('href');
    // go to the section
    $('html, body').animate({
      scrollTop:  $('html').find($(this).children('a').attr('href')).offset().top-headercompact+1
      }, 800, 'swing', function () {
        window.location.hash = url ;
    });
  });

// Highlighting the nav menu buttons and border

  sections.waypoint({
    handler: function(direction) {

      var active_section;
      active_section = $(this);
      if (direction === "up") { active_section = active_section.prev(); }

      var active_link = $('nav a[href="#' + active_section.attr("id") + '"]');
      nav_a.parent().removeClass('selected');
      active_link.parent().addClass('selected');
      $('header').removeClass().addClass(active_section.attr("id")); //to change the color of the border
    },
    offset: headercompact
  });

// Check if at bottom of page, if so, add class to last <a> as sometimes the last div
// isnt long enough to scroll to the top of the page and trigger the active state.
  $('section:last').waypoint({
    handler: function(direction){
      if (direction === 'down') {
        nav_a.parent().removeClass('selected');
        nav_a.parent().not('.external').last().addClass('selected');
        $('header').removeClass().addClass($(this).attr("id")); //to change the color of the border
      }
      // Add class to the section above the last div once the user starts scrolling up again,
      // then the normal "highlighting" function takes back over control
      else {
        nav_a.parent().removeClass('selected');
        nav_a.parent().not('.external').eq(-2).addClass('selected');
        $('header').removeClass().addClass($(this).prev().attr("id")); //to change the color of the border
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
        $('header').removeClass().addClass($(this).attr("id")); //to change the color of the border
      }
    },
    offset: '-40%' //headercompact-15
  });

  //To make header smaller after scrolling down
  //$('#about').waypoint({
  //  handler: function(direction){
  //    if (direction === 'down') {
  //
  //    }
  //  }
  //})
});
