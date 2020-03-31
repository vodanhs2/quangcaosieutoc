<?php

namespace App\Http\Controllers\Admin;
use App\form_education;
use App\education;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
class Form_EducationController extends Controller
{
  
    public function index()
    {
    	# code...
    	 $data['form_education'] = DB::table('form_education')
            ->select('form_education.*', 'education.name as education')
            ->join('education', 'education.id', '=', 'form_education.education_id')
            ->orderByDesc('id')
            ->get();
    	return view('admin.education.form_education',$data);
    }
  public function post_add($id,Request $request)
    {
    	# code...
    	form_education::insert([
    		'education_id' =>$id,
    		'name' =>$request->fullname,
    		'phone' =>$request->phone,
    		'email' =>$request->email,
    		'quantity' =>$request->quantity,
    		'created_at' => now(),
       'updated_at' => now()
    	]);
    	   return redirect()->back()->with('thongbao', 'Đăng ký thành công!!Chúng tôi sẽ liên hệ ban sớm nhất có thể.');

    }

    public function delete($id)
    {
    	# code...
    	form_education::where('id',$id)->delete();
    	 return redirect()->back()->with('thongbao', 'Xóa đăng ký này Thành Công!');
    }
}
