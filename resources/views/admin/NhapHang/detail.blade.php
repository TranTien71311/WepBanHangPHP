@extends('admin.layoutadmin')
@section('content')
<div class="product-status-wrap">
    <h4>Chi Tiết Hóa Đơn</h4>   
    <table>
        <tbody>
            <tr>
                
                <th>Tên Sản Phẩm</th>
                <th>Số Lượng</th>
                <th>Giá</th>
                <th>Thành Tiền</th>
              
            </tr>
            @foreach($hoadonnhap->cthoadonnhap as $cthd)
                <tr>
                    <td>{{$cthd->product->namepro}} </td>
                    <td>{{$cthd->quantity}} </td>
                    <td>{{$cthd->price}} </td>
                    <td>{{$cthd->thanhtien}} </td>
                  
                </tr>
            @endforeach
            @stop