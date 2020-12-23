<?php

namespace App\Http\Controllers\client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{
    public $viewprefix;
    public $viewnamespace;
    
    public function __construct()
    {   
        $this->viewprefix='client.Home.';
        $this->viewnamespace='Home';
    }
    public function products()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $products = DB::table('tbl_discount')
        ->rightjoin('tbl_product','tbl_product.id','=','tbl_discount.idpro')
        ->Where('tbl_product.status','1')
        ->orWhere('tbl_product.status','2')
        ->orderby('tbl_product.id','desc')->limit(8)->get();
        $categorys =  DB::table('tbl_category')->Where('status','1')->orderby('id','desc')->get();
        return view($this->viewprefix.'index',compact('products', 'categorys'));
    }
    public function cart()
    {   
        $products = DB::table('tbl_discount')
        ->rightjoin('tbl_product','tbl_product.id','=','tbl_discount.idpro')
        ->Where('tbl_product.status','1')
        ->orWhere('tbl_product.status','2')
        ->orderby('tbl_product.id','desc')->limit(3)->get();
        return view($this->viewprefix.'cart',compact('products'));
    }
    public function addToCart($id)
    {
        
         $products = DB::table('tbl_discount')
        ->rightjoin('tbl_product','tbl_product.id','=','tbl_discount.idpro')
        ->Where('tbl_product.id',$id)
        ->get();

        if(!$products) {

            abort(404);

        }

        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {
            foreach($products as $pro)
            {
                    $cart = [
                        $id => [
                            
                            "name" => $pro->namepro,
                            "quantity" => 1,
                            "price" => $pro->price-($pro->price*$pro->discount),
                            "image" => $pro->imagepro
                            
                                ]
                            ];
                
                    
            }

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        foreach($products as $pro)
        {
            
                $cart[$id] = [
                    "name" => $pro->namepro,
                    "quantity" => 1,
                    "price" => $pro->price-($pro->price*$pro->discount),
                    "image" =>$pro->imagepro
                        ];
            
        }
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function categorys()
    {
        $products =  DB::table('tbl_discount')
        ->rightjoin('tbl_product','tbl_product.id','=','tbl_discount.idpro')
        ->Where('tbl_product.status','1')
        ->orWhere('tbl_product.status','2')
        ->orderby('tbl_product.id','desc')->paginate(12);
        $categorys =  DB::table('tbl_category')->Where('status','1')->orderby('id','desc')->get();
        return view($this->viewprefix.'category',compact('products', 'categorys'));
    }
    public function seachcategorys($id)
    {
        $products = DB::table('tbl_product')
        ->select('tbl_product.id','tbl_product.price','tbl_discount.discount','tbl_discount.idpro','tbl_product.imagepro','tbl_product.namepro','tbl_product.status')
        ->leftjoin('tbl_discount','tbl_discount.idpro','=','tbl_product.id')
        ->join('tbl_category','tbl_category.id','=','tbl_product.idcat')
        ->Where('tbl_product.idcat',$id)
        ->orderby('tbl_product.id','desc')->paginate(12);
        $categorys =  DB::table('tbl_category')->Where('status','1')->orderby('id','desc')->get();
        return view($this->viewprefix.'category',compact('products','categorys'));
    }
    public function shop()
    {
        $dt = Carbon::now('Asia/Ho_Chi_Minh');
        $products = DB::table('tbl_discount')
        ->rightjoin('tbl_product','tbl_product.id','=','tbl_discount.idpro')
        ->Where('tbl_product.status','1')
        ->orWhere('tbl_product.status','2')
        ->orderby('tbl_product.id','desc')->paginate(12);
        return view($this->viewprefix.'shop',compact('products'));
    }
    public function detail($id)
    {
        $products = DB::table('tbl_product')
        ->select('tbl_product.id','tbl_product.price','tbl_discount.discount','tbl_discount.idpro','tbl_product.imagepro','tbl_product.namepro','tbl_product.status','tbl_category.namecat','tbl_product.contentpro')
        ->leftjoin('tbl_discount','tbl_discount.idpro','=','tbl_product.id')
        ->join('tbl_category','tbl_category.id','=','tbl_product.idcat')
        ->Where('tbl_product.id',$id)
       ->get();
        return view($this->viewprefix.'detail',compact('products'));
    }
}

// $giamgia->chitietgiamgia
// $chitietgiamgia->pproduct

