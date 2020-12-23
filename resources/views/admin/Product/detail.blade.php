@extends('admin.layoutadmin')
@section('content')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
					    <ul id="myTab3" class="tab-review-design">
                            <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i>Chi Tiết Sản Phẩm</a></li>
                        </ul>
						<div class="single-product-pr">
							<div class="row">
							
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
									<div id="myTabContent1" class="tab-content">
										<div class="product-tab-list tab-pane fade active in" id="single-tab1">
											<img src="{{asset('AssetAdmin/image-product/'. $product->imagepro)}}"style=" width:500px;height:400px"/>
										</div>
									</div>
								</div>
								<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
									<div class="single-product-details res-pro-tb">
										<h1>Tên: {{$product->namepro}}</h1>
										<div class="single-pro-price">
											<span class="single-regular">Giá: {{$product->price}}Đ</span><span class="single-old"></span>
										</div>
										<div class="single-pro-price">
										<span class="single-old"><i>Số lượng:{{$product->quantity}}Máy</i></span>
										</div>
										<div class="single-pro-price">
										@foreach($list_category as $cate)
										<?php if($cate->id == $product->idcat) echo '<span class="single-old"><i>Loại:'.$cate->namecat.'</i></span>';?>
										@endforeach
										</div>
										</div>
										<div class="single-pro-cn"style="color: #fff;">
											<h3>Mô Tả</h3>
											<p><?php echo $product->contentpro;?></p>
										</div>
									</div>
								</div>
                                                <div class="text-center custom-pro-edt-ds">
                                                    <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10"><a href="{{route('getedit-product',$product->id)}}">Sửa</a></button>
                                                    <button type="button" class="btn btn-ctl-bt waves-effect waves-light m-r-10"><a href="{{route('index-product')}}">Trở về</a></button>
                                                </div>
							</div>
						</div>
					</div>
                </div>
            </div>
		@stop