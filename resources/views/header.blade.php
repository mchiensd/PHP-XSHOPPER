


		<!-- wrapper -->
		<div id="wrapper">

			<!-- Top Bar -->
			<div id="topBar" class="dark">
				<div class="container">

					<!-- right -->
					<ul class="top-links list-inline pull-right">
                                            <li class="text-welcome hidden-xs">Welcome to NewFashion, <strong>
                                                   </strong></li>
						<li>
							<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><i class="fa fa-user hidden-xs"></i> MY ACCOUNT</a>
							<ul class="dropdown-menu pull-right">
								<li><a tabindex="-1" href="#"><i class="fa fa-history"></i> ORDER HISTORY</a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="#"><i class="fa fa-bookmark"></i>PROFILE</a></li>
								<li><a tabindex="-1" href="#"><i class="fa fa-edit"></i> MY REVIEWS</a></li>
								<li><a tabindex="-1" href="#"><i class="fa fa-cog"></i> MY SETTINGS</a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="#"><i class="glyphicon glyphicon-off"></i> LOGOUT</a></li>
							</ul>
						</li>
						
					</ul>

					<!-- left -->
					<ul class="top-links list-inline">
						<li class="hidden-xs"><a href="page-faq-1.html">FAQ</a></li>
						<li>
							<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><img class="flag-lang" src="source/assets/images/flags/us.png" width="16" height="11" alt="lang" /> ENGLISH</a>
							<ul class="dropdown-langs dropdown-menu">
								<li><a tabindex="-1" href="#"><img class="flag-lang" src="source/assets/images/flags/us.png" width="16" height="11" alt="lang" /> ENGLISH</a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="#"><img class="flag-lang" src="source/assets/images/flags/de.png" width="16" height="11" alt="lang" /> GERMAN</a></li>
								<li><a tabindex="-1" href="#"><img class="flag-lang" src="source/assets/images/flags/ru.png" width="16" height="11" alt="lang" /> RUSSIAN</a></li>
								<li><a tabindex="-1" href="#"><img class="flag-lang" src="source/assets/images/flags/it.png" width="16" height="11" alt="lang" /> ITALIAN</a></li>
							</ul>
						</li>
						<li>
							<a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#">USD</a>
							<ul class="dropdown-langs dropdown-menu">
								<li><a tabindex="-1" href="#">USD</a></li>
								<li class="divider"></li>
								<li><a tabindex="-1" href="#">EUR</a></li>
								<li><a tabindex="-1" href="#">GBP</a></li>
							</ul>
						</li>
					</ul>

				</div>
			</div>
			
			<div id="header" class="sticky clearfix">

				<!-- SEARCH HEADER -->
				<div class="search-box over-header">
					<a id="closeSearch" href="#" class="glyphicon glyphicon-remove"></a>

					<form action="page-search-result-1.html" method="get">
						<input type="text" class="form-control" placeholder="SEARCH" />
					</form>
				</div> 
				<!-- /SEARCH HEADER -->


				<!-- TOP NAV -->
				<header id="topNav">
					<div class="container">

						<!-- Mobile Menu Button -->
						<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<!-- BUTTONS -->
						<ul class="pull-right nav nav-pills nav-second-main">

							<!-- SEARCH -->
							<li class="search">
								<a href="javascript:;">
									<i class="fa fa-search"></i>
								</a>
							</li>
							<!-- /SEARCH -->


							<!-- QUICK SHOP CART -->
							
							<li class="quick-carts">
								<a href="/resources/views/page/giohang.blade.php">
									<span id="countcart" class="badge badge-aqua btn-xs badge-corner">
										2
									</span>
									<i class="fa fa-shopping-cart"></i> 
								</a>
								</a>
						                                                   
							

								<!--	<h4>Shop Cart</h4>

								
							
						</ul>
						<!-- /BUTTONS -->

						<!-- Logo -->
						<a class="logo pull-left" href="index.html">
							<img src="source/assets/images/logoweb.png" alt="" />
						</a>

						<!-- 
							Top Nav 
							
							AVAILABLE CLASSES:
							submenu-dark = dark sub menu
						-->
						<div class="navbar-collapse pull-right nav-main-collapse collapse">
							<nav class="nav-main">

								<!--
									NOTE
									
									For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
									Direct Link Example: 

									<li>
										<a href="#">HOME</a>
									</li>
								-->
								<ul id="topMain" class="nav nav-pills nav-main">
									<li class="dropdown active"><!-- HOME -->
										<a class="dropdown-toggle" href="{{route('Trang-chu')}}">
											Trang chủ 
										</a>
										
                                                                            
									</li>																								
								
                                                               
									<li class="dropdown active"><!-- PRODUCT -->
										<a class="dropdown-toggle" href="#">
											Chủ đề
										</a>
										<ul class="dropdown-menu">
											
											<li class="dropdown">
												@foreach($chude as $cd)
												<a href="{{route('loaisanpham',$cd->MaCD)}}">
													{{$cd->TenChuDe}}
												</a>


												@endforeach
													
												
                                                                                            
											</li>     
											   
											
                                         </ul>	
											
											
											
											
										
											
										
                                                                            
									</li>																								
								</ul>                                                                

							</nav>
						</div>

					</div>
				</header>
				<!-- /Top Nav -->

			</div>

