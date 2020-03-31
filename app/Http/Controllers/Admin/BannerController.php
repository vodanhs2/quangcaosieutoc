<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\banner;

class BannerController extends Controller
{
    //
	public function index()
	{
    	# code...
		$banner = banner::all();
		return view('admin.banner.index',['banner'=>$banner]);
	}
	public function add()
	{
    	# code...
		return view('admin.banner.index');
	}

	public function post_add(Request $request){
		banner::insert([
		'location' =>$request->location,
		'created_at' => now(),
			'updated_at' => now()
		]);
		return redirect()->route('banner');

	}
	public function edit($id)
	{
    	# code...
    	$banner_id = banner::find($id);
		return view('admin.banner.index');
	}


	public function post_edit(Request $request,$id){
		$this->validate($request, [
			'image' => 'required'
		],[
			'image.required' => 'Bạn chưa chọn ảnh',
		]);

		$img = str_replace(url('uploads').'/', '', $request->image);

		banner::where('id','=',$id)->update([
			'title' => $request->title,
			'image' => $img,
			'link' =>$request->link,
			'created_at' => now(),
			'updated_at' => now()
		]);
		return redirect()->route('banner')->with('thongbao', 'sửa banner thành công');
	}
	public function delete($id)
	{
    	# code...
    	$banner_id = banner::where('id',$id)->delete();
		return redirect()->route('banner');
	}

}
