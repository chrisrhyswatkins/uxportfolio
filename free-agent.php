<?php 

// SEO Page Details

$metaTitle = 'Free Agent - Chris Watkins, Designer & Developer';
$metaDescription = '';

// Include specific header and footer style variable in here
$headerType = 'no-bg-header';
$logoColor = "white-logo";
$navColor = 'white-nav';
$activeNav = '1';
$responsiveNavRef = 'white-res-nav freeagent-res-nav';
$footerType = 'white-footer portfolio-project-footer';

// Project Page Details
$projectName = 'freeAgent';
$colorMainRGB = 'rgba(72,94,122,1)';
$prevProject = 'seven-hair-body';
$nextProject = 'lyft';

?>
<!DOCTYPE html>
<html>
<?php include 'content/elements/head.php'; ?>
<body>

<div id="content">

<?php require 'content/elements/header.php'; ?>

<?php require 'content/pages/free-agent.php'; ?>

<?php require 'content/elements/footer.php'; ?>

</div>

<?php include 'content/elements/scripts.php'; ?>

</body>
</html>