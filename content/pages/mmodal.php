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
			<div class="small-24 medium-22 large-18 columns small-centered fadeInMinor">
				<p class="portfolio-body nothing-below">Evolving clinical requirements and increasing time constraints have made it harder for healthcare providers to create compliant documentation and, more importantly, have also made it easier for critical patient information to slip through the cracks. M*Modal's Computer-Assisted Physician Documentation (CAPD) technology is designed to address this problem by providing real-time on-screen feedback to providers while they document. However, this technology can sometimes be seen as a burden, since many providers are accustomed to dictating their reports, whereas CAPD is predominately a mouse-driven UI.</p>
			</div>
		</div>
	</section>

	<section class="banner-below-overview no-grey-banner" id="theBrief">
		<div class="row in-project-subhead">
			<div class="small-24 columns">
				<h2 class="line-behind"><span>Clinical Documentation Suggestions</span></h2>
				<p class="in-project-subhead-para">Increasing compliance and patient care quality.</p>
			</div>
		</div>
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInMinor">
				<h2 class="sub-section">Reason for Requests</h2>
				<p class="portfolio-body nothing-below">Whilst typing or dictating a patient note, CAPD will pick up on any aspects of the documentation requiring further information, alteration, or inclusion, and display a message informing the physician of the issue in question, and in some cases allowing direct action to be taken on the message to automatically make the change in the patient note.</p>
				<p class="capitalized-title-desc above-list-items">Possible triggers of documentation suggestions</p>
				<ol class="regular pad-below">
					<li><p>Potential undocumented diagnoses, related to documented conditions</p></li>
		      		<li><p>Vague documentation of condition, i.e. mention of fracture without specifying the fracture type </p></li>
		          	<li><p>Possible contradiction within documentation details, i.e. mentioning an issue with the right foot, then also referring to the same problem but in the left foot</p></li>
		          	<li><p>Condition mentioned in previous visit with patient, not discussed in the notes for this visit</p></li>
		   		</ol>
			</div>
		</div>
	</section>

	<section class="banner-below-overview no-grey-banner" id="theBrief">
		<div class="row in-project-subhead">
			<div class="small-24 columns">
				<h2 class="line-behind"><span>Actionable Messages</span></h2>
				<p class="in-project-subhead-para">Via speech or direct manipulation.</p>
			</div>
		</div>
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInMinor">
				<p class="portfolio-body">Many of the messages that are presented to a physicians, are directly actionable using both direct manipulation, and voice. By interacting directly with the message, a user is able to complete a request for specification without having to find the section of the document that needs alteration, and manually making the change themselves. Now, this is where the focus of my internship comes in.</p>
				<div class="row">
					<div class="small-24 medium-14 columns">
						<h2 class="sub-section">Voice-Actionability</h2>
						<p class="portfolio-body">Whilst the messages are voice-actionable, meaning that a physician can interact with the message without having to move from dictation to using their mouse, their are a number of issues in this regard.</p>
					</div>
					<div class="small-24 medium-8 columns">
						<div class="row">
							<div class="small-11 medium-24 columns">
								<img src="img/projects/mmodal/current/message-2.png" alt="" class="second-card-image">
							</div>
							<div class="small-11 medium-24 columns hide-for-medium">
								<img src="img/projects/mmodal/current/message-1.png" alt="" class="second-card-image">
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="small-24 medium-14 columns">
						<h2 class="sub-section">Voice Command Issues</h2>
						<p class="portfolio-body">Voice-interaction requires certain difficult to remember commands, such as using verbs like “activate” to tell the system which message to engage with and resolve, and also “pick” or “select” to interact with graphical form elements such as radio buttons, select dropdown etc.</p>
					</div>
					<div class="small-8 columns show-for-medium">
						<img src="img/projects/mmodal/current/message-1.png" alt="" class="second-card-image">
					</div>
				</div>
				<p class="portfolio-body nothing-below">Ideally, a physician would only have to use a speech microphone to dictate the note, then be able to confidently use the same modality to interact with and resolve these requests for further specification. Instead, physician’s often need to consistently change between using the speech microphone and mouse, due to a difficulty in successfully resolving these actionable messages using their voice.</p>
			</div>
		</div>
	</section>

	<section class="portfolio-content-area" id="projectSect1">
		<div class="row in-project-subhead">
			<div class="small-24 columns fadeInMinor">
				<h2 class="selected-work line-behind"><span>Initial Research Aims</span></h2>
				<p class="in-project-subhead-para">Exploring potential for a natural, conversational system.</p>
			</div>
		</div>
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInMinor">
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
			<div class="small-24 columns fadeInMinor">
				<h2 class="selected-work line-behind"><span>Initial Study Plan</span></h2>
				<p class="in-project-subhead-para">Evaluating the current CAPD system.</p>
			</div>
		</div>
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInMinor">
				<p class="portfolio-body">The plan for the research study centered around the collection of how providers instinctively and naturally phrase their commands to resolve the current CAPD message designs, in terms of how many specifications are requested, and the format in which the potential options are displayed (if options are provided that is).</p>
				<h2 class="sub-section">Preliminary Scenario &amp; Prototype</h2>
				<p class="portfolio-body">The initial study plan was to have each participant play the role of a physician currently in the process of reviewing a list of specification requests made by the CAPD system, having just completed dictating a note from a patient visit. A mid-fidelity interactive prototype was created using Sketch and InVision, depicting the current CAPD system, and 8 voice-actionable messages differing in designs, that the participant would be requested to resolve using their voice, with whatever phrase they felt was natural and would be confident in resolving the message.</p>
				<p class="portfolio-body nothing-below">However, during a study critique session with the UX team, it became abundantly clear the existing study plan would not be sufficient in meeting the research aims, due to the fact that medical knowledge was required to be able to comfortably interact with the messages, amongst other context-related issues.</p>
			</div>
		</div>
	</section>

	<section class="portfolio-content-area" id="projectSect2"><!-- id="research" -->
		<div class="row in-project-subhead">
			<div class="small-24 columns fadeInMinor">
				<h2 class="selected-work line-behind"><span>Switch to Analogous Domain</span></h2>
				<p class="in-project-subhead-para">Reducing need for participant medical knowledge.</p>
			</div>
		</div>
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInMinor">
				<p class="portfolio-body">With this feedback in mind, I instead redesigned the study to be conducted in an analogous domain, reducing the need for medical knowledge which would have severely restricted the amount of potential study participants. The scenario for the study was altered to have the participant play the role of an individual looking to sell their car online through the creation of an advert listing all possible details about the vehicle, and now in the process of resolving system requests that would not only make their advert more accurate in its description of the vehicle, but also potentially increasing the sale value.</p>
				<h2 class="sub-section">Paper Prototype &amp; Participant Task</h2>
				<p class="portfolio-body">In order to increase the flexibility of the study, I instead created a simple paper prototype (as seen below), depicting a user-created advert detailing the vehicle being sold, and on the right a sidebar where the specification requests would appear. The messages detailing these requests for further information were shown in cut out cards, which during the study, were laid down one by one by the study moderator, with the participant then phrasing their command to resolve the message, with a think-aloud protocol used to uncover any participant hesitancies with particular message types.</p>
			</div>
		</div>
	</section>

	<section class="portfolio-photo-wrap">
		<div class="row">
			<div class="small-24 large-22 small-centered columns fadeInMinor">
				<div class="panel-photo taller full-120-mobile" style="background-image: url('img/projects/mmodal/paper-proto3.jpg');">
					
				</div>
			</div>
		</div>
	</section>

	<section class="portfolio-content-area" id="projectSect9">
		<div class="row in-project-subhead">
			<div class="small-24 columns fadeInMinor">
				<h2 class="selected-work line-behind"><span>Analysis</span></h2>
				<p class="in-project-subhead-para">Studying phrases and key information.</p>
			</div>
		</div>
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInMinor">
				<p class="portfolio-body nothing-below">In total, 16 company employees participated in the study, the audio recordings of which (between 10-15 minutes each in total) I fully transcribed and cleaned up using a semi-automated transcription service, in preparation for two separate methods of analyses in line with the research goals of the study.</p> 
			</div>
		</div>
	</section>
	<section class="portfolio-content-area below-other-area" id="solutionSect1">
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInMinor">
				<h2 class="sub-section">Phrasing Structures &amp; Terminology</h2>
				<p class="portfolio-body">The key aim was to deliver a corpus of natural phrases used by participants to resolve each message type, such as one specification with options listed as inline text inside the message, two specifications requested with options listed in the form of radio buttons, or select dropdown etc. This would then allow the Speech & Natural Language Understanding teams to build a greater corpus of commands that would successfully register and act upon a user’s intent to interact with each message type.</p>
				<p class="portfolio-body">The phrase used to resolve each message type was extracted from all 16 transcripts, and grouped according to that message. Due to the analogous domain used, the phrasing structure  had to be broken down in to individual components, and restructured in a way that would allow it to be applicable to the messages of that particular formatting. Below is an example of this phrase restructuring method.</p>
			</div>
			<div class="row">
				<div class="small-24 large-20 columns small-centered fadeInMinor">
					<div class="row phrasing-breakdown-step first-step">
						<div class="small-24 medium-4 columns">
							<p class="phrasing-step">Phrase</p>
						</div>
						<div class="small-24 medium-20 columns">
							<p class="phrasing-copy">“Specify body type. Type is hatchback.”</p>
						</div>
					</div>
					<div class="row phrasing-breakdown-step">
						<div class="small-24 medium-4 columns">
							<p class="phrasing-step">Components</p>
						</div>
						<div class="small-24 medium-20 columns">
							<p class="phrasing-copy">“<span>[Specify]</span> <span>[body type]</span>. <span>[Type]</span> is <span>[hatchback]</span>.”</p>
						</div>
					</div>
					<div class="row phrasing-breakdown-step last-step">
						<div class="small-24 medium-4 columns">
							<p class="phrasing-step">Restructure</p>
						</div>
						<div class="small-24 medium-20 columns">
							<p class="phrasing-copy">“<span>[Activation verb]</span> <span>[message title]</span>. <span>[Specification title]</span> is <span>[option]</span>.”</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="small-24 medium-22 large-18 columns small-centered fadeInMinor">
				<p class="portfolio-body">In total, over 120 different phrasing structures (and their related message design) were handed off to the necessary teams, with specific terms for interaction with GUI form elements, and common verbs used to tell the system which message to take action upon also identified.</p>
				<p class="portfolio-body nothing-below">However, the fact that around 10-15 widely differing phrasing structures were used for each message type, highlighted the uncertainty in participants in how exactly they should phrase their command to resolve each message.</p>
			</div>
		</div>
	</section>

	<section class="portfolio-content-area below-other-area" id="solutionSect1">
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInMinor">
				<h2 class="sub-section">Affinity Diagramming</h2>
				<p class="portfolio-body">With the inconsistent phrasing for each message type highlighting the potential of underlying issues with the current design of the messages, I set about extracting the units of interest from the 16 transcripts, in order to find commonalities throughout the participant sessions with regards to hesitancies dealing with messages, and the system in general.</p>
				<p class="portfolio-body">With around 130 sticky notes of information culminating from the transcripts and my own notes, I then grouped these units in to themes through affinity diagramming, which allowed for the identification of core issues with regards to voice-interaction with the currently designed actionable messages.</p>
			</div>
		</div>
	</section>

	<section class="portfolio-photo-wrap">
		<div class="row">
			<div class="small-11 columns">
				<div class="panel-photo full-120-mobile" style="background-image: url('img/projects/mmodal/affin-1.jpeg');">
					
				</div>
			</div>
			<div class="small-11 columns">
				<div class="panel-photo second-with-margin full-120-mobile" style="background-image: url('img/projects/mmodal/affin-2.jpeg');">
					
				</div>
			</div>
		</div>
	</section>

	<section class="portfolio-content-area" id="solutionSect1">
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered">
				<p class="portfolio-body nothing-below">10 distinct themes were created using the extracts of information, as shown below, which after writing up a description of each individual theme, were used to inform the key study findings.</p>
			</div>
		</div>
		<div class="row sticky-note-section">
			<div class="note-outer">
				<div class="sticky-note">
					<div class="text-content">
						<span>GUI form elements</span>
					</div>
				</div>
			</div>
			<div class="note-outer">
				<div class="sticky-note">
					<div class="text-content">
						<span>Control of document narrative</span>
					</div>
				</div>
			</div>
			<div class="note-outer">
				<div class="sticky-note">
					<div class="text-content">
						<span>Not dealing with messages</span>
					</div>
				</div>
			</div>
			<div class="note-outer">
				<div class="sticky-note">
					<div class="text-content">
						<span>Lack of obvious next step</span>
					</div>
				</div>
			</div>
			<div class="note-outer">
				<div class="sticky-note">
					<div class="text-content">
						<span>Aids for further context</span>
					</div>
				</div>
			</div>
			<div class="note-outer">
				<div class="sticky-note">
					<div class="text-content">
						<span>Lack of visual cues from system</span>
					</div>
				</div>
			</div>
			<div class="note-outer">
				<div class="sticky-note">
					<div class="text-content">
						<span>Phrasing rhythm and methods</span>
					</div>
				</div>
			</div>
			<div class="note-outer">
				<div class="sticky-note">
					<div class="text-content">
						<span>Card "activation" methods</span>
					</div>
				</div>
			</div>
			<div class="note-outer">
				<div class="sticky-note">
					<div class="text-content">
						<span>Doubts about using voice</span>
					</div>
				</div>
			</div>
			<div class="note-outer">
				<div class="sticky-note">
					<div class="text-content">
						<span>Facilitating natural, conversational phrasing</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="portfolio-content-area" id="projectSect2"><!-- id="research" -->
		<div class="row in-project-subhead">
			<div class="small-24 columns fadeInMinor">
				<h2 class="selected-work line-behind"><span>Key Study Findings</span></h2>
				<p class="in-project-subhead-para">Driving future design and research.</p>
			</div>
		</div>
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInMinor">
				<p class="portfolio-body nothing-below">Whilst the full details of the actual findings of the initial research are NDA-protected, the following gives on overview on the key information taken forward to inform the subsequent work throughout the internship.</p>
				<p class="capitalized-title-desc above-list-items">Overview of findings</p>
				<ol class="regular pad-below with-subtext">
					<li><p class="maintext">Potential for Phrasing Influence</p><p class="subtext">The design and terminology of the voice-actionable messages can heavily influence the phrased uttered by the user when interacting with it.</p></li>
		      		<li><p class="maintext">GUI Form Elements</p><p class="subtext">Radio buttons, dropdown etc. to depict possible specification answers cause hesitancy in voice interaction, and as a result, reduced confidence in taking action on the message using voice.</p></li>
		      		<li><p class="maintext">Narrative Control</p><p class="subtext">In situations where more detail is required, such as diagnosis updates, treatment plans etc., users would wish to complete the change manually in the note, so that the narrative of their document would remain consistent.</p></li>
		      		<li><p class="maintext">Visual Feedback</p><p class="subtext">It is absolutely crucial to inform users of command success or failure, as well as possible next steps, through visual system cues.</p></li>
		      		<li><p class="maintext">Conversational Response</p><p class="subtext">When a single message appears in front of users, a Q&A style response was invoked, with less likelihood of telling the system which message to interact with as it is the only message currently displayed.</p></li>
		      		<li><p class="maintext">Missing Context</p><p class="subtext">Should a user have questions as to why a message has appeared, what can be done etc., it is likely that either an unsuitable command will be phrased to the system, or no action will be taken whatsoever.</p></li>
		   		</ol>
		   	</div>
		</div>
	</section>

	<section class="portfolio-content-area below-other-area" id="solutionSect1">
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInMinor">
		   		<h2 class="sub-section">Three Key User Questions for Context</h2>
				<p class="portfolio-body">Revisiting the issue of current issues surrounding user confusion when a message currently appears, the team devised three key questions a user subconsciously requires answers to in order to successfully understand and take action upon a message using their voice.</p>
				<div class="row context-question">
					<div class="small-24 columns">
						<p class="question"><span style="color: rgba(255,83,141,1);">Why</span> am I being presented with this message?</p>
						<div class="row">
							<div class="small-2 columns">
								<div class="line-sep"></div>
							</div>
							<div class="small-22 columns">
								<p class="portfolio-body">What is it about the patient or the note that has led to this prompt?</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row context-question">
					<div class="small-24 columns">
						<p class="question"><span style="color: rgba(154,127,255,1);">What</span> can I say to resolve this message?</p>
						<div class="row">
							<div class="small-2 columns">
								<div class="line-sep"></div>
							</div>
							<div class="small-22 columns">
								<p class="portfolio-body">How exactly do I need to phrase a command so that this message will disappear?</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row context-question">
					<div class="small-24 columns">
						<p class="question"><span style="color: rgba(251,174,44,1);">Where</span> will this change appear in my note?</p>
						<div class="row">
							<div class="small-2 columns">
								<div class="line-sep"></div>
							</div>
							<div class="small-22 columns">
								<p class="portfolio-body nothing-below">What about my documentation will change if I take action upon this message?</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="portfolio-content-area" id="projectSect2"><!-- id="research" -->
		<div class="row in-project-subhead">
			<div class="small-24 columns fadeInMinor">
				<h2 class="selected-work line-behind"><span>Revised Research Scope</span></h2>
				<p class="in-project-subhead-para">Taking advantage of the time remaining.</p>
			</div>
		</div>
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInMinor">
				<p class="portfolio-body">After consultation with the UX team, it was decided that the findings of the initial study, provided a solid foundation on which the CAPD actionable messages could be redesigned in a way that would make voice-interaction with them not only more discoverable, but also more intuitive.</p>
				<p class="portfolio-body nothing-below">With 5 weeks remaining of my internship, I set about providing tangible recommendations for the team to take forward in redesigning the CAPD messages to be more intuitively voice-actionable moving forward.</p>
			</div>
		</div>
	</section>

	<section class="portfolio-content-area" id="projectSect2"><!-- id="research" -->
		<div class="row in-project-subhead">
			<div class="small-24 columns fadeInMinor">
				<h2 class="selected-work line-behind"><span>Redesigning the Messages</span></h2>
				<p class="in-project-subhead-para">For discoverability and ease of voice-actionability.</p>
			</div>
		</div>
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInMinor">
				<p class="portfolio-body">With the sporadic, inconsistent phrasing used by participants to resolve each message type exposing a lack of guidance from the GUI in how one might confidently go about interacting with the message by voice, I used the findings from the initial study to redesign the messages to signify a greater affordance of voice-actionability with the messages, with continual feedback from the UX team to inform design iteration, with a particular focus on how the visual design of a message can actually influence the phrasing a user will vocalize to resolve it.</p>
				<p class="portfolio-body"><b>Please note:</b> for NDA reasons, the redesigned voice-actionable messages are not included.</p>
				<p class="capitalized-title-desc above-list-items">Aims for Redesign of Voice-Actionable Messages</p>
				<ol class="regular with-subtext">
					<li><p class="maintext">Providing Context</p><p class="subtext">Offering a simple indication of why a request for specification has been made, and also where in the patient note a change will take place if action is taken.</p></li>
		      		<li><p class="maintext">Speech Guidance</p><p class="subtext">Using design and in-message terminology to influence users as to how a direct interaction with messages can be phrased.</p></li>
		      		<li><p class="maintext">System Feedback</p><p class="subtext">Provide visual cues to inform of a successful or unsuccessful command, and offering possible next steps.</p></li>
		   		</ol>
			</div>
		</div>
	</section>

	<section class="portfolio-content-area" id="projectSect2"><!-- id="research" -->
		<div class="row in-project-subhead">
			<div class="small-24 columns fadeInMinor">
				<h2 class="selected-work line-behind"><span>Wizard of Oz Study</span></h2>
				<p class="in-project-subhead-para">Testing the redesigned voice-actionable messages.</p>
			</div>
		</div>
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInMinor">
				<p class="portfolio-body">Given the need to test the performance of the redesigned voice-actionable messages, the second study was somewhat more elaborate than the initial phrase gathering study, both in planning and implementation.</p>
				<h2 class="sub-section">Scenario</h2>
				<p class="portfolio-body nothing-below">For this study, the team decided that a task placed within the context of the medical domain was suitable, if the need for medical knowledge was significantly reduced. Each participant was placed in the role of a physician dictating the note for a patient visit they had just completed. Participants were given a profile detailing the patient, an elderly gentleman named Mr. Shankly, with hand-written notes on the back depicting notes taken by the physician during the visit. Participants were also given a script to use to dictate the initial note, and while they were not asked to stick to the script, all 18 participants chose to (which significantly aided the implementation of the test).</p>
			</div>
		</div>
	</section>

	<section class="portfolio-content-area below-other-area" id="solutionSect1">
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInMinor">
				<h2 class="sub-section">Setup</h2>
				<p class="portfolio-body nothing-below">The study room was designed to mimic a typical dictation room in a hospital, that a physician may find themselves in when dictating a note for a patient visit. The participant was placed in front of a monitor, as well as a speech microphone, mouse and keyboard. The monitor was hooked up to a laptop directly behind, where a researcher would manipulate the prototype to act upon any participant vocal commands or dictation. As the moderator, I positioned myself next to the participant, from where I would brief and debrief them, as well as provide assistance throughout the study should it be required.</p>
			</div>
		</div>
	</section>

	<section class="portfolio-photo-wrap">
		<div class="row">
			<div class="small-24 large-24 small-centered columns fadeInMinor">
				<div class="panel-photo taller full-120-mobile" style="background-image: url('img/projects/mmodal/setup.JPG');">
					
				</div>
			</div>
		</div>
	</section>

	<section class="portfolio-photo-wrap">
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInMinor">
				<h2 class="sub-section below-image">High-Fidelity Prototype</h2>
				<p class="portfolio-body">Using HTML, CSS, and jQuery, I developed a prototype that depicted the existing CAPD system, but with the newly redesigned voice-actionable messages, as well a dummy Electronic Health Record on the left hand side that would hold the patient note details. As a participant would dictate the script for the note, a simple button press by the researcher acting as the computer, would simulate one sentence of dictation. In some cases, a jQuery event would fire that would cause a request for specification to appear in the CAPD sidebar. Whenever the participant chose to resolve the messages, the “computer” would manipulate the messages to provide visual feedback and to act upon the participant phrasing. In some cases, participants were completely unaware that the prototype was being controlled by another human, instead of just being a functional system reacting to their speech.</p>
			</div>
		</div>
	</section>

	<section class="portfolio-content-area" id="projectSect2"><!-- id="research" -->
		<div class="row in-project-subhead">
			<div class="small-24 columns fadeInMinor">
				<h2 class="selected-work line-behind"><span>Study Outcomes</span></h2>
				<p class="in-project-subhead-para">Evaluating the redesign performance.</p>
			</div>
		</div>
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInMinor">
				<p class="portfolio-body">With 18 participants taking part in the study, all recordings were again transcribed for analysis, although with only a small amount of time remaining in my internship, the analysis process was afforded considerably less time in comparison to the first study carried out.</p>
				<p class="capitalized-title-desc above-list-items">Redesigned Message Performance</p>
				<ol class="regular pad-below with-subtext">
					<li><p class="maintext">Reduced Phrasing Distribution</p><p class="subtext">The phrasing used by participants to resolve each actionable message was far more consistent and uniform, with only conjunctions and minor differences between the vast majority. This is likely due to the redesigned messages giving guidance in how to phrase a response to each message.</p></li>
		      		<li><p class="maintext">Greater Contextual Understanding</p><p class="subtext">In comparison to the initial study, participants were far more aware of what exactly they must do in order to resolve the message in front of them, in part due to understanding what about their note had led to the message being displayed, and how exactly their note would update if they were to take action upon the message.</p></li>
		      		<li><p class="maintext">Voice Discoverability Issues</p><p class="subtext">Unfortunately, around 2/3 of participants first chose to use the mouse when taking action upon the first message they saw, before being asked to use their voice to resolve the remainder of the messages. Whilst it is extremely promising how easily the majority of participants found it to phrase a command to resolve each message, and how uniform these phrasings were, the design must be revisited to ensure that physicians without prior training know that they can use their voice to interact with these messages.</p></li>
		   		</ol>
		   	</div>
		</div>
	</section>

	<section class="portfolio-content-area below-other-area" id="solutionSect1">
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInMinor">
		   		<p class="capitalized-title-desc above-list-items">Other Areas for Consideration</p>
				<ol class="regular with-subtext">
		      		<li><p class="maintext">Showing of Specification Options</p><p class="subtext">By showing potential options for a specification, such as the type of fracture for example, their might not only be the issue of large amounts of screen space being taken up, but also the possibility of leading physicians down a path by only showing a subset of possible answers.</p></li>
		      		<li><p class="maintext">Greater Message Capabilities</p><p class="subtext">Whilst the redesigned messages cater predominantly to situations where only short specifications are required, there may be cases where free speech or text entry would allow for narrative control. For example, allowing physicians to provide information on a diagnoses update, a follow-up treatment plan etc.</p></li>
		   		</ol>
			</div>
		</div>
	</section>

	<section class="portfolio-content-area" id="projectSect2"><!-- id="research" -->
		<div class="row in-project-subhead">
			<div class="small-24 columns fadeInMinor">
				<h2 class="selected-work line-behind"><span>Internship Recap</span></h2>
				<p class="in-project-subhead-para">Summarizing the experience and deliverables.</p>
			</div>
		</div>
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInMinor">
				<p class="portfolio-body">The greatest challenge of working in a domain as complex and unfamiliar to myself as US healthcare, particularly the case-by-case challenges posed by individual medical institutions and physicians possessing drastically different workflows to account for, as a result of differing systems implemented in each hospital.</p>
				<p class="capitalized-title-desc above-list-items">Internship Deliverables</p>
				<ol class="regular pad-below with-subtext">
					<li><p class="maintext">Phrase Gathering</p><p class="subtext">Offering short term aid to voice-interactions with the current message design, providing the relative teams with a large corpus of phrases naturally used to resolve each message to increase the likelihood of successful interaction.</p></li>
		      		<li><p class="maintext">Design Recommendations</p><p class="subtext">Prototyping, testing, and validating redesigned voice-actionable messages, which moving forward, will offer components through which voice-actionable messages, and other content, can be more discoverable, intuitive, and efficient to physicians.</p></li>
		      		<li><p class="maintext">Future Research</p><p class="subtext">The findings from both studies will provide a foundation for future research efforts in seeking to build more natural, conversational interaction possibilities for physicians, both in GUI and VUI.</p></li>
		   		</ol>
		   	</div>
		</div>
	</section>

	<section class="portfolio-content-area below-other-area" id="solutionSect1">
		<div class="row">
			<div class="small-24 medium-22 large-18 columns small-centered fadeInMinor">
		   		<p class="portfolio-body">The experience working as a member of the closely knit UX team at M*Modal was invaluable, particularly in terms of mentorship offered in differing areas of expertise from every member, is one that I cannot thank them enough for, as well as countless others from other product teams who offered advice, and research participants.</p>
		   		<p class="portfolio-body nothing-below">Without a doubt, the most rewarding aspect of the internship was opportunity to be involved in such impactful work, not only making the day-to-day lives of physicians easier, but in turn the quality of care provided to their patients.</p>
			</div>
		</div>
	</section>
	
	<section class="portfolio-next-project-area" style="background-image: url(img/project-backgrounds/mmodal.jpg);">
		<div class="portfolio-content-area">
			<div class="row in-project-subhead">
				<div class="medium-2 show-for-medium columns"><div class="next-project-line"></div></div>
				<div class="small-24 medium-10 columns end">
					<h2 class="selected-work up-next text-white"><span>Where to Next?</span></h2>
				</div>
<!--
				<div class="small-24 medium-12 columns selected-work-item lyft" data-equalizer-watch>
					<div class="row">
						<a href="lyft">
							<div class="small-24 columns selected-work-item-image" style="background-image: url('img/project-backgrounds/lyft.jpg');">
								<div class="hovered-line"></div>
								<span class="date text-white"></span>
							</div>
							<div class="small-24 columns selected-work-item-text">
								<h3 text-white>Lyft Rating System</h3>
								<p class="category no-margin-bottom text-white">Smartphone Application<span>University Work</span></p>
							</div>
						</a>
					</div>
				</div>-->

			</div>
			<div class="row project-slider scrolling-wrapper-flexbox draggable" data-equalizer>
				<div class="small-24 medium-12 columns selected-work-item lyft" data-equalizer-watch>
					<div class="row">
						<a href="lyft">
							<div class="small-24 columns selected-work-item-image" style="background-image: url('img/project-backgrounds/lyft.jpg');">
								<div class="hovered-line"></div>
								<span class="date text-white"></span>
							</div>
							<div class="small-24 columns selected-work-item-text">
								<h3>Lyft Rating System</h3>
								<p class="category no-margin-bottom">Smartphone Application<span>University Work</span></p>
							</div>
						</a>
					</div>
				</div>
				<div class="small-24 medium-12 columns selected-work-item google" data-equalizer-watch>
					<div class="row">
						<a href="google-drive">
							<div class="small-24 columns selected-work-item-image" style="background-image: url('img/project-items/freeagent.jpg');">
								<div class="hovered-line"></div>
								<span class="date text-white"></span>
							</div>
							<div class="small-24 columns selected-work-item-text">
								<h3>Google Drive</h3>
								<p class="category no-margin-bottom">Visual Design<span>University Work</span></p>
							</div>
						</a>
					</div>
				</div>
				<div class="small-24 medium-12 columns selected-work-item precisionplastics case-study-in-progress" data-equalizer-watch>
					<div class="row">
						<a href="precision-plastics">
							<div class="small-24 columns selected-work-item-image" style="background-image:url('img/project-items/plastics2.jpg');" id="project-item-plastic">
								<div class="hovered-line"></div>
								<div class="hovered-overlay"></div>
								<span class="date text-white">DESIGNS ONLY</span>
							</div>
							<div class="small-24 columns selected-work-item-text">
								<h3>Precision Plastics</h3>
								<p class="category">SaaS Application<span>Personal Project</span></p>
							</div>
						</a>
					</div>
				</div>
				<div class="small-24 medium-12 columns selected-work-item sevenhairbody case-study-in-progress" data-equalizer-watch>
					<div class="row">
						<a href="seven-hair-body">
							<div class="small-24 columns selected-work-item-image" style="background-image:url('img/project-items/seven.jpg');" id="project-item-seven">
								<div class="hovered-line"></div>
								<div class="hovered-overlay"></div>
								<span class="date text-white">DESIGNS ONLY</span>
							</div>
							<div class="small-24 columns selected-work-item-text">
								<h3>Seven Hair &amp; Body</h3>
								<p class="category">Website<span>Client Work</span></p>
							</div>
						</a>
					</div>
				</div>
				<div class="small-24 medium-12 columns selected-work-item strawberry case-study-in-progress end" data-equalizer-watch>
					<div class="row">
						<a href="strawberry">
							<div class="small-24 columns selected-work-item-image wide-image" style="background-image:url('img/project-items/strawberry.jpg');" id="project-item-strawberry">
								<div class="hovered-line"></div>
								<div class="hovered-overlay"></div>
								<span class="date text-white">DESIGNS ONLY</span>
							</div>
							<div class="small-24 columns selected-work-item-text">
								<h3>Strawberry</h3>
								<p class="category">Visual Design<span>Personal Project</span></p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>