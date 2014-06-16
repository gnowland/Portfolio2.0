<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <!--
             .::.   ::.   THIS WEBSITE MADE WITH LOVE, BAKED FROM SCRATCH
           .:: ::.  ::.           USING ONLY THE FINEST INGREDIENTS
         .::    ::. ::.   ALL RIGHTS RESERVED (c) A.D. MMXIV Gifford Nowland
       .::   ::. ::.::.           (except where otherwise credited)
     .::      ::. ::::.   Please use the contact form on giffordnowland.com
    :::::::::::::. :::.  for information and freelance/employment inquiries.
    -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="
        <?php if(isset($description)) { echo $description; }
        else { echo 'The professional Web Development &amp; Design Portfolio of Gifford Nowland: engaging, attractive, functional, &amp; responsive modern web experiences.'; } ?>" />
    <title><?php if(isset($title)) { echo $title; }
        else { echo 'Gifford Nowland'; } ?></title>
    <!-- AUTHOR META -->
    <link rel=”author” href=”https://plus.google.com/+GiffordNowland“/>
    <!-- FAVICONS -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="img/icon/favicon-152.png">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- <link rel="stylesheet" href="css/print.css" /> -->
    <!-- JS-->
    <script src="js/vendor/respond.min.js"></script>
    <!--[if lt IE 9 &!(IEMobile)]>
        <script src="js/vendor/html5shiv.js"></script>
    <![endif]-->
    <?php if(isset($style)) { echo "<style> $style </style>"; } ?>
    <?php if(isset($scripthsrc)) { echo "<script src=\"$scripthsrc\" ></script>"; } ?>
    <?php if(isset($scripth)) { echo "<script>$scripth</script>"; } ?>
  </head>
  <body class="<?php echo (basename($_SERVER['PHP_SELF'],'.php')); ?>">