@extends('admin.layoutadmin')
@section('content')

                        <div class="product-status-wrap">
                            <h4>Hóa Đơn Nhập</h4>   
                            <table>
                                <tbody><tr>
                                    <th>Ngày Nhập</th>
                                    <th>Nhân Viên</th>
                                    <th>Nhà Cung Cấp</th>
                                    <th>Tổng Tiền</th>
                                    <th>Trạng Thái</th>
                                    <th>Chi Tiết</th>
         
                                </tr>
                                @foreach($hoadonnhap ?? '' as $hd)
                                <tr>
                                <td>{{$hd->date}} </td>

                                <td>
                                {{$hd->user->name}}
                                </td>

                                <td>
                                 {{$hd->supplier->name}}
                                </td>
                                <td>{{$hd->total}} </td>
                                <td><?php
                    if ($hd->status == 1)
                    {?>
                        Đã Thanh Toán
                    <?php }
                    else if($hd->status == 0)
                    { ?>
                        Chưa Thanh Toán
                    <?php }
                     else if($hd->status == -1)
                     { ?>
                        Đã Hủy
                     <?php }
                    ?></td>
                    <td><a href="{{route('detail-nhaphang',$hd->id)}}" class="btn btn-info"data-original-title="Xem Chi Tiết"data-toggle="tooltip"><i class="fa fa-eye "></i></a></td>
                               
                                </tr>
                                @endforeach
                            </tbody>
                           </table>
                           {{$hoadonnhap->render()}}   
                            
    </div>
    <div class="text-center custom-pro-edt-ds"style="text-align: left;">
        <button type="button" class="btn btn-ctl-bt waves-effect waves-light m-r-10"><a href="{{route('getadd-nhaphang')}}">Thêm Mới</a></button>              
    </div>
@stop