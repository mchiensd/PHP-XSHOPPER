@extends('master')
@section('content')

			<section class="page-header page-header-xs">
				<div class="container">

					<h1>SHOP CART</h1>

					<!-- breadcrumbs -->
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">Shop</a></li>
						<li class="active">Shop Cart</li>
					</ol><!-- /breadcrumbs -->

				</div>
			</section>
			<!-- /PAGE HEADER -->




			<!-- CART -->
			<section>
				<div class="container">

				
					<!-- EMPTY CART -->
				
					<!-- /EMPTY CART -->



					<!-- CART -->
					<div class="row">

						<!-- LEFT -->
						<div class="col-lg-12 col-sm-12">

							<!-- CART -->
							<form class="cartContent clearfix" method="post" action="#">

								<!-- cart content -->
								<div id="cartContent">
									<!-- cart header -->
									<div class="item head clearfix">
										<span class="cart_img"></span>
										<span class="product_name size-13 bold">PRODUCT NAME</span>
										<span class="remove_item size-13 bold"></span>
										<span class="total_price size-13 bold">TOTAL</span>
										<span class="qty size-13 bold">QUANTITY</span>
									</div>
									<!-- /cart header -->

									<!-- cart item -->
									
									<!-- /cart item -->

									<!-- cart item -->
									
									<!-- /cart item -->

									<!-- cart item -->
									<div class="item">
										<div class="cart_img pull-left width-100 padding-10 text-left"><img src="assets/images/demo/shop/products/ASMD779.jpg" alt="" width="80" /></div>
										<a href="shop-single-left.html" class="product_name">
											<span>TenQuanAo</span>
											<small>Color: MaMauSac, Size: MaKichThuoc</small>
										</a>
										<a data="MaQuanAo" id="pitemscart"   class="remove_item pitemscart"><i class="fa fa-times"></i></a>
										<div data="GiaBan" class="total_price"><span class="totalitemid">GiaBan<sup>VNĐ</sup></span></div>
                                                                                <div class="qty"><input  class="qtyitem"  type="number" value="1" name="qty" maxlength="3" max="999" min="1" /></div>
										<div class="clearfix"></div>
									</div>
 
									<!-- /cart item -->
                                                                        <div class="item">
										
										<div  class="total_price"><span  class="totalmoney" >total</span><sup>VNĐ</sup></div>
										
										<div class="clearfix"></div>
									</div>

									<!-- update cart -->
									<button class="pitemscartall btn btn-danger margin-top-20 margin-right-10 pull-right"><i class="glyphicon glyphicon-remove"></i> CLEAR CART</button>
									<!-- /update cart -->

									<div class="clearfix"></div>
								</div>
								<!-- /cart content -->

							</form>
							<!-- /CART -->
                                                       

						</div>


						<!-- RIGHT -->
						

					</div>
					<!-- /CART -->
					
				</div>
			</section>
			<!-- /CART -->




			<!-- RECOMMENDED -->
			<section>
				<div class="container">

					<h2 class="owl-featured"><strong>Recommended</strong> for you:</h2>
					<div class="owl-carousel featured nomargin owl-padding-10" data-plugin-options='{"singleItem": false, "stopOnHover":false, "autoPlay":4000, "autoHeight": false, "navigation": true, "pagination": false}'>

						<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p13.jpg" alt="shop first image" />
									<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p14.jpg" alt="shop hover image" />
								</a>
								<!-- /product image(s) -->

								<!-- product more info -->
								<div class="shop-item-info">
									<span class="label label-success">NEW</span>
									<span class="label label-danger">SALE</span>
								</div>
								<!-- /product more info -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Cotton 100% - Pink Shirt</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									<span class="line-through">$98.00</span>
									$78.00
								</div>
								<!-- /price -->
							</div>

								<!-- buttons -->
								<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>
								<!-- /buttons -->
						</div>
						<!-- /item -->

						<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<!-- CAROUSEL -->
									<div class="owl-carousel owl-padding-0 nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 3000, "navigation": false, "pagination": false, "transitionStyle":"fadeUp"}'>
										<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p5.jpg" alt="">
										<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p1.jpg" alt="">
									</div>
									<!-- /CAROUSEL -->
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Pink Dress 100% Cotton</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									$44.00
								</div>
								<!-- /price -->
							</div>

								<!-- buttons -->
								<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>
								<!-- /buttons -->
						</div>
						<!-- /item -->

						<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p2.jpg" alt="shop first image" />
									<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p12.jpg" alt="shop hover image" />
								</a>
								<!-- /product image(s) -->

								<!-- product more info -->
								<div class="shop-item-info">
									<span class="label label-success">NEW</span>
									<span class="label label-danger">SALE</span>
								</div>
								<!-- /product more info -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Black Fashion Hat</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									<span class="line-through">$77.00</span>
									$65.00
								</div>
								<!-- /price -->
							</div>

								<!-- buttons -->
								<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>
								<!-- /buttons -->
						</div>
						<!-- /item -->

						<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p8.jpg" alt="shop first image" />
								</a>
								<!-- /product image(s) -->

								<!-- countdown -->
								<div class="shop-item-counter">
									<div class="countdown" data-from="December 31, 2017 08:22:01" data-labels="years,months,weeks,days,hour,min,sec"><!-- Example Date From: December 31, 2018 15:03:26 --></div>
								</div>
								<!-- /countdown -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Beach Black Lady Suit</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									$56.00
								</div>
								<!-- /price -->
							</div>

								<!-- buttons -->
								<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>
								<!-- /buttons -->
						</div>
						<!-- /item -->

						<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p7.jpg" alt="shop first image" />
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Town Dress - Black</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									$154.00
								</div>
								<!-- /price -->
							</div>

								<!-- buttons -->
								<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>
								<!-- /buttons -->
						</div>
						<!-- /item -->

						<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p6.jpg" alt="shop first image" />
									<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p14.jpg" alt="shop hover image" />
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Chick Lady Fashion</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									$167.00
								</div>
								<!-- /price -->
							</div>

								<!-- buttons -->
								<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>
								<!-- /buttons -->
						</div>
						<!-- /item -->

						<!-- item -->
						<div class="shop-item nomargin">

							<div class="thumbnail">
								<!-- product image(s) -->
								<a class="shop-item-image" href="shop-single-left.html">
									<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p11.jpg" alt="shop hover image" />
									<img class="img-responsive" src="assets/images/demo/shop/products/300x450/p3.jpg" alt="shop first image" />
								</a>
								<!-- /product image(s) -->
							</div>
							
							<div class="shop-item-summary text-center">
								<h2>Black Long Lady Shirt</h2>
								
								<!-- rating -->
								<div class="shop-item-rating-line">
									<div class="rating rating-0 size-13"><!-- rating-0 ... rating-5 --></div>
								</div>
								<!-- /rating -->

								<!-- price -->
								<div class="shop-item-price">
									$128.00
								</div>
								<!-- /price -->
							</div>

								<!-- buttons -->
								<div class="shop-item-buttons text-center">
									<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus"></i> Add to Cart</a>
								</div>
								<!-- /buttons -->
						</div>
						<!-- /item -->

					</div>

				</div>
			</section>
			<!-- /RECOMMENDED -->   
@endsection 