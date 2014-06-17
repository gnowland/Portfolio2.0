<?php

//ini_set('display_errors', 'On');
//error_reporting(E_ALL | E_STRICT);

$project = $_GET['project'];

ob_start();
include("includes/work/$project.inc.php"); //Includes the variables but does not print the file
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

  <div id="hero" style="background-image: url(img/work/<?php echo $project; ?>/hero.jpg)">
    <div class="overlay" style="background: <?php echo $overlaycolor; ?>;"><?php if(isset($photocred)) { echo $photocred; } ?></div>
    <div class="contain middle">
      <h1><?php echo $name; ?></h1>
      <div class="tools"><?php echo $scope; ?><br>
        <span class="timespan"><?php echo $timespan; ?></span><br>
        <?php echo $tools; ?></div>
        <p><?php echo $description; ?></p>
    </div>
  </div>

  <article>
    <div class="contain">
      <h2>Project Brief</h2>
        <p><?php echo $breif; ?></p>
      <h2>Project Strategy</h2>
        <p><?php echo $strategy; ?></p>
      <div id="imac">
        <?php if (strcmp($screentype,"imac") == 0) { echo <<<EOL
        <div class="overlay"><img src="img/work/imac.png" alt="mac screen"></div>
        <div class="screen"><img src="img/work/$project/window.jpg" alt="$screenalt"></div>
EOL;
        }
        else { echo <<<EOL
          <img src="img/work/$project/window.jpg" alt="$screenalt">
EOL;
        }
        ?>
      </div>
      <h2>Project Result</h2>
      <p><?php echo $result; ?></p>
       <p></p>
    </div>
    <div id="slug">
    <div class="slideContain">
    <div id="slides">
    <img src="img/work/<?php echo $project; ?>/gallery/1.jpg" alt="<?php echo $slide1; ?>">
    <img src="img/work/<?php echo $project; ?>/gallery/2.jpg" alt="<?php echo $slide2; ?>">
    <img src="img/work/<?php echo $project; ?>/gallery/3.jpg" alt="<?php echo $slide3; ?>">
      <a href="#" class="slidesjs-previous slidesjs-navigation">&lt;</a>
      <a href="#" class="slidesjs-next slidesjs-navigation">&gt;</a>
    </div>
    </div>
    </div>
  </article>

</section>

<nav id="minipagenav">
<h3>Check out some of my other projects:</h3>
<?php require_once('includes/portfolio.inc.php'); ?>
</nav>

<?php
require_once('includes/footer.inc.php');
require_once('includes/toe.inc.php');
?>