@extends('admin.layoutadmin')
@section('content')
                        <div class="product-status-wrap">
                            <h4>Thương Hiệu Sản Phẩm</h4>
                            <table>
                                <tbody><tr>
                                    <th>Ảnh</th>
                                    <th>Tên loại</th>
                                    <th>Trạng Thái</th>
                                    <th>Chỉnh Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                                @foreach($category ?? '' as $cate)
                                <tr>
                                <td><img src="{{asset('AssetAdmin/image-category/'. $cate->imagecat)}}" style=" width:120px;height:60px" /></td>
                                <td>{{$cate->namecat}} </td>
                                <td><?php
                    if ($cate->status == 1)
                    {?>
                        <a href="{{route('UnActive-category',$cate->id)}}"class="btn btn-success"data-original-title="Hoạt Động"data-toggle="tooltip"><i class="fa fa-unlock-alt"></i></a>
                    <?php }
                    else if($cate->status == 0)
                    { ?>
                        <a href="{{route('Active-category',$cate->id)}}"class="btn btn-warning"data-original-title="Tạm Khóa"data-toggle="tooltip"><i class="fa fa-lock"></i></a>
                    <?php } ?></td>
                                <td><a href="{{route('getedit-category',$cate->id)}}" class="btn btn-primary"data-original-title="Sửa"data-toggle="tooltip"><i class="fa fa-edit"></i></a></td>
                                <td><a href="{{route('delete-category',$cate->id)}}" class="btn btn-danger"data-original-title="Xóa"data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                           </table>
                           {{$category->render()}}   
    </div>
    <div class="text-center custom-pro-edt-ds"style="text-align: left;">
        <button type="button" class="btn btn-ctl-bt waves-effect waves-light m-r-10"><a href="{{route('getadd-category')}}">Thêm Mới</a></button>              
    </div>
@stop