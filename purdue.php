<?php 

// SEO Page Details

$metaTitle = 'Purdue Everywhere - Chris Watkins, Designer & Developer';
$metaDescription = '';

// Include specific header and footer style variable in here
$headerType = 'no-bg-header';
$logoColor = "white-logo";
$navColor = 'white-nav';
$activeNav = '1';
$responsiveNavRef = 'white-res-nav lyft-res-nav';
$footerType = 'black-footer';

// Project Page Details
$projectName = 'purdue';
$colorMainRGB = 'rgba(30,30,30,1)';
$prevProject = 'free-agent';
$nextProject = 'google-drive';

?>
<!DOCTYPE html>
<html>
<?php include 'content/elements/head.php'; ?>
<body>

<div id="content">

<?php require 'content/elements/header.php'; ?>

<?php require 'content/pages/purdue.php'; ?>

<?php require 'content/elements/footer.php'; ?>

</div>

<?php include 'content/elements/scripts.php'; ?>

</body>
</html>