<?php 

// SEO Page Details

$metaTitle = 'Google Drive - Chris Watkins, UX Researcher & Designer';
$metaDescription = "Given a single screenshot of the ‘My Drive’ screen within a user’s Google Drive account, I conducted a critical analysis of the current design using various visual and interactive principles, and offered a proposed, but constrained redesign based on that critique.";

// Include specific header and footer style variable in here
$headerType = 'no-bg-header';
$logoColor = "white-logo";
$navColor = 'white-nav';
$activeNav = '1';
$responsiveNavRef = 'white-res-nav google-res-nav';
$footerType = 'white-footer portfolio-project-footer';

// Project Page Details
$projectName = 'googleDrive';
$colorMainRGB = 'rgba(52,168,83,1)';
$prevProject = 'lyft';
$nextProject = 'precision-plastics';

?>
<!DOCTYPE html>
<html>
<?php include 'content/elements/head.php'; ?>
<body>

<div id="content">

<?php require 'content/elements/header.php'; ?>

<?php require 'content/pages/google-drive.php'; ?>

<?php require 'content/elements/footer.php'; ?>

</div>

<?php include 'content/elements/scripts.php'; ?>

</body>
</html>