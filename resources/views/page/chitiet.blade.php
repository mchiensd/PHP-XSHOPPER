 
@extends('master')
@section('content')
 <section>
                <div class="container">
                    
                    <div class="row">

                        <!-- RIGHT -->
                        <div class="col-lg-9 col-md-9 col-sm-9 col-lg-push-3 col-md-push-3 col-sm-push-3">

                            <div class="row">
                            
                                <!-- IMAGE -->
                                <div class="col-lg-6 col-sm-6">
                                    
                                    <div class="thumbnail relative margin-bottom-3">

                                        <!-- 
                                            IMAGE ZOOM 
                                            
                                            data-mode="mouseover|grab|click|toggle"
                                        -->
                                        <figure id="zoom-primary" class="zoom" data-mode="mouseover">
                                            <!-- 
                                                zoom buttton
                                                
                                                positions available:
                                                    .bottom-right
                                                    .bottom-left
                                                    .top-right
                                                    .top-left
                                            -->
                                            <a class="lightbox bottom-right" href="source/assets/images/shop/ASM788.jpg" data-plugin-options='{"type":"image"}'><i class="glyphicon glyphicon-search"></i></a>

                                            <!-- 
                                                image 
                                                
                                                Extra: add .image-bw class to force black and white!
                                            -->
                                            <img class="img-responsive" src="source/assets/images/demo/prod/oduct.getAnhBia()%>" width="1200" height="1500" alt="This is the product title" />
                                        </figure>

                                    </div>

                                    <!-- Thumbnails (required height:100px) -->
                                    
                                    <!-- /Thumbnails -->

                                </div>
                                <!-- /IMAGE -->

                                <!-- ITEM DESC -->
                                <div class="col-lg-6 col-sm-6">

                                    <!-- buttons -->
                                    <div class="pull-right">
                                        <!-- replace data-item-id width the real item ID - used by js/view/demo.shop.js -->
                                        <a class="btn btn-default add-wishlist" href="#" data-item-id="1" data-toggle="tooltip" title="Add To Wishlist"><i class="fa fa-heart nopadding"></i></a>
                                        <a class="btn btn-default add-compare" href="#" data-item-id="1" data-toggle="tooltip" title="Add To Compare"><i class="fa fa-bar-chart-o nopadding" data-toggle="tooltip"></i></a>
                                    </div>
                                    <!-- /buttons -->

                                    <!-- price -->
                                    <div class="shop-item-price">
                                                                            <span class="line-through nopadding-left"><%=product.getGiaBan()%> <sup><span style="font-size: 10px;font-weight: 700;">VNĐ</span></sup></span>
                                        <%=product.getGiaBan()*0.9%> <sup><span style="font-size: 10px;font-weight: 700;">VNĐ</span></sup>
                                    </div>
                                    <!-- /price -->

                                    <hr />

                                    <div class="clearfix margin-bottom-30">
                                        <span class="pull-right text-success"><i class="fa fa-check"></i> In Stock</span>
                                        <!--
                                        <span class="pull-right text-danger"><i class="glyphicon glyphicon-remove"></i> Out of Stock</span>
                                        -->

                                        <strong>PRODUCT ID:&nbsp;&nbsp;</strong> <%=product.getAnhBia().toString().split(".jpg")[0].toString()%>
                                    </div>


                                    <!-- short description -->
                                
                    <p style=" text-align: justify; word-spacing: 3px;margin-bottom: 10px; ">&nbsp;&#8755&nbsp;<%=product.getMota()%><br></p>
                                    <!-- /short description -->


                                    <!-- countdown -->
                                    <div class="text-center">
                                        <h5>Limited Offer</h5>
                                        <div class="countdown" data-from="January 31, 2018 15:03:26" data-labels="years,months,weeks,days,hour,min,sec"><!-- Example Date From: December 31, 2018 15:03:26 --></div>
                                    </div>
                                    <!-- /countdown -->


                                    <hr />

                                    <!-- FORM -->
                                    <form style=" display: flex; " class="clearfix form-inline nomargin" method="get" action="shop-cart.html">
                                        <input type="hidden" name="product_id" value="1" />

                                        <!-- see source/assets/js/view/demo.shop.js -->
                     /    <input type="hidden" id="color" name="color" value="yellow" />
                                        <input type="hidden" id="qty" name="qty" value="1" />
                                        <input type="hidden" id="size" name="size" value="5" />
                                        <!-- see s/ass/w/demo.shop.js -->

                                        <div class="btn-group pull-left product-opt-color">
                                        <!--    <button type="button" class="btn btn-default dropdown-toggle product-color-dd noradius" data-toggle="dropdown">&nbsp;
                                                <span class="caret"></span> 
                                                <span id="product-selected-color" class="tag shop-color" style="background-color:#F0E68C"></span>
                                            </button>
-->
                                                                       -->
                                        </div><!-- /btn-group -->
                                    <div class="btn-group pull-left product-opt-size">
                                                                          
                                            <button type="button" class="btn btn-default dropdown-toggle product-size-dd noradius" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                Size <small id="product-selected-size">(<span><%=listKT.get(0)%></span>)</small>
                                            </button>

                                            <!-- data-val = size value or size id -->
                                            <ul id="product-size-dd" class="dropdown-menu" role="menu">
                                                                                            <%
                                                                                                            for(String a: listKT){
                                                                                                                
                                                                                                %>
                                                                                                <li><a data-val="<%=a%>" href="#"><%=a%></a></li>
                                                                                                  <%
                                                                                                            }
                                                                                                                
                                                                                                %>
                                            </ul>
                                        </div><!-- /btn-group -->

                                        <div class="btn-group pull-left product-opt-qty">
                                            <button type="button" class="btn btn-default dropdown-toggle product-qty-dd noradius" data-toggle="dropdown">
                                                <span class="caret"></span>
                                                SL <small id="product-selected-qty">(<span>1</span>)</small>
                                            </button>

                                            <ul id="product-qty-dd" class="dropdown-menu clearfix" role="menu">
                                                <li class="active"><a data-val="1" href="#">1</a></li>
                                                <li><a data-val="2" href="#">2</a></li>
                                                <li><a data-val="3" href="#">3</a></li>
                                                <li><a data-val="4" href="#">4</a></li>
                                                <li><a data-val="5" href="#">5</a></li>
                                                <li><a data-val="6" href="#">6</a></li>
                                                <li><a data-val="7" href="#">7</a></li>
                                                <li><a data-val="8" href="#">8</a></li>
                                                <li><a data-val="9" href="#">9</a></li>
                                                <li><a data-val="10" href="#">10</a></li>
                                            </ul>
                                        </div><!-- /btn-group -->
                                                                                    <br><br><br>
                                        <button  class="btn btn-primary pull-left product-add-cart noradius">ADD TO CART</button>
                                    
                                    </form>
                                    <!-- /FORM -->


                                    <hr />

                                    

                                    <hr />

                                    <!-- Share -->
                                    <div class="pull-right">

                                        <a href="#" class="social-icon social-icon-sm social-icon-transparent social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>

                                        <a href="#" class="social-icon social-icon-sm social-icon-transparent social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
                                            <i class="icon-twitter"></i>
                                            <i class="icon-twitter"></i>
                                        </a>

                                        <a href="#" class="social-icon social-icon-sm social-icon-transparent social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
                                            <i class="icon-gplus"></i>
                                            <i class="icon-gplus"></i>
                                        </a>

                                        <a href="#" class="social-icon social-icon-sm social-icon-transparent social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
                                            <i class="icon-linkedin"></i>
                                            <i class="icon-linkedin"></i>
                                        </a>

                                    </div>
                                    <!-- /Share -->


                                    <!-- rating -->
                                    
                                    <!-- /rating -->

                                </div>
                                <!-- /ITEM DESC -->

                            </div>



                            <ul id="myTab" class="nav nav-tabs nav-top-border margin-top-80" role="tablist">
                                <li role="presentation" class="active"><a href="#description" role="tab" data-toggle="tab">Description</a></li>
                                <li role="presentation"><a href="#specs" role="tab" data-toggle="tab">Specifications</a></li>
                                <li role="presentation"><a href="#reviews" role="tab" data-toggle="tab">Reviews (2)</a></li>
                            </ul>

                            <div class="tab-content padding-top-20">
                                <!-- DESCRIPTION -->
                                <div role="tabpanel" class="tab-pane fade in active" id="description">
                                    <%                  
                                                                           for(String p : product.getMota().split("\\.")){
                            if(p.contentEquals(product.getMota().split("\\.")[0])){
                                p = " "+p;
                            }
                    %> 
                    <p style=" text-align: justify; word-spacing: 3px;margin-bottom: 10px; ">&nbsp;&#8755&nbsp;<%=p%>.<br></p>
                                         <%
                        }
                            
                    %> 
                                                                </div>
                                
                                <!-- SPECIFICATIONS -->
                                <div role="tabpanel" class="tab-pane fade" id="specs">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Column name</th>
                                                    <th>Column name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Size</td>
                                                    <td><%=product.getMaKichThuoc()%></td>
                                                </tr>
                                                                                                <tr>
                                                    <td>Size - Description</td>
                                                    <td><%=product.getMotaKT()%></td>
                                                </tr>
                                                                                                <tr>
                                                    <td>Material</td>
                                                    <td><%=product.getChatLieu()%></td>
                                                </tr>
                                                <tr>
                                                    <td>Color</td>
                                                    <td><%=product.getMaMauSac()%></td>
                                                </tr>
                                                <tr>
                                                    <td>Type</td>
                                                    <td><%=product.getMaLoaiQuanAo()%></td>
                                                </tr>
                                                <tr>
                                                    <td>Producer</td>
                                                    <td><%=product.getMaNSX()%></td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                
                                <!-- REVIEWS -->
                                <div role="tabpanel" class="tab-pane fade" id="reviews">
                                    <!-- REVIEW ITEM -->
                                    <div class="block margin-bottom-60">

                                        <span class="user-avatar"><!-- user-avatar -->
                                            <img class="pull-left media-object" src="source/assets/images/av.jpg/4" height="64" alt="">
                                        </span>

                                        <div class="media-body">
                                            <h4 class="media-heading size-14">
                                                John Doe &ndash; 
                                                <span class="text-muted">June 29, 2014 - 11:23</span> &ndash;
                                                <span class="size-14 text-muted"><!-- stars -->
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                            </h4>
                                            
                                            <p>
                                                Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.
                                            </p>

                                        </div>

                                    </div>
                                    <!-- /REVIEW ITEM -->

                                    <!-- REVIEW ITEM -->
                                    <div class="block margin-bottom-60">

                                        <span class="user-avatar"><!-- user-avatar -->
                                            <img class="pull-left media-object" src="source/assets/images/av.jpg/4" height="64" alt="">
                                        </span>

                                        <div class="media-body">
                                            <h4 class="media-heading size-14">
                                                John Doe &ndash; 
                                                <span class="text-muted">June 29, 2014 - 11:23</span> &ndash;
                                                <span class="size-14 text-muted"><!-- stars -->
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </span>
                                            </h4>
                                            
                                            <p>
                                                Proin eget tortor risus. Cras ultricies ligula sed magna dictum porta. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas metus nulla, commodo a sodales sed, dignissim pretium nunc. Nam et lacus neque.
                                            </p>

                                        </div>

                                    </div>
                                    <!-- /REVIEW ITEM -->


                                    <!-- REVIEW FORM -->
                                    <h4 class="page-header margin-bottom-40">ADD A REVIEW</h4>
                                    <form method="post" action="#" id="form">
                                        
                                        <div class="row margin-bottom-10">
                                            
                                            <div class="col-md-6 margin-bottom-10">
                                                <!-- Name -->
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Name *" maxlength="100" required>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <!-- Email -->
                                                <input type="email" name="email" id="email" class="form-control" placeholder="Email *" maxlength="100" required>
                                            </div>
                                            
                                        </div>
                                        
                                        <!-- Comment -->
                                        <div class="margin-bottom-30">
                                            <textarea name="text" id="text" class="form-control" rows="6" placeholder="Comment" maxlength="1000"></textarea>
                                        </div>

                                        <!-- Stars -->
                                        <div class="product-star-vote clearfix">

                                            <label class="radio pull-left">
                                                <input type="radio" name="product-review-vote" value="1" />
                                                <i></i> 1 Star
                                            </label>

                                            <label class="radio pull-left">
                                                <input type="radio" name="product-review-vote" value="2" />
                                                <i></i> 2 Stars
                                            </label>

                                            <label class="radio pull-left">
                                                <input type="radio" name="product-review-vote" value="3" />
                                                <i></i> 3 Stars
                                            </label>

                                            <label class="radio pull-left">
                                                <input type="radio" name="product-review-vote" value="4" />
                                                <i></i> 4 Stars
                                            </label>

                                            <label class="radio pull-left">
                                                <input type="radio" name="product-review-vote" value="5" />
                                                <i></i> 5 Stars
                                            </label>

                                        </div>

                                        <!-- Send Button -->
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Send Review</button>
                                        
                                    </form>
                                    <!-- /REVIEW FORM -->

                                </div>
                            </div>


                            <hr class="margin-top-80 margin-bottom-80" />


                            <h2 class="owl-featured"><strong>Related</strong> products:</h2>
                            <div class="owl-carousel featured nomargin owl-padding-10" data-plugin-options='{"singleItem": false, "items": "4", "stopOnHover":false, "autoPlay":4500, "autoHeight": false, "navigation": true, "pagination": false}'>
<% 
            for(ProductQA p : listProductrelated){
    %>
                                <!-- item -->
                                <div class="shop-item nomargin">

                                    <div class="thumbnail">
                                        <!-- product image(s) -->
                                        <a class="shop-item-image" href="shop-single-left.html">
                                            <img class="img-responsive" src="source/assets/images/demo/prod/getAnhBia()%>" alt="shop first image" />
                                            <img class="img-responsive" src="source/assets/images/demo/prod//<%=p.getAnhBia()%>" alt="shop hover image" />
                                        </a>
                                        <!-- /product image(s) -->

                                        <!-- product more info -->
                                        <div class="shop-item-info">
                                                                                    <span style="font-size: 8px;min-width: 25px;" class="label label-success">NEW</span>
                                            <span style="font-size: 8px;min-width: 25px;" class="label label-danger">SALE</span>
                                        </div>
                                        <!-- /product more info -->
                                    </div>
                                    
                                    <div class="shop-item-summary text-center">
                                        <h2 style="min-height: 90px;"><%=p.getTenQuanAo()%></h2>
                                        
                                        <!-- rating -->
                                        <div class="shop-item-rating-line">
                                            <div class="rating rating-4 size-13"><!-- rating-0 ... rating-5 --></div>
                                        </div>
                                        <!-- /rating -->

                                        <!-- price -->
                                        <div class="shop-item-price">
                                                                                    <span class="line-through"><%=p.getGiaBan()%></span></br>
                                            <%=p.getGiaBan()*0.9%>
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
<% 
            }
    %>
                                
                                <!-- item -->
                                
                                <!-- /item -->

                            </div>

                        </div>


                        <!-- LEFT -->
                        <div class="col-lg-3 col-md-3 col-sm-3 col-lg-pull-9 col-md-pull-9 col-sm-pull-9">

                            <!-- CATEGORIES -->
                            <div class="side-nav margin-bottom-60">

                                <div class="side-nav-head">
                                    <button class="fa fa-bars"></button>
                                    <h4>CATEGORIES</h4>
                                </div>

                                <ul class="list-group list-group-bordered list-group-noicon uppercase">
                                    <li class="list-group-item active">
                                        <a class="dropdown-toggle" href="#">SHIRTS <span style=" float: right; padding-right: 25px; ">(<%=total%>)</span></a>
                                        <ul>
                                                                                     <%
                        for(ProductQA p : listProduct){
                            
                    %> 
                                            <li><a href="#"><%=p.getTenQuanAo()%></a></li>
                                         <%
                        }
                            
                    %> 
                                        </ul>
                                    </li>
                                    <li class="list-group-item">
                                        <a class="dropdown-toggle" href="#">PANTS <span style=" float: right; padding-right: 25px; ">(<%=totalp%>)</span></a>
                                        <ul>
                                              <%
                        for(ProductQA p : listProductp){
                            
                    %> 
                                            <li><a href="#"><%=p.getTenQuanAo()%> </a></li>
                                         <%
                        }
                            
                    %> 
                                            
                                        </ul>
                                    </li>
                                    <li class="list-group-item">
                                        <a class="dropdown-toggle" href="#">GLASSES<span style=" float: right; padding-right: 25px; ">(<%=totalg%>)</span></a>
                                        <ul>
                                              <%
                        for(ProductQA p : listProductg){
                            
                    %> 
                                            <li><a href="#"><%=p.getTenQuanAo()%></a></li>
                                         <%
                        }
                            
                    %> 
                                            
                                        </ul>
                                    </li>
                                    

                                </ul>

                            </div>
                            <!-- /CATEGORIES -->


                            <!-- BANNER ROTATOR -->
                            <div class="owl-carousel buttons-autohide controlls-over margin-bottom-60 text-center" data-plugin-options='{"singleItem": true, "autoPlay": 4000, "navigation": true, "pagination": false, "transitionStyle":"fadeUp"}'>
                                <a href="#">
                                    <img class="img-responsive" src="source/assets/images/demo/shop/bs/of/idth="270" height="350" alt="">
                                </a>
                                <a href="#">
                                    <img class="img-responsive" src="source/assets/images/demo/shop/bs/of/idth="270" height="350" alt="">
                                </a>
                            </div>
                            <!-- /BANNER ROTATOR -->


                            <!-- FEATURED -->
                            
                            <!-- /FEATURED -->


                            <!-- HTML BLOCK -->
                            <div class="margin-bottom-60">
                                <h4>HTML BLOCK</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus eunit.</p>

                                <form action="#" role="form" method="post">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="email" name="email" class="form-control" placeholder="Enter your Email" required>
                                        <span class="input-group-btn">
                                            <button class="btn btn-success" type="submit"><i class="glyphicon glyphicon-send"></i></button>
                                        </span>
                                    </div>
                                </form>

                            </div>
                            <!-- /HTML BLOCK -->

                        </div>

                    </div>
                    
                </div>
            </section>
            <!-- / -->
            
@endsection