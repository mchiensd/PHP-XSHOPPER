
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
               <li class="active"><a href="admin/qladmin/danh-sach-mausac"><i class="fa fa-industry"></i> <span>Quản lí màu sắc</span></a></li>
                 <li class=""><a href="admin/qladmin/danh-sach-nhasanxuat"><i class="fa fa-cubes"></i> <span>Quản lí nhà sản xuất</span></a></li>
                   <li class=""><a href="admin/qladmin/danh-sach-sanpham"><i class="fa fa-cube"></i> <span>Quản lí sản phẩm</span></a></li>
                    <li class=""><a href="admin/qladmin/danh-sach-khachhang"><i class="fa fa-user"></i> <span>Quản lí khách hàng</span></a></li>
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
        <li><a href="#"><i class="fa fa-dashboard"></i> Quản lí màu sắc</a></li>
        <li class="active">Danh sách màu sắc</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">


      <div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Danh sách màu sắc</h3>
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
                <th>ID màu sắc</th>
                <th>Tên màu sắc</th>
                <th>Mã màu CSS</th>
                   <th>Tác vụ</th>
              </tr>
              @foreach($mausac as $ad)
              <tr>
                <td>{{$ad->MaMauSac}}</td>
                <td>{{$ad->TenMauSac}}</td>
                <td style="background: {{$ad->MaMauCss}}">{{$ad->MaMauCss}}</td>
                <td> <a data-toggle="modal" data-target="#modal-default-edit" id-edit="{{$ad->MaMauSac}}"  class="btn btn-app btn-edit-admin-modal eid-edit-{{$ad->MaMauSac}}" style="float: left; border-radius: 3px; position: relative; padding: 0px 0px; min-width: 20px; height: 20px; text-align: center; color: #666; border: none; background-color: #00000000; font-size: 12px;margin: 0;"><i style=" float: left;color: #ff8f00; " class="fa fa-edit"></i></a>
                 <a id-del="{{$ad->MaMauSac}}" data-toggle="modal" data-target="#modal-default-del" class="btn btn-app btn-del-admin-modal eid-del-{{$ad->MaMauSac}}" style="float: left; border-radius: 3px; position: relative; padding: 0px 0px; min-width: 20px; height: 20px; text-align: center; color: #666;border: none; background-color: #00000000; font-size: 12px;margin-left: 11px;margin: 0px 0px 0px 10px;"><i style=" float: left;color: red; " class="fa fa-ban"></i></a></td>
              </tr>
              @endforeach
            </tbody>
          </table>

        </div>

        <!-- /.box-body -->
      </div>
       <CENTER>
          <button style="width: 45%;" type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default-add">
                Thêm Màu Sắc
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
                <h4 class="modal-title">Thêm màu sắc</h4>
              </div>
              <div class="modal-body">
              
                <form method="POST" action="admin/qladmin/them-kichthuoc">
         <div class="box-body">
    <div class="form-group">
      <input  type="hidden" name="_token" value="{{csrf_token()}}">
      <label for="TenMauSac">Tên màu sắc</label>
      <input name="TenMauSac" type="text" class="form-control" id="TenMauSac" placeholder="Nhập tên màu sắc">
      </div>

      <div class="form-group">    
      <label for="MaMauCss">Mã màu Css</label>
      <input name="MaMauCss" type="text" class="form-control" id="MaMauCss" placeholder="Nhập mã màu CSS">
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
                <h4 class="modal-title">Sửa màu sắc</h4>
              </div>
              <div class="modal-body">
              
                <form method="POST" method="POST" action="admin/qladmin/sua-mausac">
         <div class="box-body">
    <div class="form-group">
      <input  type="hidden" name="_token" value="{{csrf_token()}}">
      <input  type="hidden" name="eMaMauSac" value="" id="eMaMauSac">
      <label for="eTenMauSac">Tên kích thước</label>
      <input name="eTenMauSac" type="text" class="form-control" id="eTenMauSac" placeholder="Nhập tên màu sắc">
     
      </div>
      <div class="form-group">
      <label for="eMaMauCss">Mã màu CSS</label>
      <input name="eMaMauCss" type="text" class="form-control" id="eMaMauCss" placeholder="Nhập mã màu Css">
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
                    url: 'admin/qladmin/them-mausac',
                    data: JSON.stringify({TenMauSac: $('#TenMauSac').val(),MaMauCss: $('#MaMauCss').val() }),
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


                      $('.table-data').html($('.table-data').html()+'<tr> <td>'+a[0][0]+'</td> <td>'+a[0][1]+'</td> <td style="background: '+a[0][2]+'">'+a[0][2]+'</td> <td> <a id-edit="'+a[0][0]+'" data-toggle="modal" data-target="#modal-default-edit" class="btn btn-app btn-edit-admin-modal eid-edit-'+a[0][0]+'" style="float: left; border-radius: 3px; position: relative; padding: 0px 0px; min-width: 20px; height: 20px; text-align: center; color: #666; border: none; background-color: #00000000; font-size: 12px;margin: 0;"><i style=" float: left;color: #ff8f00; " class="fa fa-edit"></i></a> <a data-toggle="modal" data-target="#modal-default-del" id-del="'+a[0][0]+'" class="btn btn-app btn btn-app btn-del-admin-modal eid-del-'+a[0][0]+'" style="float: left; border-radius: 3px; position: relative; padding: 0px 0px; min-width: 20px; height: 20px; text-align: center; color: #666;border: none; background-color: #00000000; font-size: 12px;margin-left: 11px;margin: 0px 0px 0px 10px;"><i style=" float: left;color: red; " class="fa fa-ban"></i></a></td> </tr>');

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
                    url: 'admin/qladmin/sua-mausac',
                    data: JSON.stringify({eMaMauSac: $('#eMaMauSac').val() , eTenMauSac: $('#eTenMauSac').val(),eMaMauCss: $('#eMaMauCss').val(),}),
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
                         // $('.eid-edit-'+ $('#eIdAdmin').val()).parent().parent().children().eq(3).val($('#eHoTenAdmin'));
                         $('.eid-edit-'+ $('#eMaMauSac').val()).parent().parent().children().eq(1).html($('#eTenMauSac').val());
                        $('.eid-edit-'+ $('#eMaMauSac').val()).parent().parent().children().eq(2).html($('#eMaMauCss').val());
                         $('.eid-edit-'+ $('#eMaMauSac').val()).parent().parent().children().eq(2).css('background',$('#eMaMauCss').val());

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
             var mt = $(this).parent().parent().children().eq(2).text();
             var ten = $(this).parent().parent().children().eq(1).text();

            console.log('id: '+id);

            $('#eMaMauSac').val(id);
            $('#eMaMauCss').val(mt);
            $('#eTenMauSac').val(ten);


      
   
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
                    url: 'admin/qladmin/xoa-mausac',
                    data: JSON.stringify({MaMauSac: idclickdel}),
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