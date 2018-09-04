<?php 

// SEO Page Details

$metaTitle = 'Strawberry - Chris Watkins, UX Researcher & Designer';
$metaDescription = "With a single day free in my schedule, I decided to conduct an exploratory and experimental project, with the intention of improving my visual design skills, in an 8 hour activity based on some extremely hypothetical user research. The challenge I set for myself was to create an enticing product landing page out of a simple, everyday object, such as a Strawberry.";

// Include specific header and footer style variable in here
$headerType = 'no-bg-header';
$logoColor = "white-logo";
$navColor = 'white-nav';
$activeNav = '1';
$responsiveNavRef = 'white-res-nav strawberry-res-nav';
$footerType = 'white-footer portfolio-project-footer';

// Project Page Details
$projectName = 'strawberry';
$colorMainRGB = 'rgba(248, 12, 58, 1)';
$prevProject = 'precision-plastics';
$nextProject = 'seven-hair-body';

?>
<!DOCTYPE html>
<html>
<?php include 'content/elements/head.php'; ?>
<body>

<div id="content">

<?php require 'content/elements/header.php'; ?>

<?php require 'content/pages/strawberry.php'; ?>

<?php require 'content/elements/footer.php'; ?>

</div>

<?php include 'content/elements/scripts.php'; ?>

</body>
</html>