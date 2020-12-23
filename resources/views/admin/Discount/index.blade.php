@extends('admin.layoutadmin')
@section('content')

                        <div class="product-status-wrap">
                            <h4>Giảm Giá Sản Phẩm</h4>   
                            <table>
                                <tbody><tr>
                                    <th>Ảnh</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Giảm Giá</th>
                                    <th>Ngày Giảm Giá</th>
                                    <th>Chỉnh Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                                @foreach($discount ?? '' as $dis)
                                <tr>
                                <td>
                                @foreach($list_product as $pro)
                                  @if($pro->id ==$dis->idpro )<img src="{{asset('AssetAdmin/image-product/'. $pro->imagepro)}}" style=" width:60px;height:60px" />@endif
                                @endforeach
                                </td>
                                <td>
                                @foreach($list_product as $pro)
                                  <?php if($pro->id ==$dis->idpro) echo $pro->namepro; ?>
                                @endforeach
                                </td>
                                <td>{{$dis->discount}} </td>
                                <td>{{$dis->date}} </td>
                         
                                <td><a href="" class="btn btn-primary"data-original-title="Sửa"data-toggle="tooltip"><i class="fa fa-edit"></i></a></td>
                                <td><a href="{{route('delete-discount',$dis->id)}}" class="btn btn-danger"data-original-title="Xóa"data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                            
                                </tr>
                                @endforeach
                            </tbody>
                           </table>
                           {{$discount->render()}}   
                            
    </div>
    <div class="text-center custom-pro-edt-ds"style="text-align: left;">
        <button type="button" class="btn btn-ctl-bt waves-effect waves-light m-r-10"><a href="{{route('getadd-discount')}}">Thêm Mới</a></button>              
    </div>

     
@stop