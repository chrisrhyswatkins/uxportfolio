<section class="work-page-header <?php echo $projectName; ?>">
	<div class="work-page-header-background-image" style="background-image: url(img/project-backgrounds/strawberry.jpg); background-position: center 60%;"></div>
	<div class="work-page-header-background-color" <?php if(isset($gradientHeaderLighter)) { ?> style="background: linear-gradient(270deg, <?php echo $gradientHeaderLighter ?> 0%, <?php echo $gradientHeaderDarker ?> 100%);" <?php } ?>"></div>
	<div class="row work-page-header-text-content">
		<div class="small-24 medium-18 columns">
			<p class="category text-white no-margin-bottom" id="content-top-indicator">Visual Design<span>Personal Project</span></p>
			<h1 class="text-white">Strawberry</h1>
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
						<p class="project-overview">I decided to conduct an exploratory and experimental project intending to improve my visual design skills, based on hypothetical user research. I challenged myself to create an enticing product landing page out of a simple, everyday object, such as a <span>Strawberry.</span></p>
					</div>
				</div>
				<div class="row project-overview-details">
					<div class="small-12 medium-10 large-9 columns">
						<p class="capitalized-title-desc no-margin-bottom">Role</p>
						<p class="overview-detail">Visual Design</p>
					</div>
					<div class="small-12 medium-4 large-6 columns show-for-medium">
						<p class="capitalized-title-desc no-margin-bottom">Date</p>
						<p class="overview-detail show-for-large">May 2016</p>
						<p class="overview-detail hide-for-large">May '16</p>
					</div>
					<div class="small-12 medium-10 large-9 columns">
						<p class="capitalized-title-desc no-margin-bottom">Duration</p>
						<p class="overview-detail">1 day</p>
					</div>
				</div>
			</div>
			<div class="small-24 medium-6 large-7 columns project-highlight-image show-for-medium" data-equalizer-watch>
				<img src="img/projects/strawberry/designs/macbook-strawberry.png" alt="" class="laptop" id="macbook">
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

	<section class="banner-below-overview">
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInPortfolioText">
				<p class="capitalized-title-desc no-margin-bottom">Case Study in Progress</p>
				<h2 class="sub-section case-study-in-progress-warning">This case study currently only details the project outcome, but the full story will be available soon.</h2>
				<p class="portfolio-body nothing-below">I like to tell the story of each project from beginning to end, and this one is no different. I'll get the full details of this case study typed up and visualized as soon as possible, but feel free to <a href="mailto:chris@crwatkins.com?Subject=Hey,%20Chris!">get in touch</a> in for more details. In the meantime, enjoy the design solution.</p>
			</div>
		</div>
	</section>

	<section class="portfolio-content-area less-top-below-banner">
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered">
				<h2 class="sub-section">Landing Page</h2>
				<p class="portfolio-body">Taking the findings of the basic research carried out in to account, I was able to create an interface that I felt successfully took the qualities of a hypoethical, but also very familiar product, and marketed them to the target audiences identified with the eventual lead to a call to action, in this case a purchase opportunity.</p>
			</div>
		</div>
		<div class="row design-layout-section">
			<div class="small-24 columns">
				<img src="img/projects/strawberry/designs/1.jpg" alt="" class="visual-screen-design" id="design-1">
			</div>
		</div>
	</section>

	<?php require 'content/elements/next-project-section-bottom.php'; ?>
</div>