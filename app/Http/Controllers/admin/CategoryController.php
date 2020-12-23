<?php

namespace App\Http\Controllers\admin;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class CategoryController extends Controller
{
    public $viewprefix;
    public $viewnamespace;
    
    public function __construct()
    {   
        $this->viewprefix='admin.Category.';
        $this->viewnamespace='Category';
    }
    public function index()
    {
        $category = Category::paginate(5);
        return view($this->viewprefix.'index')->with('category',$category);
    }
    public function getadd()
    {
        return view('admin.Category.add'); 
    }
    public function postadd(request $request)
    {
           $category = new Category;
           $category->imagecat = $this->imageUpload($request);
           $category->namecat = $request->txtname;
           $category->contentcat = $request->txtcontent;
           $category->status = $request->txtstatus;
           $category->save();
           return redirect('admin/category');
    }
    public function imageUpload(Request $request)
    {
        if($request->hasFile('txtimage')){
            if($request->file('txtimage')->isValid()){
                $request->validate([
                    'txtimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $imageName = time().'.'.$request->txtimage->extension();
                $request->txtimage->move(public_path('AssetAdmin/image-category'), $imageName);
                return $imageName;
            }
        }
        return "";
    }
    public function delete($id)
    {
        $category = Category::findOrFail($id);   
        if($category->delete())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect('admin/category');       
    }
    public function getedit($id)
    {
        $category = Category::findOrFail($id);
        return view($this->viewprefix.'edit')->with('category',$category);      
    }
    public function postedit($id,request $request)
    {
        $category = Category::findOrFail($id);
        $this->validate($request, [
            'txtname' => 'required',
            'txtstatus' => 'required',
        ]);
            if($request->hasFile('txtimage')){
            $category->imagecat = $this->imageUpload($request);
            };
            $category->namecat = $request->txtname;
            $category->contentcat = $request->txtcontent;
            $category->status = $request->txtstatus;
        if($category->update($request->all()))
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect('admin/category');   
    }
    public function Active($id)
    {
        $category = Category::findOrFail($id);
        $category->status=1;
        if($category->save())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect('admin/category');       
    }
    public function UnActive($id)
    {
        $category = Category::findOrFail($id);
        $category->status=0;
        if($category->save())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect('admin/category');       
    }
}
