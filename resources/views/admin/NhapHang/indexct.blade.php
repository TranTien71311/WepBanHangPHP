@extends('admin.layoutadmin')
@section('content')
<div class="review-tab-pro-inner">
<ul id="myTab3" class="tab-review-design">
<li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Thêm Sản Phẩm</a></li>
</ul>
<div id="myTabContent" class="tab-content custom-product-edit">
<div class="product-tab-list tab-pane fade active in" id="description">
<form role="form" action="{{route('postaddct-nhaphang')}}" method="POST">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="review-content-section">
            <div class="input-group mg-b-pro-edt">
                <span class="input-group-addon">Mã Hóa Đơn</span>
                <input type="text" style="background-color: #152036;" class="form-control"value="{{$hoadonnhap->id}}"name="txtidhd"readonly>
            </div>
                <div class="input-group mg-b-pro-edt">
                    <span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
                    <select class="form-control pro-edt-select form-control-primary"name="txtidpro">
                        @foreach($list_product as $pro)
                                <option value="{{$pro->id}}">{{$pro->namepro}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="review-content-section">
                <div class="input-group mg-b-pro-edt">
                    <span class="input-group-addon"><i class="fa fa-money" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" placeholder="Giá"required=""name="txtprice"/>
                </div>
                <div class="input-group mg-b-pro-edt">
                    <span class="input-group-addon"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" placeholder="Số Lượng"required=""name="txtquantity"/>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="text-center custom-pro-edt-ds">
                <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Thêm</button>
            </div>
        </div>
    </div>
</form>
                                    


<div class="product-status-wrap">
    <h4>Chi Tiết Hóa Đơn</h4>   
    <table>
        <tbody>
            <tr>
                
                <th>Tên Sản Phẩm</th>
                <th>Số Lượng</th>
                <th>Giá</th>
                <th>Thành Tiền</th>
                <th></th>
            </tr>
            @foreach($hoadonnhap->cthoadonnhap as $cthd)
                <tr>
                    <td>{{$cthd->product->namepro}} </td>
                    <td>{{$cthd->quantity}} </td>
                    <td>{{$cthd->price}} </td>
                    <td>{{$cthd->thanhtien}} </td>
                    <td><a class="text-danger"href="{{route('delete-nhaphang',$cthd->id)}}">X</a></td>
                </tr>
            @endforeach
            <tr>
                <td>Tổng Tiền: {{$hoadonnhap->total}}</td>
            </tr>
      
        </tbody>
    </table>    
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="text-left custom-pro-edt-ds">
                <a  class="btn btn-ctl-bt waves-effect waves-light m-r-10"href="{{route('xacnhan-nhaphang',$hoadonnhap->id)}}">Xác Nhận</a>
                <a  class="btn btn-ctl-bt waves-effect waves-light m-r-10"href="{{route('huy-nhaphang',$hoadonnhap->id)}}">Hủy</a>
            </div>
        </div>
    </div>            
</div>
   
@stop