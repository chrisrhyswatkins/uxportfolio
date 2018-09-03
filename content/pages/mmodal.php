<section class="work-page-header <?php echo $projectName; ?>">
	<div class="work-page-header-background-image midtop-bg" style="background-image: url(img/project-backgrounds/mmodal.jpg);"></div>
	<div class="work-page-header-background-color" style="background-color: <?php echo $colorMainRGB; ?>"></div>
	<div class="row work-page-header-text-content">
		<div class="small-24 medium-18 columns">
			<p class="category text-white no-margin-bottom" id="content-top-indicator">Multi-Modal Interaction<span>Internship</span></p>
			<h1 class="text-white">Clinical Assistant</h1>
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
						<p class="project-overview">In a 12 week internship with <a href="https://mmodal.com/">M*Modal</a>, I was fortunate enough to work on improving the use of voice-interaction in a multi-modality system, allowing physicians to improve the quality of clinical documentation and patient care, using only speech. <b>Some details are excluded as per NDA requirements.</b> 
					</div>
				</div>
				<div class="row project-overview-details">
					<div class="small-12 medium-10 large-9 columns">
						<p class="capitalized-title-desc no-margin-bottom">Role Overview</p>
						<p class="overview-detail">Research, Design, Testing</p>
					</div>
					<div class="small-12 medium-4 large-6 columns show-for-medium">
						<p class="capitalized-title-desc no-margin-bottom">Date</p>
						<p class="overview-detail show-for-large">Summer 2018</p>
						<p class="overview-detail hide-for-large">Nov '17</p>
					</div>
					<div class="small-12 medium-10 large-9 columns">
						<p class="capitalized-title-desc no-margin-bottom">Duration</p>
						<p class="overview-detail">12 weeks</p>
					</div>
				</div>
			</div>
			<div class="small-24 medium-6 large-7 columns project-highlight-image show-for-medium" data-equalizer-watch>
				<img src="img/projects/mmodal/speech-mic.png" alt="" class="speech-mic">
			</div>
		</div>
	</section>

	<section class="banner-below-overview no-grey-banner" id="theBrief">
		<div class="row in-project-subhead">
			<div class="small-24 columns">
				<h2 class="line-behind"><span>Introducing CAPD</span></h2>
				<p class="in-project-subhead-para">Introducing the area of scope for the internship.</p>
			</div>
		</div>
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInPortfolioText">
				<p class="portfolio-body">Evolving clinical requirements and increasing time constraints have made it harder for healthcare providers to create compliant documentation and, more importantly, have also made it easier for critical patient information to slip through the cracks. M*Modal's Computer-Assisted Physician Documentation (CAPD) technology is designed to address this problem by providing real-time on-screen feedback to providers while they document. However, this technology can sometimes be seen as a burden, since many providers are accustomed to dictating their reports, whereas CAPD is predominately a mouse-driven UI.</p>
			</div>
		</div>
	</section>

	<section class="banner-below-overview no-grey-banner" id="theBrief">
		<div class="row in-project-subhead">
			<div class="small-24 columns">
				<h2 class="line-behind"><span>Clinical Documentation Suggestions</span></h2>
				<p class="in-project-subhead-para">Introducing the area of scope for the internship.</p>
			</div>
		</div>
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInPortfolioText">
				<h2 class="sub-section">Reason for Requests</h2>
				<p class="portfolio-body nothing-below">Whilst typing or dictating a patient note, CAPD will pick up on any aspects of the documentation requiring further information, alteration, or inclusion, and display a message informing the physician of the issue in question, and in some cases allowing direct action to be taken on the message to automatically make the change in the patient note.</p>
				<p class="capitalized-title-desc above-list-items">Possible triggers of documentation suggestions</p>
				<ol class="regular pad-below">
					<li><p>First</p></li>
		      		<li><p>Second</p></li>
		          	<li><p>Third</p></li>
		          	<li><p>Fourth</p></li>
		   		</ol>
			</div>
		</div>
	</section>

	<section class="banner-below-overview no-grey-banner" id="theBrief">
		<div class="row in-project-subhead">
			<div class="small-24 columns">
				<h2 class="line-behind"><span>Actionable Messages</span></h2>
				<p class="in-project-subhead-para">Introducing the area of scope for the internship.</p>
			</div>
		</div>
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInPortfolioText">
				<p class="portfolio-body">Many of the messages that are presented to a physicians, are directly actionable using both direct manipulation, and voice. By interacting directly with the message, a user is able to complete a request for specification without having to find the section of the document that needs alteration, and manually making the change themselves. Now, this is where the focus of my internship comes in.</p>
				<div class="row">
					<div class="small-14 columns">
						<h2 class="sub-section">Voice-Actionability</h2>
						<p class="portfolio-body">Whilst the messages are voice-actionable, meaning that a physician can interact with the message without having to move from dictation to using their mouse, their are a number of issues in this regard.</p>
					</div>
					<div class="small-8 columns">
						<img src="img/projects/mmodal/current/message-2.png" alt="" class="second-card-image">
					</div>
				</div>
				<div class="row">
					<div class="small-14 columns">
						<h2 class="sub-section">Voice Command Issues</h2>
						<p class="portfolio-body">Voice-interaction requires difficult to remember commands, such as “activate” to tell the system which message to engage with and resolve, and also “pick” or “select” to interact with graphical form elements such as radio buttons, select dropdown etc.</p>
					</div>
					<div class="small-8 columns">
						<img src="img/projects/mmodal/current/message-1.png" alt="" class="second-card-image">
					</div>
				</div>
				<p class="portfolio-body nothing-below">Ideally, a physician would only have to use a speech microphone to dictate the note, then be able to confidently use the same modality to interact with and resolve these requests for further specification. Instead, physician’s often need to consistently change between using the speech microphone and mouse, due to a difficulty in successfully resolving these actionable messages using their voice.</p>
			</div>
		</div>
	</section>

	<section class="portfolio-content-area" id="projectSect1">
		<div class="row in-project-subhead">
			<div class="small-24 columns fadeInPortfolioText">
				<h2 class="selected-work line-behind"><span>Initial Research Aims</span></h2>
				<p class="in-project-subhead-para">Personal contributions to the project.</p>
			</div>
		</div>
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInPortfolioText">
				<p class="portfolio-body nothing-below">The burden placed upon the physician in having to switch between dictation and mouse use, creates the need for natural, conversational phrasing with these actionable messages.</p>
				<p class="capitalized-title-desc above-list-items">Research Objectives</p>
				<ol class="regular">
					<li><p>Identifying which types of phrases are natural for providers to use with existing actionable messages.</p></li>
		          	<li><p>How to make voice-enabled content more discoverable and intuitive, without the need for prior training.</p></li>
		   		</ol>
			</div>
		</div>
	</section>

	<section class="portfolio-content-area" id="projectSect2"><!-- id="research" -->
		<div class="row in-project-subhead">
			<div class="small-24 columns fadeInPortfolioText">
				<h2 class="selected-work line-behind"><span>Initial Study Plan</span></h2>
				<p class="in-project-subhead-para">Scoping the problem in question.</p>
			</div>
		</div>
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInPortfolioText">
				<p class="portfolio-body">The plan for the research study centered around the collection of how providers instinctively and naturally phrase their commands to resolve the current CAPD message designs, in terms of how many specifications are requested, and the format in which the potential options are displayed (if options are provided that is).</p>
				<h2 class="sub-section">Preliminary Scenario &amp; Prototype</h2>
				<p class="portfolio-body">The initial study plan was to have each participant play the role of a physician currently in the process of reviewing a list of specification requests made by the CAPD system, having just completed dictating a note from a patient visit. A mid-fidelity interactive prototype was created using Sketch and InVision, depicting the current CAPD system, and 8 voice-actionable messages differing in designs, that the participant would be requested to resolve using their voice, with whatever phrase they felt was natural and would be confident in resolving the message.</p>
				<p class="portfolio-body">However, during a study critique session with the UX team, it became abundantly clear the existing study plan would not be sufficient in meeting the research aims, due to the fact that medical knowledge was required to be able to comfortably interact with the messages, amongst other context-related issues.</p>
			</div>
		</div>
	</section>

	<section class="portfolio-content-area" id="projectSect2"><!-- id="research" -->
		<div class="row in-project-subhead">
			<div class="small-24 columns fadeInPortfolioText">
				<h2 class="selected-work line-behind"><span>Switch to Analogous Domain</span></h2>
				<p class="in-project-subhead-para">Scoping the problem in question.</p>
			</div>
		</div>
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInPortfolioText">
				<p class="portfolio-body">With this feedback in mind, I instead redesigned the study to be conducted in an analogous domain, reducing the need for medical knowledge which would have severely restricted the amount of potential study participants. The scenario for the study was altered to have the participant play the role of an individual looking to sell their car online through the creation of an advert listing all possible details about the vehicle, and now in the process of resolving system requests that would not only make their advert more accurate in its description of the vehicle, but also potentially increasing the sale value.</p>
				<h2 class="sub-section">Paper Prototype &amp; Participant Task</h2>
				<p class="portfolio-body">In order to increase the flexibility of the study, I instead created a simple paper prototype (as seen below), depicting a user-created advert detailing the vehicle being sold, and on the right a sidebar where the specification requests would appear. The messages detailing these requests for further information were shown in cut out cards, which during the study, were laid down one by one by the study moderator, with the participant then phrasing their command to resolve the message, with a think-aloud protocol used to uncover any participant hesitancies with particular message types.</p>
			</div>
		</div>
	</section>

	<section class="portfolio-photo-wrap">
		<div class="row">
			<div class="small-24 large-22 small-centered columns fadeInPortfolioImage">
				<div class="panel-photo taller full-120-mobile" style="background-image: url('img/projects/mmodal/paper-proto3.jpg');">
					
				</div>
			</div>
		</div>
	</section>

	<section class="portfolio-content-area" id="projectSect9">
		<div class="row in-project-subhead">
			<div class="small-24 columns fadeInPortfolioText">
				<h2 class="selected-work line-behind"><span>Analysis</span></h2>
				<p class="in-project-subhead-para">A beneficial, accurate, and fair rating system.</p>
			</div>
		</div>
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInPortfolioText">
				<p class="portfolio-body nothing-below">In total, 16 company employees participated in the study, the audio recordings of which (between 10-15 minutes each in total) I fully transcribed using Temi Transcription, in preparation for two separate methods of analyses in line with the research goals of the study.</p> 
			</div>
		</div>
	</section>
	<section class="portfolio-content-area below-other-area" id="solutionSect1">
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInPortfolioText">
				<h2 class="sub-section">Phrasing Structures &amp; Terminology</h2>
				<p class="portfolio-body">The key aim was to deliver a corpus of natural phrases used by participants to resolve each message type, such as one specification with options listed as inline text inside the message, two specifications requested with options listed in the form of radio buttons, or select dropdown etc. This would then allow the Speech & Natural Language Understanding teams to build a greater corpus of commands that would successfully register and act upon a user’s intent to interact with each message type.</p>
				<p class="portfolio-body">The phrase used to resolve each message type was extracted from all 16 transcripts, and grouped according to that message. Due to the analogous domain used, the phrasing structure  had to be broken down in to individual components, and restructured in a way that would allow it to be applicable to the messages of that particular formatting. Below is an example of this phrase restructuring method.</p>
				<p class="portfolio-body">In total, over 120 different phrasing structures (and their related message design) were handed off to the necessary teams, with specific terms for interaction with GUI form elements, and common verbs used to tell the system which message to take action upon also identified.</p>
				<p class="portfolio-body nothing-below">However, the fact that around 10-15 widely differing phrasing structures were used for each message type, highlighted the uncertainty in participants in how exactly they should phrase their command to resolve each message.</p>
			</div>
		</div>
	</section>

	<section class="portfolio-content-area below-other-area" id="solutionSect1">
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInPortfolioText">
				<h2 class="sub-section">Affinity Diagramming</h2>
				<p class="portfolio-body">With the inconsistent phrasing for each message type highlighting the potential of underlying issues with the current design of the messages, I set about extracting the units of interest from the 16 transcripts, in order to find commonalities throughout the participant sessions with regards to hesitancies dealing with messages, and the system in general.</p>
				<p class="portfolio-body">With around 130 sticky notes of information culminating from the transcripts and my own notes, I then grouped these units in to themes through affinity diagramming, which allowed for the identification of core issues with regards to voice-interaction with the currently designed actionable messages.</p>
			</div>
		</div>
	</section>

	<section class="portfolio-photo-wrap">
		<div class="row">
			<div class="small-24 medium-12 columns fadeInPortfolioImage">
				<div class="panel-photo full-120-mobile" style="background-image: url('img/projects/mmodal/affin-1.jpeg');">
					
				</div>
			</div>
			<div class="small-24 medium-12 columns fadeInPortfolioImage">
				<div class="panel-photo second-with-margin full-120-mobile" style="background-image: url('img/projects/mmodal/affin-2.jpeg');">
					
				</div>
			</div>
		</div>
	</section>

	<section class="portfolio-content-area" id="solutionSect1">
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInPortfolioText">
				<p class="portfolio-body nothing-below">15 distinct themes were created using the extracts of information, as shown below, which after writing up a description of each individual theme, were used to inform the key study findings.</p>
			</div>
		</div>
	</section>

	<section class="portfolio-content-area" id="projectSect2"><!-- id="research" -->
		<div class="row in-project-subhead">
			<div class="small-24 columns fadeInPortfolioText">
				<h2 class="selected-work line-behind"><span>Key Study Findings</span></h2>
				<p class="in-project-subhead-para">Scoping the problem in question.</p>
			</div>
		</div>
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInPortfolioText">
				<p class="portfolio-body nothing-below">Whilst the full details of the actual findings of the initial research are NDA-protected, the following gives on overview on the key information taken forward to inform the subsequent work throughout the internship.</p>
				<p class="capitalized-title-desc above-list-items">Possible triggers of documentation suggestions</p>
				<ol class="regular pad-below with-subtext">
					<li><p class="maintext">Potential for Phrasing Influence</p><p class="subtext">The design and terminology of the voice-actionable messages can heavily influence the phrased uttered by the user when interacting with it.</p></li>
		      		<li><p class="maintext">Potential for Phrasing Influence</p><p class="subtext">The design and terminology of the voice-actionable messages can heavily influence the phrased uttered by the user when interacting with it.</p></li>
		      		<li><p class="maintext">Potential for Phrasing Influence</p><p class="subtext">The design and terminology of the voice-actionable messages can heavily influence the phrased uttered by the user when interacting with it.</p></li>
		   		</ol>
			</div>
		</div>
	</section>

	<section class="portfolio-content-area" id="projectSect2"><!-- id="research" -->
		<div class="row in-project-subhead">
			<div class="small-24 columns fadeInPortfolioText">
				<h2 class="selected-work line-behind"><span>Redesigning the Messages</span></h2>
				<p class="in-project-subhead-para">Scoping the problem in question.</p>
			</div>
		</div>
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInPortfolioText">
				<p class="portfolio-body">The plan for the research study centered around the collection of how providers instinctively and naturally phrase their commands to resolve the current CAPD message designs, in terms of how many specifications are requested, and the format in which the potential options are displayed (if options are provided that is).</p>
				<p class="portfolio-body nothing-below">The plan for the research study centered around the collection of how providers instinctively and naturally phrase their commands to resolve the current CAPD message designs, in terms of how many specifications are requested, and the format in which the potential options are displayed (if options are provided that is).</p>
			</div>
		</div>
	</section>

	<section class="portfolio-content-area" id="projectSect2"><!-- id="research" -->
		<div class="row in-project-subhead">
			<div class="small-24 columns fadeInPortfolioText">
				<h2 class="selected-work line-behind"><span>Wizard of Oz Study</span></h2>
				<p class="in-project-subhead-para">Scoping the problem in question.</p>
			</div>
		</div>
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInPortfolioText">
				<p class="portfolio-body">With this feedback in mind, I instead redesigned the study to be conducted in an analogous domain, reducing the need for medical knowledge which would have severely restricted the amount of potential study participants.</p>
				<h2 class="sub-section">Scenario</h2>
				<p class="portfolio-body">In order to increase the flexibility of the study, I instead created a simple paper prototype (as seen below), depicting a user-created advert detailing the vehicle being sold, and on the right a sidebar where the specification requests would appear. The messages detailing these requests for further information were shown in cut out cards, which during the study, were laid down one by one by the study moderator, with the participant then phrasing their command to resolve the message, with a think-aloud protocol used to uncover any participant hesitancies with particular message types.</p>
				<h2 class="sub-section">Setup</h2>
				<p class="portfolio-body">In order to increase the flexibility of the study, I instead created a simple paper prototype (as seen below), depicting a user-created advert detailing the vehicle being sold, and on the right a sidebar where the specification requests would appear. The messages detailing these requests for further information were shown in cut out cards, which during the study, were laid down one by one by the study moderator, with the participant then phrasing their command to resolve the message, with a think-aloud protocol used to uncover any participant hesitancies with particular message types.</p>
			</div>
		</div>
	</section>

	<section class="portfolio-photo-wrap">
		<div class="row">
			<div class="small-24 large-24 small-centered columns fadeInPortfolioImage">
				<div class="panel-photo taller full-120-mobile" style="background-image: url('img/projects/mmodal/setup.JPG');">
					
				</div>
			</div>
		</div>
	</section>

	<section class="portfolio-photo-wrap">
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInPortfolioText">
				<h2 class="sub-section below-image">High-Fidelity Prototype</h2>
				<p class="portfolio-body">In order to increase the flexibility of the study, I instead created a simple paper prototype (as seen below), depicting a user-created advert detailing the vehicle being sold, and on the right a sidebar where the specification requests would appear. The messages detailing these requests for further information were shown in cut out cards, which during the study, were laid down one by one by the study moderator, with the participant then phrasing their command to resolve the message, with a think-aloud protocol used to uncover any participant hesitancies with particular message types.</p>
			</div>
		</div>
	</section>

	<section class="portfolio-content-area" id="projectSect2"><!-- id="research" -->
		<div class="row in-project-subhead">
			<div class="small-24 columns fadeInPortfolioText">
				<h2 class="selected-work line-behind"><span>Study Outcomes</span></h2>
				<p class="in-project-subhead-para">Scoping the problem in question.</p>
			</div>
		</div>
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInPortfolioText">
				<p class="portfolio-body">The plan for the research study centered around the collection of how providers instinctively and naturally phrase their commands to resolve the current CAPD message designs, in terms of how many specifications are requested, and the format in which the potential options are displayed (if options are provided that is).</p>
				<p class="portfolio-body nothing-below">The plan for the research study centered around the collection of how providers instinctively and naturally phrase their commands to resolve the current CAPD message designs, in terms of how many specifications are requested, and the format in which the potential options are displayed (if options are provided that is).</p>
			</div>
		</div>
	</section>

	<section class="portfolio-navigator-bottom-page">
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInPortfolioText">
				<?php require 'content/elements/project-nav.php'; ?>
			</div>
		</div>
	</section>
</div>