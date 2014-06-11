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
<script>
 close = document.getElementById("close");
 close.addEventListener('click', function() {
   note = document.getElementById("note");
   note.style.display = 'none';
 }, false);
</script>