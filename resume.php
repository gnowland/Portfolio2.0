<?php

$title = 'Gifford Nowland - Resume'; // Page title
$scriptsrc = 'js/vendor/pdfobject.min.js';
$style = 'p { text-align: center; } a { text-transform: uppercase; }';
$script = "function embedPDF(){

    var myPDF = new PDFObject({

      url: 'GiffordRNowland-Resume.pdf'

    }).embed();

  }

  window.onload = embedPDF; ";

require_once('includes/overallheader.inc.php');

?>

<body>
  <p>Inline PDF rendering not <span>supported in this browser.</span><br><a href="GiffordRNowland-Resume.pdf">Click here to <span>download the PDF</span></a></p>
</body>
</html>