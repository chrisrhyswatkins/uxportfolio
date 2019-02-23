<section class="portfolio-next-project-area" <?php if(isset($gradientLighter)) { ?> style="background: linear-gradient(270deg, <?php echo $gradientLighter ?> 0%, <?php echo $gradientDarker ?> 100%);" <?php } ?>>
	<div class="portfolio-content-area">
		<div class="row in-project-subhead">
			<div class="medium-2 show-for-medium columns"><div class="next-project-line"></div></div>
			<div class="small-24 medium-10 columns end">
				<h2 class="selected-work up-next text-white show-for-medium"><span>Next Project</span></h2>
				<h2 class="selected-work up-next text-white hide-for-medium"><span>Where to Next?</span></h2>
			</div>
		</div>
		
		<div class="row show-for-medium">
			<div class="small-24 columns end selected-work-item <?php echo $nextProject; ?> project-in-progress first fadeInMinor">
				<div class="row in-progress-project-container">				
					<a href="<?php echo $nextProject;?>" class="small-24 show-for-medium medium-11 large-12 columns selected-work-item-image" style="background-image:url('img/project-items/<?php echo $nextProject;?>.jpg');">
						<div class="hovered-overlay"></div>
						<div class="hovered-line"></div>
					</a>
					<div class="show-for-medium medium-1 large-2 columns">
						
					</div>
					<div class="small-24 medium-12 large-10 columns selected-work-item-text <?php if(isset($nextProjectCode)) { echo $nextProjectCode; }?>">
						<h3 class="test"><?php echo $nextProjectTitle;?></h3>
							<p class="category project-footer"><?php echo $nextProjectType;?><span><?php echo $nextProjectReason;?></span></p>
						<p class="in-progress-description text-white"><?php echo $nextProjectDescription;?></p>
						<a href="<?php echo $nextProject;?>" class="next-project">View Project</a>
					</div>		
				</div>
			</div>
		</div>

		<?php require 'content/elements/project-nav-slider-bottom.php'; ?>
	</div>
</section>