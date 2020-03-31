<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\service;
use App\Form_Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
class Form_serviceCotroller extends Controller
{
	
    public function index()
    {
    	# code...
    	 $data['form_service'] = DB::table('form_service')
            ->select('form_service.*', 'service.name as service')
            ->join('service', 'service.id', '=', 'form_service.service_id')
            ->orderByDesc('id')
            ->get();
    	return view('admin.service.form_service',$data);
    }
  public function post_add($id,Request $request)
    {
    	# code...
    	Form_Service::insert([
    		'service_id' =>$id,
    		'name' =>$request->fullname,
    		'phone' =>$request->phone,
    		'email' =>$request->email,
    		'content' =>$request->message,
    		'created_at' => now(),
       'updated_at' => now()
    	]);
    	   return redirect()->back()->with('thongbao', 'Đăng ký thành công!!Chúng tôi sẽ liên hệ ban sớm nhất có thể.');

    }

    public function delete($id)
    {
    	# code...
    	Form_Service::where('id',$id)->delete();
    	 return redirect()->back()->with('thongbao', 'Xóa đăng ký này Thành Công!');
    }
}
