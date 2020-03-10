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

Route::get('/', function () {
    return view('index');
});
Route::get('gioi-thieu', function () {
    return view('gioi-thieu');
});
Route::get('blog', function () {
    return view('blog');
});

Route::get('bang-gia-dich-vu', function () {
    return view('bang-gia-dich-vu');
});
Route::get('chay-quang-cao', function () {
    return view('chay-quang-cao');
});
Route::get('dich-vu', function () {
    return view('dich-vu');
});
Route::get('facebook-marketing', function () {
    return view('facebook-marketing');
});
Route::get('hoi-dap', function () {
    return view('hoi-dap');
});
Route::get('khach-hang', function () {
    return view('khach-hang');
});
Route::get('khoa-hoc-marketing', function () {
    return view('khoa-hoc-marketing');
});
Route::get('lien-he', function () {
    return view('lien-he');
});
Route::get('seo', function () {
    return view('seo');
});
Route::get('tuyen-dung', function () {
    return view('tuyendung');
});