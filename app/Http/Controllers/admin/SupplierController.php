<?php

namespace App\Http\Controllers\admin;
use App\Models\Supplier;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class SupplierController extends Controller
{
    public $viewprefix;
    public $viewnamespace;
    
    public function __construct()
    {   
        $this->viewprefix='admin.Supplier.';
        $this->viewnamespace='Supplier';
    }
    public function index()
    {
        $supplier = Supplier::paginate(5);
        return view($this->viewprefix.'index')->with('supplier',$supplier);
    }
    public function getadd()
    {
        return view('admin.Supplier.add'); 
    }
    public function postadd(request $request)
    {
           $supplier = new Supplier;
           $supplier->image = $this->imageUpload($request);
           $supplier->name = $request->txtname;
           $supplier->email = $request->txtemail;
           $supplier->address = $request->txtaddress;
           $supplier->description = $request->txtdescription;
           $supplier->status = $request->txtstatus;
           $supplier->save();
           return redirect('admin/supplier');
    }
    public function imageUpload(Request $request)
    {
        if($request->hasFile('txtimage')){
            if($request->file('txtimage')->isValid()){
                $request->validate([
                    'txtimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $imageName = time().'.'.$request->txtimage->extension();
                $request->txtimage->move(public_path('AssetAdmin/image-supplier'), $imageName);
                return $imageName;
            }
        }
        return "";
    }
    public function delete($id)
    {
        $supplier = Supplier::findOrFail($id);   
        if($supplier->delete())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect('admin/supplier');       
    }
    public function getedit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view($this->viewprefix.'edit')->with('supplier',$supplier);      
    }
    public function postedit($id,request $request)
    {
        $supplier = Supplier::findOrFail($id);
        $this->validate($request, [
            'txtname' => 'required',
            'txtemail' => 'required',
            'txtaddress' => 'required',
            'txtdescription' => 'required',
            'txtstatus' => 'required',
        ]);
            if($request->hasFile('txtimage')){
            $supplier->image = $this->imageUpload($request);
            };
           $supplier->name = $request->txtname;
           $supplier->email = $request->txtemail;
           $supplier->address = $request->txtaddress;
           $supplier->description = $request->txtdescription;
           $supplier->status = $request->txtstatus;
        if($supplier->update($request->all()))
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect('admin/supplier');   
    }
    public function Active($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->status=1;
        if($supplier->save())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect('admin/supplier');       
    }
    public function UnActive($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->status=0;
        if($supplier->save())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect('admin/supplier');       
    }
}
