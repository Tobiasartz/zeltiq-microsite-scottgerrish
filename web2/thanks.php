<?php 

	$title 			= "CoolSculpting";
	$bodyClass		= "interior";
	$description 	= "";

	include('template/header.php');

?>
			
		<div class="wrapper clearfix content">
			
				
			<div class="twothird alpha content">
				<h1>Your Consultation Request Has Been Sent</h1>

				<p>Thank you for requesting a CoolSculpting consultation from Dr. Scott Gerrish and Gerrish &amp; Associates. An office representative will follow up with you soon to confirm the time and date of your appointment.</p>
			</div>

			<aside class="onethird">

				<div class="request content-box">
					<p>Reduce fat by up to 23%* for real, noticeable results.</p>
					<p class="disclaimer">*Data on file</p>
					<a class="btn btn-blue btn-sm" href="/gallery.php">More About CoolSculpting</a>
				</div>

				<aside class="schedule content-box">
					<p>Meet with a body assessing expert at Gerrish &amp; Associates to see how CoolSculpting can help you.</p>
					<a class="btn btn-blue btn-sm" href="/consultation.php">Schedule a Consultation</a>
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