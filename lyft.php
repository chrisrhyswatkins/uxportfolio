<?php 

// SEO Page Details

$metaTitle = 'Lyft Rating System - Chris Watkins, UX Researcher & Designer';
$metaDescription = "In a two week project, my team and I researched, conceptualized, and prototyped an alternative solution to the traditional five-star system currently used by passengers and drivers of the rideshare application Lyft, to rate one another after each journey.";

// Include specific header and footer style variable in here
$headerType = 'no-bg-header';
$logoColor = "white-logo";
$navColor = 'white-nav';
$activeNav = '1';
$responsiveNavRef = 'white-res-nav lyft-res-nav';
$footerType = 'white-footer portfolio-project-footer';

// Project Page Details
$projectName = 'lyft';
$colorMainRGB = 'rgba(53, 53, 132, 1)';
$prevProject = 'mmodal';
$nextProject = 'google-drive';
$projectNumber = 2;

?>
<!DOCTYPE html>
<html>
<?php include 'content/elements/head.php'; ?>
<body class="white-bg">

<div id="content">

<?php require 'content/elements/header.php'; ?>

<?php require 'content/pages/lyft.php'; ?>

<?php require 'content/elements/footer.php'; ?>

</div>

<?php include 'content/elements/scripts.php'; ?>

<script>
$(document).ready(function() {

	// $('a#video-link').attr("href", "img/projects/lyft/pitch-video.mp4");

});
</script>

</body>
</html>