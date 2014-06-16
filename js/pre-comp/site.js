$(function() { //When the document loads


  var isTouch = (('ontouchstart' in window) || (navigator.msMaxTouchPoints > 0)); //checks to see if it's a touchscreen
  if (isTouch) { $('#hero, #contact').css("background-attachment","scroll"); } //sets background-attachment to scroll

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
  var nav_a = $('header nav a');
  var offsetAdj = 8;// $('header').outerHeight(); // Overridden by adding a psudo-element to all sections
  var currentOffset = $('section').css('border-top').match(/\d+/);

//SUPERSEEDED BY THE CODE BELOW IT
// remove ".external" from firing
//  nav_a.parent().not('.external').on('click', function (event) {
//    // Don't reload the page
//    event.preventDefault();
//    // Find the url
//    var url = $(this).children('a').attr('href');
//    // go to the section
//    $('html, body').animate({
//      scrollTop:  $('html').find($(this).children('a').attr('href')).offset().top-headercompact+2
//      }, 800, 'swing', function () {
//        window.location.hash = url ;
//    });
//  });

//Scroll the asterisk!
$('.asterisk').click(function() {
  var scrollToSection = $('#slug');
  var transformSection = $('#slug p:first-child');
  $('html, body').animate({
    scrollTop:  scrollToSection.offset().top-(currentOffset*2.1)
    }, 650, 'swing', function () {
        transformSection.addClass('highlight')
        setTimeout(function (){
             transformSection.removeClass('highlight');
         }, 300);
      });
  });

//Scroll to Skills!
$('a[href=#skills]').click(function() {
  var scrollToSection = $('#skills');
  $('html, body').animate({
    scrollTop:  scrollToSection.offset().top-(currentOffset)-5
    }, 650, 'swing' );
  return false;
  });

//Scroll to Resume!
$('a[href=#resume]').click(function() {
  var scrollToSection = $('#resume');
  $('html, body').animate({
    scrollTop:  scrollToSection.offset().top-(currentOffset)-10
    }, 650, 'swing' );
  return false;
  });

//Scroll to Top!
$('a[href=#top]').click(function() {
  $('html, body').animate({
    scrollTop:  0
    }, 650, 'swing', function () {
      window.location.hash = '';
      });
    return false;
  });

  //Performs a smooth page scroll to an anchor on the same page from all links
    //Newer chris coyer srcipt, but makes page flash.. use this if carousels are messing up
    //$('.scrollto').click(function() {
    //    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
    //                || location.hostname == this.hostname) {
    //        var hashStr = this.hash.slice(1);
    //        var target = $(this.hash);
    //        target = target.length ? target : $('[name=' + hashStr +']');
    //
    //        if (target.length) {
    //            $('html,body').animate({ scrollTop: target.offset().top-headercompact}, 500);
    //            window.location.hash = hashStr;
    //            return false;
    //        }
    //    }
    //});
  //Older chris coyer scipt, (?might interfere with carousels?)
  $('a[href*=#]:not([href=#]).scrollto').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top-offsetAdj+2
          }, 800, 'swing', function () {
            window.location.hash = target.selector;
            });
          return false;
        }
      }
    });

// Highlighting the nav menu buttons and border
  sections.waypoint({
    handler: function(direction) {

      var active_section;
      active_section = $(this);
      if (direction === "up") { active_section = active_section.prevAll('section'); }

      //console.log("You are here:", active_section);

      var active_link = $('nav a[href="#' + active_section.attr("id") + '"]');
      nav_a.parent().removeClass('selected');
      active_link.parent().addClass('selected');
      $('header').removeClass().addClass(active_section.attr("id")); //to change the color of the border
//      if (parseInt($('header h1').css('font-size')) > 51) { //Change header size when loaded from url hash
//        $('header h1').addClass('compact');
//      }
    },
    offset: '36%'
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
    offset: '-40%' //offsetAdj-15
  });

  //To make header smaller after scrolling down
//  $('#about').waypoint({
//    handler: function(direction){
//
//      var fontSize = parseInt($('header h1').css('font-size'));
//
//      if (direction === 'down') {
//        if (fontSize > 51) {
//          $('header h1').addClass('compact');
//          $('body').css('margin-top','5.563em');
//          $(".contain, section").css({'margin-top':'-5.563em','border-top':'5.563em solid transparent'});
//        }
//      }
//      else {
//        $('header h1').removeClass('compact');
//        $('body').css('margin-top','');
//        $(".contain, section").css({'margin-top':'','border-top':''});
//      }
//    },
//    offset: -40
//  });


// AJAX Form sumbit

// Get the form.
var form = $('#ajax-contact');

// Get the messages div.
var formMessages = $('#form-messages');

// Get the submit div.
var formSubmit = $('#submit');

// Set up an event listener for the contact form.
$(form).submit(function(e) {
  // Stop the browser from submitting the form.
  e.preventDefault();

  // Serialize the form data.
  var formData = $(form).serialize();

  // Submit the form using AJAX.
  $.ajax({
    type: 'POST',
    url: $(form).attr('action'),
    data: formData
  })


  .done(function(response) {
    // Make sure that the formMessages div has the 'success' class.
    $(formMessages).removeClass('error');
    $(formMessages).addClass('success');

    // Set the message text.
    $(formMessages).text(response);

    // Clear the form.
    $('#name').val('');
    $('#email').val('');
    $('#message').val('');
    $('#captcha').val('');

  })
  .fail(function(data) {
    // Make sure that the formMessages div has the 'error' class.
    $(formMessages).removeClass('success');
    $(formMessages).addClass('error');

    // Set the message text.
    if (data.responseText !== '') {
      $(formMessages).text(data.responseText);
    } else {
      $(formMessages).text('Oops! An error occured and your message could not be sent.');
    }
  });

});
});
