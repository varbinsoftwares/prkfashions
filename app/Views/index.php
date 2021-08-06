
<?php echo view('common_pages/header.php'); ?>

<style type="text/css">
	
	.col-sm-2{
		width: 20%;
	}
	.item .product{
		width: 250px;
	}
	.owl-carousel .item{
		margin: auto;
	}
</style>
		
		<!-- Begin Login -->
		
		<!-- End Login -->
		
		<!-- Begin Main -->
		<div role="main" class="main">
			<!-- Begin Main Slide -->
			<section class="main-slide">
				<div id="owl-main-demo" class="owl-carousel main-demo">
					<div class="item" id="item1"><img src="public/assets/images/content/slides/men1.jpg" class="img-responsive" alt="Photo">
						<div class="item-caption">
							<div class="item-caption-inner">
								<div class="item-caption-wrap">
									<p class="item-cat"><a href="#">New Arrival</a></p>
									<h2>Up to 50% off<br>on selected items</h2>
									<a href="#" class="btn btn-white hidden-xs">Shop Now</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item" id="item2"><img src="public/assets/images/content/slides/jeans.jpg" class="img-responsive" alt="Photo">
						<div class="item-caption">
							<div class="item-caption-inner">
								<div class="item-caption-wrap">
									<p class="item-cat"><a href="#">Latest jeans</a></p>
									<h2>25% off<br>for selected item</h2>
									<a href="#" class="btn btn-white hidden-xs">Shop Now</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item" id="item3"><img src="public/assets/images/content/slides/slide1.jpg" class="img-responsive" alt="Photo">
						<div class="item-caption">
							<div class="item-caption-inner">
								<div class="item-caption-wrap">
									<p class="item-cat"><a href="#">Shirts</a></p>
									<h2>Free shipping<br>on order over 400/-</h2>
									<a href="#" class="btn btn-white hidden-xs">Shop Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Main Slide -->
			
			<!-- Begin Ads -->
			<section class="ads">
				<div class="container">
					<div class="row">
						<div class="col-xs-4 collect-item animation" style="opacity:0;">
							<a href="#" class="collect-item-thumb"><img src="public/assets/images/content/front_img/jeans.jpg" class="img-responsive" alt="Ad"></a>
						</div>
						<div class="col-xs-4 collect-item animation" style="opacity:0;">
							<a href="#" class="collect-item-thumb"><img src="public/assets/images/content/front_img/off.jpg" class="img-responsive" alt="Ad"></a>
						</div>
						<div class="col-xs-4 collect-item animation" style="opacity:0;">
							<a href="#" class="collect-item-thumb"><img src="public/assets/images/content/front_img/ass.jpg" class="img-responsive" alt="Ad"></a>
						</div>
					</div>
				</div>
			</section>
			<!-- End Ads -->
			
			<!-- Begin Top Selling -->
			<section class="products-slide">
				<div class="container" style="margin-top:30px;">
					<h2 class="title"><span>Top Selling</span></h2>
					<div class="row">
					
						<div id="owl-product-slide" class="owl-carousel product-slide" style="width:auto;">
						<?php
								foreach ($productslide as $pid => $slideobj) {
							
						?>
							<div class="col-lg-12 col-sm-12 animation">
								
								<div class="item product" >
									<div class="product-thumb-info">
										
										<div class="product-thumb-info-image">
											<span class="product-thumb-info-act">
												<a href="#" data-toggle="modal" data-target=".quickview-wrapper" class="view-product">
													<span><i class="fa fa-external-link"></i></span>
												</a>
												<a href="" class="add-to-cart-product">
													<span><i class="fa fa-shopping-cart"></i></span>
												</a>
											</span>
											<img alt="" class="img-responsive" src="public/assets/product_images/SIS_URBAN/<?php echo $pid."/" .$slideobj["main_image"];?>">
										</div>
										
										<div class="product-thumb-info-content">
											<span class="price pull-right"><?php echo $slideobj["price"];?></span>
											<h4><a href=""><?php echo $slideobj["title"];?></a></h4>
											<span class="item-cat"><small><a href="#"><?php echo $slideobj["tag"];?></a></small></span>
										</div>
									</div>
								</div>
							</div>
							
				         <?php }
						 ?>
						
						</div>
					</div>
				</div>
			</section>
			<!-- End Top Selling -->
			
			<!-- Begin Lookbook Women -->
			
			<!-- End Lookbook Women -->
			
			<!-- Begin New Products -->
			<section class="product-tab" >
				<div class="container" style="margin-top:50px;">
					<h2 class="title"><span>New Products</span></h2>
					<!-- Nav tabs -->
					<ul class="nav nav-tabs pro-tabs text-center animation" role="tablist">
						<li class="active"><a href="#man" role="tab" data-toggle="tab">Shirts</a></li>
					<!--	<li><a href="#woman" role="tab" data-toggle="tab">Bottom wear</a></li>
						<li><a href="#accesories" role="tab" data-toggle="tab">Accesories</a></li>---->
					</ul> 

					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane active" id="man">
							<div class="row">
								<?php
								foreach ($products as $pid => $productobj) {
							
								?>
								<div class="col-xs-6 col-sm-2 animation">
									<div class="product">
										<div class="product-thumb-info">
											<div class="product-thumb-info-image">
												<span class="product-thumb-info-act">
													<a href="" data-toggle="modal" data-target=".quickview-wrapper" class="view-product">
														<span><i class="fa fa-external-link"></i></span>
													</a>
													<a href="" class="add-to-cart-product">
														<span><i class="fa fa-shopping-cart"></i></span>
													</a>
												</span>
												<img alt="" class="img-responsive" src="public/assets/product_images/<?php echo $pid."/" .$productobj["main_image"];?>">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right"><?php echo $productobj["price"];?></span>
												<h4><a href=""><?php echo $productobj["title"];?></a></h4>
												<span class="item-cat"><small><a href="#"><?php echo $productobj["tag"];?></a></small></span>
											</div>
										</div>
									</div>
								</div>
								<?php

							}?>
							</div>
						</div>
					<!-- 	<div class="tab-pane" id="woman">
							<div class="row">
								<div class="col-xs-6 col-sm-2 animation">
									<div class="product">
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
												<img alt="" class="img-responsive" src="public/assets/images/content/products/product-9.jpg">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right">69.99 USD</span>
												<h4><a href="shop-product-detail2.html">Classic blazer</a></h4>
												<span class="item-cat"><small><a href="#">Outerwear</a></small></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-2 animation">
									<div class="product">
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
												<img alt="" class="img-responsive" src="public/assets/images/content/products/product-10.jpg">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right">39.99 USD</span>
												<h4><a href="shop-product-detail2.html">Striped full skirt</a></h4>
												<span class="item-cat"><small><a href="#">Skirts</a></small></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-2 animation">
									<div class="product">
										<a href="shop-product-detail1.html">
											<span class="bag bag-onsale">Sale</span>
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
												<img alt="" class="img-responsive" src="public/assets/images/content/products/product-11.jpg">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right">79.99 USD</span>
												<h4><a href="shop-product-detail2.html">Structured double-breasted blazer</a></h4>
												<span class="item-cat"><small><a href="#">Outerwear</a></small></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-2 animation">
									<div class="product">
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
												<img alt="" class="img-responsive" src="public/assets/images/content/products/product-12.jpg">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right">29.99 USD</span>
												<h4><a href="shop-product-detail2.html">Sheer overlay dress</a></h4>
												<span class="item-cat"><small><a href="#">Dresses</a></small></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-2 animation">
									<div class="product">
										<a href="shop-product-detail1.html">
											<span class="bag bag-onsale">Sale</span>
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
												<img alt="" class="img-responsive" src="public/assets/images/content/products/product-11.jpg">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right">79.99 USD</span>
												<h4><a href="shop-product-detail2.html">Structured double-breasted blazer</a></h4>
												<span class="item-cat"><small><a href="#">Outerwear</a></small></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-2 animation">
									<div class="product">
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
												<img alt="" class="img-responsive" src="public/assets/images/content/products/product-12.jpg">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right">29.99 USD</span>
												<h4><a href="shop-product-detail2.html">Sheer overlay dress</a></h4>
												<span class="item-cat"><small><a href="#">Dresses</a></small></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-2 animation">
									<div class="product">
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
												<img alt="" class="img-responsive" src="public/assets/images/content/products/product-13.jpg">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right">49.99 USD</span>
												<h4><a href="shop-product-detail2.html">Printed cape dress</a></h4>
												<span class="item-cat"><small><a href="#">Dresses</a></small></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-2 animation">
									<div class="product">
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
												<img alt="" class="img-responsive" src="public/assets/images/content/products/product-14.jpg">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right">49.99 USD</span>
												<h4><a href="shop-product-detail2.html">Embroidered sleeveless jumpsuit</a></h4>
												<span class="item-cat"><small><a href="#">Dresses</a></small></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-2 animation">
									<div class="product">
										<a href="shop-product-detail1.html">
											<span class="bag bag-onsale">Sale</span>
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
												<img alt="" class="img-responsive" src="public/assets/images/content/products/product-15.jpg">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right">19.99 USD</span>
												<h4><a href="shop-product-detail2.html">V-Neck top</a></h4>
												<span class="item-cat"><small><a href="#">Tops</a></small></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-3 animation">
									<div class="product">
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
												<img alt="" class="img-responsive" src="public/assets/images/content/products/product-16.jpg">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right">25.99 USD</span>
												<h4><a href="shop-product-detail2.html">Knit top with jewelled neckline</a></h4>
												<span class="item-cat"><small><a href="#">Knitwear</a></small></span>
											</div>
										</div>
									</div>
								</div>
							</div>s
						</div>
						<div class="tab-pane" id="accesories">
							<div class="row">
								<div class="col-xs-6 col-sm-3 animation">
									<div class="product">
										<div class="product-thumb-info">
											<div class="product-thumb-info-image">
												<span class="product-thumb-info-act">
													<a href="javascript:void(0);" data-toggle="modal" data-target=".quickview-wrapper" class="view-product">
														<span><i class="fa fa-externasl-link"></i></span>
													</a>
													<a href="shop-cart-full.html" class="add-to-cart-product">
														<span><i class="fa fa-shopping-cart"></i></span>
													</a>
												</span>
												<img alt="" class="img-responsive" src="public/assets/images/content/products/product-17.jpg">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right">59.99 USD</span>
												<h4><a href="shop-product-detail2.html">Gold chrono watch</a></h4>
												<span class="item-cat"><small><a href="#">Accessories</a></small></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-3 animation">
									<div class="product">
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
												<img alt="" class="img-responsive" src="public/assets/images/content/products/product-18.jpg">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right">7.99 USD</span>
												<h4><a href="shop-product-detail2.html">Long earrings</a></h4>
												<span class="item-cat"><small><a href="#">Accessories</a></small></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-3 animation">
									<div class="product">
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
												<img alt="" class="img-responsive" src="public/assets/images/content/products/product-19.jpg">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right">19.99 USD</span>
												<h4><a href="shop-product-detail2.html">Braided belt</a></h4>
												<span class="item-cat"><small><a href="#">Belts</a></small></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-3 animation">
									<div class="product">
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
												<img alt="" class="img-responsive" src="public/assets/images/content/products/product-20.jpg">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right">79.99 USD</span>
												<h4><a href="shop-product-detail2.html">Leather bucket bag with zip</a></h4>
												<span class="item-cat"><small><a href="#">Handbags</a></small></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-3 animation">
									<div class="product">
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
												<img alt="" class="img-responsive" src="public/assets/images/content/products/product-21.jpg">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right">15.99 USD</span>
												<h4><a href="shop-product-detail2.html">Floral tie</a></h4>
												<span class="item-cat"><small><a href="#">Ties and Bow Ties</a></small></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-3 animation">
									<div class="product">
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
												<img alt="" class="img-responsive" src="public/assets/images/content/products/product-22.jpg">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right">9.99 USD</span>
												<h4><a href="shop-product-detail2.html">Zigzag pattern cap</a></h4>
												<span class="item-cat"><small><a href="#">Caps and Hats</a></small></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-3 animation">
									<div class="product">
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
												<img alt="" class="img-responsive" src="public/assets/images/content/products/product-23.jpg">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right">15.99 USD</span>
												<h4><a href="shop-product-detail2.html">Double chain necklace</a></h4>
												<span class="item-cat"><small><a href="#">Accessories</a></small></span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xs-6 col-sm-3 animation">
									<div class="product">
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
												<img alt="" class="img-responsive" src="public/assets/images/content/products/product-24.jpg">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right">7.99 USD</span>
												<h4><a href="shop-product-detail2.html">Chain necklace</a></h4>
												<span class="item-cat"><small><a href="#">Accessories</a></small></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> -->
					</div>
					
				</div>
			</section>
			<!-- End New Products -->
			
			<!-- Begin Parallax -->
			<!-- Begin Parallax -->
			<section class="pi-parallax parallax-shop" data-stellar-background-ratio="0.6">
				<div class="container">
					<div id="owl-text-slide" class="owl-carousel">
						<div class="item" >
							<div class="intro">
								<h2>Men’s Fashion and Style</h2>
								<span class="divider"></span>
								<p>Whatever you’re looking for, be it the latest fashion trends, cool outfit ideas or new ways to wear your favourite pieces, we’ve got all the style inspiration you need.</p>
								<a href="#" class="btn btn-white hidden-xs">Shop Now</a>
							</div>
						</div>
						<div class="item">
							<div class="intro">
								<h2>Make it simple, but significant</h2>
								<span class="divider"></span>
								<p>Whatever you’re looking for, be it the latest fashion trends, cool outfit ideas or new ways to wear your favourite pieces, we’ve got all the style inspiration you need.</p>
								<a href="#" class="btn btn-white hidden-xs">Shop Now</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Parallax -->
			
			<!-- End Parallax -->
			
			<!-- Begin List Thumbs -->
			<section class="list-thumbs">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 featured animation">
							<h3>Featured</h3>
							<div class="row">
								<div id="owl-featured-slide" class="owl-carousel product-slide product-thumbs-slide">
									<div class="col-md-12">
										<div class="item">
											<ul class="list-unstyled list-thumbs-pro">
												<?php
												foreach ($productfeature as $pid => $featured) {
												?>
												<li class="product">
													<div class="product-thumb-info">
														<div class="product-thumb-info-image">
															<a href=""><img alt="" width="60" src="public/assets/product_images/HKP-ZP-10/<?php echo $pid. "/". $featured["main_image"] ?>"></a>
														</div>
														
														<div class="product-thumb-info-content">
															<h4><a href="#"><?php echo  $featured["title"]; ?></a></h4>
															<span class="item-cat"><small><a href="#"><?php echo  $featured["tag"]; ?></a></small></span>
															<span class="price"><?php echo  $featured["price"]; ?></span>
														</div>
													</div>
												</li>
												<?php }
												?>
											</ul>
										</div>
									</div>
									<!-- <div class="col-md-12">
										<div class="item">
											<ul class="list-unstyled list-thumbs-pro">
												<li class="product">
													<div class="product-thumb-info">
														<div class="product-thumb-info-image">
															<a href="shop-product-detail1.html"><img alt="" width="60" src="images/content/products/product-24.jpg"></a>
														</div>
														
														<div class="product-thumb-info-content">
															<h4><a href="shop-product-detail2.html">Chain necklace</a></h4>
															<span class="item-cat"><small><a href="#">Accessories</a></small></span>
															<span class="price">29.99 USD</span>
														</div>
													</div>
												</li>
												<li class="product">
													<div class="product-thumb-info">
														<div class="product-thumb-info-image">
															<a href="shop-product-detail1.html"><img alt="" width="60" src="images/content/products/product-23.jpg"></a>
														</div>
														
														<div class="product-thumb-info-content">
															<h4><a href="shop-product-detail2.html">Double chain necklace</a></h4>
															<span class="item-cat"><small><a href="#">Accessories</a></small></span>
															<span class="price">29.99 USD</span>
														</div>
													</div>
												</li>
												<li class="product">
													<div class="product-thumb-info">
														<div class="product-thumb-info-image">
															<a href="shop-product-detail1.html"><img alt="" width="60" src="images/content/products/product-22.jpg"></a>
														</div>
														
														<div class="product-thumb-info-content">
															<h4><a href="shop-product-detail2.html">Zigzag pattern cap</a></h4>
															<span class="item-cat"><small><a href="#">Caps and Hats</a></small></span>
															<span class="price">29.99 USD</span>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div> -->
								</div>
							</div>
						</div>
						<div class="col-sm-4 bestseller animation">
							<h3>Bestseller</h3>
							<ul class="list-unstyled list-thumbs-pro">
								<li class="product">
									<div class="product-thumb-info">
										<div class="product-thumb-info-image">
											<a href="#"><img alt="" width="60" src="public/assets/product_images/JJT_961/1.JPG"></a>
										</div>
										
										<div class="product-thumb-info-content">
											<h4><a href="#">Cotton black Shirt</a></h4>
											<span class="item-cat"><small><a href="#">Shirts</a></small></span>
											<span class="price">260.00</span>
										</div>
									</div>
								</li>
								<li class="product">
									<div class="product-thumb-info">
										<div class="product-thumb-info-image">
											<a href="#"><img alt="" width="60" src="public/assets/product_images/JJT_961/3.JPG"></a>
										</div>
										
										<div class="product-thumb-info-content">
											<h4><a href="#">Black and blue printed shirt</a></h4>
											<span class="item-cat"><small><a href="#">Shirts</a></small></span>
											<span class="price">260.00</span>
										</div>
									</div>
								</li>
								<li class="product">
									<div class="product-thumb-info">
										<div class="product-thumb-info-image">
											<a href="#"><img alt="" width="60" src="public/assets/product_images/JJT_961/2.JPG"></a>
										</div>
										
										<div class="product-thumb-info-content">
											<h4><a href="#">Black and blue printed shirt</a></h4>
											<span class="item-cat"><small><a href="#">Shirts</a></small></span>
											<span class="price">260.00</span>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="col-sm-4 trends animation">
							<h3>Trends</h3>
							<ul class="list-unstyled list-thumbs-pro">
								<li class="product">
									<div class="product-thumb-info">
										<div class="product-thumb-info-image">
											<a href="#"><img alt="" width="60" src="public/assets/product_images/SIS_URBAN/SIS_URB1/1.JPG"></a>
										</div>
										
										<div class="product-thumb-info-content">
											<h4><a href="#">Striped shirt</a></h4>
											<span class="item-cat"><small><a href="#">Shirts</a></small></span>
											<span class="price">520.00</span>
										</div>
									</div>
								</li>
								<li class="product">
									<div class="product-thumb-info">
										<div class="product-thumb-info-image">
											<a href="#"><img alt="" width="60" src="public/assets/product_images/SIS_URBAN/SIS_URB2/2.JPG"></a>
										</div>
										
										<div class="product-thumb-info-content">
											<h4><a href="#">printed blue shirt</a></h4>
											<span class="item-cat"><small><a href="#">Shirts</a></small></span>
											<span class="price">520.00</span>
										</div>
									</div>
								</li>
								<li class="product">
									<div class="product-thumb-info">
										<div class="product-thumb-info-image">
											<a href="#"><img alt="" width="60" src="public/assets/product_images/SIS_URBAN/SIS_URB3/3.JPG"></a>
										</div>
										
										<div class="product-thumb-info-content">
											<h4><a href="#">Black shirt</a></h4>
											<span class="item-cat"><small><a href="#">Shirts</a></small></span>
											<span class="price">520.00</span>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<ul class="list-inline wp-ads animation">
						<li><i class="fa fa-plane"></i><strong>Delivery in India</strong><span>See all conditions</span></li>
						<li><i class="fa fa-refresh"></i><strong>30 days returns</strong><span>For a smooth shopping</span></li>
						<li><i class="fa fa-phone"></i><strong>(+91) 9516041729</strong><span>Contact Customer</span></li>
						<li><i class="fa fa-lock"></i><strong>30 days returns</strong><span>For a smooth shopping</span></li>
						<li><i class="fa fa-question-circle"></i><strong>Shopping Guide</strong><span>Contact Customer</span></li>
					</ul>
				</div>
			</section>
			<!-- End List Thumbs -->
			
		</div>
		<!-- End Main -->
		
		<!-- Begin footer -->
	<?php echo view('common_pages/footer.php');?>
		<!-- End footer -->
			
	