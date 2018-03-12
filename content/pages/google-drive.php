<section class="work-page-header <?php echo $projectName; ?>">
	<div class="work-page-header-background-image" style="background-image: url(img/project-backgrounds/google-drive.jpg);"></div>
	<div class="work-page-header-background-color" style="background-color: <?php echo $colorMainRGB; ?>"></div>
	<div class="row work-page-header-text-content">
		<div class="small-24 medium-18 columns">
			<p class="category text-white no-margin-bottom" id="content-top-indicator">Visual Design<span>University Work</span></p>
			<h1 class="text-white case-study-in-progress">Google Drive</h1>
		</div>
	</div>
</section>

<div class="page-content" id="content-white-change-indicator">
	<section class="individual-work-overview">
		<div class="row" data-equalizer>
			<div class="small-24 medium-18 large-15 columns" data-equalizer-watch>
				<div class="row">
					<div class="small-24 columns">
						<?php require 'content/elements/project-nav.php'; ?>
					</div>
					<div class="small-24 columns">
						<p class="project-overview">Given a single screenshot of the ‘My Drive’ screen within a user’s <span>Google Drive</span> account, I conducted a critical analysis of the current design using various visual and interactive principles, and offered a proposed, but constrained redesign based on that critique.</p>
					</div>
				</div>
				<div class="row project-overview-details">
					<div class="small-12 medium-10 large-9 columns">
						<p class="capitalized-title-desc no-margin-bottom">Role</p>
						<p class="overview-detail">Analysis, Visual Design</p>
					</div>
					<div class="small-12 medium-4 large-6 columns show-for-medium">
						<p class="capitalized-title-desc no-margin-bottom">Date</p>
						<p class="overview-detail show-for-large">November 2017</p>
						<p class="overview-detail hide-for-large">Nov '17</p>
					</div>
					<div class="small-12 medium-10 large-9 columns">
						<p class="capitalized-title-desc no-margin-bottom">Location</p>
						<p class="overview-detail">West Lafayette, IN, USA 🇺🇸</p>
					</div>
				</div>
				<!--
				<div class="row">
					<div class="small-24 columns">
						<p class="capitalized-title-desc no-margin-bottom">Quick Links</p>
						<p class="overview-detail team-members"><a href="#theBrief" class="first-member samepageanchor">Brief</a><span class="dash">/</span><a href="#analysis" class="samepageanchor">Visual Critique</a><span class="dash">/</span><a href="#solutionSectMain" class="samepageanchor">Proposed Redesign</a></p>
					</div>
				</div>
				-->
			</div>
			<div class="small-24 medium-6 large-7 columns project-highlight-image show-for-medium" data-equalizer-watch>
				<img src="img/projects/google-drive/designs/google-macbook-temp.png" alt="" class="laptop">
			</div>
		</div>
		<!--
		<div class="row hide-for-medium">
			<div class="small-8 columns small-centered">
				<img src="img/projects/lyft/designs/2.0.png" alt="">
			</div>
		</div>
		-->
	</section>

	<section class="banner-below-overview no-grey-banner" id="theBrief">
		<div class="row in-project-subhead">
			<div class="small-24 columns">
				<h2 class="line-behind"><span>The Brief</span></h2>
				<p class="in-project-subhead-para">A constrained redesign.</p>
			</div>
		</div>
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInPortfolioText">
				<h2 class="sub-section">The Brief</h2>
				<p class="portfolio-body nothing-below">While UX designers are sometimes able to redesign or imagine entire products or systems, often the changes that can be made are much smaller in scope. In this exercise, we were individually tasked with using our current knowledge of visual and interactive principles to redesign the visual layout of an existing product website. However, the programming and semantic markup for the page was locked (with slight positional flexibility dependent on sound reasoning), so only changes that alter elements that are already on the page were permitted.</p>
			</div>
		</div>
	</section>

	<section class="banner-below-overview no-grey-banner" id="theBrief">
		<div class="row in-project-subhead">
			<div class="small-24 columns fadeInPortfolioText">
				<h2 class="line-behind"><span>Evaluating the Current Design</span></h2>
				<p class="in-project-subhead-para">Identifying usability, interaction, and visual issues.</p>
			</div>
		</div>
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered">
				<h2 class="sub-section">Critique Using Visual &amp; Interactive Principles</h2>
				<p class="portfolio-body">The first stage of the challenge required a critical analysis to be conducted of the screen depicted in the screenshot provided. I decided to evaluate the design given in accordance with the visual and interactive principles outlined by the work of Alan Cooper and Paul Benyon, identifying each element or aspect of the design which violated these principles, and additional issues observed not addressed specifically within these principles, and created an annotated overview of the design to outline the issues found.</p>
			</div>
		</div>
		<div class="row design-layout-section">
			<div class="small-24 columns">
				<img src="img/projects/google-drive/annotations/1.png" alt="" class="visual-screen-design no-border">
			</div>
		</div>
	</section>
	<section class="portfolio-content-area top-pad-none">
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered">
				<h2 class="sub-section">Identified Problem Explanations</h2>
				<p class="portfolio-body nothing-below">As shown in the visual representation above, the critical analysis of the design identified 12 issues that I felt needed to be addressed in any redesign.</p>

		   		<ul class="accordion ordered-list-container" data-accordion data-allow-all-closed="true">
					<li class="accordion-item" data-accordion-item>
				    	<a href="#" class="accordion-title">Problems Identified</a>
				    	<div class="accordion-content" data-tab-content>
				      		<ol class="regular">
								<li><p>While the ‘Get Backup and Sync for Mac’ option looks visually unappealing, it's position is also unsuitable in terms of it's distance from the element it relates to, the ‘Backups’ menu option.</p></li>
					      		<li><p>The method of displaying the storage usage, whilst informative, does technically require a calculative effort on the part of the user to work out the amount remaining.</p></li>
					          	<li><p>The arrows to the left of the menu items ‘My Drive’ and ‘Computers’ go some way to violating the rule of familiarity to the users, who are more likely to be used to seeing collapsable menu items with an icon to the right of the text label.</p></li>
					          	<li><p>To less familiar users, the visibility and navigation possibilities of the menu options to the left of the screen may be overlooked initially due to the lack of visual separation between these options, and the content of the current folder displayed in the middle of the screen.</p></li>
					      		<li><p>The blue ‘NEW’ button displayed in the left hand screen creates confusion to it’s function due to it's position in relation to the elements it targets, and also the vagueness of language.</p></li>
					          	<li><p>The arrow next to the user’s current location, ‘My Drive’, lacks sufficient semiotic value in conveying it’s true function.</p></li>
					          	<li><p>The direction of the arrow to convey the order in which the folders and files are currently displayed appears to go against logic and countless systems that users will be used to. Additionally, there is no clear indication of which column the items are currently being sorted by.</p></li>
					      		<li><p>There is a lack of differentiation between what is essentially two separate navigation bars, but displayed as one, causing large issues with visual and information hierarchy, and separation of action functionality.</p></li>
					          	<li><p>The current notifications icon (the bell next to the user’s profile image) violates the consistency present in the majority of the other icons displayed on the screen.</p></li>
					          	<li><p>The location of the settings call to action could cause confusion in the mind of the user as to it's actual functionality.</p></li>
					      		<li><p>There is no conveyance of function of the information icon through visual indication, through position or appearance. This element needs attention at two points: a) it’s position must better convey it’s function in relation to the currently selected file, folder, or location, and b) the system needs to better draw attention of the user to the important event of the information/details/activity sidebar being opened or closed with it’s click.</p></li>
					          	<li><p>The current option for the user to alter the view type of the files and folders shown can cause confusion to it’s similarity in appearance to the Drive option directly above it, and also it’s spacial relativity to that same option.</p></li>
					   		</ol>
				    	</div>
					</li>
				</ul>
		   	</div>
		</div>
	</section>

	<section class="banner-below-overview no-grey-banner" id="theBrief">
		<div class="row in-project-subhead">
			<div class="small-24 columns fadeInPortfolioText">
				<h2 class="line-behind"><span>Proposed Redesign</span></h2>
				<p class="in-project-subhead-para">Increased clarity of system affordances and element relationships.</p>
			</div>
		</div>
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered">
				<h2 class="sub-section">Proposed Redesign</h2>
				<p class="portfolio-body">Using the guidance given within the various visual and interactive principles referenced in the initial critique, I went about proposing a solution to the 12 problems identified by completing recreating the interface using Sketch, incorporating the changes I felt would help to solve those problems.</p>
			</div>
		</div>
		<div class="row design-layout-section">
			<div class="small-24 columns">
				<img src="img/projects/google-drive/designs/1.png" alt="" class="visual-screen-design">
			</div>
		</div>
	</section>

	<!--
	<section class="portfolio-content-area conclusions-area">
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInPortfolioText">
				<h2 class="sub-section">Conclusions &amp; Future Work</h2>
				<p class="portfolio-body nothing-below">The proposed changes allow users to provide accurate ratings through more relatable and recognizable emotion-based options, and directly influences their physical rideshare experience.</p>
		   	</div>
		</div>
	</section>
-->

	<section class="portfolio-navigator-bottom-page">
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInPortfolioText">
				<?php require 'content/elements/project-nav.php'; ?>
			</div>
		</div>
	</section>
</div>