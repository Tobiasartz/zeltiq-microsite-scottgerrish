<?php 

	$title 			= "CoolSculpting - Hear From Real Patients";
	$bodyClass		= "interior patients";
	$description 	= "";

	include('template/header.php');

?>
			
		<div class="wrapper clearfix">
			
			<header>
				<h1>Hear From Real Patients</h1>
				<div class="social-links">
					
				</div>
			</header>

			<div class="onethird">
				<p>Real patients. Real results. These patients might have lost stubborn fat, but what you’ll instantly notice is the confidence they gained by <a href="gallery.php">getting their bodies back</a> with help from CoolSculpting.</p>		

				<hr>

				<?php include('template/email-signup.php'); ?>	
			</div>

			<div class="twothird">
				<!--
				By use of this code snippet, I agree to the Brightcove Publisher T and C 
				found at https://accounts.brightcove.com/en/terms-and-conditions/. 
				-->

				<script language="JavaScript" type="text/javascript" src="http://admin.brightcove.com/js/BrightcoveExperiences.js"></script>

				<!-- 
				This script tag will cause the Brightcove Players defined above it to be created as soon
				as the line is read by the browser. If you wish to have the player instantiated only after
				the rest of the HTML is processed and the page load is complete, remove the line.
				-->
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
				</div>

				<?php include('template/aside-boxes.php'); ?>
			</div>
			
		</div><!-- .wrapper -->
		<div class="background"></div>
<?php 
	include('template/footer.php');
?>