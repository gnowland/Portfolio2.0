<?php

$project = $_GET['project'];

ob_start();
include("work/$project.php"); //Includes the variables but does not print the file
ob_end_clean();

$title = "Gifford Nowland &raquo; Portfolio &raquo; $name";

require_once('includes/overallheader.inc.php');
require_once('includes/header.inc.php');

?>

<section id="work">

<?php include("work/$project.php"); ?>

</section>

<?php
require_once('work/includes/minipagenav.inc.php');

require_once('includes/footer.inc.php');
require_once('includes/toe.inc.php');
?>