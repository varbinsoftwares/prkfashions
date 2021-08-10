<?php echo view('common_pages/header.php'); ?>
<style>
	
</style>
		<!-- Begin Login -->
		
		<!-- End Login -->
		
		
		<!-- Begin Main -->
	<section>
		<div role="main" class="main">
		
			<!-- Begin page top -->
			
			<!-- End page top -->
			<br><br>
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<aside class="sidebar">
							<aside class="block filter-blk">
								<h4>Filter By Price</h4>
								<div id="price-range">
									<div class="padding-range">
										<div id="slider-range"></div>
									</div>
									<label for="amount">Price:</label>
									<input type="text" id="amount">
									<p class="clearfix"><a href="#" class="btn btn-primary btn-sm">Apply Filter</a></p>
								</div>
							</aside>
							<aside class="block blk-cat">
								<h4>Category</h4>
								<ul class="list-unstyled list-cat">
								<li><a href="#">Shirts</a></li>
									<li><a href="#">T-Shirts</a></li>
									<li><a href="#">Jeans</a></li>
									<li><a href="#">Shorts</a></li>
									<li><a href="#">Jackets</a></li>
									<li><a href="#">Trousers</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
							</aside>
							<aside class="block blk-brands">
								<h4>Brands</h4>
								<ul class="list-unstyled list-cat">
									<li><a href="#">Louis Vuitton</a></li>
									<li><a href="#">Gucci</a></li>
									<li><a href="#">Levi’s</a></li>
									<li><a href="#">Prada</a></li>
									<li><a href="#">Dolce & Gabbana</a></li>
									<li><a href="#">Dior</a></li>
									<li><a href="#">Burberry</a></li>
								</ul>
							</aside>
							<aside class="block blk-colors">
								<h4>Colors</h4>
								<ul class="list-unstyled list-cat">
									<li><a href="#">Black</a></li>
									<li><a href="#">Blue</a></li>
									<li><a href="#">Navy</a></li>
									<li><a href="#">Pink</a></li>
									<li><a href="#">Purple</a></li>
									<li><a href="#">Old Navy</a></li>
								</ul>
							</aside>
							<aside class="block featured">
								<h4>Featured</h4>
								<ul class="list-unstyled list-thumbs-pro">
									
									<?php
									foreach ($productfeature as $pid => $featureobj) {
									
									?>
									<li class="product">
										<div class="product-thumb-info">
											<div class="product-thumb-info-image">
												<a href="shop-product-detail1.html"><img alt="" width="60" src="<?php echo base_url();?>/public/assets/product_images/HKP-ZP-10/<?php echo $pid."/" .$featureobj["main_image"];?>"></a>
											</div>
											
											<div class="product-thumb-info-content">
												<h4><a href="shop-product-detail2.html"><?php echo $featureobj["title"]?></a></h4>
												<span class="item-cat"><small><a href="#"><?php echo $featureobj["tag"]?></a></small></span>
												<span class="price"><?php echo $featureobj["price"]?></span>
											</div>
										</div>
									</li>
									<?php }?>
								</ul>
							</aside>
						</aside>
					</div>
					<div class="col-md-9">
						<!-- Begin Lookbook Women -->
						<section id="lookbook">
							<div class="lookbook">
								<h2><a href="#">Men's Style</a></h2>
								<p>Etiam aliquam risus ante, quis ultrices enim porta a. Integer et dolor sit amet enim feugiat faucibus. Donec sit amet egestas orci. Proin facilisis mi ornare turpis sollicitudin; vel rutrum est viverra. Vestibulum hendrerit egestas semper.</p>
							</div>
						</section>
						<!-- End Lookbook Women -->
						
						<div class="catalog">
							<div class="toolbar clearfix">
								<ul class="list-inline list-icons pull-left">
									<li class="active"><a href="shop-sidebar.html"><i class="fa fa-th"></i></a></li>
									<li><a href="shop-list-sidebar.html"><i class="fa fa-th-list"></i></a></li>
								</ul>
								<p class="pull-left">Showing 1-12 of 50 results</p>
								<!-- Ordering -->
								<div class="list-sort pull-right">
									<select class="formDropdown">
										<option>Default Sorting</option>
										<option>Sort by Popularity</option>
										<option>Sort by Newness</option>
									</select>
								</div>
							</div>
							
							<div class="row">
								<?php
								foreach ($products as $pid => $projectobj) {
								
								?>
								<div class="col-lg-3 col-sm-6 animation">
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
												<img alt="" class="img-responsive" src="<?php echo base_url();?>/public/assets/product_images/<?php echo $pid."/" .$projectobj["main_image"];?>">
											</div>
											<div class="product-thumb-info-content">
												<span class="price pull-right"><?php echo $projectobj["price"];?></span>
												<h4><a href="shop-product-detail2.html"><?php echo $projectobj["title"];?></a></h4>
												<span class="item-cat"><small><a href="#"><?php echo $projectobj["tag"];?></a></small></span>
											</div>
										</div>
									</div>
								</div>

								<?php  }
								?>
							</div>
						
						
							
	
							<ul class="pagination">
								<li class="disabled"><a href="#">&laquo;</a></li>
								<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a href="#">&raquo;</a></li>
						   </ul>
					   </div>
					</div>
				</div>
				
				
			</div>
			
		</div>
	</section>	
		<!-- End Main -->
		
		<!-- Begin footer -->
		<?php echo view('common_pages/footer.php'); ?>
		<!-- end footer -->
	