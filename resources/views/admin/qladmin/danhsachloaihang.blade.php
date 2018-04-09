
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
             <li class="active"><a href="admin/qladmin/danh-sach-loaihang"><i class="fa fa-tags"></i> <span>Quản lí loại hàng</span></a></li>
               <li class=""><a href="admin/qladmin/danh-sach-mausac"><i class="fa fa-industry"></i> <span>Quản lí màu sắc</span></a></li>
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
        <li><a href="#"><i class="fa fa-dashboard"></i> Quản lí loại hàng</a></li>
        <li class="active">Danh sách loại hàng</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">


      <div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Danh sách loại hàng</h3>
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
                <th>ID loại hàng</th>
                <th>Tên loại hàng</th>
                <th>Mã CD</th>
                   <th>Tác vụ</th>
              </tr>
              @foreach($loaihang as $ad)
              <tr>
                <td>{{$ad->MaLoaiQuanAo}}</td>
                <td>{{$ad->TenLoaiQuanAo}}</td>
                @foreach($chude as $cd)
                  @if($ad->MaCD == $cd->MaCD)
                   <th id-mcd="{{$ad->MaCD}}">{{$ad->MaCD}} ( {{$cd->TenChuDe}} )</th>        
                   @else
                   @endif
                @endforeach


                <td> <a data-toggle="modal" data-target="#modal-default-edit" id-edit="{{$ad->MaLoaiQuanAo}}"  class="btn btn-app btn-edit-admin-modal eid-edit-{{$ad->MaLoaiQuanAo}}" style="float: left; border-radius: 3px; position: relative; padding: 0px 0px; min-width: 20px; height: 20px; text-align: center; color: #666; border: none; background-color: #00000000; font-size: 12px;margin: 0;"><i style=" float: left;color: #ff8f00; " class="fa fa-edit"></i></a>
                 <a id-del="{{$ad->MaLoaiQuanAo}}" data-toggle="modal" data-target="#modal-default-del" class="btn btn-app btn-del-admin-modal eid-del-{{$ad->MaLoaiQuanAo}}" style="float: left; border-radius: 3px; position: relative; padding: 0px 0px; min-width: 20px; height: 20px; text-align: center; color: #666;border: none; background-color: #00000000; font-size: 12px;margin-left: 11px;margin: 0px 0px 0px 10px;"><i style=" float: left;color: red; " class="fa fa-ban"></i></a></td>
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
                <h4 class="modal-title">Thêm loại hàng</h4>
              </div>
              <div class="modal-body">
              
                <form>
         <div class="box-body">
    <div class="form-group">
      <input  type="hidden" name="_token" value="{{csrf_token()}}">
      <label for="TenLoaiQuanAo">Tên loại hàng</label>
      <input name="TenLoaiQuanAo" type="text" class="form-control" id="TenLoaiQuanAo" placeholder="Nhập tên loại hàng">
      </div>



<!--drop cd-->

<div class="form-group">
                <label>Danh sách chủ đề</label>
                <select id="option-cd" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                <!--  <option value="{{$chude->first()->MaCD}}" selected="selected">{{$chude->first()->TenChuDe}}</option> -->
                  @foreach($chude as $cd)
                  <option value="{{$cd->MaCD}}">{{$cd->TenChuDe}}</option>
                  @endforeach
                </select>
              </div>





<!--drop cd-->



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
                <h4 class="modal-title">Sửa loại hàng</h4>
              </div>
              <div class="modal-body">
              
                <form>
         <div class="box-body">
    <div class="form-group">
      <input  type="hidden" name="_token" value="{{csrf_token()}}">
      <input  type="hidden" name="eMaLoaiQuanAo" value="" id="eMaLoaiQuanAo">
      <label for="eTenLoaiQuanAo">Tên loại hàng</label>
      <input name="eTenLoaiQuanAo" type="text" class="form-control" id="eTenLoaiQuanAo" placeholder="Nhập tên loại hàng">
      </div>
      
        <div class="form-group">
                <label>Danh sách chủ đề</label>
                <select id="eoption-cd" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                <!--  <option value="{{$chude->first()->MaCD}}" selected="selected">{{$chude->first()->TenChuDe}}</option> -->
                  @foreach($chude as $cd)
                  <option value="{{$cd->MaCD}}">{{$cd->TenChuDe}}</option>
                  @endforeach
                </select>
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
        console.log('click post: option text: '+$( "#option-cd option:selected" ).text());
    var a= [];

       $.ajax({
                    type: 'POST',
                    url: 'admin/qladmin/them-loaihang',
                    data: JSON.stringify({TenLoaiQuanAo: $('#TenLoaiQuanAo').val(), MaCD: $('#option-cd').val()  }),
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


                      $('.table-data').html($('.table-data').html()+'<tr> <td>'+a[0][1]+'</td> <td>'+a[0][0]+'</td><th>( '+$('#option-cd').val()+' ) '+$( "#option-cd option:selected" ).text()+'</th> <td> <a id-edit="'+a[0][1]+'" data-toggle="modal" data-target="#modal-default-edit" class="btn btn-app btn-edit-admin-modal eid-edit-'+a[0][1]+'" style="float: left; border-radius: 3px; position: relative; padding: 0px 0px; min-width: 20px; height: 20px; text-align: center; color: #666; border: none; background-color: #00000000; font-size: 12px;margin: 0;"><i style=" float: left;color: #ff8f00; " class="fa fa-edit"></i></a> <a data-toggle="modal" data-target="#modal-default-del" id-del="'+a[0][1]+'" class="btn btn-app btn btn-app btn-del-admin-modal eid-del-'+a[0][1]+'" style="float: left; border-radius: 3px; position: relative; padding: 0px 0px; min-width: 20px; height: 20px; text-align: center; color: #666;border: none; background-color: #00000000; font-size: 12px;margin-left: 11px;margin: 0px 0px 0px 10px;"><i style=" float: left;color: red; " class="fa fa-ban"></i></a></td> </tr>');

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
                    url: 'admin/qladmin/sua-loaihang',
                    data: JSON.stringify({eMaLoaiQuanAo: $('#eMaLoaiQuanAo').val() , eTenLoaiQuanAo: $('#eTenLoaiQuanAo').val(), eMaCD: $( "#eoption-cd").val()}),
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
                          $('.eid-edit-'+ $('#eMaLoaiQuanAo').val()).parent().parent().children().eq(1).html($('#eTenLoaiQuanAo').val());
                          $('.eid-edit-'+ $('#eMaLoaiQuanAo').val()).parent().parent().children().eq(2).html('<th id-mcd='+$("#eoption-cd").val()+'>'+$("#eoption-cd").val()+' '+'( '+$( "#eoption-cd option:selected" ).text()+' )</th>');


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
             var ten = $(this).parent().parent().children().eq(1).text();
             var valdrop = parseInt($(this).parent().parent().children().eq(2).text().split('(')[0].toString());

            console.log('valdrop: '+valdrop);
            console.log('ten: '+ten);
            console.log('id: '+id);

            $('#eMaLoaiQuanAo').val(id);
            $('#eTenLoaiQuanAo').val(ten);
            $("#eoption-cd").val(valdrop);

         
   
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
                    url: 'admin/qladmin/xoa-loaihang',
                    data: JSON.stringify({MaLoaiQuanAo: idclickdel}),
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