<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CategoryBlog;
use App\Blog;
use Illuminate\Support\Str;
class Cate_BlogController extends Controller
{
    //
    public function index()
    {
    	# code...
    	$cats = CategoryBlog::all();
    	return view('admin.blog.cate',['cats'=>$cats]);
    }
    public function add()
    {
    	# code...
    	$cats = CategoryBlog::all();
    	return view('admin.blog.cate',['cats'=>$cats]);
    }
    public function post_add(Request $request)
    {
    	# code...
    	 $this->validate($request, [
           'name' => 'required|min:3',
             'title' => 'required|min:3',
            'summary' => 'required',
            'image' => 'required'
      ],[
         'name.required' => 'Tên blog không được xác định',
            'name.min' => 'Tên blog không được ít hơn 3 kí tự',
             'title.required' => 'Tiêu đề blog không được xác định',
            'title.min' => 'Tiêu đề blog không được ít hơn 3 kí tự',
            'summary.required' => 'Tóm tắt chưa được xác định',
            'image.required' => 'Bạn chưa chọn ảnh'
      ]);

     $img = str_replace(url('uploads').'/', '', $request->image);
     CategoryBlog::insert([
      'name' => $request->name,
      'title'=> $request->title,
      'slug' => Str::slug($request->name),
      'summary' =>$request->summary,
      'image' => $img,
      'created_at' => now(),
       'updated_at' => now(),
      'status' =>$request->status
   ]);
   return redirect()->back()->with('thongbao', 'thêm thể loại thành công');
    }
    public function delete($id)
    {
    	# code..
    	Blog::where('cat_id','=',$id)->delete();
    	CategoryBlog::where('id', '=', $id)->delete();
    	return redirect()->back()->with('thongbao', 'xóa thể loại thành công');
    }
    public function updateStatus($id, $status)
    {
    	CategoryBlog::where('id', '=', $id)->update([
            'status' => $status,
        ]);
    	return redirect()->back()->with('thongbao', 'thay đổi thành công!');;
    }
}
