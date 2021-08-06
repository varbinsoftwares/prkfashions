
		<?php echo view('common_pages/header.php'); ?>
		
		<!-- Begin Login -->
		
		<!-- End Login -->
		
		
		<!-- Begin Main -->
		<div role="main" class="main">
		
			<!-- Begin page top -->
			<section class="page-top-md">
				<div class="container">
					<div class="page-top-in">
						<h2><span>Get In Touch</span></h2>
					</div>
				</div>
			</section>
			<!-- End page top -->
			<div class="container" >
				<div class="contact-content contact-content-full animation">
					
					
		<section >
			<div class="container" style="Padding: 40px 70px; " >
					<?php if(session()->get("success")){  ?> <span class="text-success" style="font-size: 20px;"><?= session()->get("success") ?></span><br><br><?php }?>
					
					<h3 style="text-align:center;">Contact Here</h3><br><br>
					
					<form id="contact-form" name="form1" method="post" action="Contact/usercontact">
						<div class="row">
							<div class="col-xs-5 col-sm-4">
								<div class="form-group">
									<label for="name">Your Name*</label>
									<input type="text" class="form-control" id="name" name="name" value="" data-msg-required="Please enter your name." required>
								</div>
								<div class="form-group">
									<label for="customer_mail">Your Email*</label>
									<input type="email" class="form-control" id="customer_mail" name="customer_mail" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." required>
								</div>
								<div class="form-group">
									<label for="customer_mail">City*</label>
									<input type="text" class="form-control" id="customer_city" name="customer_city" value="" data-msg-required="Please enter your city." data-msg-email="Please enter a valid city." required>
								</div>
								<div class="form-group">
									<label for="customer_mail">Mobile*</label>
									<input type="text" class="form-control" id="customer_mob" name="customer_mob" value="" data-msg-required="Please enter your mobile no." data-msg-email="Please enter a valid mobile no.." required>
								</div>
								
								
							</div>
							
							<div class="col-xs-7 col-sm-8">
								<div class="form-group">
									<label for="subject">Subject*</label>
									<input type="text" class="form-control" id="subject" name="subject" value="" data-msg-required="Please enter the subject." required>
								</div>
								<div class="form-group">
									<label for="comments">Your Message*</label>
									<textarea class="form-control" id="comments" name="comments" rows="8" data-msg-required="Please enter your message." required></textarea>
								</div>
							
								<div class="form-group">
									<input type="submit" value="Submit" class="btn btn-primary" data-loading-text="Loading...">
								</div>
							</div>
						</div>
					</form>
				</div>
			</section>
			<hr class="large">
			<div class="row">
						<div class="col-md-6 v-center ">
							<h4 style="text-align: center;"><i class="fa fa-map-marker"></i> India</h4>
							<address style="text-align: center;">11/2 Baser-colony Mandsaur (M.P.)<br>(+91) 9516041729<br><a href="mailto:pavitramod11@gmail.com">pavitramod11@gmail.com</a></address>
						</div>
						<div class="col-md-6">
						<img src="public/assets/images/map/map.jpg">
							
						</div>
						
					</div>
					
					
				</div>
			</div>
		</div>
		<!-- End Main -->
		
		<!-- Begin footer -->
		<?php echo view('common_pages/footer.php'); ?>
		<!-- End footer -->
			
	