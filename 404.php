<?php

// SEO Page Details

$metaTitle = 'Page Not Found - Chris Watkins, UX Researcher & Designer';
$metaDescription = '';

// Include specific header and footer style variable in here
$headerType = 'white-header';
$logoColor = "black-logo";
$navColor = 'black-nav';
$activeNav = '1';
$responsiveNavRef = 'whitebg-res-nav';
$footerType = 'black-footer';

?>
<!DOCTYPE html>
<html>
<?php include 'content/elements/head.php'; ?>

<body>

<div id="content">

<?php require 'content/elements/header.php'; ?>

<?php require 'content/pages/404.php'; ?>

<?php require 'content/elements/footer.php'; ?>

<?php include 'content/elements/scripts.php'; ?>

</body>
</html>