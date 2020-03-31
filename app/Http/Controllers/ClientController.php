<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\service;
use App\about;
use Illuminate\Support\Facades\DB;
use App\customer;
use App\CategoryBlog;
use App\Blog;
use App\Hotline;
use App\CategoryEducation;
use App\Education;
use App\banner;
use App\service_about;
use Illuminate\Support\Facades\View;
use Illuminate\Database\Query\Builder;
class ClientController extends Controller
{
    //
	public function __construct(){
		$dichvu=service::orderByDesc('id')->get();
		View::Share('dichvu', $dichvu);

		$dichvu_noibat = service::where('status','=',1)->orderByDesc('id')->paginate(6);
		View::Share('dichvu_noibat', $dichvu_noibat);

		$gioithieu = about::all();
		View::Share('gioithieu',$gioithieu);

		$khachhang = customer::all();
		View::share('khachhang', $khachhang);

		$cat_blog =  CategoryBlog::orderByDesc('id')->get();
		View::Share('cat_blog',$cat_blog);

		$cat_blog_noibat = CategoryBlog::where('status','=',1)->orderByDesc('id')->paginate(6);
		View::Share('cat_blog_noibat',$cat_blog_noibat);

		$blog = DB::table('blog')
		->select('blog.*', 'cate_blog.name as cate_blog')
		->join('cate_blog', 'blog.cat_id', '=', 'cate_blog.id')
		->orderByDesc('id')
		->get();
		View::share('blog', $blog);

		$lienhe= Hotline::all();
		View::share('lienhe', $lienhe);

		$khoahoc = DB::table('education')
            ->select('education.*', 'cate_education.name as cate_education')
            ->join('cate_education', 'education.cat_id', '=', 'cate_education.id')
            ->orderByDesc('id')
            ->get();
        View::share('khoahoc', $khoahoc);

	}
	public function index(){
		$banner = banner::orderByDesc('location')->get();
		return view('index',['banner'=>$banner]);
	}

	public function service()
	{
		$service_about =service_about::all();
		return view('dich-vu',['service_about'=>$service_about]);
	}

	public function service_details($id)
	{
    	# code...
		$chitiet = service::find($id);
		return view('chi-tiet-dich-vu',['chitiet' =>$chitiet]);
	}

	public function about(){
		return view('gioi-thieu');
	}

	public function customer(){
		return view('khach-hang');
	}

	public function cat_blog(){
		return view('cat_blog');
	}
	public function blog($id){
		$danhmuc = CategoryBlog::find($id);
		$blog_by_id = DB::table('blog')
		->select('blog.*', 'cate_blog.name as cate_blog')
		->join('cate_blog', 'blog.cat_id', '=', 'cate_blog.id')
		->where('cat_id','=',$id)
		->orderByDesc('id')
		->get();
		return view ('blog',['blog_by_id'=>$blog_by_id,'danhmuc'=>$danhmuc]);
	}
	public function blog_details($id){
		$chitiet = Blog::find($id);
		return view('chi-tiet-blog',['chitiet' =>$chitiet]);
	}

	public function hotline()
	{
		# code...
		return view('lien-he');
	}

	public function education(){
		$danhmuc = CategoryEducation::all();
		return view('khoa-hoc-marketing',['danhmuc'=>$danhmuc]);
	}
	public function education_details($id)
	{
		# code...
		$danhmuc = CategoryEducation::all();
		$chitiet = education::find($id);
		return view('chi-tiet-khoa-hoc',['chitiet' =>$chitiet,'danhmuc'=>$danhmuc]);
	}

}
