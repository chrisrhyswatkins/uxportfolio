<?php 

// SEO Page Details

$metaTitle = 'Embodied Shopping - Chris Watkins, Designer & Developer';
$metaDescription = '';

// Include specific header and footer style variable in here
$headerType = 'no-bg-header';
$logoColor = "white-logo";
$navColor = 'white-nav';
$activeNav = '1';
$responsiveNavRef = 'white-res-nav';
$footerType = 'black-footer';

// Project Page Details
$projectName = 'embodiedShopping';
$colorMainRGB = 'rgba(19, 135, 80, 1)';
$prevProject = 'google-drive';
$nextProject = 'precision-plastics';

?>
<!DOCTYPE html>
<html>
<?php include 'content/elements/head.php'; ?>
<body>

<div id="content">

<?php require 'content/elements/header.php'; ?>

<?php require 'content/pages/embodied-shopping.php'; ?>

<?php require 'content/elements/footer.php'; ?>

</div>

<?php include 'content/elements/scripts.php'; ?>

</body>
</html>