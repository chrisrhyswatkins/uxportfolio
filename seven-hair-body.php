<?php 

// SEO Page Details

$metaTitle = 'Seven Hair & Body - Chris Watkins, UX Researcher & Designer';
$metaDescription = "Seven Hair & Body are a contemporary gents’ barbershop, offering a range of services and products across hair and grooming. The salon required a custom WordPress powered presence to not only compliment and enhance their recent rebranding, but also to address various requirements and frustrations held by stakeholders including current and potential clientele, as well as staff.";

// Include specific header and footer style variable in here
$headerType = 'no-bg-header';
$logoColor = "white-logo";
$navColor = 'white-nav';
$activeNav = '1';
$responsiveNavRef = 'white-res-nav seven-res-nav';
$footerType = 'black-footer portfolio-project-footer';

// Project Page Details
$projectName = 'sevenHairBody';
$colorMainRGB = 'rgba(30,30,30,1)';
$prevProject = 'strawberry';
$nextProject = 'lyft';

?>
<!DOCTYPE html>
<html>
<?php include 'content/elements/head.php'; ?>
<body>

<div id="content">

<?php require 'content/elements/header.php'; ?>

<?php require 'content/pages/seven-hair-body.php'; ?>

<?php require 'content/elements/footer.php'; ?>

</div>

<?php include 'content/elements/scripts.php'; ?>

</body>
</html>