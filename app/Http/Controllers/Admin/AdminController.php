<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
 public function index(){
   $user = User::all();
   return view('admin.user.index',['user'=>$user]);
}
public function login(){

   return view('admin.login');
}
public function post_login(Request $request){

    $this->validate($request,[
    	'email' =>'required|email',
    	'password' => 'required'
    ],[
    	'email.email' => 'email không đúng định dạng !', 
    	'email.required' => 'email không được để trống!', 
    	'password.required' =>'mời nhập mật khẩu'
    ]);

    if (Auth::attempt($request->only('email','password'),false)) {
    	# code...
    	return redirect()->route('admin');
    }else{
    	# code...
    	return redirect()->back()->with('thongbao','tài khoản hoặc mật khẩu không chính xác!');
    }
}

public function post_add(Request $request){
   $this->validate($request,[
            'name' => 'required',
        'email' =>'required|email',
        'password' => 'required', 
       're_password' => 'required|same:password'
    ],[
        'name.required' => 'tên không được để trống!',
        'email.email' => 'email không đúng định dạng !', 
        'email.required' => 'email không được để trống!', 
        'password.required' =>'mời nhập mật khẩu',
        're_password.required' =>'mật khẩu xác nhận không khớp',
        're_password.same' =>'mật khẩu xác nhận không khớp'
    ]);
   $password= bcrypt($request->password);
    User::insert([
      'name' => $request->name,
      'email' =>$request->email,
      'password' =>$password,
      'lever' =>$request->lever,
      'created_at' => now(),
      'updated_at' => now()
  ]);
     return redirect()->back()->with('thongbao', 'thêm tài khoản thành công');
}
public function edit($id){
    $user =User::find($id);
    return view('admin.user.edit',['user'=>$user]);
} 
public function post_edit($id, Request $request){
     $this->validate($request,[
            'name' => 'required',
        'email' =>'required|email',
        'password' => 'required', 
       're_password' => 'required|same:password'
    ],[
        'name.required' => 'tên không được để trống!',
        'email.email' => 'email không đúng định dạng !', 
        'email.required' => 'email không được để trống!', 
        'password.required' =>'mời nhập mật khẩu',
        're_password.required' =>'mật khẩu xác nhận không khớp',
        're_password.same' =>'mật khẩu xác nhận không khớp'
    ]);
   $password= bcrypt($request->password);
    User::where('id','=',$id)->update([
      'name' => $request->name,
      'email' =>$request->email,
      'password' =>$password,
      'lever' =>$request->lever,
      'created_at' => now(),
      'updated_at' => now()
  ]);
     return redirect()->route('user')->with('thongbao', 'sửa tài khoản thành công');
}
public function delete($id){
      User::where('id','=',$id)->delete();
      return redirect()->back()->with('thongbao', 'xóa tài khoản thành công');
}

public function logout(){
    Auth::logout();
   return redirect()->route('login');
}
}
