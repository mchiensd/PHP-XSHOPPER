
@extends('admin.layout.index')
@section('content')

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="admin_asset/images/avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin XSHOPPERS</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

    

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Các chức năng chính</li>
        <li class=""><a href="admin/qladmin/danh-sach-admin"><i class="fa fa-user-secret"></i> <span>Quản lí admin</span></a></li>
         <li class=""><a href="admin/qladmin/danh-sach-chude"><i class="fa fa-barcode"></i> <span>Quản lí chủ đề</span></a></li>
           <li class=""><a href="admin/qladmin/danh-sach-kichthuoc"><i class="fa  fa-sort-alpha-desc"></i> <span>Quản lí kích thước</span></a></li>
             <li class=""><a href="admin/qladmin/danh-sach-loaihang"><i class="fa fa-tags"></i> <span>Quản lí loại hàng</span></a></li>
               <li class=""><a href="admin/qladmin/danh-sach-mausac"><i class="fa fa-industry"></i> <span>Quản lí màu sắc</span></a></li>
                 <li class=""><a href="admin/qladmin/danh-sach-nhasanxuat"><i class="fa fa-cubes"></i> <span>Quản lí nhà sản xuất</span></a></li>
                   <li class=""><a href="admin/qladmin/danh-sach-sanpham"><i class="fa fa-cube"></i> <span>Quản lí sản phẩm</span></a></li>
                    <li class="active"><a href="admin/qladmin/danh-sach-khachhang"><i class="fa fa-user"></i> <span>Quản lí khách hàng</span></a></li>
                     <li class=""><a href="admin/qladmin/danh-sach-dondathang"><i class="fa fa-calendar-o"></i> <span>Quản lí đơn hàng</span></a></li>
                      <li class=""><a href="admin/qladmin/danh-sach-chitietdonhang"><i class="fa  fa-calendar"></i> <span>Quản lí chi tiết đ.hàng</span></a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Quản lí Khách hàng</a></li>
        <li class="active">Danh sách Khách hàng</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">


      <div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Danh sách Khách hàng</h3>
        <div class="box-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
              <div class="input-group-btn">
                <button type="submit" class="btn btn-default">
                  <i class="fa fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tbody class="table-data">
              <tr>
                <th>ID Khách hàng</th>
                <th>Họ tên</th>
                <th>Tài khoản</th>
                <th>Địa chỉ</th>
                <th>Điện thoại</th>
                <th>Email</th>
                <th>Ngày sinh</th>
                   <th>Tác vụ</th>
              </tr>
              @foreach($khachhang as $ad)
              <tr>
                <td>{{$ad->MaKH}}</td>
                <td>{{$ad->HoTen}}</td>
                <td>{{$ad->TaiKhoan}}</td>
                <td>{{$ad->DiaChiKH}}</td>
                <td>{{$ad->DienThoaiKH}}</td>
                <td>{{$ad->Email}}</td>
                <td>{{explode(" ", ($ad->NgaySinh))[0]}}</td>



                <td> <a data-toggle="modal" data-target="#modal-default-edit" id-edit="{{$ad->MaKH}}"  class="btn btn-app btn-edit-admin-modal eid-edit-{{$ad->MaKH}}" style="float: left; border-radius: 3px; position: relative; padding: 0px 0px; min-width: 20px; height: 20px; text-align: center; color: #666; border: none; background-color: #00000000; font-size: 12px;margin: 0;"><i style=" float: left;color: #ff8f00; " class="fa fa-edit"></i></a>
                 <a id-del="{{$ad->MaKH}}" data-toggle="modal" data-target="#modal-default-del" class="btn btn-app btn-del-admin-modal eid-del-{{$ad->MaKH}}" style="float: left; border-radius: 3px; position: relative; padding: 0px 0px; min-width: 20px; height: 20px; text-align: center; color: #666;border: none; background-color: #00000000; font-size: 12px;margin-left: 11px;margin: 0px 0px 0px 10px;"><i style=" float: left;color: red; " class="fa fa-ban"></i></a></td>
              </tr>
              @endforeach
            </tbody>
          </table>

        </div>

        <!-- /.box-body -->
      </div>
       <CENTER>
          <button style="width: 45%;" type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default-add">
                Thêm Chủ Đề
              </button>
       </CENTER>
      <!-- /.box -->
    </div>
  </div>






      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
 
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

  <!-- Modal add -->
  <div class="modal fade" id="modal-default-add" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Thêm Khách Hàng (Admin)</h4>
              </div>
              <div class="modal-body">
              
                <form>
         <div class="box-body">
    

  <div class="form-group">
                <label>Họ tên:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-user"></i>
                  </div>
                 <input name="HoTen" type="text" class="form-control" id="HoTen" placeholder="Nhập tên khách hàng">
                </div>
                <!-- /.input group -->
              </div>



<div class="form-group">
                <label>Tài khoản:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-address-card"></i>
                  </div>
                  <input name="TaiKhoan" type="text" class="form-control" id="TaiKhoan" placeholder="Nhập tên tài khoản">
                </div>
                <!-- /.input group -->
              </div>

<div class="form-group">
                <label>Mật khẩu:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                 <input name="MatKhau" type="password" class="form-control" id="MatKhau" placeholder="Nhập mật khẩu">
                </div>
                <!-- /.input group -->
              </div>
     


     <div class="form-group">
                <label>Địa chỉ:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-bookmark"></i>
                  </div>
                 <input name="DiaChiKH" type="text" class="form-control" id="DiaChiKH" placeholder="Nhập địa chỉ">
                </div>
                <!-- /.input group -->
              </div>


      <div class="form-group">
                <label>Điện thoại:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-mobile"></i>
                  </div>
                  <input name="DienThoaiKH" type="number" class="form-control" id="DienThoaiKH" placeholder="Nhập số điện thoại">
                </div>
                <!-- /.input group -->
              </div>

      <div class="form-group">
                <label>Email:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-at"></i>
                  </div>
                  <input name="Email" type="email" class="form-control" id="Email" placeholder="Nhập email">
                </div>
                <!-- /.input group -->
              </div>


       <div class="form-group">
                <label>Ngày sinh:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                    <input name="NgaySinh" type="date" class="form-control" id="NgaySinh" placeholder="Nhập ngày sinh">
                </div>
                <!-- /.input group -->
              </div>



    


    


          
          </div>
          <!-- /.box-body -->
              
              <div class="modal-footer">
                <button id="close-modal-add" type="button" class="btn btn-default pull-left" data-dismiss="modal">Đóng</button>
                <button id="btn-add-admin" type="button" class="btn btn-success">Thêm</button>
              </div>
         </form>
            </div>
      </div>
             
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

 <!-- //Modal add -->


<!-- Modal edit -->
  <div class="modal fade" id="modal-default-edit" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Sửa khách hàng</h4>
              </div>
              <div class="modal-body">
              
                <form>
                   <input  type="hidden" name="_token" value="{{csrf_token()}}">
         <div class="box-body"> 
       
    <div class="form-group">
         <input  type="hidden" name="eMaKH" value="" id="eMaKH">
                <label>Họ tên:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-user"></i>
                  </div>
                 <input name="eHoTen" type="text" class="form-control" id="eHoTen" placeholder="Nhập tên khách hàng">
                </div>
                <!-- /.input group -->
              </div>



<div class="form-group">
                <label>Tài khoản:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-address-card"></i>
                  </div>
                  <input readonly name="eTaiKhoan" type="text" class="form-control" id="eTaiKhoan" placeholder="Nhập tên tài khoản">
                </div>
                <!-- /.input group -->
              </div>

<div class="form-group">
                <label>Mật khẩu:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-lock"></i>
                  </div>
                 <input readonly name="eMatKhau" type="password" class="form-control" id="eMatKhau" placeholder="Nhập mật khẩu">
                </div>
                <!-- /.input group -->
              </div>
     


     <div class="form-group">
                <label>Địa chỉ:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-bookmark"></i>
                  </div>
                 <input name="eDiaChiKH" type="text" class="form-control" id="eDiaChiKH" placeholder="Nhập địa chỉ">
                </div>
                <!-- /.input group -->
              </div>


      <div class="form-group">
                <label>Điện thoại:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-mobile"></i>
                  </div>
                  <input name="eDienThoaiKH" type="number" class="form-control" id="eDienThoaiKH" placeholder="Nhập số điện thoại">
                </div>
                <!-- /.input group -->
              </div>

      <div class="form-group">
                <label>Email:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-at"></i>
                  </div>
                  <input name="eEmail" validate="" type="email" class="form-control" id="eEmail" placeholder="Nhập email">
                </div>
                <!-- /.input group -->
              </div>


       <div class="form-group">
                <label>Ngày sinh:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                    <input name="eNgaySinh" type="date" class="form-control" id="eNgaySinh" placeholder="Nhập ngày sinh">
                </div>
                <!-- /.input group -->
              </div>



    
    
      
          </div>
          <!-- /.box-body -->
              
              <div class="modal-footer">
                <button id="eclose-modal-edit" type="button" class="btn btn-default pull-left" data-dismiss="modal">Đóng</button>
                <button id="btn-edit-admin" type="button" class="btn btn-success">Lưu lại</button>
              </div>
         </form>
            </div>
      </div>
             
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

 <!-- //Modal edit -->

<!-- Modal del -->
  <div class="modal fade" id="modal-default-del" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content" style="width: 60%; top: 300px; left: 20%; border-radius: 10px;"">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Xác nhận xóa</h4>
              </div>
             <div class="modal-footer">
                <button id="eclose-modal-del" type="button" class="btn btn-default pull-left" data-dismiss="modal">Đóng</button>
                <button id="btn-del-admin" type="button" class="btn btn-success">Xóa</button>
              </div>
      </div>
             
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

 <!-- //Modal del -->





 <!-- popup error or success -->

<div id="pageMessages">

</div>

 <!-- /.popup error or success -->

 


<script type="text/javascript">
   var idclickdel ="";
  $(document).ready(function(){

    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      $("#btn-add-admin").click(function(){
        //  $("#close-modal-add").trigger("click");
    var a= [];

       $.ajax({
                    type: 'POST',
                    url: 'admin/qladmin/them-khachhang',
                    data: JSON.stringify({
                      HoTen: $('#HoTen').val(),
                      TaiKhoan: $('#TaiKhoan').val(),
                      MatKhau: $('#MatKhau').val(),
                      DiaChiKH: $('#DiaChiKH').val(),
                      DienThoaiKH: $('#DienThoaiKH').val(),
                      Email: $('#Email').val(),
                      NgaySinh: $('#NgaySinh').val(),




                  }),
                    contentType: 'application/json; charset=utf-8',
                    dataType: 'json',
                    success: function (msg,data) {

                         console.log('data1: '+data);
                          $.each( msg, function( key, value ) {
                          // alert( key + ": " + value );
                          a.push(value);
});
                     
                      createAlert('','Thêm thành công!','Đã lưu vào CSDL','success',true,true,'pageMessages');
                      $("#close-modal-add").trigger("click");


                      $('.table-data').html($('.table-data').html()+'<tr> <td>'+a[0][0]+'</td> <td>'+a[0][1]+'</td> <td>'+a[0][2]+'</td> <td>'+a[0][3]+'</td> <td>'+a[0][4]+'</td> <td>'+a[0][5]+'</td> <td>'+a[0][6]+'</td><td> <a id-edit="'+a[0][0]+'" data-toggle="modal" data-target="#modal-default-edit" class="btn btn-app btn-edit-admin-modal eid-edit-'+a[0][0]+'" style="float: left; border-radius: 3px; position: relative; padding: 0px 0px; min-width: 20px; height: 20px; text-align: center; color: #666; border: none; background-color: #00000000; font-size: 12px;margin: 0;"><i style=" float: left;color: #ff8f00; " class="fa fa-edit"></i></a> <a data-toggle="modal" data-target="#modal-default-del" id-del="'+a[0][0]+'" class="btn btn-app btn btn-app btn-del-admin-modal eid-del-'+a[0][0]+'" style="float: left; border-radius: 3px; position: relative; padding: 0px 0px; min-width: 20px; height: 20px; text-align: center; color: #666;border: none; background-color: #00000000; font-size: 12px;margin-left: 11px;margin: 0px 0px 0px 10px;"><i style=" float: left;color: red; " class="fa fa-ban"></i></a></td> </tr>');

                       setTimeout(function(){
                           location.reload();
                          },3000);







                    },
                    error: function(err,data){
                      var strerror = "";
                        $.each( err.responseJSON.errors, function( key, value ) {
                           
                            strerror +=  value+'<br>';
});
                      if(err.status == 2001){
                        console.log(err);
                        createAlert('','Thêm thành công!','Tài khoản đã được lưu vào CSDL','success',true,true,'pageMessages');
                        $("#close-modal-add").trigger("click");
                      }
                      else{
                         createAlert('','Lỗi!',strerror,'danger',true,true,'pageMessages');
                    }
          //          console.log('data2: '+data);
                  
              //        console.log(err.responseJSON.errors);
                      }
                     

                });
      
   
          });


// code xử lí sửa
  $("#btn-edit-admin").click(function(){
        //  $("#close-modal-add").trigger("click");
    var a= [];

       $.ajax({
                    type: 'POST',
                    url: 'admin/qladmin/sua-khachhang',
                    data: JSON.stringify({
                      eMaKH: $('#eMaKH').val(),
                      eHoTen: $('#eHoTen').val(),
                      eDiaChiKH: $('#eDiaChiKH').val(),
                      eDienThoaiKH: $('#eDienThoaiKH').val(),
                      eEmail: $('#eEmail').val(),
                      eNgaySinh: $('#eNgaySinh').val(),


                    }),
                    contentType: 'application/json; charset=utf-8',
                    dataType: 'json',
                    success: function (msg,data) {

                         console.log('data1: '+data);
                          $.each( msg, function( key, value ) {
                          // alert( key + ": " + value );
                          a.push(value);
});
                          /*console.log('msg: '+msg);
                           console.log('msg: '+a[0][1]);*/
                          createAlert('','Sửa thành công!','Đã lưu vào CSDL','success',true,true,'pageMessages');
                          $('.eid-edit-'+ $('#eMaKH').val()).parent().parent().children().eq(1).html($('#eHoTen').val());
                           $('.eid-edit-'+ $('#eMaKH').val()).parent().parent().children().eq(3).html($('#eDiaChiKH').val());
                            $('.eid-edit-'+ $('#eMaKH').val()).parent().parent().children().eq(4).html($('#eDienThoaiKH').val());
                            $('.eid-edit-'+ $('#eMaKH').val()).parent().parent().children().eq(5).html($('#eEmail').val());
                             $('.eid-edit-'+ $('#eMaKH').val()).parent().parent().children().eq(6).html($('#eNgaySinh').val());
                         


                      $("#eclose-modal-edit").trigger("click");


                     





                    },
                    error: function(err,data){
                      var strerror = "";
                        $.each( err.responseJSON.errors, function( key, value ) {
                           
                            strerror +=  value+'<br>';
});
                      if(err.status == 2001){
                        console.log(err);
                        createAlert('','Sửa thành công!','Tài khoản đã được lưu vào CSDL','success',true,true,'pageMessages');
                        $("#eclose-modal-edit").trigger("click");
                      }
                      else{
                         createAlert('','Lỗi!',strerror,'danger',true,true,'pageMessages');
                    }
          //          console.log('data2: '+data);
                  
              //        console.log(err.responseJSON.errors);
                      }
                     

                });
      
   
          });




// code mở modal sửa theo row
$(".btn-edit-admin-modal").click(function(){
        //  $("#close-modal-add").trigger("click");

            var id = $(this).parent().parent().children().eq(0).text();
             var ht = $(this).parent().parent().children().eq(1).text();
             var tk = $(this).parent().parent().children().eq(2).text();
             var dc = $(this).parent().parent().children().eq(3).text();
             var dt = $(this).parent().parent().children().eq(4).text();
             var em = $(this).parent().parent().children().eq(5).text();
             var ns = $(this).parent().parent().children().eq(6).text();

            console.log('id: '+id);

            $('#eMaKH').val(id);
            $('#eHoTen').val(ht);
             $('#eTaiKhoan').val(tk);
             $('#eDiaChiKH').val(dc);
              $('#eDienThoaiKH').val(dt);
               $('#eEmail').val(em);
                $('#eNgaySinh').val(ns);
                 $('#eMatKhau').val('*********');


      
   
          });



$(".btn-del-admin-modal").click(function(){
            idclickdel = $(this).parent().parent().children().eq(0).text();
            console.log(idclickdel);
          });





//post xoa
 $("#btn-del-admin").click(function(){
        //  $("#close-modal-add").trigger("click");
    var a= [];

       $.ajax({
                       
                    type: 'POST',
                    url: 'admin/qladmin/xoa-khachhang',
                    data: JSON.stringify({MaKH: idclickdel}),
                    contentType: 'application/json; charset=utf-8',
                    dataType: 'json',
                    success: function (msg,data) {
                          console.log(idclickdel);
                         console.log('data1: '+data);
                          $.each( msg, function( key, value ) {
                          // alert( key + ": " + value );
                          a.push(value);
});
                          /*console.log('msg: '+msg);
                           console.log('msg: '+a[0][1]);*/
                          createAlert('','Xóa thành công!','Đã xóa khỏi CSDL','success',true,true,'pageMessages');
                          $('.eid-del-'+ idclickdel).parent().parent().remove();
                          

                      $("#eclose-modal-del").trigger("click");


                     





                    },
                    error: function(err,data){
                      var strerror = "";
                        $.each( err.responseJSON.errors, function( key, value ) {
                           
                            strerror +=  value+'<br>';
});
                      if(err.status == 2001){
                        console.log(err);
                        createAlert('','Xóa thành công!','Đã xóa khỏi CSDL','success',true,true,'pageMessages');
                        $("#eclose-modal-del").trigger("click");
                      }
                      else{
                         createAlert('','Lỗi!',strerror,'danger',true,true,'pageMessages');
                    }
          //          console.log('data2: '+data);
                  
              //        console.log(err.responseJSON.errors);
                      }
                     

                });
      
   
          });








//














  });

</script>

@endsection