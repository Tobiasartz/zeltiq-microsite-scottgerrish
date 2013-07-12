<?php 

	$title 			= "CoolSculpting - How CoolSculpting Works";
	$bodyClass		= "interior howitworks";
	$description 	= "";

	include('template/header.php');

?>
		<section id="hero" class="clearfix">
			<div class="hero-video">
				<div id="wistia_tbvvboa32y" class="wistia_embed" style="width:553px;height:311px;" data-video-width="553" data-video-height="311">&nbsp;</div>
				<script charset="ISO-8859-1" src="http://fast.wistia.com/static/concat/E-v1.js"></script> 
				<script>
				wistiaEmbed = Wistia.embed("tbvvboa32y", {
				  version: "v1",
				  videoWidth: 553,
				  videoHeight: 311,
				  playerColor: "22a1db",
				  endVideoBehavior: "reset",
				  videoFoam: true
				});
				</script>
			</div>
			<div class="hero-text">
				<h2>How CoolSculpting Works</h2>
			</div>
		</section>
		<!-- <div class="background">&nbsp;</div> -->
		<div class="wrapper clearfix">
			
			<div class="twothird alpha">

				<div class="content-box">
					<h2>How It Works</h2>
					<p>Non-surgical CoolSculpting specifically targets fat cells, freezing them to the point of elimination. Your skin and muscles are unaffected during treatment. Over the next few weeks, your body naturally flushes away dead fat cells to reveal a new you.</p>
				</div>

				<div class="content-box">
					<h2>Treatment Process</h2>
					<p>During your initial consultation, Dr. Comstock will tell you how to make your birthday suit your best outfit. Then, all you have to do is sit back and relax in a treatment room, while CoolSculpting crystallizes and gets rid of stubborn fat for you.</p>
				</div>

				<div class="content-box">
					<h2>Benefits</h2>
					<p>Unlike many other procedures, CoolSculpting is non-surgical. That means no knives, pills, needles, suction tubes or scars. And because the procedure has no downtime, CoolSculpting easily fits into your busy day.</p>
					<a class="btn btn-blue btn-sm" href="#">Schedule a Consultation</a>
					<div class="divider"></div>
					<p class="side-effects">Typical side effects include deep pulling, tugging, pinching, pain and numbness during the procedure, temporary redness, swelling, bruising, firmness, tingling, stinging and pain may occur. Rare side effects may also occur. CoolSculpting is not for everyone. You should not have CoolSculpting if you suffer from cryoglobulinemia or paroxysmal cold hemoglobinuria. CoolSculpting is not a treatment for obesity. As with any medical procedure, ask us if CoolSculpting is right for you.
Results and patient experience may vary.</p>
				</div>

			</div>

			<aside class="onethird">

				<div class="request content-box">
					<h3>Request a CoolSculpting consultation</h3>
					<p>Fill out and submit a consultation request today to learn how CoolSculpting and Skin Spectrum can transform your body—without surgery or downtime.</p>
				</div>

				<aside class="schedule content-box">
					<p>Meet with a body assessing expert at Gerrish &amp; Associates to see how CoolSculpting can help you.</p>
					<a class="btn btn-blue btn-sm" href="#">Schedule a Consultation</a>
				</aside>

				<div class="newsletter content-box clearfix">
					<h3>Get the latest news from Dr. Gerrish &amp; CoolSculpting</h3>
					<form id="newsletterForm" action="#" name="subscribeForm" method="post">
						<input type="hidden" name="thx" value="/thankemail.php" />
						<input type="hidden" name="err" value="/error.php" />
						<input type="hidden" name="MID" value="10683065" />

						<input type="hidden" name="First Name" value="First" />
						<input type="hidden" name="Last Name" value="Last" />
						<input type="hidden" name="Birth Date" value="1/1/1900" />
						<input type="hidden" name="Gender" value="Gender" />
						<input type="radio" name="SubAction" value="sub_add_update" checked="checked" class="hidden"/>
						<input type="radio" name="Email Type" value="HTML" checked="checked" class="hidden"/>

						<input type="text" name="Email Address" class="text" placeholder="Email Address" id="newsletterEmail"/>

						<button name="submit" type="submit" class="btn btn-blue">Sign Up</button>
					</form>
				</div>

			</aside>

			
		</div><!-- .wrapper -->
		<div class="background"></div>

<?php 
	include('template/footer.php');
?>