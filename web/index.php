<?php 

	$title 			= "CoolSculpting - Home";
	$bodyClass		= "home";
	$description 	= "";

	include('template/header.php');

?>

		<section id="hero" class="clearfix">
			<div class="hero-video">
				<div id="wistia_7tetgpextz" class="wistia_embed" style="width:553px;height:311px;" data-video-width="553" data-video-height="311">&nbsp;</div>
				<script charset="ISO-8859-1" src="http://fast.wistia.com/static/concat/E-v1.js"></script>
				<script>
				wistiaEmbed = Wistia.embed("7tetgpextz", {
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
				<h2>Sculpt Your Body</h2>
				<h3>Transform yourself with CoolSculpting.</h3>
				<a class="btn btn-grey" href="consultation.php">Schedule a Consultation</a>
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
						<div class="before"><p>Before <span>Treatment</span></p></div>
						<div class="after"><p>8 Weeks After <a href="howitworks.php">CoolSculpting<sup>&reg;</sup> Treatment</a></p></div>
					</div>
					<p class="physician">Procedure by Leyda E. Bowes, MD</p>
				</div>
				<div class="bio content-box clearfix">
					<img src="assets/images/gerrish.png" alt="" />
					<p><span>Dr. Scott Gerrish</span> is the first practice in Virginia to offer Zeltiq™ CoolSculpting, a new, revolutionary, non-invasive method that eliminates unwanted fat bulges.</p>
				</div>
			</div>

			<div class="onethird">

				<div class="newsletter content-box clearfix">
					<h2>Get the latest news from Dr. Gerrish &amp; CoolSculpting</h2>
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

				<aside class="promo content-box">
					<h2>Keep your beach body all year long</h2>
					<a href="howitworks.php" class="btn btn-blue">More about CoolSculpting</a>
				</aside>

				<div class="facebook-like content-box clearfix">
					
					<!-- This facebook link does NOT belong to Dr Gerrish. Replace this with correct link before production -->						
					<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Freference%2Fplugins%2Flike&amp;send=false&amp;layout=box_count&amp;width=50&amp;show_faces=true&amp;font&amp;colorscheme=light&amp;action=like&amp;height=65&amp;appId=477875022298272" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:50px; height:65px;" allowTransparency="true"></iframe>

					<h2>Like CoolSculpting on Facebook.</h2>

				</div>

			</div>

			
		</div><!-- .wrapper -->
	
<?php 
	include('template/footer.php');
?>