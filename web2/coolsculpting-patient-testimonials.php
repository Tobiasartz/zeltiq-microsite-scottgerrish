<?php 

	$title 			= "CoolSculpting Patient Stories and Testimonials";
	$bodyClass		= "interior patients";
	$description 	= "Hear from actual Zeltiq CoolSculpting patients as they tell their own success stories getting rid of stubborn fat and trouble areas.";

	include('template/header.php');

?>
		<section id="hero">
			<div class="inner clearfix">
				<div class="hero-video">
				<script language="JavaScript" type="text/javascript" src="http://admin.brightcove.com/js/BrightcoveExperiences.js"></script>

				<script type="text/javascript">brightcove.createExperiences();</script>

				<!-- End of Brightcove Player -->

				<div class="video-slideshow flexslider">
					<ul class="slides">
					    <li>
							<object id="myExperience1439150257001" class="BrightcoveExperience">
							  <param name="bgcolor" value="#FFFFFF" />
							  <param name="width" value="553" />
							  <param name="height" value="311" />
							  <param name="playerID" value="867536917001" />
							  <param name="playerKey" value="AQ~~,AAAAwY-wuiE~,9p5Ic7eKM7k-gxPf1YDQl9oyQQYoHB-G" />
							  <param name="isVid" value="true" />
							  <param name="isUI" value="true" />
							  <param name="dynamicStreaming" value="true" />
							  
							  <param name="@videoPlayer" value="1439150257001" />
							</object>
					    </li>
					    <li>
							<object id="myExperience1454475225001" class="BrightcoveExperience">
							  <param name="bgcolor" value="#FFFFFF" />
							  <param name="width" value="553" />
							  <param name="height" value="311" />
							  <param name="playerID" value="867536917001" />
							  <param name="playerKey" value="AQ~~,AAAAwY-wuiE~,9p5Ic7eKM7k-gxPf1YDQl9oyQQYoHB-G" />
							  <param name="isVid" value="true" />
							  <param name="isUI" value="true" />
							  <param name="dynamicStreaming" value="true" />
							  
							  <param name="@videoPlayer" value="1454475225001" />
							</object>
					    </li>
					    <li>
					    	<object id="myExperience1439170549001" class="BrightcoveExperience">
							  <param name="bgcolor" value="#FFFFFF" />
							  <param name="width" value="553" />
							  <param name="height" value="311" />
							  <param name="playerID" value="867536917001" />
							  <param name="playerKey" value="AQ~~,AAAAwY-wuiE~,9p5Ic7eKM7k-gxPf1YDQl9oyQQYoHB-G" />
							  <param name="isVid" value="true" />
							  <param name="isUI" value="true" />
							  <param name="dynamicStreaming" value="true" />
							  
							  <param name="@videoPlayer" value="1439170549001" />
							</object>
					    </li>
					    <li>
					    	<object id="myExperience1439136035001" class="BrightcoveExperience">
							  <param name="bgcolor" value="#FFFFFF" />
							  <param name="width" value="553" />
							  <param name="height" value="311" />
							  <param name="playerID" value="867536917001" />
							  <param name="playerKey" value="AQ~~,AAAAwY-wuiE~,9p5Ic7eKM7k-gxPf1YDQl9oyQQYoHB-G" />
							  <param name="isVid" value="true" />
							  <param name="isUI" value="true" />
							  <param name="dynamicStreaming" value="true" />
							  
							  <param name="@videoPlayer" value="1439136035001" />
							</object>
					    </li>
					</ul>
				</div><!--/.flexslider -->
				</div>
				<div class="hero-text">
					<h2>Hear From Real Patients</h2>
				</div>
			</div>
		</section>
			
		<div class="wrapper clearfix">

			<div class="twothird alpha">
				<div class="content-box">
					<p>Real patients. Real results. These patients might have lost stubborn fat, but what you’ll instantly notice is the confidence they gained by <a href="gallery.php">getting their bodies back</a> with help from CoolSculpting.</p>
				</div>		
				
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
			</div>

			<aside class="onethird">

				<div class="request content-box">
					<p>Reduce fat by up to 23%* for real, noticeable results.</p>
					<p class="disclaimer">*Data on file</p>
					<a class="btn btn-blue btn-sm" href="/howitworks.php">More About CoolSculpting</a>
				</div>

				<aside class="schedule content-box">
					<p>Meet with a body assessing expert at Gerrish &amp; Associates to see how CoolSculpting can help you.</p>
					<a class="btn btn-blue btn-sm" href="/consultation.php">Schedule a Consultation</a>
				</aside>

				

			</aside>
			
		</div><!-- .wrapper -->
<?php 
	include('template/footer.php');
?>