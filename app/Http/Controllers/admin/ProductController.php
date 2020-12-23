<?php

namespace App\Http\Controllers\admin;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    public $viewprefix;
    public $viewnamespace;
    
    public function __construct()
    {   
        $this->viewprefix='admin.Product.';
        $this->viewnamespace='Product';
    }
    public function index()
    {
        $product = Product::paginate(5);
        return view($this->viewprefix.'index')->with('product',$product);
    }
    public function getadd()
    {
        $list_category=Category::all();
        return view('admin.Product.add')->with('list_category',$list_category); 
    }
    public function postadd(request $request)
    {
           $product = new Product;
           $product->imagepro = $this->imageUpload($request);
           $product->namepro = $request->txtname;
           $product->quantity = $request->txtquantity;
           $product->price = $request->txtprice;
           $product->contentpro = $request->txtcontent;
           $product->idcat = $request->txtidcat;
           $product->status = $request->txtstatus;
           $product->save();
           return redirect('admin/product');
    }
    public function imageUpload(Request $request)
    {
        if($request->hasFile('txtimage')){
            if($request->file('txtimage')->isValid()){
                $request->validate([
                    'txtimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $imageName = time().'.'.$request->txtimage->extension();
                $request->txtimage->move(public_path('AssetAdmin/image-product'), $imageName);
                return $imageName;
            }
        }
        return "";
    }
    public function delete($id)
    {
        $product = Product::findOrFail($id);   
        if($product->delete())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect('admin/product');       
    }
    public function getedit($id)
    {
        $product = Product::findOrFail($id);
        $list_category=Category::all();
        return view($this->viewprefix.'edit',compact('product', 'list_category'));      
    }
    public function postedit($id,request $request)
    {
        $product = Product::findOrFail($id);
        $this->validate($request, [
            'txtname' => 'required',
            'txtquantity' => 'required',
            'txtprice' => 'required',
            'txtidcat' => 'required',
            'txtstatus' => 'required',
        ]);
            if($request->hasFile('txtimage')){
            $product->imagepro = $this->imageUpload($request);
            };
           $product->namepro = $request->txtname;
           $product->quantity = $request->txtquantity;
           $product->price = $request->txtprice;
           $product->contentpro = $request->txtcontent;
           $product->idcat = $request->txtidcat;
           $product->status = $request->txtstatus;
        if($product->update($request->all()))
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect('admin/product');   
    }
    public function Active($id)
    {
        $product = Product::findOrFail($id);
        $product->status=1;
        if($product->save())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect('admin/product');       
    }
    public function UnActive($id)
    {
        $product = Product::findOrFail($id);
        
        if($product->status==1)
           {
            $product->status=0;
            $product->save();
           }
        else
        { Session::flash('message', 'VUI LÒNG XÓA KHỎI GIẢM GIÁ');
        }
        return redirect('admin/product');       
    }
    public function detail($id)
    {
        $product = Product::findOrFail($id);
        $list_category=Category::all();
        return view($this->viewprefix.'detail',compact('product', 'list_category'));     
    }
}
