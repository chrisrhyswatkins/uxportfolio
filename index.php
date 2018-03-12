<?php
session_start();

/*
//Expire the session if user is inactive for 30
//minutes or more.
$expireAfter = 45;
 
//Check to see if our "last action" session
//variable has been set.
if(isset($_SESSION['last_action'])){
    
    //Figure out how many seconds have passed
    //since the user was last active.
    $secondsInactive = time() - $_SESSION['last_action'];
    
    //Convert our minutes into seconds.
    $expireAfterSeconds = $expireAfter * 60;
    
    //Check to see if they have been inactive for too long.
    if($secondsInactive >= $expireAfterSeconds){
        //User has been inactive for too long.
        //Kill their session.
        session_unset();
        session_destroy();
    }
    
}
 
//Assign the current timestamp as the user's
//latest activity
$_SESSION['last_action'] = time();
*/

// Add a session view with every visit to this page
// If it's the first visit of the session, call greeting functionality later
if (!isset($_SESSION['views'])) { 
    $_SESSION['views'] = 0;
}

$_SESSION['views'] = $_SESSION['views']+1;

$views = ($_SESSION['views']);

// SEO Page Details

$metaTitle = 'Chris Watkins, UX Researcher & Designer';
$metaDescription = "I'm Chris, a researcher and designer of context-driven user experiences.";

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

<div class="chrome-cover"></div>

<?php
if ($views == 1) { 
?>

<?php
} else if ($views > 1) {
?>

<div id="content">

<?php } ?>

<?php require 'content/elements/header.php'; ?>

<?php require 'content/pages/home.php'; ?>

<?php require 'content/elements/footer.php'; ?>

<?php include 'content/elements/scripts.php'; ?>

<script>
$(document).ready(function() {

	$chromecover = $('.chrome-cover');

	setTimeout(function() {
	    $chromecover.hide();
	}, 25);

});

</script>

<?php
if ($views == 1) { 
?>

<script>
$(document).ready(function() {
	// $("header").addClass("whiteblack");


	$navbar = $('header');
	$navbar.hide();

	$greeting = $('p#home-greeting');
	$greeting.hide();

	$imchris = $('span#im-chris');
	$imchris.hide();

	$medescription = $('span#me-description');
	$medescription.hide();

	$maincontent = $('.page-content');
	$maincontent.hide();

	$footer = $('footer');
	$footer.hide();

	setTimeout(function() {
	    $chromecover.hide();
	}, 25);

	setTimeout(function() {
	    $greeting.fadeIn(1000);
	}, 1000);

	setTimeout(function() {
	    $imchris.fadeIn(1250);
	}, 2750);

	setTimeout(function() {
	    $medescription.fadeIn(1250);
	}, 4750);

	setTimeout(function() {
		$('.selected-work-item').css("height", "auto");
	    $maincontent.show();
	}, 6750);

	setTimeout(function() {
		$navbar.fadeIn(750);
	    $footer.fadeIn(150);
	}, 7000);

	$('.selected-work-item').css("height", "auto");
});
</script>

<?php
} else if ($views > 1) { }
?>

</body>
</html>