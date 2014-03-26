//Set header.push heght
$( 'body' ).css( "margin-top", $('header').outerHeight());

// Navigation Menu
$(function() { //When the document loads

  var sections = $('section');
  var navigation_links = $('nav a');
  var navoffset = $('header').outerHeight();

  sections.waypoint({
    handler: function(event, direction) {

      var active_section;
      active_section = $(this);
      if (direction === "up") active_section = active_section.prev();

      var active_link = $('nav a[href="#' + active_section.attr("id") + '"]');
      navigation_links.removeClass("selected");
      active_link.addClass("selected");

    },
    offset: navoffset-1
  })

  navigation_links.on('click', function (e) {
    e.preventDefault();

    var locale= $(this).attr('href');

    $('html, body').animate({
        scrollTop:  $('html').find($(this).attr('href')).offset().top-navoffset+1
        }, 1200, 'swing', function () {

          window.location.hash = locale ;

        });
  });
});