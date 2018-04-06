
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login</title>
        <meta charset="utf-8" />
        <meta charset="ISO-8859-1">
		<title>Smarty - Multipurpose + Admin</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="source/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

		<!-- REVOLUTION SLIDER -->
		<link href="source/assets/plugins/slider.revolution/css/extralayers.css" rel="stylesheet" type="text/css" />
		<link href="source/assets/plugins/slider.revolution/css/settings.css" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="source/assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="source/assets/css/layout.css" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="source/assets/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="source/assets/css/layout-shop.css" rel="stylesheet" type="text/css" />
		<link href="source/assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
       
  	<body class="smoothscroll enable-animation">



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
			<!-- /Top Bar -->

			<!-- 
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.noborder 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom
				
				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent noborder"
			-->
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
								<a href="cart.jsp">
									<span id="countcart" class="badge badge-aqua btn-xs badge-corner">?</span>
									<i class="fa fa-shopping-cart"></i> 
								</a>
								</a>

								<!--	<h4>Shop Cart</h4>
<div class="quick-cart-box">
									<div class="quick-cart-wrapper">

										<a href="#">
											<img src="source/assets/images/demo/people/300x300/4-min.jpg" width="45" height="45" alt="" />
											<h6><span>2x</span> RED BAG WITH HUGE POCKETS</h6>
											<small>$37.21</small>
										</a
</div>
									
										
<div class="quick-cart-footer clearfix">
										<a href="shop-cart.html" class="btn btn-primary btn-xs pull-right">VIEW CART</a>
										<span class="pull-left"><strong>TOTAL:</strong> $54.39</span>
									</div>
									</div>
-->
									<!-- quick cart footer -->
									
									<!-- /quick cart footer -->

								
							</li>
							<!-- /QUICK SHOP CART -->

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
										<a class="dropdown-toggle" href="index.jsp">
											HOME
										</a>
										
                                                                            
									</li>																								
								
                                                               
									<li class="dropdown active"><!-- PRODUCT -->
										<a class="dropdown-toggle" href="#">
											Chủ đề
										</a>
										<ul class="dropdown-menu">
											
											<li class="dropdown">
												<a href="shirt_page.jsp?pages=1">
													Quần
												</a>	
												<a href="shirt_page.jsp?pages=1">
													Áo
												</a>
												<a href="shirt_page.jsp?pages=1">
													Mắt kính
												</a>		
                                                                                            
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

    </body>
</html>

