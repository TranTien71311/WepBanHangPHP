<?php

namespace App\Http\Controllers\admin;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;

class UserController extends Controller
{
    public $viewprefix;
    public $viewnamespace;
    
    public function __construct()
    {   
        $this->viewprefix='admin.User.';
        $this->viewnamespace='User';
    }
    public function index()
    {
        $user = User::paginate(5);
        return view($this->viewprefix.'index')->with('user',$user);
    }
    public function getadd()
    {
        return view('admin.User.add'); 
    }
    public function postadd(request $request)
    {
           $user = new User;
           $user->image = $this->imageUpload($request);
           $user->name = $request->txtname;
           $user->email = $request->txtemail;
           $user->password = Hash::make($request->txtpassword);
           $user->tellphone = $request->txttellphone;
           $user->address = $request->txtaddress;
           $user->position = $request->txtposition;
           $user->status = $request->txtstatus;
           $user->save();
           return redirect('admin/user');
    }
    public function Active($id)
    {
        $user = User::findOrFail($id);
        $user->status=1;
        if($user->save())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect('admin/user');       
    }
    public function UnActive($id)
    {
        $user = User::findOrFail($id);
        $user->status=0;
        if($user->save())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect('admin/user');       
    }
    public function imageUpload(Request $request)
    {
        if($request->hasFile('txtimage')){
            if($request->file('txtimage')->isValid()){
                $request->validate([
                    'txtimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $imageName = time().'.'.$request->txtimage->extension();
                $request->txtimage->move(public_path('AssetAdmin/image-user'), $imageName);
                return $imageName;
            }
        }
        return "";
    }
    public function delete($id)
    {
        $user = User::findOrFail($id);   
        if($user->delete())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect('admin/user');       
    }
    public function getedit($id)
    {
        $user = User::findOrFail($id);
        return view($this->viewprefix.'edit')->with('user',$user);      
    }
    public function postedit($id,request $request)
    {
        $user = User::findOrFail($id);
        $this->validate($request, [
            'txtname' => 'required',
            'txtemail' => 'required',
            'txtpassword' => 'required',
            'txttellphone' => 'required',
            'txtaddress' => 'required',
            'txtposition' => 'required',
            'txtstatus' => 'required',
        ]);
            if($request->hasFile('txtimage')){
            $user->image = $this->imageUpload($request);
            };
           $user->name = $request->txtname;
           $user->email = $request->txtemail;
           $user->password = Hash::make($request->txtpassword);
           $user->tellphone = $request->txttellphone;
           $user->address = $request->txtaddress;
           $user->position = $request->txtposition;
           $user->status = $request->txtstatus;
        if($user->update($request->all()))
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect('admin/user');   
    }
}
