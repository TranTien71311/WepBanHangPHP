@extends('client.layoutclient')
@section('content')
<div class="product-big-title-area">
        <div class="container">
        <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <h2 class="section-title">Thương Hiệu</h2>
                       
                       
                        <div class="brand-list"style="padding-bottom: 50px;">
                        @foreach($categorys as $cate)
                            <a href="{{route('seachcategorys-home',$cate->id)}}">
                            <img style="width: 270px; margin-right: 20px;height:110px" src="{{asset('AssetAdmin/image-category/'. $cate->imagecat)}}" >   
                            </a> 
                            @endforeach                 
                        </div>
                       
                       
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
            
            @foreach($products as $pro)
            @if($pro->status==1||$pro->status==2)
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img style="height:300px; margin-right: 20px;" src="{{asset('AssetAdmin/image-product/'. $pro->imagepro)}}" alt="">
                        </div>
                        <h2><a href="{{route('detail-home',$pro->id)}}">{{$pro->namepro}}</a></h2>
                        <div class="product-carousel-price">
                        <ins>Giá:{{number_format($pro->price-($pro->price*$pro->discount))}}</ins>@if($pro->discount != null) <del style="color: red;">Giá {{number_format($pro->price)}}</del>@endif
                        </div> 
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="{{ url('client/Home/add-to-cart/'.$pro->id) }}">Thêm Giỏ Hàng</a>
                        </div>                       
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
                            <li>
                            {{$products->render()}}
                            </li>
                          </ul>
                        </nav>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop