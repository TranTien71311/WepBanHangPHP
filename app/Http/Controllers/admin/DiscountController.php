<?php

namespace App\Http\Controllers\admin;
use App\Models\Product;
use App\Models\Discount;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use  Session;
class DiscountController extends Controller
{
    public $viewprefix;
    public $viewnamespace;
    
    public function __construct()
    {   
        $this->viewprefix='admin.Discount.';
        $this->viewnamespace='Discount';
    }
    public function index()
    {
        $list_product=Product::all();
        $discount = Discount::paginate(5);
        return view($this->viewprefix.'index',compact('discount', 'list_product'));
    }
    public function getadd()
    {
        $list_product=Product::all();
        return view('admin.Discount.add')->with('list_product', $list_product); 
    }
    public function postadd(request $request)
    {
           
           $discount = new Discount;
           $discount->date = $request->txtdate;
           $discount->discount = $request->txtdiscount;
           $discount->idpro = $request->txtidpro;
           $discount->status = $request->txtstatus;
           $discount->save();
           $discounts=DB::table('tbl_discount')->get();
           foreach($discounts as $dis)
           {
               $product=Product::find($dis->idpro);
               $product->status=2;
               $product->save();
           }
           
           return redirect('admin/discount');
    }
    public function delete($id)
    {

        $discount = Discount::findOrFail($id);
        $product=$discount->product;
        $product->status=1;
        $product->update();
        if($discount->delete())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect('admin/discount');       
    }
}
