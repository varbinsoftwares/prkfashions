
		<?php echo view('common_pages/header.php'); ?>
		
		<!-- Begin Login -->
		
		<!-- End Login -->
		
		
		<!-- Begin Main -->
		<div role="main" class="main">
		
			<!-- Begin page top -->
			<section class="page-top">
				<div class="container">
					<div class="page-top-in">
						<ol class="breadcrumb pull-left">
							<li><a href="#">Men</a></li>
							<li><a href="#">Jeans</a></li>
							<li class="active">Checked Jeans</li>
						</ol>
						<ul class="pager pull-right">
							<li><a href="#">&laquo; Previous</a></li>
							<li><a href="#">Next &raquo;</a></li>
						</ul>
					</div>
				</div>
			</section>
			<!-- End page top -->
			
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="product-preview">
							<div class="flexslider">
								<ul class="slides">
									<li data-thumb="images/content/products/product-1.jpg">
										<img src="public/assets/product_images/SIS_URBAN/<?php echo $pid."/" .$slideobj["main_image"];?>" alt="">
									</li>
									<li data-thumb="images/content/products/product-1-1.jpg">
										<img src="images/content/products/product-1-1.jpg" alt="">
									</li>
									<li data-thumb="images/content/products/product-1-2.jpg">
										<img src="images/content/products/product-1-2.jpg" alt="">
									</li>
									<li data-thumb="images/content/products/product-1-3.jpg">
										<img src="images/content/products/product-1-3.jpg" alt="">
									</li>
									<li data-thumb="images/content/products/product-1-4.jpg">
										<img src="images/content/products/product-1-4.jpg" alt="">
									</li>
								</ul>
							</div>
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
			
			<!-- Begin Related Products -->
			<section class="products-slide">
				<div class="container">
					<h2 class="title"><span>Related Products</span></h2>
					<div class="row">
						<div id="owl-product-slide" class="owl-carousel product-slide">
							<div class="col-md-12">
								<div class="item product">
									<div class="product-thumb-info">
										
										<div class="product-thumb-info-image">
											<span class="product-thumb-info-act">
												<a href="javascript:void(0);" data-toggle="modal" data-target=".quickview-wrapper" class="view-product">
													<span><i class="fa fa-external-link"></i></span>
												</a>
												<a href="shop-cart-full.html" class="add-to-cart-product">
													<span><i class="fa fa-shopping-cart"></i></span>
												</a>
											</span>
											<img alt="" class="img-responsive" src="images/content/products/product-1.jpg">
										</div>
										
										<div class="product-thumb-info-content">
											<span class="price pull-right">29.99 USD</span>
											<h4><a href="shop-product-detail2.html">Denim shirt</a></h4>
											<span class="item-cat"><small><a href="#">Jackets</a></small></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="item product">
									<div class="product-thumb-info">
										<div class="product-thumb-info-image">
											<span class="product-thumb-info-act">
												<a href="javascript:void(0);" data-toggle="modal" data-target=".quickview-wrapper" class="view-product">
													<span><i class="fa fa-external-link"></i></span>
												</a>
												<a href="shop-cart-full.html" class="add-to-cart-product">
													<span><i class="fa fa-shopping-cart"></i></span>
												</a>
											</span>
											<img alt="" class="img-responsive" src="images/content/products/product-2.jpg">
										</div>
										<div class="product-thumb-info-content">
											<span class="price pull-right">25.99 USD</span>
											<h4><a href="shop-product-detail2.html">Poplin shirt with fine pleated bands</a></h4>
											<span class="item-cat"><small><a href="#">Shirts</a></small></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="item product">
									<a href="shop-product-detail1.html">
										<span class="bag bag-hot">Hot</span>
									</a>
									<div class="product-thumb-info">
										<div class="product-thumb-info-image">
											<span class="product-thumb-info-act">
												<a href="javascript:void(0);" data-toggle="modal" data-target=".quickview-wrapper" class="view-product">
													<span><i class="fa fa-external-link"></i></span>
												</a>
												<a href="shop-cart-full.html" class="add-to-cart-product">
													<span><i class="fa fa-shopping-cart"></i></span>
												</a>
											</span>
											<img alt="" class="img-responsive" src="images/content/products/product-3.jpg">
										</div>
										<div class="product-thumb-info-content">
											<span class="price pull-right">25.99 USD</span>
											<h4><a href="shop-product-detail2.html">Contrasting shirt</a></h4>
											<span class="item-cat"><small><a href="#">Stock clearance</a></small></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="item product">
									<div class="product-thumb-info">
										<div class="product-thumb-info-image">
											<span class="product-thumb-info-act">
												<a href="javascript:void(0);" data-toggle="modal" data-target=".quickview-wrapper" class="view-product">
													<span><i class="fa fa-external-link"></i></span>
												</a>
												<a href="shop-cart-full.html" class="add-to-cart-product">
													<span><i class="fa fa-shopping-cart"></i></span>
												</a>
											</span>
											<img alt="" class="img-responsive" src="images/content/products/product-4.jpg">
										</div>
										<div class="product-thumb-info-content">
											<span class="price pull-right">59.99 USD</span>
											<h4><a href="shop-product-detail2.html">Waistcoat with top stitching</a></h4>
											<span class="item-cat"><small><a href="#">Blazers</a></small></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="item product">
									<a href="shop-product-detail1.html">
										<span class="bag bag-cool">Cool</span>
									</a>
									<div class="product-thumb-info">
										<div class="product-thumb-info-image">
											<span class="product-thumb-info-act">
												<a href="javascript:void(0);" data-toggle="modal" data-target=".quickview-wrapper" class="view-product">
													<span><i class="fa fa-external-link"></i></span>
												</a>
												<a href="shop-cart-full.html" class="add-to-cart-product">
													<span><i class="fa fa-shopping-cart"></i></span>
												</a>
											</span>
											<img alt="" class="img-responsive" src="images/content/products/product-5.jpg">
										</div>
										<div class="product-thumb-info-content">
											<span class="price pull-right">39.99 USD</span>
											<h4><a href="shop-product-detail2.html">Loose fit ripped jeans</a></h4>
											<span class="item-cat"><small><a href="#">Jeans</a></small></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Top Selling -->
			
		</div>
		<!-- End Main -->
		
		<!-- Begin footer -->
		<?php echo view('common_pages/footer.php'); ?>
		<!-- End footer -->
			
	