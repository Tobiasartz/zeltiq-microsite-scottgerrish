<?php 

	$title 			= "CoolSculpting - Consultation";
	$bodyClass		= "interior consultation";
	$description 	= "";

	include('template/header.php');

?>
			
		<div class="wrapper clearfix">
			
			<header>
				<h1>Schedule a Consultation</h1>
			</header>
	
			<?php 
			$error = $_GET['error'];
			if (isset($error)) { ?>
				<div class="alert error">
					<p>Please check the required fields.</p>
				</div>
			<?php } ?>

			<div class="twothird">
				<form id="consultForm" action="http://cl.exct.net/subscribe.aspx?lid=3906298" name="subscribeForm" method="post" novalidate="novalidate">
					<input type="hidden" name="thx" value="http://coolsculptingtucson.com/thanks.php" />
					<input type="hidden" name="err" value="http://coolsculptingtucson.com/consultation.php?error" />
					<input type="hidden" name="MID" value="10683065" />
					<input type="hidden" name="Birth Date" value="1/1/1900" />
					<input type="hidden" name="Gender" value="Gender" />
					
					<ul>
						<li><label for="firstname">First Name<span>*</span></label>
							<input id="firstname" type="text" name="First Name" class="text"></li>
						<li><label for="lastname">Last Name<span>*</span></label>
							<input id="lastname" type="text" name="Last Name" class="text"></li>
						<li><label for="email">Email Address<span>*</span></label>
							<input id="email" type="text" name="Email Address" class="text"></li>
						<li><label for="phone">Phone Number</label>
							<input type="text" name="Phone Number" class="text"></li>
						<li><label for="zip">ZIP Code<span>*</span></label>
							<input id="zipcode" type="text" name="ZIP Code" class="text" maxlength="5"></li>
						<li><label for="appt">Ideal Appointment Date</label>
							<input type="text" name="Ideal Appointment Date" class="text"></li>
						<li><label for="area">Areas of Concern<br />(select all that apply)</label></li>
							<li class="checksplit clearfix"><input type="checkbox" name="Stomach Area" id="stomach"/><label for="stomach">Stomach area</label></li>	
							<li class="checksplit clearfix"><input type="checkbox" name="Sides" id="sides"/><label for="sides">Sides/flanks</label></li>	
							<li class="checksplit clearfix"><input type="checkbox" name="Skin Care" id="skin"/><label for="skin">Skin care</label></li>	
							<li class="checksplit clearfix"><input type="checkbox" name="Lip Enhancement" id="lips"/><label for="lips">Lip enhancement</label></li>	
							<li class="checksplit clearfix"><input type="checkbox" name="Wrinkles" class="checkbox checkboxtall" id="wrinkles"/><label for="wrinkles">Wrinkles and anti-aging treatments</label></li>	
							<li class="checksplit clearfix"><input type="checkbox" name="Hair Removal" id="hair"/><label for="hair">Hair removal</label></li>	
						<li style="clear:both;">&nbsp;</li>
						<li class="checksingle clearfix">
							<input name="Opt In" checked="checked" type="checkbox" id="updates" />
							<label for="updates">Sign up to receive updates from Dr. Gerrish and CoolSculpting</label>
						</li>
						<li style="clear:both;">&nbsp;</li>

						<li>

						<button name="submit"id="submit"  type="submit" class="btn btn-blue">Submit</button></li>
					</ul>
				</form>
			</div>
		<aside class="onethird">

			<div class="request content-box">
				<h2>Request a CoolSculpting consultation</h2>
				<p>Fill out and submit a consultation request today to learn how CoolSculpting and Skin Spectrum can transform your body—without surgery or downtime.</p>
			</div>
			
			<div class="promo content-box">
				<h2>Keep your beach body all year long</h2>
				<a href="howitworks.php" class="btn btn-blue">More about CoolSculpting</a>
			</div>

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

		</aside>
			
		</div><!-- .wrapper -->
<?php 
	include('template/footer.php');
?>