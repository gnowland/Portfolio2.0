<?php

$title = '404 - Page Not Found'; // Page title
$style = '
    #about:before {
      border-width: 20px;
      border-color: rgb(50,50,50);
    }
    #about:after {
      border-width: 20px;
      border-color: rgb(50,50,50);
    }';
$description = '404 - Page Not Found';
require('includes/overallheader.inc.php');

?>

  <body class="404">
    <?php require_once('includes/header.inc.php'); ?>

    <section id="about">
      <div class="middle">
        <div class="tagline"><span>404:</span><span>Page Not Found</span></div>
        <p>It appears the page you are looking for does not exist at this location.</p>
      </div>
    </section>

    <!-- No footer for you
    <?php require_once('includes/footer.inc.php'); ?>
    -->

    <?php require_once('includes/toe.inc.php'); ?>
  </body>
</html>
