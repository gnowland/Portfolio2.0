//Set body margin-top heght to bump down page height of header
$( 'body' ).css( "margin-top", $('header').outerHeight());

// Navigation Menu
$(function() { //When the document loads

  var sections = $('section');
  var navigation_links = $('nav a');
  var headerheight = $('header').outerHeight();

  navigation_links.on('click', function (e) {
    e.preventDefault();

    var url = $(this).attr('href'); //must be inside this .on('click') event

    $('html, body').animate({
        scrollTop:  $('html').find($(this).attr('href')).offset().top-headerheight
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
      navigation_links.removeClass("selected");
      active_link.addClass("selected");

    },
    offset: headerheight
  });
});