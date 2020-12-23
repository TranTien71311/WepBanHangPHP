@extends('admin.layoutadmin')
@section('content')
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Thêm Sản Phẩm</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                    <form role="form" action="" method="POST">
                                     {{ csrf_field() }}
                                        <div class="row">
                                        <div class="product-status-wrap">
                            <table>
                                <tbody><tr>
                                    <th>Tên</th>
                                    <th>Số Lượng</th>
                                    <th>Đơn Giá</th>
                                    <th>Thành Tiền</th>
                                    <th>Xóa</th>
                                </tr>
                               
                                @foreach($cthoadonnhaps ?? '' as $cthd)
                                <tr>
                                <td>{{$cthd->idpro}} </td>
                                <td>{{$cthd->quantity}} </td>
                                <td>{{$cthd->price}} </td>
                                <td>{{$cthd->thanhtien}} </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                           </table>  

                          </div>
                                            
                             </div>
                                    </form>
                                </div>

                            </div>
@stop