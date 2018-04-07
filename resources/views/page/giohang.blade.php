  <!-- CART -->
  @extends('master')
  @section('content')
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
@endsection