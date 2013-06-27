<?php 

	$title 			= "CoolSculpting - About";
	$bodyClass		= "interior";
	$description 	= "";

	include('template/header.php');

?>

		<article class="wrapper clearfix">
			
			<header>
				<h1>About Dr. Jody Comstock</h1>

			</header>

			<div class="onethird alpha content">
				<p>Dr. Jody Comstock is a leading dermatologist in Tucson, AZ. She is board-certified in both dermatology and pediatrics, completed her dermatology residency at the University of Arizona after receiving her medical degree from Michigan State University and is an author and lecturer.</p>

				<p>At Skin Spectrum, Dr. Jody Comstock and her team specialize in the removal of <a href="howitworks.php">unwanted and stubborn fat</a>. In practice for over two decades, Skin Spectrum's dermatologists are highly regarded in Tucson, Arizona and across the United States for comprehensive, non-surgical procedures that incorporate wellness strategies.</p>

				<p>If you're ready to enhance your appearance, visit Dr. Jody Comstock and the cosmetic dermatology leaders at Skin Spectrum. For your comprehensive CoolSculpting assessment, <a href="consultation.php">request a consultation</a> today.</p>
								
				<hr>

				<?php include('template/email-signup.php'); ?>
		
			</div>

			<div class="twothird">
				<div class="about-slides">
					<img src="assets/images/comstock-lg.jpg" alt="">
				</div>
				<?php include('template/aside-boxes.php'); ?>
			</div>

		</article><!-- .wrapper -->
	
<?php 
	include('template/footer.php');
?>