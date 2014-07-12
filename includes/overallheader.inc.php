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
    <meta name="description" content="<?php if(isset($description)) { echo $description; }
        else { echo 'The professional Web Development &amp; Design Portfolio of Gifford Nowland: engaging, enjoyable, functional, &amp; responsive modern web experiences.'; } ?>" />
    <title><?php if(isset($title)) { echo $title; }
        else { echo 'Gifford Nowland Digital Design + Development'; } ?></title>
    <!-- AUTHOR META -->
    <link rel=”author” href=”https://plus.google.com/+GiffordNowland?rel=author“ />
    <!-- OPEN GRAPH -->
    <meta property="og:url" content="<?php $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        echo $url; ?>" />
    <meta property="og:title" content="<?php if(isset($title)) { echo $title; }
        else { echo 'Gifford Nowland Digital Design + Development'; } ?>" />
    <meta property="og:site_name" content="Gifford Nowland" />
    <meta property="og:description" content="<?php if(isset($description)) { echo $description; }
        else { echo 'The professional Web Development &amp; Design Portfolio of Gifford Nowland: engaging, enjoyable, functional, &amp; responsive modern web experiences.'; } ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="<?php $filename = "http://www.giffordnowland.com/img/ogimage/$ogimg.jpg";
        if (file_exists($filename)) { echo $filename; }
        else { echo 'http://www.giffordnowland.com/img/ogimage/index.jpg'; } ?>" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="1300" />
    <meta property="og:image:height" content="683" />
    <!-- FAVICONS -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="img/icon/favicon-152.png">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- <link rel="stylesheet" href="css/print.css" /> -->
    <?php if(isset($style)) { echo "<style> $style </style>"; } ?>
    <?php if(isset($scripthsrc)) { echo "<script src=\"$scripthsrc\" ></script>"; } ?>
    <?php if(isset($scripth)) { echo "<script>$scripth</script>"; } ?>

    <!--[if lt IE 9 &!(IEMobile)]>
        <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>

        <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="<?php echo (basename($_SERVER['PHP_SELF'],'.php')); ?>">