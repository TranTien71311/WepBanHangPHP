@extends('client.layoutclient')

@section('title', 'Cart')

@section('content')
<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Giỏ Hàng</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    
    
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
                        <div class="woocommerce">
                            <form method="post" action="#">
                                <table cellspacing="0" class="shop_table cart">

                                
                               
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Sản Phẩm</th>
                                            <th class="product-price">Giá Bán</th>
                                            <th class="product-quantity">Số Lượng</th>
                                            <th class="product-subtotal">Tổng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $total = 0 ;?>
                               @if(session('cart'))
                               @foreach(session('cart') as $id => $details)
                               <?php $total += $details['price'] * $details['quantity'] ?>
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a title="Remove this item" class="remove" href="#">×</a> 
                                            </td>

                                            <td class="product-thumbnail">
                                                <a><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="{{asset('AssetAdmin/image-product/'.$details['image'])}}"></a>
                                            </td>

                                            <td class="product-name">
                                                <a >{{ $details['name'] }}</a> 
                                            </td>

                                            <td class="product-price">
                                                <span class="amount">{{ number_format($details['price']) }}</span> 
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">
                                                    <input type="number" size="4" class="input-text qty text" title="Qty" value="{{ $details['quantity'] }}" min="0" step="1">
                                                </div>
                                            </td>

                                            <td class="product-subtotal">
                                                <span class="amount">{{ number_format($details['price'] * $details['quantity']) }}</span> 
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                        <tr>
                                            <td class="actions" colspan="6">
                                                <div class="coupon">
                                                    <label for="coupon_code">Mã:</label>
                                                    <input type="text" placeholder="Mã Giảm Giá" value="" id="coupon_code" class="input-text" name="coupon_code">
                                                    <input type="submit" value="Áp Dụng" name="apply_coupon" class="button">
                                                </div>
                                                <input type="submit" value="Cập Nhật Giỏ Hàng" name="update_cart" class="button">
                                                <input type="submit" value="Tiến Hành Thanh Toán" name="proceed" class="checkout-button button alt wc-forward">
                                            </td>
                                        </tr>
                                     
                                    </tbody>
                                </table>
                            </form>

                            <div class="cart-collaterals">
                            <div class="cart_totals ">
                                <h2>Tổng Đơn Hàng</h2>

                                <table cellspacing="0">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Tạm Tính</th>
                                            <td><span class="amount">{{ number_format($total) }}</span></td>
                                        </tr>

                                        <tr class="shipping">
                                            <th>Phí Vận Chuyển</th>
                                            <td>Free Shipping</td>
                                        </tr>

                                        <tr class="order-total">
                                            <th>Tông Cộng</th>
                                            <td><strong><span class="amount">{{ number_format($total) }}</span></strong> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            <form method="post" action="#" class="shipping_calculator">
                                <h2>Địa Chỉ Nhận Hàng</h2>

                                

                                <p class="form-row form-row-wide">
                                <select rel="calc_shipping_state" class="country_to_state" id="calc_shipping_country" name="calc_shipping_country">
                                    <option value="">Thành Phố</option>
                                    <option value="AX">Åland Islands</option>
                                    <option value="AF">Afghanistan</option>
                                </select>
                                </p>

                                <p class="form-row form-row-wide"><input type="text" id="calc_shipping_state" name="calc_shipping_state" placeholder="Quận/Huyện" value="" class="input-text"> </p>

                                <p class="form-row form-row-wide"><input type="text" id="calc_shipping_postcode" name="calc_shipping_postcode" placeholder="Phường/Xã/Thôn/Đội/Đường" value="" class="input-text"></p>


                                <p><button class="button" value="1" name="calc_shipping" type="submit">Xác Nhận</button></p>

                                
                            </form>


                            </div>
                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>
@stop