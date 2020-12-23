@extends('admin.layoutadmin')
@section('content')
                        <div class="product-status-wrap">
                            <h4>Nhà Cung Cấp</h4>
                            <table>
                                <tbody><tr>
                                    <th>Ảnh</th>
                                    <th>Tên</th>
                                    <th>Email</th>
                                    <th>Trạng Thái</th>
                                    <th>Chỉnh Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                                @foreach($supplier ?? '' as $supp)
                                <tr>
                                <td><img src="{{asset('AssetAdmin/image-supplier/'. $supp->image)}}"style=" width:80px;height:60px" /></td>
                                <td>{{$supp->name}} </td>
                                <td>{{$supp->email}} </td>
                                <td><?php
                    if ($supp->status == 1)
                    {?>
                        <a href="{{route('UnActive-supplier',$supp->id)}}"class="btn btn-success"data-original-title="Hoạt Động"data-toggle="tooltip"><i class="fa fa-unlock-alt"></i></a>
                    <?php }
                    else if($supp->status == 0)
                    { ?>
                        <a href="{{route('Active-supplier',$supp->id)}}"class="btn btn-warning"data-original-title="Tạm Khóa"data-toggle="tooltip"><i class="fa fa-lock"></i></a>
                    <?php } ?></td>
                                <td><a href="{{route('getedit-supplier',$supp->id)}}" class="btn btn-primary"data-original-title="Sửa"data-toggle="tooltip"><i class="fa fa-edit"></i></a></td>
                                <td><a href="{{route('delete-supplier',$supp->id)}}" class="btn btn-danger"data-original-title="Xóa"data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                           </table>
                           {{$supplier->render()}}   
                            
    </div>
    <div class="text-center custom-pro-edt-ds"style="text-align: left;">
        <button type="button" class="btn btn-ctl-bt waves-effect waves-light m-r-10"><a href="{{route('getadd-supplier')}}">Thêm Mới</a></button>              
    </div>
                 
@stop