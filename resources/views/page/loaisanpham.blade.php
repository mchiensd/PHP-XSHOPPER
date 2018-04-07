	@extends('master')
	@section('content')



		<!-- wrapper -->
		<div id="wrapper">
			<!-- REVOLUTION SLIDER -->
			
			





			



			<!-- PARALLAX -->
			<section class="parallax parallax-2" style="background-image: url('source/assets/images/demo/particles_bg.jpg');">
				<div class="overlay dark-1"><!-- dark overlay [0 to 9 opacity] --></div>

				<div class="container">



					<div class="owl-carousel text-center owl-testimonial nomargin" data-plugin-options='{"singleItem": true, "autoPlay": 3000, "navigation": false, "pagination": true}'>
							
						<div class="text-center">
							<h3 class="nomargin">Popular Products</h3>
							<p class="font-lato weight-300 lead nomargin-top">Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam.</p>
						</div>

						<div class="text-center">
							<h3 class="nomargin">New Products</h3>
							<p class="font-lato weight-300 lead nomargin-top">Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam.</p>
						</div>

					</div>


				</div>

			</section>
			<!-- /PARALLAX -->



			<div class="row" style="margin: 30px;">

				<div class="col-sm-3">



					<div class="col-sm-12">
					
					
					
					</div>
				</div>
					
				</div>
				<div class="col-sm-9">
						<!-- NEW PRODUCTS -->
			<section>
				<div class="container">

					<div class="heading-title heading-dotted">
						<h2 class="size-20">Danh sách sản phẩm </h2>
					</div>

					<ul class="shop-item-list row list-inline nomargin">

						@foreach($quanao as $quanao)

						<li class="col-lg-4 col-sm-12" ">

							<div class="shop-item">

								<div class="thumbnail noborder nopadding">
									<!-- product image(s) -->
									<a class="shop-item-image" href="shop-single-left.html">
										<img class="img-responsive" src="source/assets/images/shop/{{$quanao->AnhBia}}" alt="" />
									</a>
									<!-- /product image(s) -->

									<!-- hover buttons -->
									<div class="shop-option-over">
										<a class="btn btn-default" href="shop-cart.html"><i class="fa fa-cart-plus size-18"></i></a>
									</div>
									<!-- /hover buttons -->

								</div>
								
								<div class="shop-item-summary text-center">
									<h2 class="size-14">{{$quanao->TenQuanAo}}</h2>
									
									<!-- rating -->
									<div class="shop-item-rating-line">
										<div class="rating rating-4 size-11"><!-- rating-0 ... rating-5 --></div>
									</div>
									<!-- /rating -->

									<!-- price -->
									<div class="shop-item-price">
										{{$quanao->GiaBan}}
									</div>
									<!-- /price -->
								</div>

							</div>

						</li>
						@endforeach
						<div class="row">
						
						</div>
						
						
							

						

							

					
						
						

					</ul>

				</div>
			</section>
			<!-- NEW PRODUCTS -->
					
				</div>
				
			</div>

		




			<!-- NEW PRODUCTS -->
			<section>
				<div class="container">
					<div class="heading-title heading-dotted">
						<h2 class="size-20">WHAT CUSTOMERS SAY?</h2>
					</div>
					<!-- 
						Note: remove class="rounded" from the img for squared image!
					-->
					<ul class="row clearfix testimonial-dotted list-unstyled nomargin">
						<li class="col-md-4">
							<div class="testimonial">
								<figure class="pull-left">
									<img class="rounded" src="source/assets/images/demo/people/300x300/2-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
									<cite>
										Joana Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</li>
						<li class="col-md-4">
							<div class="testimonial">
								<figure class="pull-left">
									<img class="rounded" src="source/assets/images/demo/people/300x300/6-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
									<cite>
										Melissa Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</li>
						<li class="col-md-4">
							<div class="testimonial">
								<figure class="pull-left">
									<img class="rounded" src="source/assets/images/demo/people/300x300/7-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
									<cite>
										Stephany Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</li>
						<li class="col-md-4">
							<div class="testimonial">
								<figure class="pull-left">
									<img class="rounded" src="source/assets/images/demo/people/300x300/8-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
									<cite>
										Pamela Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</li>
						<li class="col-md-4">
							<div class="testimonial">
								<figure class="pull-left">
									<img class="rounded" src="source/assets/images/demo/people/300x300/11-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
									<cite>
										Simina Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</li>
						<li class="col-md-4">
							<div class="testimonial">
								<figure class="pull-left">
									<img class="rounded" src="source/assets/images/demo/people/300x300/12-min.jpg" alt="" />
								</figure>
								<div class="testimonial-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
									<cite>
										Mihaela Doe
										<span>Company Ltd.</span>
									</cite>
								</div>
							</div>
						</li>
					</ul>

				</div>
			</section>
			<!-- NEW PRODUCTS -->



			<!-- BRANDS -->
			<section class="padding-xxs">
				<div class="container">

					<!-- 
						controlls-over		= navigation buttons over the image 
						buttons-autohide 	= navigation buttons visible on mouse hover only
						
						data-plugin-options:
							"singleItem": true
							"autoPlay": true (or ms. eg: 4000)
							"navigation": true
							"pagination": true
					-->
					<div class="text-center">
						<div class="owl-carousel nomargin" data-plugin-options='{"singleItem": false, "autoPlay": 3000}'>
							<div>
								<img class="img-responsive" src="source/assets/images/demo/brands/1.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="source/assets/images/demo/brands/2.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="source/assets/images/demo/brands/3.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="source/assets/images/demo/brands/4.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="source/assets/images/demo/brands/5.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="source/assets/images/demo/brands/6.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="source/assets/images/demo/brands/7.jpg" alt="">
							</div>
							<div>
								<img class="img-responsive" src="source/assets/images/demo/brands/8.jpg" alt="">
							</div>
						</div>
					</div>

				</div>
			</section>
			<!-- BRANDS -->


			<!-- 
				HOME SHOP - MODAL ON LOAD 
				
				data-autoload="true" 			- load modal on page load
				data-autoload-delay="2000"		- load after 2000 ms (1000ms = 1s)
			-->
			<div id="shopLoadModal" class="modal fade" data-autoload="true" data-autoload-delay="2000">
				<div class="modal-dialog modal-full">
					<div class="modal-content" style="background-image:url('source/assets/images/misc/shop/shop_modal.jpg');">

						<!-- header modal -->
						<div class="modal-header noborder">
							<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
						</div>

						<!-- body modal -->
						<div class="modal-body">

							<div class="block-content">

								<img src="source/assets/images/logo-footer-dark.png" alt="" />
								<p class="size-13 margin-bottom-20 margin-top-30">Subscribe to the Smarty newsletter to get all new products and all new discounts.</p>

								<!-- newsletter -->
								<div class="inline-search clearfix margin-bottom-20">
									<form action="php/newsletter.php" method="post" class="validate nomargin" data-success="Subscribed! Thank you!" data-toastr-position="bottom-right" novalidate>

										<input type="search" placeholder="Email Address" id="shop_email" name="shop_email" class="serch-input required">
										<button type="submit">
											<i class="fa fa-check"></i>
										</button>
									</form>
								</div>
								<!-- /newsletter -->

								<!-- Don't show this popup again -->
								<div class="size-11 text-left">
									<label class="checkbox pull-left">
										<input class="loadModalHide" type="checkbox" />
										<i></i> <span class="weight-300">Don't show this popup again</span>
									</label>

								</div>
								<!-- /Don't show this popup again -->

							</div>

						</div>

					</div>
				</div>
			</div>
			<!-- /HOME SHOP - MODAL ON LOAD -->



		</div>
		<!-- /wrapper --


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->




@endsection