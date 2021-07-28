
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from pixelgeeklab.com/html/flatize/page-contact2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Jul 2021 11:33:30 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Flatize - Shop HTML5 Responsive Template">
	<meta name="author" content="pixelgeeklab.com">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Flatize - Shop HTML5 Responsive Template</title>

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>

	<!-- Bootstrap -->
	<link href="<?php echo base_url();?>/public/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Icon Fonts -->
	<link href="<?php echo base_url();?>/public/assets/css/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

	<!-- Owl Carousel Assets -->
	<link href="<?php echo base_url();?>/public/assets/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="<?php echo base_url();?>/public/assets/vendor/owl-carousel/owl.theme.css" rel="stylesheet">
	<link href="<?php echo base_url();?>/public/assets/vendor/owl-carousel/owl.transitions.css" rel="stylesheet">
	
	<!-- bxslider -->
	<link href="<?php echo base_url();?>/public/assets/vendor/bxslider/jquery.bxslider.css" rel="stylesheet">
	<!-- flexslider -->
	<link rel="stylesheet" href="<?php echo base_url();?>/public/assets/vendor/flexslider/flexslider.css" media="screen">

	<!-- Theme -->
	<link href="<?php echo base_url();?>/public/assets/css/theme-animate.css" rel="stylesheet">
	<link href="<?php echo base_url();?>/public/assets/css/theme-elements.css" rel="stylesheet">
	<link href="<?php echo base_url();?>/public/assets/css/theme-blog.css" rel="stylesheet">
	<link href="<?php echo base_url();?>/public/assets/css/theme-shop.css" rel="stylesheet">
	<link href="<?php echo base_url();?>/public/assets/css/theme.css" rel="stylesheet">
	
	<!-- Style Switcher-->
	<link rel="stylesheet" href="<?php echo base_url();?>/public/assets/style-switcher/css/style-switcher.css">
	<link href="<?php echo base_url();?>/public/assets/css/colors/cyan/style.html" rel="stylesheet" id="layoutstyle">

	<!-- Theme Responsive-->
	<link href="<?php echo base_url();?>/public/assets/css/theme-responsive.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div id="page">
		<?php echo view('common_pages/header.php'); ?>
		
		<!-- Begin Login -->
		<div class="login-wrapper">
			<form id="form-login" role="form">
				<h4>Login</h4>
				<p>If you're a member, login here.</p>
				<div class="form-group">
					<label for="inputusername">Username</label>
					<input type="text" class="form-control input-lg" id="inputusername" placeholder="Username">
				</div>
				<div class="form-group">
					<label for="inputpassword">Password</label>
					<input type="password" class="form-control input-lg" id="inputpassword" placeholder="Password">
				</div>
				<ul class="list-inline">
					<li><a href="#">Create new account</a></li>
					<li><a href="#">Request new password</a></li>
				</ul>
				<button type="submit" class="btn btn-white">Log in</button>
			</form>
		</div>
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
			<div class="container">
				<div class="contact-content contact-content-full animation">
					
					<div class="row">
						<div class="col-md-4">
							<h4><i class="fa fa-map-marker"></i> India</h4>
							<address>11/2 Baser-colony Mandsaur (M.P.)<br>(+91) 9516041729<br><a href="mailto:pavitramod11@gmail.com">pavitramod11@gmail.com</a></address>
						</div>
						<div class="col-md-8">
							<h4><i class="fa fa-map-marker"></i> Map</h4>
							
						</div>
						
					</div>
					<hr class="small">
					<?php if(session()->get("success")){  ?> <span class="text-success" style="font-size: 20px;"><?= session()->get("success") ?></span><br><br><?php }?>
					
					<h3>Contact Here</h3>
					
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
			</div>
		</div>
		<!-- End Main -->
		
		<!-- Begin footer -->
		<?php echo view('common_pages/footer.php'); ?>
		<!-- End footer -->
			
	</div>

		<!-- Begin Quickview -->
	<div class="modal fade quickview-wrapper" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
				<div class="product-detail">
				<div class="row">
					<div class="col-sm-6">
						<div class="product-preview">
							<ul class="bxslider" id="slider1">
								<li><img alt="" class="img-responsive" src="images/content/products/product-1.jpg"></li>
								<li><img alt="" class="img-responsive" src="images/content/products/product-1-1.jpg"></li>
								<li><img alt="" class="img-responsive" src="images/content/products/product-1-2.jpg"></li>
								<li><img alt="" class="img-responsive" src="images/content/products/product-1-3.jpg"></li>
								<li><img alt="" class="img-responsive" src="images/content/products/product-1-4.jpg"></li>
							</ul>

							<ul class="list-inline bx-pager">
								<li><a data-slide-index="0" href="#"><img alt="" class="img-responsive" src="images/content/products/product-thumb.jpg"></a></li>
								<li><a data-slide-index="1" href="#"><img alt="" class="img-responsive" src="images/content/products/product-thumb-1.jpg"></a></li>
								<li><a data-slide-index="2" href="#"><img alt="" class="img-responsive" src="images/content/products/product-thumb-2.jpg"></a></li>
								<li><a data-slide-index="3" href="#"><img alt="" class="img-responsive" src="images/content/products/product-thumb-3.jpg"></a></li>
								<li><a data-slide-index="4" href="#"><img alt="" class="img-responsive" src="images/content/products/product-thumb-4.jpg"></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="summary entry-summary">

							<h3>Denim Trousers with faux leather details</h3>
							
							<div class="reviews-counter clearfix">
								<div class="rating five-stars pull-left">
									<div class="star-rating"></div>
									<div class="star-bg"></div>
								</div>
								<span>3 Reviews</span>
							</div>

							<p class="price">
								<span class="amount">$29.99</span>
							</p>
							
							<ul class="list-inline list-select clearfix">
								<li>
									<div class="list-sort">
										<select class="formDropdown">
											<option>Select Size</option>
											<option>XS</option>
											<option>S</option>
											<option>M</option>
											<option>L</option>
											<option>XL</option>
											<option>XXL</option>
										</select>
									</div>
								</li>
								<li class="color"><a href="#" class="color1"></a></li>
								<li class="color"><a href="#" class="color2"></a></li>
								<li class="color"><a href="#" class="color3"></a></li>
								<li class="color"><a href="#" class="color4"></a></li>
							</ul>

							<form method="post" class="cart">
								<div class="quantity pull-left">
									<input type="button" class="minus" value="-">
									<input type="text" class="input-text qty" title="Qty" value="1" name="quantity" min="1" step="1">
									<input type="button" class="plus" value="+">
								</div>
								<a href="#" class="btn btn-grey">
									<span><i class="fa fa-heart"></i></span>
								</a>
								<button href="#" class="btn btn-primary btn-icon"><i class="fa fa-shopping-cart"></i> Add to cart</button>
							</form>
							
							<ul class="list-unstyled product-meta">
								<li>Sku: 54329843</li>
								<li>Categories: <a href="#">Leather</a> <a href="#">Jeans</a> <a href="#">Men</a></li>
								<li>Tags: <a href="#">Shoes</a> <a href="#">Jeans</a> <a href="#">Men</a> <a href="#">T-shirt</a></li>
							</ul>
							
							<div class="panel-group" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Description</a> </h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in">
										<div class="panel-body"> 
											<p>Korem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
											<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. qui dolorem ipsum quia dolor sit amet.</p>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Addition Information</a> </h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse">
										<div class="panel-body"> <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p> </div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Reviews (3)</a> </h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse">
										<div class="panel-body post-comments">
											<ul class="comments">
												<li>
													<div class="comment">
														<div class="img-circle"> <img class="avatar" width="50" alt="" src="images/content/blog/avatar.png"> </div>
														<div class="comment-block">
															<span class="comment-by"> <strong>Frank Reman</strong></span>
															<span class="date"><small><i class="fa fa-clock-o"></i> January 12, 2013</small></span>
															<p>Lorem ipsum dolor sit amet.</p>
														</div>
													</div>
												</li>
												<li>
													<div class="comment">
														<div class="img-circle"> <img class="avatar" width="50" alt="" src="images/content/blog/avatar.png"> </div>
														<div class="comment-block">
															<span class="comment-by"> <strong>Frank Reman</strong></span>
															<span class="date"><small><i class="fa fa-clock-o"></i> July 11, 2014</small></span>
															<p>Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae</p>
														</div>
													</div>
												</li>
												<li>
													<div class="comment">
														<div class="img-circle"> <img class="avatar" width="50" alt="" src="images/content/blog/avatar.png"> </div>
														<div class="comment-block">
															<span class="comment-by"> <strong>Frank Reman</strong></span>
															<span class="date"><small><i class="fa fa-clock-o"></i> July 11, 2014</small></span>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Quickview -->
	
	<!-- Begin Search -->
	<div class="modal fade bs-example-modal-lg search-wrapper" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<p class="clearfix"><button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button></p>
				<form class="form-inline form-search" role="form">
					<div class="form-group">
						<label class="sr-only" for="textsearch">Enter text search</label>
						<input type="text" class="form-control input-lg" id="textsearch" placeholder="Enter text search">
					</div>
					<button type="submit" class="btn btn-white">Search</button>
				</form>
			</div>
		</div>
	</div>
	<!-- End Search -->
	
	<!-- Begin Style Switcher -->
	<div id="style-switcher">
		<div id="toggle_button"> <a href="#"><i class="fa fa-pencil"></i></a> </div>
		<div id="style-switcher-menu">
			<h4 class="text-center">Style Switcher</h4>
			<div class="segment">
				<ul class="theme cookie_layout_style level-0" id="bd_value">
					<li> <a style="background: #3598db" title="colors/blue/style" href="#"></a> </li>
					<li> <a style="background: #c2a772" title="colors/brown/style" href="#"></a> </li>
					<li> <a style="background: #36c877" title="colors/green/style" href="#"></a> </li>
					<li> <a style="background: #e99b1f" title="colors/orange/style" href="#"></a> </li>
					<li> <a style="background: #f64243" title="colors/red/style" href="#"></a> </li>
					<li> <a style="background: #a57bcd" title="colors/violet/style" href="#"></a> </li>
					<li> <a style="background: #e9bf1d" title="colors/yellow/style" href="#"></a> </li>
				</ul>
			</div>
			<div class="segment">
				<ul class="theme layouts">
					<li data-layout="boxed" class="btn btn-sm btn-black">Boxed</li>
					<li data-layout="widescreen" class="btn btn-black btn-sm btn-active">Widescreen</li>
				</ul>
			</div>
			<div class="segment">
				<div id="reset"> <a href="#" class="btn btn-sm btn-greyer reset">Reset</a> </div>
			</div>
		</div>
	</div>
	<!-- Begin Style Switcher -->
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?php echo base_url();?>/public/assets/vendor/jquery.min.js"></script> 
	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="<?php echo base_url();?>/public/assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>/public/assets/bootstrap/js/bootstrap-hover-dropdown.min.js"></script>
	<script src="<?php echo base_url();?>/public/assets/vendor/owl-carousel/owl.carousel.js"></script>
	<script src="<?php echo base_url();?>/public/assets/vendor/modernizr.custom.js"></script>
	<script src="<?php echo base_url();?>/public/assets/vendor/jquery.stellar.js"></script>
	<script src="<?php echo base_url();?>/public/assets/vendor/imagesloaded.pkgd.min.js"></script>
	<script src="<?php echo base_url();?>/public/assets/vendor/masonry.pkgd.min.js"></script>
	<script src="<?php echo base_url();?>/public/assets/vendor/jquery.pricefilter.js"></script>
	<script src="<?php echo base_url();?>/public/assets/vendor/bxslider/jquery.bxslider.min.js"></script>
	<script src="<?php echo base_url();?>/public/assets/vendor/mediaelement-and-player.js"></script>
	<script src="<?php echo base_url();?>/public/assets/vendor/waypoints.min.js"></script>
	<script src="<?php echo base_url();?>/public/assets/vendor/flexslider/jquery.flexslider-min.js"></script>
	<script src="<?php echo base_url();?>/public/assets/vendor/jquery.validation/jquery.validation.js"></script>
	<script src="<?php echo base_url();?>/public/assets/bootstrap/datetimepicker/js/moment.js"></script>
	<script src="<?php echo base_url();?>/public/assets/bootstrap/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	
	<script src="<?php echo base_url();?>/public/assets/js/contact.js"></script>
	
	<!-- Theme Initializer -->
	<script src="<?php echo base_url();?>/public/assets/js/theme.plugins.js"></script>
	<script src="<?php echo base_url();?>/public/assets/js/theme.js"></script>
	
	<!-- Style Switcher -->
	<script type="text/javascript" src="<?php echo base_url();?>/public/assets/style-switcher/js/switcher.js"></script>
	
	<script type="text/javascript">
		$(function () {
			$('#datetimepicker1').datetimepicker();
			$('#datetimepicker4').datetimepicker({
				pickDate: false
			});
		});
	</script>
	
</body>

<!-- Mirrored from pixelgeeklab.com/html/flatize/page-contact2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Jul 2021 11:33:30 GMT -->

</html>
