<?php

namespace App\Http\Controllers\Admin;
use App\about;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class AboutController extends Controller
{
    //
    public function index($status)
    {
    	# code...
      $about= about::where('status','=',$status)->get();
      return view('admin.about.index',['about'=>$about]);
  }


  public function add(){

   return view('admin.about.add');	
}
public function post_add(Request $request){
   $this->validate($request, [
     'name' => 'required|min:3',
     'content' => 'required'
 ],[
   'name.required' => 'Tên dịch vụ không được xác định',
   'name.min' => 'Tên dịch vụ không được ít hơn 3 kí tự',
   'content.required' => 'Nội dung không được xác định'
]);
   $img = str_replace(url('uploads').'/', '', $request->image);

   about::insert([
      'name' => $request->name,
      'content' =>$request->content,
      'video' =>$request->video,
      'image' => $img,
      'created_at' => now(),
      'updated_at' => now(),
      'status' =>$request->status
  ]);
   return redirect()->back()->with('thongbao', 'thêm giới thiệu thành công');
}
public function edit($id){
    $about = about::find($id);
    return view('admin.about.edit',['about'=>$about]); 
}

public function post_edit($id,Request $request){
   $this->validate($request, [
     'name' => 'required|min:3',
     'content' => 'required'
 ],[
   'name.required' => 'Tên dịch vụ không được xác định',
   'name.min' => 'Tên dịch vụ không được ít hơn 3 kí tự',
   'content.required' => 'Nội dung không được xác định'
]);
   $img = str_replace(url('uploads').'/', '', $request->image);

   about::where('id','=',$id)->update([
      'name' => $request->name,
      'content' =>$request->content,
      'video' =>$request->video,
      'image' => $img,
      'created_at' => now(),
      'updated_at' => now(),
      'status' =>$request->status
  ]);
   return redirect()->back()->with('thongbao', 'sửa thành công');
}
public function delete($id){
     about::where('id','=',$id)->delete();
     return redirect()->back()->with('thongbao', 'Xóa thành công');
}
}