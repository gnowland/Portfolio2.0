  <!--[if IE 8]>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
  <![endif]-->
  <!--[if gt IE 8]><!-->
  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-2.1.0.min.js"><\/script>')</script>
  <!--<![endif]-->
  <script src="js/site-min.js"></script>
  <?php if(isset($scriptfsrc)) { echo "<script src=\"$scriptfsrc\" ></script>"; } ?>
  <?php if(isset($scriptf)) { echo "<script>$scriptf</script>"; } ?>
  <script><!-- Google Analytics-->
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-43887306-1', 'giffordnowland.com');
    ga('send', 'pageview');

  </script>
  </body>
</html>