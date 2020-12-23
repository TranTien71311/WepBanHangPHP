@extends('admin.layoutadmin')
@section('content')

                        <div class="product-status-wrap">
                            <h4>Sản Phẩm</h4>   
                            <table>
                                <tbody><tr>
                                    <th>Ảnh</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Số Lượng</th>
                                    <th>Giá</th>
                                    
                                    <th>Trạng Thái</th>
                                    <th>Chi Tiết</th>
                                    <th>Chỉnh Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                                @foreach($product ?? '' as $pro)
                                <tr>
                                <td><img src="{{asset('AssetAdmin/image-product/'. $pro->imagepro)}}" style=" width:60px;height:60px" /></td>
                                <td>{{$pro->namepro}} </td>
                                <td>{{$pro->quantity}} </td>
                                <td>{{$pro->price}} </td>
                                
                                <td><?php
                    if ($pro->status == 1||$pro->status == 2)
                    {?>
                        <a href="{{route('UnActive-product',$pro->id)}}"class="btn btn-success"data-original-title="Hoạt Động"data-toggle="tooltip"><i class="fa fa-unlock-alt"></i></a>
                    <?php }
                    else if($pro->status == 0)
                    { ?>
                        <a href="{{route('Active-product',$pro->id)}}"class="btn btn-warning"data-original-title="Tạm Khóa"data-toggle="tooltip"><i class="fa fa-lock"></i></a>
                    <?php } ?></td>
                                <td><a href="{{route('detail-product',$pro->id)}}" class="btn btn-info"data-original-title="Xem Chi Tiết"data-toggle="tooltip"><i class="fa fa-eye "></i></a></td>
                                <td><a href="{{route('getedit-product',$pro->id)}}" class="btn btn-primary"data-original-title="Sửa"data-toggle="tooltip"><i class="fa fa-edit"></i></a></td>
                                <td><a href="{{route('delete-product',$pro->id)}}" class="btn btn-danger"data-original-title="Xóa"data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                           </table>
                           {{$product->render()}}   
                            
    </div>
    <div class="text-center custom-pro-edt-ds"style="text-align: left;">
        <button type="button" class="btn btn-ctl-bt waves-effect waves-light m-r-10"><a href="{{route('getadd-product')}}">Thêm Mới</a></button>              
    </div>

     
@stop