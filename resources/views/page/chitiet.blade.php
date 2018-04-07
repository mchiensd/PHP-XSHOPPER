
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Home</title>
        <meta charset="utf-8" />
        <base href="{{asset('')}}">
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

    </head>

<body>
<section>
    <div class="container">
                    
        <div class="row">

                                <!-- ITEM -->
            <li class="col-lg-4 col-sm-4">

                <div class="shop-item">

                    <div class="thumbnail">

                        <a item-image" href="MaQuanAo&amp;Type="1">
                            <img class="img-responsive" src="source/assets/images/shop/{{$quanao->AnhBia}}" alt="shop first image">                   
                        </a>
                            <!-- /product image(s) -->

                            <!-- hover buttons -->
                            <div class="shop-option-over">
                                            <!-- /hover buttons -->

                                            <!-- product more info -->
                                <div class="shop-item-info">
                                    <span class="label label-success">NEW</span>
                                    <span class="label label-danger">SALE</span>
                                </div>
                                            <!-- /product more info -->
                            </div>
                                        
                                <div class="shop-item-summary text-center">
                                                <h2 style="min-height: 50px;">{{$quanao->TenQuanAo}}</h2>
                                                
                                                <!-- rating -->
                                    <div class="shop-item-rating-line">
                                        <div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
                                    </div>
                                                <!-- /rating -->

                                                <!-- price -->
                                        <div class="shop-item-price">
                                             {{ $quanao->GiaBan}}    <sup>VNĐ</sup>
                                        </div>
                                                <!-- /price -->
                                </div>

                                                <!-- buttons -->
                                <div class="shop-item-buttons text-center btnAddcart">
                                                    <a id="button-addcart" data="MaQuanAo" class="btn btn-default"><i class="fa fa-cart-plus"></i> Add to Cart</a>
                                                </div>
                                                <!-- /buttons -->
                                </div>
                </div>

                                </li>
                     
            <div class="col-lg-4 col-md-4 col-sm-4">

                    <div class="side-nav-head">
                            <button class="fa fa-bars"></button>
                                    <h5>Chi tiết sản phẩm :</h5>
                                    <br>
                                    <h5>{{$quanao->MoTa}}</h5>
                                    <h5>Chất liệu :{{$quanao->ChatLieu}}</h5>
                                    @foreach($nhasanxuat as $nsx)
                                    @if($nsx->MaNSX==$quanao->MaNSX)
                                         <h5>Nhà sản xuât : {{$nsx->TenNSX}}</h5>
                                    @endif

                                    @endforeach
                                   
                                    <br>
                                  
                    </div>


            </div>

                        <!-- LEFT -->
            <div class="col-lg-3 col-md-3 col-sm-3">

                            <!-- CATEGORIES -->
                <div class="side-nav margin-bottom-60">

                    <div class="side-nav-head">
                            <button class="fa fa-bars"></button>
                                    <h4>CATEGORIES</h4>
                    </div>

                    <ul class="list-group list-group-bordered list-group-noicon uppercase">

                        @foreach($chude as $cd)
                                <li class="list-group-item">
                            <a href="shirt_page.jsp?pages=1">{{$cd->TenChuDe}}<span style=" float: right; ">(totals)</span></a>
                                        
                        </li>    

                        @endforeach
                        
                       

                    </ul>

                            </div>
                            <!-- /CATEGORIES -->

                            <!-- SIZE -->

                            <div class="margin-bottom-60">
                                <h4>SIZE</h4>
                                 @foreach($kichthuoc as $kt)

                                    @if($kt->MaKichThuoc==$quanao->MaKichThuoc)
                                            <a class="tag" href="#">
                                                        <span class="txt">{{$kt->TenKichThuoc}}</span>
                                            </a>
                                    @endif
                                @endforeach

                                
                               
                                <hr>

                                
                            </div>
                            <!-- /SIZE -->


                            <!-- COLOR -->
                            <div class="margin-bottom-60">
                                <h4>COLOR</h4>
                                @foreach($mausac as $mausac)
                                            @if($mausac->MaMauSac==$quanao->MaMauSac)
                                                    <a class="tag shop-color" href="#" style="background-color:{{$mausac->MaMauCss}}"></a>
                                            @endif

                                @endforeach
                                
                                
                               

                                <hr>

                                
                            </div>
                            <!-- /COLOR -->


                            <!-- BRANDS -->
                            <div class="side-nav margin-bottom-60">

                                <div class="side-nav-head">
                                    <button class="fa fa-bars"></button>
                                    <h4>BRANDS</h4>
                                </div>

                                <ul class="list-group list-unstyled">
                                    <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(21)</span> Armani</a></li>
                                    <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(44)</span> Nike</a></li>
                                    <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(2)</span> Jolidon</a></li>
                                    <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(18)</span> Ralph Lauren</a></li>
                                    <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(87)</span> Lotto</a></li>
                                    <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(32)</span> Fila</a></li>
                                    <li class="list-group-item"><a href="#"><span class="size-11 text-muted pull-right">(69)</span> Boss</a></li>
                                </ul>

                            </div>
                            <!-- BRANDS -->


                            <!-- BANNER ROTATOR -->
                            <div class="owl-carousel buttons-autohide controlls-over margin-bottom-60 text-center" data-plugin-options="{&quot;singleItem&quot;: true, &quot;autoPlay&quot;: 4000, &quot;navigation&quot;: true, &quot;pagination&quot;: false, &quot;transitionStyle&quot;:&quot;goDown&quot;}">
                                <a href="#">
                                    <img class="img-responsive" src="source/assets/images/demo/shop/banners/off_1.png" width="270" height="350" alt="">
                                </a>
                                
                            </div>
                            <!-- /BANNER ROTATOR -->


                            

                        </div>

                    </div>
                    <!-- FEATURED -->
                            <div class="margin-bottom-60">

                                <h2 class="owl-featured">FEATURED</h2>
                                <div class="owl-carousel featured" data-plugin-options="{&quot;singleItem&quot;: true, &quot;stopOnHover&quot;:false, &quot;autoPlay&quot;:false, &quot;autoHeight&quot;: false, &quot;navigation&quot;: true, &quot;pagination&quot;: false}">
                                    
                                    <div ><!-- SLIDE 1 -->
                                        <ul class="list-unstyled nomargin nopadding text-left">
                                        <div class="row">
                                            
                                            <li class="clearfix col-md-4"><!-- item -->
                                                <div class="thumbnail featured clearfix pull-left">
                                                    <a href="#">
                                                        <img src="source/assets/images/demo/shop/products/100x100/p10.jpg" width="80" height="80" alt="featured item">
                                                    </a>
                                                </div>

                                                <a class="block size-12" href="#">Long Grey Dress - Special</a>
                                                <div class="rating rating-4 size-13 width-100 text-left"><!-- rating-0 ... rating-5 --></div>
                                                <div class="size-18 text-left">$132.00</div>
                                            </li><!-- /item -->

                                            <li class="clearfix col-md-4"><!-- item -->
                                                <div class="thumbnail featured clearfix pull-left">
                                                    <a href="#">
                                                        <img src="source/assets/images/demo/shop/products/100x100/p2.jpg" width="80" height="80" alt="featured item">
                                                    </a>
                                                </div>

                                                <a class="block size-1" href="#">Black Fashion Hat</a>
                                                <div class="rating rating-4 size-13 width-100 text-left"><!-- rating-0 ... rating-5 --></div>
                                                <div class="size-18 text-left">$65.00</div>
                                            </li><!-- /item -->

                                            <li class="clearfix col-md-4"><!-- item -->
                                                <div class="thumbnail featured clearfix pull-left">
                                                    <a href="#">
                                                        <img src="source/assets/images/demo/shop/products/100x100/p13.jpg" width="80" height="80" alt="featured item">
                                                    </a>
                                                </div>

                                                <a class="block size-1" href="#">Cotton 100% - Pink Dress</a>
                                                <div class="rating rating-4 size-13 width-100 text-left"><!-- rating-0 ... rating-5 --></div>
                                                <div class="size-18 text-left">$77.00</div>
                                            </li><!-- /item -->


                                        </div>
                                            
                                        </ul>
                                    </div><!-- /SLIDE 1 -->
                                    
                                    
                                </div>
                            
                            </div>
                            <!-- /FEATURED -->
                </div>
        </div>
</section>


  
    <!-- JAVASCRIPT FILES -->
        <script type="text/javascript">var plugin_path = 'source/assets/plugins/';</script>
        <script type="text/javascript" src="source/assets/plugins/jquery/jquery-2.1.4.min.js"></script>

        <script type="text/javascript" src="source/assets/js/scripts.js"></script>
        
        

        <!-- REVOLUTION SLIDER -->
        <script type="text/javascript" src="source/assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="source/assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script type="text/javascript" src="source/assets/js/view/demo.revolution_slider.js"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script type="text/javascript" src="source/assets/js/view/demo.shop.js"></script>
       
    </body>
</html>




    
        <!-- STYLESWITCHER - REMOVE -->
       
       
    </body>
</html>
