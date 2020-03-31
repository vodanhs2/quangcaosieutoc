<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
    	# code...
    	$cus = customer::all();
    	return view('admin.customer.index',['cus'=>$cus]);
    }
    public function add()
    {
    	# code...
    	return view('admin.customer.add');
    }

     public function post_add(Request $request)
    {
 $this->validate($request, [
           'name' => 'required|min:3',
            'content' => 'required',
            'image' => 'required'
      ],[
         'name.required' => 'Tên dịch vụ không được xác định',
            'name.min' => 'Tên dịch vụ không được ít hơn 3 kí tự',
            'content.required' => 'Tóm tắt chưa được xác định',
            'image.required' => 'Bạn chưa chọn ảnh'
      ]);

     $img = str_replace(url('uploads').'/', '', $request->image);
      customer::insert([
      'name' => $request->name,
      'content' =>$request->content,
      'image' => $img,
      'created_at' => now(),
       'updated_at' => now()
   ]);
   return redirect()->back()->with('thongbao', 'thêm khách hàng thành công');
    }

      public function edit($id)
    {
    	# code...
    	$cus = customer::find($id);
    	return view('admin.customer.edit',['cus'=>$cus]);
    }
    public function post_edit($id,Request $request)
    {
    	 $this->validate($request, [
           'name' => 'required|min:3',
            'content' => 'required',
            'image' => 'required'
      ],[
         'name.required' => 'Tên khách hàng không được xác định',
            'name.min' => 'Tên khách hàng không được ít hơn 3 kí tự',
            'content.required' => 'nội dung chưa được xác định',
            'image.required' => 'Bạn chưa chọn ảnh'
      ]);

     $img = str_replace(url('uploads').'/', '', $request->image);
      customer::where('id','=',$id)->update([
      'name' => $request->name,
      'content' =>$request->content,
      'image' => $img,
      'created_at' => now(),
       'updated_at' => now()
   ]);
   return redirect()->back()->with('thongbao', 'sửa khách hàng thành công');

    }
      public function delete($id)
    {
    	# code...
    	 customer::where('id','=',$id)->delete();
    	 return redirect()->back()->with('thongbao', 'xóa khách hàng thành công');
    }
}
