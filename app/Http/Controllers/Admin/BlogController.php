<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CategoryBlog;
use App\Blog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class BlogController extends Controller
{
   public function index()
   {
   		 $data['blog'] = DB::table('blog')
            ->select('blog.*', 'cate_blog.name as cate_blog')
            ->join('cate_blog', 'blog.cat_id', '=', 'cate_blog.id')
            ->orderByDesc('id')
            ->get();

        return view('admin.blog.index', $data);
   }

  public function add()
  {
  	# code...
  	$cats = CategoryBlog::all();
  	return view('admin.blog.add',['cats'=>$cats]);
  }
  public function post_add(Request $request)
  {
  	# code...
  	 $this->validate($request, [
  	 	'cat_id' => 'required',
           'name' => 'required|min:3',
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'summary' => 'required',
            'image' => 'required'
      ],[
      		'cat_id.required' =>'Mời chọn thể loại ',
         'name.required' => 'Tên dịch vụ không được xác định',
            'name.min' => 'Tên dịch vụ không được ít hơn 3 kí tự',
            'title.required' => 'Tiêu đề dịch vụ không được để trống',
            'description.required' => 'Mô tả không được để trống.',
            'summary.required' => 'Tóm tắt chưa được xác định',
            'content.required' => 'Nội dung không được xác định',
            
            'image.required' => 'Bạn chưa chọn ảnh'
      ]);
  	  $img = str_replace(url('uploads').'/', '', $request->image);

  Blog::insert([
  	'cat_id' => $request->cat_id,
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
   return redirect()->back()->with('thongbao', 'thêm blog thành công');
  }

  public function edit($id)
  {
      $data['cats'] = CategoryBlog::all();
  $data['blog'] = Blog::find($id);

    return view('admin.blog.edit', $data);
  }
   public function post_edit($id,Request $request)
   {
       $this->validate($request, [
      'cat_id' => 'required',
           'name' => 'required|min:3',
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'summary' => 'required',
            'image' => 'required'
      ],[
          'cat_id.required' =>'Mời chọn thể loại ',
         'name.required' => 'Tên dịch vụ không được xác định',
            'name.min' => 'Tên dịch vụ không được ít hơn 3 kí tự',
            'title.required' => 'Tiêu đề dịch vụ không được để trống',
            'description.required' => 'Mô tả không được để trống.',
            'summary.required' => 'Tóm tắt chưa được xác định',
            'content.required' => 'Nội dung không được xác định',
            
            'image.required' => 'Bạn chưa chọn ảnh'
      ]);
      $img = str_replace(url('uploads').'/', '', $request->image);

  Blog::where('id',$id)->update([
    'cat_id' => $request->cat_id,
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
   return redirect()->back()->with('thongbao', 'sửa blog thành công');
   }
   public function delete($id)
   {
     # code...
    Blog::where('id','=',$id)->delete();
      return redirect()->back()->with('thongbao', 'xóa blog này thành công');
   }
}