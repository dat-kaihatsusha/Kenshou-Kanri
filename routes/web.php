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
Route::get('/','HomeController@index') ;

// Đơn vị
Route::get('/getformdonvi', 'DonviController@GetFrom');
Route::post('/savedonvi', 'DonviController@Save');
Route::get('/getshowalldonvi', 'DonviController@getshowalldonvi');
route::get('/geteditdonvi/{iddonvi}','DonviController@editdonvi');
Route::post('/updatedonvi/{iddonvi}', 'DonviController@updatedonvi');
route::get('/getdeletedonvi/{id}','DonviController@getdeletedonvi');



// Trình cấp
Route::get('/getformtrinhcap', 'TrinhcapController@GetFrom');
Route::post('/savetrinhcap', 'TrinhcapController@Save');
Route::get('/getshowalltrinhcap','TrinhcapController@getshowalltrinhcap');
Route::get('/getformedittrinhcap/{idtrinhcap}', 'TrinhcapController@getformedittrinhcap');
Route::post('/updatetrinhcap/{idtrinhcap}', 'TrinhcapController@updatetrinhcap');
Route::get('/getdeletetrinhcap/{idtrinhcap}', 'TrinhcapController@getdeletetrinhcap');


// Loại khen thưởng
Route::get('/getformloaikhenthuong', 'LoaikhenthuongController@GetForm');
Route::post('/saveloaikhenthuong', 'LoaikhenthuongController@Save');
Route::get('/getshowallloaikhenthuong','LoaikhenthuongController@getshowallloaikhenthuong');
Route::get('/getformeditloaikhenthuong/{idloaikhenthuong}', 'LoaikhenthuongController@getformeditloaikhenthuong');
Route::post('/updateloaikhenthuong/{idloaikhenthuong}', 'LoaikhenthuongController@updateloaikhenthuong');
Route::get('/getdeleteloaikhenthuong/{idloaikhenthuong}', 'LoaikhenthuongController@getdeleteLoaikhenthuong');

// Phòng ban
Route::get('/getformphongban',      'PhongbanController@GetForm');
Route::post('/savephongban',        'PhongbanController@Save');
Route::get('/getshowallphongban',   'PhongbanController@getshowallphongban');
Route::get('/getformeditphongban/{idphongban}', 'PhongbanController@getformeditphongban');
Route::post('/updatephongban/{idphongban}', 'PhongbanController@updatephongban');
Route::get('/getdeletephongban/{idphongban}', 'PhongbanController@getdeletephongban');

// employees
Route::get('/getformemployees', 'EmployeesController@GetForm');
Route::post('/saveemployees', 'EmployeesController@Save');
Route::get('/getshowallemployees',   'EmployeesController@getshowallemployees');
Route::get('/getformeditemployees/{idemployees}', 'EmployeesController@getformeditemployees');
Route::post('/updateemployees/{idemployees}', 'EmployeesController@updateemployees');
Route::get('/getdeleteemployees/{idemployees}', 'EmployeesController@getdeleteemployees');

// Danh hiệu thi đua
Route::get('/getformdanhhieuthidua', 'DanhhieuthiduaController@GetForm');
Route::post('/savedanhhieuthidua', 'DanhhieuthiduaController@Save');
Route::get('/getshowalldanhhieuthidua', 'DanhhieuthiduaController@getshowalldanhhieuthidua');
Route::get('/getformeditdanhhieuthidua/{iddanhhieuthidua}', 'DanhhieuthiduaController@getformeditdanhhieuthidua');
Route::post('/updatedanhhieuthidua/{iddanhhieuthidua}', 'DanhhieuthiduaController@updatedanhhieuthidua');
Route::get('/getdeletedanhhieuthidua/{iddanhhieuthidua}', 'DanhhieuthiduaController@getdeletedanhhieuthidua');