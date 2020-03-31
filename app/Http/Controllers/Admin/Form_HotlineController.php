<?php

namespace App\Http\Controllers\Admin;
use App\form_hotline;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
class Form_hotlineController extends Controller
{
  
    public function index()
    {
    	# code...
    	$form_hotline = form_hotline::all();
    	return view('admin.hotline.form_hotline',['form_hotline'=>$form_hotline]);
    }
  public function post_add(Request $request)
    {
    	# code...
    	form_hotline::insert([
    		'name' =>$request->fullname,
    		'phone' =>$request->phone,
    		'email' =>$request->email,
    		'title' =>$request->title,
    		'content'=>$request->message,
    		'created_at' => now(),
       'updated_at' => now()
    	]);
    	   return redirect()->back()->with('thongbao', 'Đăng ký thành công!!Chúng tôi sẽ liên hệ ban sớm nhất có thể.');

    }

    public function delete($id)
    {
    	# code...
    	form_hotline::where('id',$id)->delete();
    	 return redirect()->back()->with('thongbao', 'Xóa đăng ký này Thành Công!');
    }
}

