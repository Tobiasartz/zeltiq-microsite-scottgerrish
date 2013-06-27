<?php 

	$title 			= "CoolSculpting - How CoolSculpting Works";
	$bodyClass		= "interior";
	$description 	= "";

	include('template/header.php');

?>

		<article class="wrapper clearfix">
			
			<header>
				<h1>How CoolSculpting Works</h1>

			</header>

			<div class="onethird alpha content">
				<h2>How it Works</h2>
				<p>Non-surgical, non-invasive CoolSculpting specifically targets unwanted fat cells, freezing them to the point of elimination. Your skin and muscles stay unaffected during treatment. Over the next few weeks, your body naturally flushes away dead fat cells to reveal noticeable results.</p>

				<!-- <p class="clearfix"><a href="#" class="btn btn-blue btn-sm">Target Your Trouble Zones Quiz</a></p> -->

				<h2>Treatment Process</h2>
				<p>During your initial consultation, Dr. Comstock will tell you how to make your birthday suit your best outfit. Then, all you have to do is sit back and relax in a treatment room, while CoolSculpting safely freezes and eliminates stubborn fat for you.</p>

				<p class="clearfix"><a href="gallery.php" class="btn btn-blue btn-sm">View Before and After Photos</a></p>


				<h2>Benefits</h2>
				<p>Unlike many other procedures, CoolSculpting is non-surgical. That means no knives, pills, needles, suction tubes or scars. And because the procedure has no downtime, CoolSculpting easily fits into your busy day.</p>

				<p class="clearfix"><a href="consultation.php" class="btn btn-blue btn-sm">Schedule a Consultation</a></p>

				<hr>

				<?php include('template/email-signup.php'); ?>
			</div>

			<div class="twothird">
				<div class="howitworks flexslider">

					<ul class="slides">
						<li><div id="wistia_tbvvboa32y" class="wistia_embed" style="width:553px;height:311px;" data-video-width="553" data-video-height="311">&nbsp;</div>
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
						</script></li>
					</ul>
				</div>
				<?php 
					$promoLink1 = 'gallery.php';
					include('template/aside-boxes.php'); 
				?>

				<p class="disclaimer">Typical side effects include deep pulling, tugging, pinching, pain and numbness during the procedure, temporary redness, swelling, bruising, firmness, tingling, stinging and pain may occur. Rare side effects may also occur. CoolSculpting is not for everyone. You should not have CoolSculpting if you suffer from cryoglobulinemia or paroxysmal cold hemoglobinuria. CoolSculpting is not a treatment for obesity. As with any medical procedure, ask us if CoolSculpting is right for you.</p>

				<p class="disclaimer">Results and patient experience may vary.</p>
			</div>
			
			

		</article><!-- .wrapper -->

<?php 
	include('template/footer.php');
?>