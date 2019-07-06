<?php 

// SEO Page Details

$metaTitle = 'Clinical Assistant - Chris Watkins, User Experience Designer';
$metaDescription = "In a two week project, my team and I researched, conceptualized, and prototyped an alternative solution to the traditional five-star system currently used by passengers and drivers of the rideshare application Lyft, to rate one another after each journey.";

// Include specific header and footer style variable in here
$headerType = 'no-bg-header';
$gradientHeaderDarker = '#184776';
$gradientHeaderLighter = '#3399FF';
$logoColor = "white-logo";
$navColor = 'white-nav';
$activeNav = '1';
$responsiveNavRef = 'white-res-nav mmodal-res-nav';
$footerType = 'white-footer portfolio-project-footer';

// Project Page Details
$projectName = 'mmodal';
$colorMainRGB = 'rgba(51,153,255,1)';
$prevProject = 'strawberry';
$projectNumber = 1;

// Bottom details for next project
$nextProject = 'lyft';
$gradientDarker = '#111130';
$gradientLighter = '#353584';
$nextProjectTitle = 'Lyft Rating System';
$nextProjectType = 'Smartphone Application';
$nextProjectReason = 'University Work';
$nextProjectDescription = "Investigating and redesigning the existing 5-star rating system used by Lyft's riders and passengers.";

?>
<!DOCTYPE html>
<html>
<?php include 'content/elements/head.php'; ?>
<body class="white-bg">
	
<div id="content">

<?php require 'content/elements/header.php'; ?>

<?php require 'content/pages/mmodal.php'; ?>

<?php require 'content/elements/footer.php'; ?>

</div>

<?php include 'content/elements/scripts.php'; ?>

</body>
</html>