<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/', 'BackendController@dashboard')->name('backend.dashboard');
//route nhan vien
Route::get('/admin/nhanvien','NhanvienController@index')->name('backend.nhanvien.index');
Route::get('/admin/nhanvien/create','NhanvienController@create')->name('backend.nhanvien.create');
Route::post('/admin/nhanvien/store','NhanvienController@store')->name('backend.nhanvien.store');
Route::get('/admin/nhanvien/edit/{id}','NhanvienController@edit')->name('backend.nhanvien.edit');
Route::delete('/admin/nhanvien/destroy/{id}','NhanvienController@destroy')->name('backend.nhanvien.destroy');
Route::PUT('/admin/nhanvien/update/{id}','NhanvienController@update')->name('backend.nhanvien.update');
Route::get('/admin/nhanvien/print','NhanvienController@print')->name('backend.nhanvien.print');
Route::get('/admin/nhanvien/excel', 'NhanvienController@excel')->name('backend.nhanvien.excel');
Route::get('/admin/nhanvien/pdf', 'NhanvienController@pdf')->name('backend.nhanvien.pdf');
//route quyen
Route::get('/admin/quyen','QuyenController@index')->name('backend.quyen.index');
Route::get('/admin/quyen/create','QuyenController@create')->name('backend.quyen.create');
Route::post('/admin/quyen/store','QuyenController@store')->name('backend.quyen.store');
Route::get('/admin/quyen/edit/{id}','QuyenController@edit')->name('backend.quyen.edit');
Route::delete('/admin/quyen/destroy/{id}','QuyenController@destroy')->name('backend.quyen.destroy');
Route::PUT('/admin/quyen/update/{id}','QuyenController@update')->name('backend.quyen.update');
Route::get('/admin/quyen/print','QuyenController@print')->name('backend.quyen.print');
Route::get('/admin/quyen/excel', 'QuyenController@excel')->name('backend.quyen.excel');
Route::get('/admin/quyen/pdf', 'QuyenController@pdf')->name('backend.quyen.pdf');
// route đơn hàng
Route::get('/admin/donhang','DonhangController@index')->name('backend.donhang.index');
Route::get('/admin/donhangchuaxuly','DonhangController@donhangchuaxuly')->name('backend.donhang.donhangchuaxuly');
Route::get('/admin/xulydonhang/{id}','DonhangController@xulydonhang')->name('backend.donhang.xulydonhang');
Route::get('/admin/xulydonhang/print/{id}','DonhangController@print')->name('backend.xulydonhang.print');
Route::get('/admin/donhang/danggiao','DonhangController@danggiao')->name('backend.donhang.danggiao');



Route::post('/admin/donhang/store','DonhangController@store')->name('backend.donhang.store');
Route::get('/admin/donhang/edit/{id}','DonhangController@edit')->name('backend.donhang.edit');
Route::delete('/admin/donhang/destroy/{id}','DonhangController@destroy')->name('backend.donhang.destroy');
Route::PUT('/admin/donhang/update/{id}','DonhangController@update')->name('backend.donhang.update');
Route::get('/admin/donhang/print','DonhangController@print')->name('backend.donhang.print');
Route::get('/admin/donhang/excel', 'DonhangController@excel')->name('backend.donhang.excel');
Route::get('/admin/donhang/pdf', 'DonhangController@pdf')->name('backend.donhang.pdf');
// route san pham
Route::get('/admin/sanpham','SanphamController@index')->name('backend.sanpham.index');
Route::get('/admin/sanpham/create','SanphamController@create')->name('backend.sanpham.create');
Route::post('/admin/sanpham/store','SanphamController@store')->name('backend.sanpham.store');
Route::get('/admin/sanpham/edit/{id}','SanphamController@edit')->name('backend.sanpham.edit');
Route::delete('/admin/sanpham/destroy/{id}','SanphamController@destroy')->name('backend.sanpham.destroy');
Route::PUT('/admin/sanpham/update/{id}','SanphamController@update')->name('backend.sanpham.update');
Route::get('/admin/sanpham/print','SanphamController@print')->name('backend.sanpham.print');
Route::get('/admin/sanpham/excel', 'SanphamController@excel')->name('backend.sanpham.excel');
Route::get('/admin/sanpham/pdf', 'SanphamController@pdf')->name('backend.sanpham.pdf');

// route khuyen mai
Route::get('/admin/khuyenmai','KhuyenmaiController@index')->name('backend.khuyenmai.index');
Route::get('/admin/khuyenmai/create','KhuyenmaiController@create')->name('backend.khuyenmai.create');
Route::post('/admin/khuyenmai/store','KhuyenmaiController@store')->name('backend.khuyenmai.store');
Route::get('/admin/khuyenmai/edit/{id}','KhuyenmaiController@edit')->name('backend.khuyenmai.edit');
Route::delete('/admin/khuyenmai/destroy/{id}','KhuyenmaiController@destroy')->name('backend.khuyenmai.destroy');
Route::PUT('/admin/khuyenmai/update/{id}','KhuyenmaiController@update')->name('backend.khuyenmai.update');
Route::get('/admin/khuyenmai/print','KhuyenmaiController@print')->name('backend.khuyenmai.print');
Route::get('/admin/khuyenmai/excel', 'KhuyenmaiController@excel')->name('backend.khuyenmai.excel');
Route::get('/admin/khuyenmai/pdf', 'KhuyenmaiController@pdf')->name('backend.khuyenmai.pdf');

// route van chuyen
Route::get('/admin/vanchuyen','vanchuyenController@index')->name('backend.vanchuyen.index');
Route::get('/admin/vanchuyen/create','vanchuyenController@create')->name('backend.vanchuyen.create');
Route::get('get-quanhuyen-list','vanchuyenController@getquanhuyenList');
Route::get('get-phuongxa-list','vanchuyenController@getphuongxaList');
Route::post('/admin/vanchuyen/store','vanchuyenController@store')->name('backend.vanchuyen.store');
Route::get('/admin/vanchuyen/edit/{id}','vanchuyenController@edit')->name('backend.vanchuyen.edit');
Route::delete('/admin/vanchuyen/destroy/{id}','vanchuyenController@destroy')->name('backend.vanchuyen.destroy');
Route::PUT('/admin/vanchuyen/update/{id}','vanchuyenController@update')->name('backend.vanchuyen.update');


Route::get('/admin/vanchuyen/edit/{id}','vanchuyenController@edit')->name('backend.vanchuyen.edit');
Route::delete('/admin/vanchuyen/destroy/{id}','vanchuyenController@destroy')->name('backend.vanchuyen.destroy');
Route::PUT('/admin/vanchuyen/update/{id}','vanchuyenController@update')->name('backend.vanchuyen.update');
//baocao
Route::get('/admin/baocao/donhang', 'BaoCaoController@donhang')->name('backend.baocao.donhang');
Route::get('/admin/baocao/donhang/data', 'BaoCaoController@donhangData')->name('backend.baocao.donhang.data');
///fronend
Route::get('/marketonline', 'Frontend\FrontendController@index')->name('frontend.home');
Route::get('/lien-he', 'Frontend\FrontendController@contact')->name('frontend.contact');
Route::post('/lien-he/goi-loi-nhan', 'Frontend\FrontendController@sendMailContactForm')->name('frontend.contact.sendMailContactForm');
Route::get('/san-pham', 'Frontend\FrontendController@product')->name('frontend.product');
Route::get('/than-toan', 'Frontend\FrontendController@pay')->name('frontend.pay');
Route::get('/search', 'Frontend\FrontendController@getsearch')->name('frontend.search');
Route::get('/autocomplete', 'Frontend\FrontendController@autocomplete')->name('frontend.autocomplete');
//tao don hang va gui mail
Route::get('/gio-hang', 'Frontend\FrontendController@cart')->name('frontend.cart');
Route::post('/don-hang', 'Frontend\FrontendController@order')->name('frontend.order');
Route::post('/dat_hang', 'Frontend\FrontendController@dathang')->name('frontend.dathang');
Route::get('/ttdat_hang', 'Frontend\FrontendController@ttdathang')->name('frontend.ttdathang');
Route::get('/dat-hang/dia-chi', 'Frontend\FrontendController@orderFinish')->name('frontend.orderFinish');
Route::get('/dat-hang/hoan-tat', 'Frontend\FrontendController@sendmail')->name('frontend.sendmail');

	
Route::get('/dynamic_dependent', 'DynamicDependent@index');
Route::post('dynamic_dependent/fetch', 'Frontend\FrontendController@fetch')->name('dynamicdependent.fetch');
//loai san pham
Route::get('/admin/loaisanpham','LoaisanphamController@index')->name('backend.loaisanpham.index');
Route::get('/admin/loaisanpham/create','LoaisanphamController@create')->name('backend.loaisanpham.create');
Route::post('/admin/loaisanpham/store','LoaisanphamController@store')->name('backend.loaisanpham.store');
Route::get('/admin/loaisanpham/edit/{id}','LoaisanphamController@edit')->name('backend.loaisanpham.edit');
Route::delete('/admin/loaisanpham/destroy/{id}','LoaisanphamController@destroy')->name('backend.loaisanpham.destroy');
Route::PUT('/admin/loaisanpham/update/{id}','LoaisanphamController@update')->name('backend.loaisanpham.update');
Route::get('/admin/loaisanpham/print','LoaisanphamController@print')->name('backend.loaisanpham.print');
Route::get('/admin/loaisanpham/excel', 'LoaisanphamController@excel')->name('backend.loaisanpham.excel');
Route::get('/admin/loaisanpham/pdf', 'LoaisanphamController@pdf')->name('backend.loaisanpham.pdf');
Route::get('/search', 'LoaisanphamController@getsearch')->name('backend.search');
Route::get('/search', 'LoaisanphamController@postsearch')->name('backend.search');