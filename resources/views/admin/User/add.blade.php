@extends('admin.layoutadmin')
@section('content')
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Thêm Nhân Viên</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                    <form role="form" action="{{route('postadd-user')}}" method="POST"enctype="multipart/form-data">
                                     {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Tên Nhân Viên"required=""name="txtname">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-mail" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Email"required=""name="txtemail">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Mật Khẩu"name="txtpassword">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-picture-o" aria-hidden="true"></i></span>
                                                        <input type="file" class="form-control" placeholder="Ảnh"required=""name="txtimage">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Số Điện Thoại"required=""name="txttellphone">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Chức Vụ"required=""name="txtaddress">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Địa Chỉ"required=""name="txtposition">
                                                    </div>
                                                    <select class="form-control pro-edt-select form-control-primary"name="txtstatus">
															<option value="1">Trạng Thái: Kích Hoạt</option>
															<option value="0">Trạng Thái: Tạm Khóa</option>
													</select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Thêm</button>
                                                    <button type="button" class="btn btn-ctl-bt waves-effect waves-light m-r-10"><a href="{{route('index-user')}}">Trở về</a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
@stop