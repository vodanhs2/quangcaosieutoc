<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => 'admin_cp','namespace'=>'Admin','middleware'=> 'auth'], function() {
  Route::get('logout','AdminController@logout')->name('logout');
  Route::get('/', function() {
      return view('admin.index');
  })->name('admin');
       //dich-vu
  Route::group(['prefix' => 'service'], function() {
   Route::get('/', 'ServiceController@index')->name('service');
   Route::get('add', 'ServiceController@add')->name('service_add');
   Route::post('add', 'ServiceController@post_add')->name('service_add');
   Route::get('edit-{id}', 'ServiceController@edit')->name('service_edit');
   Route::post('edit-{id}', 'ServiceController@post_edit')->name('service_edit');
   Route::get('del-{id}', 'ServiceController@delete')->name('service_del');
 });
  Route::group(['prefix' => 'service-about'], function() {
   Route::get('/', 'Service_AboutController@index')->name('service_about');
   Route::get('add', 'Service_AboutController@add')->name('service_about_add');
   Route::post('add', 'Service_AboutController@post_add')->name('service_about_add');
   Route::get('edit-{id}', 'Service_AboutController@edit')->name('service_about_edit');
   Route::post('edit-{id}', 'Service_AboutController@post_edit')->name('service_about_edit');
   Route::get('del-{id}', 'Service_AboutController@delete')->name('service_about_del');
 });

//danh-muc-blog
  Route::group(['prefix' => 'category-blog'], function() {
    Route::get('/', 'Cate_BlogController@index')->name('Cate_Blog');
    Route::get('add', 'Cate_BlogController@add')->name('Cate_Blog_add');
    Route::post('add', 'Cate_BlogController@post_add')->name('Cate_Blog_add');
    Route::get('del-{id}', 'Cate_BlogController@delete')->name('Cate_Blog_del');
    Route::get('update-{id}-{status}', 'Cate_BlogController@updateStatus')->name('Cate_Blog_update_status');

  });
//blog
  Route::group(['prefix' => 'blog'], function() {
   Route::get('/', 'BlogController@index')->name('blog');
   Route::get('add', 'BlogController@add')->name('blog_add');
   Route::post('add', 'BlogController@post_add')->name('blog_add');
   Route::get('edit-{id}', 'BlogController@edit')->name('blog_edit');
   Route::post('edit-{id}', 'BlogController@post_edit')->name('blog_edit');
   Route::get('del-{id}', 'BlogController@delete')->name('blog_del');
 });
//customer
  Route::group(['prefix' => 'customer'], function() {
   Route::get('/', 'CustomerController@index')->name('customer');
   Route::get('add', 'CustomerController@add')->name('customer_add');
   Route::post('add', 'CustomerController@post_add')->name('customer_add');
   Route::get('edit-{id}', 'CustomerController@edit')->name('customer_edit');
   Route::post('edit-{id}', 'CustomerController@post_edit')->name('customer_edit');
   Route::get('del-{id}', 'CustomerController@delete')->name('customer_del');
 });
//about
  Route::group(['prefix' => 'about'], function() {
   Route::get('-{status}', 'AboutController@index')->name('about');
     // Route::get('/{status}', 'AboutController@index_status')->name('about_');

   Route::get('add', 'AboutController@add')->name('about_add');

   Route::post('add', 'AboutController@post_add')->name('about_add');
   Route::get('edit-{id}', 'AboutController@edit')->name('about_edit');
   Route::post('edit-{id}', 'AboutController@post_edit')->name('about_edit');
   Route::get('del-{id}', 'AboutController@delete')->name('about_del');
 });
    //user
  Route::group(['prefix' => 'user'], function() {
    Route::get('/', 'AdminController@index')->name('user');
    Route::post('/', 'AdminController@post_add')->name('user_add');
    Route::get('edit-{id}', 'AdminController@edit')->name('user_edit');
    Route::post('edit-{id}', 'AdminController@post_edit')->name('user_edit');
    Route::get('del-{id}', 'AdminController@delete')->name('user_del');
  });
  //hotline
    Route::group(['prefix' => 'hotline'], function() {
   Route::get('/', 'HotlineController@index')->name('hotline');
   Route::get('add', 'HotlineController@add')->name('hotline_add');
   Route::post('add', 'HotlineController@post_add')->name('hotline_add');
   Route::get('edit-{id}', 'HotlineController@edit')->name('hotline_edit');
   Route::post('edit-{id}', 'HotlineController@post_edit')->name('hotline_edit');
   Route::get('del-{id}', 'HotlineController@delete')->name('hotline_del');
     });
    //cate-education
     Route::group(['prefix' => 'cate_education'], function() {
   Route::get('/', 'Cate_EducationController@index')->name('Cate_Education');
   Route::get('add', 'Cate_EducationController@add')->name('Cate_Education_add');
   Route::post('add', 'Cate_EducationController@post_add')->name('Cate_Education_add');
   Route::get('edit-{id}', 'Cate_EducationController@edit')->name('Cate_Education_edit');
   Route::post('edit-{id}', 'Cate_EducationController@post_edit')->name('Cate_Education_edit');
   Route::get('del-{id}', 'Cate_EducationController@delete')->name('Cate_Education_del');
     });
     //education
      Route::group(['prefix' => 'education'], function() {
   Route::get('/', 'EducationController@index')->name('education');
   Route::get('add', 'EducationController@add')->name('education_add');
   Route::post('add', 'EducationController@post_add')->name('education_add');
   Route::get('edit-{id}', 'EducationController@edit')->name('education_edit');
   Route::post('edit-{id}', 'EducationController@post_edit')->name('education_edit');
   Route::get('del-{id}', 'EducationController@delete')->name('education_del');
     });
      //banner
       Route::group(['prefix' => 'banner'], function() {
   Route::get('/', 'BannerController@index')->name('banner');
   Route::get('add', 'BannerController@add')->name('banner_add');
   Route::post('add', 'BannerController@post_add')->name('banner_add');
   Route::get('edit-{id}', 'BannerController@edit')->name('banner_edit');
   Route::post('edit-{id}', 'BannerController@post_edit')->name('banner_edit');
   Route::get('del-{id}', 'BannerController@delete')->name('banner_del');
     });
       //danh sach đăng ký service
          Route::group(['prefix' => 'form-service'], function() {
             Route::get('/', 'Form_ServiceCotroller@index')->name('form_service');
   Route::post('add-{id}', 'Form_ServiceCotroller@post_add')->name('form_service_add');
   Route::get('del-{id}', 'Form_ServiceCotroller@delete')->name('form_service_del');
          });
          //danh sach đăng ký education
          Route::group(['prefix' => 'form-education'], function() {
             Route::get('/', 'Form_EducationController@index')->name('form_education');
   Route::post('add-{id}', 'Form_EducationController@post_add')->name('form_education_add');
   Route::get('del-{id}', 'Form_EducationController@delete')->name('form_education_del');
          });
            //danh sach đăng ký liên hệ
          Route::group(['prefix' => 'form-hotline'], function() {
             Route::get('/', 'Form_HotlineController@index')->name('form_hotline');
   Route::post('add', 'Form_HotlineController@post_add')->name('form_hotline_add');
   Route::get('del-{id}', 'Form_HotlineController@delete')->name('form_hotline_del');
          });
});
//login
Route::get('admin/login_admin','Admin\AdminController@login')->name('login');
Route::post('admin/login_admin','Admin\AdminController@post_login')->name('login');

//========giao-dien

//trangchu
Route::get('/', 'ClientController@index')->name('trang-chu');


//dichvu
    Route::get('dich-vu', 'ClientController@service')->name('dich-vu');
Route::get('dichvu-{id}-{slug}', 'ClientController@service_details')->name('chi-tiet-dich-vu');

//gioithieu
Route::get('gioi-thieu','ClientController@about')->name('gioi-thieu');

//khachhang
Route::get('khach-hang' ,'ClientController@customer')->name('khach-hang');

//blog
Route::get('blog','ClientController@cat_blog')->name('danh-muc-tin-tuc');
Route::get('tin-tuc-{id}.{slug}','ClientController@blog')->name('tin-tuc');
Route::get('tintuc-{id}-{slug}','ClientController@blog_details')->name('chi-tiet-tin-tuc');

//lienhe
Route::get('lien-he','ClientController@hotline')->name('lien-he');
//khoa-hoc
Route::get('khoa-hoc-marketing','ClientController@education')->name('khoa-hoc');
Route::get('khoa-hoc-{id}-{slug}','ClientController@education_details')->name('chi-tiet-khoa-hoc');


// Route::get('hoi-dap', function () {
//     return view('hoi-dap');
// });


// Route::get('lien-he', function () {
//     return view('lien-he');
// });
// Route::get('seo', function () {
//     return view('seo');
// });
Route::get('tuyen-dung', function () {
    return view('tuyen-dung');
})->name('tuyen-dung');
