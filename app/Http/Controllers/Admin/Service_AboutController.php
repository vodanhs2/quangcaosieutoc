<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Service_about;
use Illuminate\Http\Request;

class Service_AboutController extends Controller
{
	public function index()
	{
    	# code...
		$service_about = Service_about::all();
		return view('admin.service_about.index',['service_about' =>$service_about]);
	}
	public function add()
	{
  		# code...
		return view('admin.service_about.add');
	}
	public function post_add(Request $request)
	{
  		# code.
		Service_about::insert([
			'content_header' => $request->content_header,
			'content_footer' => $request->content_footer,
			'created_at' => now(),
			'updated_at' => now(),
		]);
		return redirect()->back()->with('thongbao', 'thêm giới thiệu dịch vụ thành công');
	}

	public function edit($id)
	{
  		# code...
		$service_about = Service_about::find($id);
		return view('admin.service_about.edit',['service_about' =>$service_about]);
	}
	public function post_edit($id,Request $request)
	{
  		# code...
		Service_about::where('id',$id)->update([
			'content_header' => $request->content_header,
			'content_footer' => $request->content_footer,
			'created_at' => now(),
			'updated_at' => now(),
		]);
		return redirect()->back()->with('thongbao', 'sửa giới thiệu dịch vụ thành công');
	}
	public function delete($id)
	{
  		# code...
		Service_about::where('id',$id)->delete();
		return redirect()->back()->with('thongbao', 'Xóa giới thiệu dịch vụ thành công');

	}
}