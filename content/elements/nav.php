<nav class="show-for-medium">
	<ul class="nav-list <?php echo $navColor; ?>">
		<li
			<?php if($activeNav == '1') {
				echo " class='current-menu-item'";
			}?>
		>
			<a 
				<?php if(isset($homepageIndicator) && ($homepageIndicator!==null)) {
					echo " href='#work-anchor' class='samepageanchor-menu'";
				} else {
					echo " href='/#work-anchor'";
				}?>
			>work</a>
		</li>
		<li<?php if($activeNav == '2') {echo " class='current-menu-item'";}?>><a href="about">about me</a></li>
		<li<?php if($activeNav == '3') {echo " class='current-menu-item'";}?>><a href="mailto:chris@crwatkins.com?Subject=Hey,%20Chris!" class="email-social-link">contact</a></li>
		<!--<li class="resume"><a title="Chris Watkins - Resume, Spring 2018" href="https://drive.google.com/file/d/1ZrraajkHZyLWjNm1HHFG0gvdtMrQYr9o/view?usp=sharing">résumé</a></li>-->
		<li><a href="https://www.instagram.com/cr_watkins/" class="email-social-link"><i class="fab fa-instagram"></i></a></li>
		<li class="social-link"><a href="https://www.linkedin.com/in/chrisrhyswatkins/" class="email-social-link"><i class="fab fa-linkedin-in"></i></a></li>
	</ul>
</nav>

<div class="responsive-menu hide-for-medium">
	<span class="responsive-menu-circle"></span>
    <a href="#" class="responsive-menu-link">
	<span class="responsive-menu-icon">
		<span class="responsive-menu-line responsive-menu-line-1"></span>
		<span class="responsive-menu-line responsive-menu-line-2"></span>
		<span class="responsive-menu-line responsive-menu-line-3"></span>
	</span>
	</a>
</div>

<div class="responsive-menu-overlay" id="fixed-overlay">
	<ul class="responsive-nav-list">
		<li
			<?php if($activeNav == '1') {
				echo " class='current-menu-item'";
			}?>
		>
			<a 
				<?php if(isset($homepageIndicator) && ($homepageIndicator!==null)) {
					echo " href='#work-anchor' class='samepageanchor-menu'";
				} else {
					echo " href='/#work-anchor'";
				}?>
			>work</a>
		</li>
		<li<?php if($activeNav == '2') {echo " class='current-menu-item'";}?>><a href="about">about me</a></li>
		<li<?php if($activeNav == '3') {echo " class='current-menu-item'";}?>><a href="mailto:chris@crwatkins.com?Subject=Hey,%20Chris!" class="email-social-link">contact</a></li>
		<!--<li class="resume"><a title="Chris Watkins - Resume, Spring 2018" href="https://drive.google.com/file/d/1ZrraajkHZyLWjNm1HHFG0gvdtMrQYr9o/view?usp=sharing">résumé</a></li>-->
		<hr>
		<li class="social"><a href="https://www.instagram.com/cr_watkins/" class="email-social-link"><i class="fab fa-instagram"></i> <span>instagram</span></a></li>
		<li class="social"><a href="https://www.linkedin.com/in/chrisrhyswatkins/" class="email-social-link"><i class="fab fa-linkedin-in"></i> <span>linkedin</span></a></li>
	</ul>
</div>