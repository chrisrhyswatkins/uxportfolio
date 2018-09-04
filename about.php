<?php 

// SEO Page Details

$metaTitle = 'About Me - Chris Watkins, UX Researcher & Designer';
$metaDescription = "Originally from the United Kingdom, I recently made the move across the pond to the United States of America, to pursue a Masters degree in Human-Centered Design & Development at Purdue University.";

// Include specific header and footer style variable in here
$headerType = 'no-bg-header';
$logoColor = "white-logo";
$navColor = 'white-nav';
$activeNav = '2';
$responsiveNavRef = 'dark-res-nav';
$footerType = 'white-footer dark-grey-footer';

?>
<!DOCTYPE html>
<html>
<?php include 'content/elements/head.php'; ?>
<body>

<img src="img/chris/chris-dark-bg-grey-1800.jpg" alt="" class="about-me-chris" id="chris-bg-image">

<div id="content">

<?php require 'content/elements/header.php'; ?>

<?php require 'content/pages/about.php'; ?>

<?php require 'content/elements/footer.php'; ?>

<?php include 'content/elements/scripts.php'; ?>

<script>
/*
Pace.on('done', function() {
	$('#chris-bg-image').attr("src", "img/chris/chris-dark-bg-grey-1800.jpg");
});
*/
$(document).ready(function () {
	$('body').addClass('about-page');
});
</script>

</div>

</body>
</html>