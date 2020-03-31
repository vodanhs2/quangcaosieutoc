<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\CategoryEducation;
use App\Education;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class EducationController extends Controller
{
 public function index()
 {
 	# code..
 	$data['education'] = DB::table('education')
            ->select('education.*', 'cate_education.name as cate_education')
            ->join('cate_education', 'education.cat_id', '=', 'cate_education.id')
            ->orderByDesc('id')
            ->get();
 	return view('admin.education.index',$data);
 }

 public function add()
 {
 	# code...
 	$cats = CategoryEducation::all();
 	return view('admin.education.add',['cats'=>$cats]);
 }
   public function post_add(Request $request)
  {
  	# code...
  	 $this->validate($request, [
  	 	'cat_id' => 'required',
           'name' => 'required|min:3',
            'description' => 'required',
            'price' => 'required|numeric',
            'sale_price' =>'numeric|between:1,99',
            'content_1' => 'required',
            'image' => 'required'
      ],[
      		'cat_id.required' =>'Mời chọn thể loại ',
         'name.required' => 'Tên khóa học không được xác định',
            'name.min' => 'Tên khóa học không được ít hơn 3 kí tự',
            'description.required' => 'Mô tả không được để trống',
            'price.required' => 'giá không được để trống.',
             'price.numeric' => 'giá phải là số từ 1-99.',
              'price.between' => 'giá phải là số từ 1-99.',
            'content_1.required' => 'Nội dung không được xác định',
            
            'image.required' => 'Bạn chưa chọn ảnh'
      ]);
  	  $img = str_replace(url('uploads').'/', '', $request->image);

  Education::insert([
  	'cat_id' => $request->cat_id,
      'name' => $request->name,
      'slug' => Str::slug($request->name),
      'background' => $request->color,
      'price' => $request->price,
      'sale_price' =>$request->sale_price,
      'description' =>$request->description,
      'image' => $img,
      'content_1' =>$request->content_1,
      'content_2' =>$request->content_2,
      'content_3' =>$request->content_3,
      'content_4' =>$request->content_4,
      'content_5' =>$request->content_5,
      'content_6' =>$request->content_6,
      'content_7' =>$request->content_7,
      'content_8' =>$request->content_8,
      'created_at' => now(),
       'updated_at' => now()
   ]);
   return redirect()->back()->with('thongbao', 'thêm khóa học thành công');
  }

   public function edit($id)
 {
 	# code...
 	$education = education::find($id);
 	$cats = CategoryEducation::all();
 	return view('admin.education.edit',['education'=>$education,'cats'=>$cats]);
 }

   public function post_edit(Request $request,$id)
  {
  	# code...
  	 $this->validate($request, [
  	 	'cat_id' => 'required',
           'name' => 'required|min:3',
            'description' => 'required',
            'price' => 'required|numeric',
            'sale_price' =>'numeric|between:1,99',
            'content_1' => 'required',
            'image' => 'required'
      ],[
      		'cat_id.required' =>'Mời chọn thể loại ',
         'name.required' => 'Tên khóa học không được xác định',
            'name.min' => 'Tên khóa học không được ít hơn 3 kí tự',
            'description.required' => 'Mô tả không được để trống',
            'price.required' => 'giá không được để trống.',
             'price.numeric' => 'giá phải là số từ 1-99.',
              'price.between' => 'giá phải là số từ 1-99.',
            'content_1.required' => 'Nội dung không được xác định',
            
            'image.required' => 'Bạn chưa chọn ảnh'
      ]);
  	  $img = str_replace(url('uploads').'/', '', $request->image);

  Education::where('id',$id)->update([
  	'cat_id' => $request->cat_id,
      'name' => $request->name,
      'background' => $request->color,
      'slug' => Str::slug($request->name),
      'price' => $request->price,
      'sale_price' =>$request->sale_price,
      'description' =>$request->description,
      'image' => $img,
      'content_1' =>$request->content_1,
      'content_2' =>$request->content_2,
      'content_3' =>$request->content_3,
      'content_4' =>$request->content_4,
      'content_5' =>$request->content_5,
      'content_6' =>$request->content_6,
      'content_7' =>$request->content_7,
      'content_8' =>$request->content_8,
      'created_at' => now(),
       'updated_at' => now()
   ]);
   return redirect()->back()->with('thongbao', 'thêm khóa học thành công');
  }
    public function delete($id)
    {
    	# code..
    	Education::where('id','=',$id)->delete();
    	return redirect()->back()->with('thongbao', 'xóa khóa học này thành công');
    }
}
