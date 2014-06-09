<!DOCTYPE html>
<html lang="en" class="no-js">
  <?php require_once('includes/head1.inc.php'); ?>
    <title>404 - Page Not Found</title>
  <?php require_once('includes/head2.inc.php'); ?>
    <style>
    #about:before {
      border-width: 20px;
      border-color: rgb(50,50,50);
    }
    #about:after {
      border-width: 20px;
      border-color: rgb(50,50,50);
    }
    </style>
  </head>

  <body class="404">
    <?php require_once('includes/header.inc.php'); ?>

    <section id="about">
      <div class="middle">
        <div class="tagline"><span>404:</span><span>Page Not Found</span></div>
        <p>It appears the page you are looking for does not exist at this location.</p>
      </div>
    </section>

    <?php require_once('includes/footer.inc.php'); ?>

    <?php require_once('includes/toe.inc.php'); ?>
  </body>
</html>
