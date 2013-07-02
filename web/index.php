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
				<h2>Freeze Your Fat Away</h2>
				<h3>Transform yourself with CoolSculpting.</h3>
				<div class="btn btn-grey"><a href="consultation.php">Schedule a Consultation</a></div>
			</div>
		</section>
			
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
					<p><span>Dr. Scott Gerrish</span> is the first practice in Virginia to offer Zeltiq™ CoolSculpting, a new, revolutionary, non-invasive method that eliminates unwanted fat bulges.</p>
				</div>
				<div class="newsletter content-box clearfix">
					<p>Get the latest news from  Dr. Comstock<br/> and CoolSculpting</p>
					<form id="newsletterForm" action="http://cl.exct.net/subscribe.aspx?lid=3905702" name="subscribeForm" method="post">
						<input type="hidden" name="thx" value="http://coolsculptingtucson.com/thankemail.php" />
						<input type="hidden" name="err" value="http://coolsculptingtucson.com/error.php" />
						<input type="hidden" name="MID" value="10683065" />

						<input type="hidden" name="First Name" value="First" />
						<input type="hidden" name="Last Name" value="Last" />
						<input type="hidden" name="Birth Date" value="1/1/1900" />
						<input type="hidden" name="Gender" value="Gender" />

						<input type="text" name="Email Address" class="text" placeholder="Email Address" id="newsletterEmail"/>
						<input type="radio" name="SubAction" value="sub_add_update" checked="checked" class="hidden"/>
						<input type="radio" name="Email Type" value="HTML" checked="checked" class="hidden"/>
						<input type="submit" class="btn btn-blue btn-sm" value="Sign Up">
					</form>
				</div>
			</div>

			<div class="onethird">

				<div class="facebook-like content-box clearfix">
					<p>Like CoolSculpting on Facebook.</p>
					<div class="fbwrap"><iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.coolsculpting.com%2F&amp;send=false&amp;layout=standard&amp;width=51&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=35&amp;appId=410587769049033" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:51px; height:25px;" allowTransparency="true"></iframe></div>
				</div>

				<aside class="promo content-box">
					<p>Reduce fat by up to 23%* for real, noticeable results.</p>
					<p class="clearfix"><a href="howitworks.php" class="btn btn-blue">More about CoolSculpting</a></p>
				</aside>

			</div>

			
		</div><!-- .wrapper -->
	
<?php 
	include('template/footer.php');
?>