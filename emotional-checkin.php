<?php 

// SEO Page Details

$metaTitle = 'Emotional Check-In - Chris Watkins, Designer & Developer';
$metaDescription = "In a two week project, my team and I researched, conceptualized, and prototyped an alternative solution to the traditional five-star system currently used by passengers and drivers of the rideshare application Lyft, to rate one another after each journey.";

// Include specific header and footer style variable in here
$headerType = 'no-bg-header';
$logoColor = "white-logo";
$navColor = 'white-nav';
$activeNav = '1';
$responsiveNavRef = 'white-res-nav mental-health-res-nav';
$footerType = 'black-footer';

// Project Page Details
$projectName = 'mental-health';
$colorMainRGB = 'rgba(59,89,152, 1)';
$prevProject = 'seven-hair-body';
$nextProject = 'google-drive';

?>
<!DOCTYPE html>
<html>
<?php include 'content/elements/head.php'; ?>
<body class="white-bg">

<div id="content">

<?php require 'content/elements/header.php'; ?>

<?php require 'content/pages/emotional-checkin.php'; ?>

<?php require 'content/elements/footer.php'; ?>

</div>

<?php include 'content/elements/scripts.php'; ?>

</body>
</html>