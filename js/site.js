//Set body margin-top heght to bump down page height of header
$( 'body' ).css( 'margin-top', $('header').outerHeight());

// Navigation Menu
$(function() { //When the document loads

  var sections = $('section');
  var navigation_links = $('nav a');
  var headerheight = $('header').outerHeight();

  navigation_links.on('click', function (e) {
    e.preventDefault();

    var url = $(this).attr('href'); //must be inside this .on('click') event

    $('html, body').animate({
        scrollTop:  $('html').find($(this).attr('href')).offset().top-headerheight+1
        }, 400, 'swing', function () {

          window.location.hash = url ;

        });
  });

  sections.waypoint({
    handler: function(direction) {

      var active_section;
      active_section = $(this);
      if (direction === "up") { active_section = active_section.prev(); }

      var active_link = $('nav a[href="#' + active_section.attr("id") + '"]');
      navigation_links.removeClass('selected');
      active_link.addClass('selected');

    },
    offset: headerheight
  });

// Check if at bottom of page, if so, add class to last <a> as sometimes the last div
// isnt long enough to scroll to the top of the page and trigger the active state.

  $('section:last').waypoint({
    handler: function(direction){
      if (direction === 'down') {
          navigation_links.removeClass('selected');
          navigation_links.not( ".external" ).last().addClass('selected');
      }
      else {
          navigation_links.removeClass('selected');
          navigation_links.not( ".external" ).eq(-2).addClass('selected');
      }
    },
    offset: 'bottom-in-view'
  });

});
