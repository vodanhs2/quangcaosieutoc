<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\CategoryEducation;
use App\Education;
use Illuminate\Http\Request;

class Cate_EducationController extends Controller
{
     public function index()
    {
    	# code...
    	$cats =CategoryEducation::all();
    	return view('admin.education.cate',['cats'=>$cats]);
    }
    public function add()
    {
    	# code...
    	$cats = CategoryEducation::all();
    	return view('admin.education.cate',['cats'=>$cats]);
    }
    public function post_add(Request $request)
    {
    	# code...
    	 $this->validate($request, [
           'name' => 'required|min:3'
      ],[
         'name.required' => 'Tên dịch vụ không được xác định',
            'name.min' => 'Tên dịch vụ không được ít hơn 3 kí tự',
           
      ]);

    CategoryEducation::insert([
      'name' => $request->name,
      'created_at' => now(),
       'updated_at' => now()
   ]);
   return redirect()->back()->with('thongbao', 'thêm danh mục thành công');
    }
    public function delete($id)
    {
    	# code..
    	Education::where('cat_id','=',$id)->delete();
    	CategoryEducation::where('id', '=', $id)->delete();
    	return redirect()->back()->with('thongbao', 'xóa thể loại thành công');
    }

}
