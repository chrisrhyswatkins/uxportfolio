<?php 

// SEO Page Details

$metaTitle = 'Precision Plastics - Chris Watkins, UX Researcher & Designer';
$metaDescription = "After 6 years of working as a director at Precision Plastics, I decided to begin the process of designing and building a system to not only reduce the man hours required to complete the day-to-day responsibilities required within the company, but also to increase efficiency and reduce risk of error in areas such as order distribution and administration.";

// Include specific header and footer style variable in here
$headerType = 'no-bg-header';
$logoColor = "white-logo";
$navColor = 'white-nav';
$activeNav = '1';
$responsiveNavRef = 'white-res-nav prec-plas-res-nav';
$footerType = 'white-footer portfolio-project-footer';

// Project Page Details
$projectName = 'precisionPlastics';
$colorMainRGB = 'rgba(37,50,68, 1)';
$prevProject = 'google-drive';
$nextProject = 'strawberry';
$projectNumber = 4;

?>
<!DOCTYPE html>
<html>
<?php include 'content/elements/head.php'; ?>
<body>

<div id="content">

<?php require 'content/elements/header.php'; ?>

<?php require 'content/pages/precision-plastics.php'; ?>

<?php require 'content/elements/footer.php'; ?>

</div>

<?php include 'content/elements/scripts.php'; ?>

</body>
</html>