@extends('client.layoutclient')
@section('content')
<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Chi Tiết Sản Phẩm</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                            <h2 class="sidebar-title">Tìm Kiếm Sản Phẩm</h2>
                            <form action="#">
                                <input type="text" placeholder="Tìm Sản Phẩm...">
                                <input type="submit" value="Search">
                            </form>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Sản phẩm mới</h2>
                        @foreach($products as $pro)
                      
                        <div class="thubmnail-recent">
                            <img src="{{asset('AssetAdmin/image-product/'. $pro->imagepro)}}" class="recent-thumb" alt="">
                            <h2><a href="{{route('detail-home',$pro->id)}}">{{$pro->namepro}}</a></h2>
                            <div class="product-carousel-price">
                              <ins>Giá:{{number_format($pro->price-($pro->price*$pro->discount))}}</ins>@if($pro->discount != null) <del style="color: red;">Giá {{$pro->price}}</del>@endif
                            </div>                              
                        </div>
                        
                         @endforeach
                    </div>
                    
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        @foreach($products as $pro)
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="{{asset('AssetAdmin/image-product/'. $pro->imagepro)}}" alt="">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name">{{$pro->namepro}}</h2>
                                    <div class="product-carousel-price">
                                    @if($pro->discount != null) <h4 style="color: red;text-decoration: line-through;">Giá: {{number_format($pro->price)}} VNĐ</h4>@endif
                                    <br>
                                    <h3 style="color: #1abc9c;font-weight: 700;margin-right: 5px;text-decoration: none;">Giá: {{number_format($pro->price-($pro->price*$pro->discount))}} VNĐ</h3>
                                    
                                    </div>   
                                    
                                    <form action="{{ url('client/Home/add-to-cart/'.$pro->id) }}" class="cart">
                                        <button class="add_to_cart_button" type="submit">Thêm Giỏ Hàng</button>
                                    </form>   
                                    
                                    <div class="product-inner-category">
                                        <h4>Loại: <a>{{$pro->namecat}}</a></h4>
                                    </div> 
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Mô Tả</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Thất Mắt</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Thông tin sản phẩm</h2>  
                                                <p><?php echo $pro->contentpro ?></p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Vui lòng gửi tin</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Tên: </label> <input name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                    <p><label for="review">Nội dung</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input type="submit" value="Gửi"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>                    
                </div>
            </div>
        </div>
    </div>


 
    @stop