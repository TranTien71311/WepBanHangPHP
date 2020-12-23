@extends('admin.layoutadmin')
@section('content')

                        <div class="product-status-wrap">
                            <h4>Nhân Viên</h4>
                            <table>
                                <tbody><tr>
                                    <th>Ảnh</th>
                                    <th>Tên</th>
                                    <th>Email</th>
                                    <th>Điện Thoại</th>
                                    <th>Chức Vụ</th>
                                    <th>Trạng Thái</th>
                                    <th>Chỉnh Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                                @foreach($user ?? '' as $u)
                                <tr>
                                <td><img src="{{asset('AssetAdmin/image-user/'. $u->image)}}" style=" width:80px;height:60x" /></td>
                                <td>{{$u->name}} </td>
                                <td> {{$u->email}}</td>
                                <td>{{$u->tellphone}}</td>
                                <td>{{$u->address}}</td>
                                <td><?php
                    if ($u->status == 1)
                    {?>
                        <a href="{{route('UnActive-user',$u->id)}}"class="btn btn-success"data-original-title="Hoạt Động"data-toggle="tooltip"><i class="fa fa-unlock-alt"></i></a>
                    <?php }
                    else if($u->status == 0)
                    { ?>
                        <a href="{{route('Active-user',$u->id)}}"class="btn btn-warning"data-original-title="Tạm Khóa"data-toggle="tooltip"><i class="fa fa-lock"></i></a>
                    <?php } ?></td>
                                <td><a href="{{route('getedit-user',$u->id)}}" class="btn btn-primary"data-original-title="Sửa"data-toggle="tooltip"><i class="fa fa-edit"></i></a></td>
                                <td><a href="{{route('delete-user',$u->id)}}" class="btn btn-danger"data-original-title="Xóa"data-toggle="tooltip"><i class="fa fa-trash"></i></a></td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                           </table>
                        {{$user->render()}}
                            
    </div>
    <div class="text-center custom-pro-edt-ds"style="text-align: left;">
        <button type="button" class="btn btn-ctl-bt waves-effect waves-light m-r-10"><a href="{{route('getadd-user')}}">Thêm Mới</a></button>              
    </div>  
@stop