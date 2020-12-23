@extends('admin.layoutadmin')
@section('content')
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Thêm Hóa Đơn Nhập</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                    <form role="form" action="{{route('postadd-nhaphang')}}" method="POST">
                                     {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
                                                    <select class="form-control pro-edt-select form-control-primary"name="txtidsupp">
                                                    @foreach($list_supp as $supp)
															<option value="{{$supp->id}}">{{$supp->name}}</option>
                                                    @endforeach
													</select>
                                                    </div>
                                                    <input type="hidden"name="txtuser"value="{{Auth::user()->id}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Thêm</button>
                                                    <button type="button" class="btn btn-ctl-bt waves-effect waves-light m-r-10"><a href="{{route('index-nhaphang')}}">Trở về</a></button>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
@stop