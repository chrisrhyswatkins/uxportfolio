<?php

// SEO Page Details

$metaTitle = 'Resume - Chris Watkins, User Experience Designer';
$metaDescription = "View or download a copy of my resume.";

// Include specific header and footer style variable in here
$headerType = 'white-header';
$logoColor = "black-logo";
$navColor = 'black-nav';
$activeNav = '3';
$responsiveNavRef = 'whitebg-res-nav';
$footerType = 'black-footer';


?>
<!DOCTYPE html>
<html>
<?php include 'content/elements/head.php'; ?>

<body>

<div id="content">

<?php require 'content/elements/header.php'; ?>

<?php require 'content/pages/resume.php'; ?>

<?php require 'content/elements/footer.php'; ?>

</div>

<?php include 'content/elements/scripts.php'; ?>

</body>
</html>