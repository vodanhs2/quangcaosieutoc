<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class ServiceController extends Controller
{
   public function index()
   {
   	# code...
    $service = service::all();
   	return view('admin.service.index',['service' =>$service]);

   }
   public function add()
   {
   	# code...
   	return view('admin.service.add');
   }
    public function post_add(Request $request)
   {
      # code...
      $this->validate($request, [
           'name' => 'required|min:3',
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'summary' => 'required',
            'image' => 'required'
      ],[
         'name.required' => 'Tên dịch vụ không được xác định',
            'name.min' => 'Tên dịch vụ không được ít hơn 3 kí tự',
            'title.required' => 'Tiêu đề dịch vụ không được để trống',
            'description.required' => 'Mô tả không được để trống.',
            'summary.required' => 'Tóm tắt chưa được xác định',
            'content.required' => 'Nội dung không được xác định',
            
            'image.required' => 'Bạn chưa chọn ảnh'
      ]);

     $img = str_replace(url('uploads').'/', '', $request->image);

  service::insert([
      'name' => $request->name,
      'slug' => Str::slug($request->name),
      'title' => $request->title,
      'summary' =>$request->summary,
      'description' =>$request->description,
      'content' =>$request->content,
      'image' => $img,
      'created_at' => now(),
       'updated_at' => now(),
      'status' =>$request->status,
      'location' =>$request->location
   ]);
   return redirect()->back()->with('thongbao', 'thêm dịch vụ thành công');
   }

  public function edit($id)
  {
    # code...
    $service = service::find($id);
    return view('admin/service/edit',['service' =>$service]);
  }

  public function post_edit($id, Request $request)
  {
    $this->validate($request, [
           'name' => 'required|min:3',
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'summary' => 'required',
            'image' => 'required'
      ],[
         'name.required' => 'Tên dịch vụ không được xác định',
            'name.min' => 'Tên dịch vụ không được ít hơn 3 kí tự',
            'title.required' => 'Tiêu đề dịch vụ không được để trống',
            'description.required' => 'Mô tả không được để trống.',
            'summary.required' => 'Tóm tắt chưa được xác định',
            'content.required' => 'Nội dung không được xác định',
            
            'image.required' => 'Bạn chưa chọn ảnh'
      ]);
      $request->offsetUnset('_token');
     $img = str_replace(url('uploads').'/', '', $request->image);
     service::where(['id'=>$id])->update([
        'name' => $request->name,
      'slug' => Str::slug($request->name),
      'title' => $request->title,
      'summary' =>$request->summary,
      'description' =>$request->description,
      'content' =>$request->content,
      'image' => $img,
      'created_at' => now(),
       'updated_at' => now(),
      'status' =>$request->status,
      'location' =>$request->location
     ]);
      return redirect()->back()->with('thongbao', 'sửa dịch vụ thành công');
  }

  public function delete($id)
  {
    # code...
    
        service::where(['id'=>$id])->delete();
        return redirect()->back()->with('thongbao','xoa thanh cong');
  }

}
