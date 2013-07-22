<?php 

	$title 			= "CoolSculpting Cellulite Treatment in Vienna, Virginia - Garrish &amp; Associates MedSpa";
	$bodyClass		= "home";
	$description 	= "CoolSculpting is an innovative cellulite treatment solution provided by Dr. Scott Garrish in Vienna, Virginia. Schedule a consultation today to find out if CoolSculpting is right for you.";

	include('template/header.php');

?>

		<section id="hero" class="clearfix">
			<div class="inner clearfix">
				<div class="hero-video">
					<div class="inner">
						<div id="wistia_7tetgpextz" class="wistia_embed" style="width:620px;height:300px;" data-video-width="620" data-video-height="300">&nbsp;</div>
						<script charset="ISO-8859-1" src="http://fast.wistia.com/static/concat/E-v1.js"></script>
						<script>
						wistiaEmbed = Wistia.embed("7tetgpextz", {
						  version: "v1",
						  videoWidth: 620,
						  videoHeight: 300,
						  playerColor: "22a1db",
						  endVideoBehavior: "reset",
						  videoFoam: true
						});
						</script>
					</div>
				</div>
				
				<div class="hero-text">
					<h2>Contour Your Body</h2>
					<h3>Reduce Unwanted Fat with CoolSculpting</h3>
					<a class="btn btn-grey" href="consultation.php">Schedule a Consultation</a>
				</div>
			</div>
		</section>
		<div class="background">&nbsp;</div>	
		<div class="wrapper clearfix">
			
			<div class="twothird alpha">

				<div class="bagallery content-box">
					<h2>Before and After</h2>
					<a href="gallery.php" class="view-all">View More &rsaquo;</a>
					<div class="bagallerywrap">
						<div class="ba-slider">
						    <img src="assets/images/beforeafter/bowes-before.jpg" alt="" />
							<img src="assets/images/beforeafter/bowes-after.jpg" alt="" />
						</div>
					</div>
					<div class="ba-slider-text clearfix">
						<div class="before"><p>Before</p></div>
						<div class="after">
							<p>8 Weeks After</p>
							<p class="physician">Procedure by Leyda E. Bowes, MD</p>
						</div>
					</div>
				</div>
				<div class="bio content-box clearfix">
					<img src="assets/images/gerrish.png" alt="" />
					<p><span>Dr. Scott Gerrish</span> is the first practice in Virginia to offer Zeltiq™ CoolSculpting, a new, revolutionary, non-invasive method that eliminates unwanted fat bulges.</p>
				</div>
			</div>

			<div class="onethird">

				<div class="newsletter content-box clearfix">
					<h2>Get the latest news from Dr. Gerrish &amp; CoolSculpting</h2>
					<form id="newsletterForm" action="http://cl.exct.net/subscribe.aspx?lid=3912734" name="subscribeForm" method="post">
						<input type="hidden" name="thx" value="http://scottgerrish.coolsculpting.com.php53-8.ord1-1.websitetestlink.com/thankemail.php" />
						<input type="hidden" name="err" value="http://scottgerrish.coolsculpting.com.php53-8.ord1-1.websitetestlink.com/error.php" />
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

				<aside class="promo content-box">
					<h2>Keep your beach body all year long</h2>
					<a href="howitworks.php" class="btn btn-blue">More about CoolSculpting</a>
				</aside>

				<div class="facebook-like content-box clearfix">
					
					<!-- This facebook link does NOT belong to Dr Gerrish. Replace this with correct link before production -->						
					<div class="fb-like" style="float:left;" data-href="http://facebook.com/coolsculpting" data-send="true" data-layout="box_count" data-width="450" data-show-faces="false"></div>
					<h2>Like CoolSculpting on Facebook.</h2>

				</div>

			</div>

			
		</div><!-- .wrapper -->
	
<?php 
	include('template/footer.php');
?>