<?php

namespace App\Http\Controllers\admin;
use App\Models\HoaDonNhap;
use App\Models\CTHoaDonNhap;
use App\Models\User;
use App\Models\Supplier;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class HoaDonNhapController extends Controller
{
    public $viewprefix;
    public $viewnamespace;
    
    public function __construct()
    {   
        $this->viewprefix='admin.NhapHang.';
        $this->viewnamespace='NhapHang';
    }
    public function index()
    {
        
        $hoadonnhap = HoaDonNhap::paginate(5);
        return view($this->viewprefix.'index',compact('hoadonnhap'));
    }
    public function getadd()
    {
        $list_supp=Supplier::all();
        return view($this->viewprefix.'add',compact('list_supp')); 
    }
    public function postadd(request $request)
    {
           
           $day=date('Y-m-d');
           $idSupp = $request->txtidsupp;
           $hoadonnhap=HoaDonNhap::where([['idsupp',$idSupp],['status',0]])->first();
           if(!isset($hoadonnhap))
           {

                $hoadonnhap = new HoaDonNhap;
                $hoadonnhap->date = $day;
                $hoadonnhap->iduser = $request->txtuser;
                $hoadonnhap->idsupp = $idSupp;
                $hoadonnhap->status = 0;
                $hoadonnhap->total = 0;
                $hoadonnhap->save();

           }
           $list_product=Product::all();
           return view($this->viewprefix.'indexct',compact('hoadonnhap','list_product'));
    }

    
    public function postaddct(request $request)
    {      
           $cthoadonnhap = new CTHoaDonNhap;
           $cthoadonnhap->idhd = $request->txtidhd;
           $cthoadonnhap->idpro = $request->txtidpro;
           $cthoadonnhap->quantity = $request->txtquantity;
           $cthoadonnhap->price = $request->txtprice;
           $cthoadonnhap->thanhtien =$cthoadonnhap->quantity*$cthoadonnhap->price;
           $cthoadonnhap->save();

           $hoadonnhap = HoaDonNhap::findOrFail($request->txtidhd);
           $hoadonnhap->total += $cthoadonnhap->thanhtien;
           $hoadonnhap->save();

           $list_product=Product::all();
           return view($this->viewprefix.'indexct',compact('hoadonnhap','list_product'));
    }
    public function delete($id)
    {
        $cthoadonnhap = CTHoaDonNhap::findOrFail($id);  
        $hoadonnhap = HoaDonNhap::findOrFail($cthoadonnhap->idhd);
        $hoadonnhap->total-=$cthoadonnhap->thanhtien;
        $hoadonnhap->save();
        $cthoadonnhap->delete();

       
        $list_product=Product::all();
        return view($this->viewprefix.'indexct',compact('hoadonnhap','list_product'));
    }
    public function xacnhan($id)
    {
        $hoadonnhap = HoaDonNhap::findOrFail($id);
        $hoadonnhap->status=1;
        $hoadonnhap->save();
        foreach($hoadonnhap->cthoadonnhap as $cthd)
        {
            $product=Product::findOrFail($cthd->idpro);
            $product->quantity += $cthd->quantity;
            $product->save();
        }
       
        return redirect()->route('index-nhaphang');
    }
    public function huy($id)
    {
        $hoadonnhap = HoaDonNhap::findOrFail($id);
        $hoadonnhap->status=-1;
        $hoadonnhap->save();
        return redirect()->route('index-nhaphang');
    }
    public function detail($id)
    {
        $hoadonnhap = HoaDonNhap::findOrFail($id);
        return view($this->viewprefix.'detail',compact('hoadonnhap'));
    }

  
}
