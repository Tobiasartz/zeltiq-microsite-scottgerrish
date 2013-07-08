<?php 

	$title 			= "CoolSculpting - Consultation";
	$bodyClass		= "interior consultation";
	$description 	= "";

	include('template/header.php');

?>
			
		<article class="wrapper clearfix">
			
			<header>
				<h1> Schedule a Consultation</h1>
			</header>
	
			<?php 
			$error = $_GET['error'];
			if (isset($error)) { ?>
				<div class="alert error">
					<p>Please check the required fields.</p>
				</div>
			<?php } ?>

			<div class="onethird alpha content">
				<h2>Request a CoolSculpting Consultation</h2>
				<p>Fill out and submit a consultation request today to learn how CoolSculpting and Skin Spectrum can transform your body—without surgery or downtime.</p>
				
				<hr>

				<p>Reduce fat by up to 23%* for real, noticeable results.</p>
				<p class="clearfix"><a href="howitworks.php" class="btn btn-blue">More about CoolSculpting</a></p>
				
				<hr>

				<?php include('template/email-signup.php'); ?>
			</div>

			<div class="twothird">
				<form id="consultForm" action="http://cl.exct.net/subscribe.aspx?lid=3906298" name="subscribeForm" method="post" novalidate="novalidate">
					<input type="hidden" name="thx" value="http://coolsculptingtucson.com/thanks.php" />
					<input type="hidden" name="err" value="http://coolsculptingtucson.com/consultation.php?error" />
					<input type="hidden" name="MID" value="10683065" />
					<input type="hidden" name="Birth Date" value="1/1/1900" />
					<input type="hidden" name="Gender" value="Gender" />
					
					<ul>
						<li><label for="firstname">First Name*</label>
							<input id="firstname" type="text" name="First Name" class="text"></li>
						<li><label for="lastname">Last Name*</label>
							<input id="lastname" type="text" name="Last Name" class="text"></li>
						<li><label for="email">Email Address*</label>
							<input id="email" type="text" name="Email Address" class="text"></li>
						<li><label for="phone">Phone Number</label>
							<input type="text" name="Phone Number" class="text"></li>
						<li><label for="zip">ZIP Code*</label>
							<input id="zipcode" type="text" name="ZIP Code" class="text" maxlength="5"></li>
						<li><label for="appt">Ideal Appointment Date</label>
							<input type="text" name="Ideal Appointment Date" class="text"></li>
						<li class="dropdown"><label for="area">Areas of Concern (select all that apply)</label><!-- <input type="text" class="text"> --></li>
							<li class="checksingle checksplit clearfix"><input type="checkbox" name="Stomach Area" class="checkbox" id="stomach"/><label for="stomach">Stomach area</label></li>	
							<li class="checksingle checksplit clearfix"><input type="checkbox" name="Sides" class="checkbox" id="sides"/><label for="sides">Sides/flanks</label></li>	
							<li class="checksingle checksplit clearfix"><input type="checkbox" name="Skin Care" class="checkbox" id="skin"/><label for="skin">Skin care</label></li>	
							<li class="checksingle checksplit clearfix"><input type="checkbox" name="Lip Enhancement" class="checkbox" id="lips"/><label for="lips">Lip enhancement</label></li>	
							<li class="checksingle checksplit clearfix"><input type="checkbox" name="Wrinkles" class="checkbox checkboxtall" id="wrinkles"/><label for="wrinkles">Wrinkles and anti-aging treatments</label></li>	
							<li class="checksingle checksplit clearfix"><input type="checkbox" name="Hair Removal" class="checkbox" id="hair"/><label for="hair">Hair removal</label></li>	
						<li style="clear:both;">&nbsp;</li>
						<li class="checksingle clearfix">
							<input name="Opt In" checked="checked" type="checkbox" class="checkbox" id="updates" />
							<label for="updates">Sign up to receive updates from Dr. Comstock and CoolSculpting</label>
						</li>
						<li style="clear:both;">&nbsp;</li>

						<li><input id="submit" type="submit" class="btn btn-blue" value="Submit"/></li>
					</ul>
				</form>
			</div>

			<p class="footnote">* Data on file</p>
			
		</article><!-- .wrapper -->
	
<?php 
	include('template/footer.php');
?>