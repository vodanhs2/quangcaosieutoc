<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Hotline;
use Illuminate\Http\Request;

class HotlineController extends Controller
{
    public function index(){
    	$hotline = Hotline::all();
    	return view('admin.hotline.index',['hotline'=>$hotline]);
    }
    public function add(){
    	return view('admin.hotline.add');
    }
    public function post_add(Request $request){
    	$this->validate($request, [
           'name' => 'required|min:3',
            'image' => 'required',
             'phone' => 'required|min:10|max:11',
              'email' => 'required|email',
              'address' =>'required',
              'website' =>'required'
      ],[
         'name.required' => 'Tên dịch vụ không được xác định',
            'name.min' => 'Tên dịch vụ không được ít hơn 3 kí tự',
            'image.required' => 'Bạn chưa chọn ảnh',
            'phone.required' => 'Số điện thoại không đúng',
            'phone.min' => 'Số điện thoại không đúng',
            'phone.max' => 'Số điện thoại không đúng',
            'address.required' => 'địa chỉ chưa xác định',
            'website.required' => 'website chưa xác định',
      ]);

     $img = str_replace(url('uploads').'/', '', $request->image);
      Hotline::insert([
      'name' => $request->name,
      'phone' =>$request->phone,
      'logo' => $img,
      'email' =>$request->email,
      'address' =>$request->address,
      'website' =>$request->website,
      'created_at' => now(),
       'updated_at' => now()
   ]);
   return redirect()->back()->with('thongbao', 'thêm liên hệ thành công');

    }

    public function edit($id)
    {
    	$hotline = Hotline::find($id);
    	return view('admin.hotline.edit',['hotline'=>$hotline]);

    }
       public function post_edit($id,Request $request){
    	$this->validate($request, [
           'name' => 'required|min:3',
            'image' => 'required',
             'phone' => 'required|min:10|max:11',
              'email' => 'required|email',
              'address' =>'required',
              'website' =>'required'
      ],[
         'name.required' => 'Tên dịch vụ không được xác định',
            'name.min' => 'Tên dịch vụ không được ít hơn 3 kí tự',
            'image.required' => 'Bạn chưa chọn ảnh',
            'phone.required' => 'Số điện thoại không đúng',
            'phone.min' => 'Số điện thoại không đúng',
            'phone.max' => 'Số điện thoại không đúng',
            'address.required' => 'địa chỉ chưa xác định',
            'website.required' => 'website chưa xác định',
      ]);

     $img = str_replace(url('uploads').'/', '', $request->image);
      Hotline::where('id',$id)->update([
      'name' => $request->name,
      'phone' =>$request->phone,
      'logo' => $img,
      'email' =>$request->email,
      'address' =>$request->address,
      'website' =>$request->website,
      'created_at' => now(),
       'updated_at' => now()
   ]);
   return redirect()->back()->with('thongbao', 'sửa liên hệ thành công');

    }
    public function delete($id){
    	Hotline::where('id',$id)->delete();
    	 return redirect()->back()->with('thongbao', 'xóa liên hệ thành công');
    }
}
