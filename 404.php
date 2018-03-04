<?php

// SEO Page Details

$metaTitle = 'Page Not Found - Chris Watkins, UX Researcher & Designer';
$metaDescription = '';

// Include specific header and footer style variable in here
$headerType = 'no-bg-header';
$logoColor = "white-logo";
$navColor = 'white-nav';
$activeNav = '0';
$responsiveNavRef = 'dark-res-nav';
$footerType = 'white-footer';

?>
<!DOCTYPE html>
<html>
<?php include 'content/elements/head.php'; ?>

<body class="not-found">

<div id="content">

<?php require 'content/elements/header.php'; ?>

<?php require 'content/pages/404.php'; ?>

<?php require 'content/elements/footer.php'; ?>

<?php include 'content/elements/scripts.php'; ?>

</body>
</html>