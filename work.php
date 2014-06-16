<?php

$project = $_GET['project'];

ob_start();
include("includes/work/$project.php"); //Includes the variables but does not print the file
ob_end_clean();

$title = "Gifford Nowland &raquo; Portfolio &raquo; $name";
$style = "
  /* Prevents slides from flashing */
  #slides { display:none; } ";

//Includes SlidesJS
$scriptfsrc = "js/jquery.slides.min.js";
//Initialize SlidesJS with a jQuery doc ready
$scriptf = "
  $(function() {
    $('#slides').slidesjs({
      width: 940,
      height: 528,
      navigation: false,
      play: {
            active: true,
              // [boolean] Generate the play and stop buttons.
              // You cannot use your own buttons. Sorry.
            effect: 'slide',
              // [string] Can be either 'slide' or 'fade'.
            interval: 5000,
              // [number] Time spent on each slide in milliseconds.
            auto: true,
              // [boolean] Start playing the slideshow on load.
            swap: true,
              // [boolean] show/hide stop and play buttons
            pauseOnHover: false,
              // [boolean] pause a playing slideshow on hover
            restartDelay: 2500
              // [number] restart delay on inactive slideshow
          }
    });
  });
";

require_once('includes/overallheader.inc.php');
require_once('includes/header.inc.php');

?>

<section id="work">

<?php include("includes/work/$project.php"); ?>

</section>

<nav id="minipagenav">
<h3>Check out some of my other projects:</h3>
<?php require_once('includes/portfolio.inc.php'); ?>
</nav>

<?php
require_once('includes/footer.inc.php');
require_once('includes/toe.inc.php');
?>