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
				<p><em>Reduce Unwanted Fat with CoolSculpting</em></p>
				<p>Dr. Jody Comstock’s CoolSculpting expertise sets her apart from other physicians in Tucson. She and her team have a special interest in helping you safely reduce stubborn fat, and say hello to the body you want—without needles, surgery or downtime.</p>
				<p class="clearfix"><a href="consultation.php" class="btn btn-grey">Schedule a Consultation</a></p>
			</div>
		</section>
			
		<div class="wrapper clearfix">
			
			<div class="twothird alpha">
				<div class="newsletter content-box ctb-blue clearfix">
					<img src="assets/images/comstock.jpg" alt="Jody Comstock, MD" class="border-box">
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

				<div class="bagallery content-box ctb-grey">
					<h2>Before and After Gallery</h2>
					<p class="view-all"><a href="gallery.php">View All</a></p>
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
			</div>

			<div class="onethird">
				<!--<div class="take-quiz content-box ctb-blue">
					<h2>Target Your<br/> Trouble Zones.</h2>
					<p>Find and fix your problem areas with the CoolSculpting  quiz.</p>
					<p class="clearfix"><a href="#" class="btn btn-blue">Take the quiz</a></p>
				</div>-->

				<div class="directions content-box ctb-grey">
					<a href="https://maps.google.com/maps?q=6127+N+La+Cholla+Blvd+%23101+Tucson,+Arizona+85741&hnear=6127+N+La+Cholla+Blvd+%23101,+Tucson,+Pima,+Arizona+85741&gl=us&t=m&z=16" target="_blank" class="btn btn-grey btn-sm">Get Directions</a>
				</div>

				<div class="facebook-like content-box ctb-grey clearfix">
					<p>Like CoolSculpting on Facebook.</p>
					<div class="fbwrap"><iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.coolsculpting.com%2F&amp;send=false&amp;layout=standard&amp;width=51&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=35&amp;appId=410587769049033" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:51px; height:25px;" allowTransparency="true"></iframe></div>
				</div>

				<aside class="promo content-box ctb-blue">
					<p>Reduce fat by up to 23%* for real, noticeable results.</p>
					<p class="clearfix"><a href="howitworks.php" class="btn btn-blue">More about CoolSculpting</a></p>
				</aside>

				<p class="footnote">* Data on file	</p>
			</div>

			
		</div><!-- .wrapper -->
	
<?php 
	include('template/footer.php');
?>