<?php 

	$title 			= "About CoolSculpting Physician Dr. Scott Gerrish &amp; Associates MedSpa";
	$bodyClass		= "interior about";
	$description 	= "Dr. Scott Garrish is a leading Virginia non-invasive cosmetic specialist, providing patients with experienced CoolSculpting treatments and consultations. Contact Garrish &amp; Associates MedSpa.";

	include('template/header.php');

?>

		<section id="hero">
			<div class="inner clearfix">
				<div class="hero-video">
					<img src="assets/images/gerrish.jpg" class="gerrish" alt="">
				</div>
				<div class="hero-text">
					<h2>About Dr. Scott Gerrish</h2>
				</div>
			</div>
		</section>

		<div class="wrapper clearfix">
			
			<div class="twothird alpha">
				<div class="content-box">				
					<p>DR. Scott Gerrish is the first practice in Virginia to offer Zeltiq<sup>&trade;</sup>, a new, revolutionary, non-invasive method that eliminates unwanted fat bulges.</p>
					<p>Dr. Gerrish has been featured in leading local and national periodicals such as The Washingtonian, Baltimore Style and STYLE magazine. Dr. Gerrish is one of the most experienced providers of non-invasive to minimally invasive cosmetic procedures.</p>					
					<p>Dr. Gerrish completed his residency at The George Washington University Medical Center and has been delivering non-invasive to minimally invasive medical cosmetic treatments since 1996.</p>
					<p>If you're ready to enhance your appearance, visit Dr. Scott Gerrish and the cosmetic dermatology leaders at Gerrish &amp; Associates. For your comprehensive CoolSculpting assessment, <a href="/consultation.php">request a consultation</a> today.</p>
				</div>
			</div>

			<aside class="onethird">

				<div class="request content-box">
					<p>Reduce fat by up to 23%* for real, noticeable results.</p>
					<p class="disclaimer">*Data on file</p>
					<a class="btn btn-blue btn-sm" href="/howitworks.php">More About CoolSculpting</a>
				</div>

				<aside class="schedule content-box">
					<p>Meet with a body assessing expert at Gerrish &amp; Associates to see how CoolSculpting can help you.</p>
					<a class="btn btn-blue btn-sm" href="#">Schedule a Consultation</a>
				</aside>

				<div class="newsletter content-box clearfix">
					<h3>Get the latest news from Dr. Gerrish &amp; CoolSculpting</h3>
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

			</aside>

			
		</div><!-- .wrapper -->
<?php 
	include('template/footer.php');
?>