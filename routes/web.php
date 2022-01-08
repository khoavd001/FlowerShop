<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\Users\SignupController;
use App\Http\Controllers\Admin\LoaiHoaController;
use App\Http\Controllers\Page\HomeController;
use App\Http\Controllers\Page\PhanLoaiController;
use App\Http\Controllers\Page\YNghiaController;
use App\Http\Controllers\Page\GioHangController;
use App\Http\Controllers\Admin\TuVanController;


Route::get('admin/users/login',[LoginController::class,'index'])->name('login');
Route::post('admin/users/login/store',[LoginController::class,'store']);
Route::get('admin/users/signup',[SignupController::class,'index']);
Route::post('admin/users/signup',[SignupController::class,'store']);

Route::middleware(['auth'])->group(function (){

    Route::prefix('admin')->group(function(){

        Route::get('/',[MainController::class,'index'])->name('admin');
        Route::get('main',[MainController::class,'index']);

        Route::prefix('menu')->group(function (){
            Route::get('AddSPHome',[LoaiHoaController::class,'create']);
            Route::post('AddSPHome',[LoaiHoaController::class,'store']);
            Route::get('ListSPHome',[LoaiHoaController::class,'index']);
            Route::get('updatettsp/{bohoa}',[LoaiHoaController::class,'updatettsp']);
            Route::get('edit/{bohoa}', [LoaiHoaController::class, 'show']);
            Route::post('edit/{bohoa}', [LoaiHoaController::class, 'update']);
            Route::DELETE('destroy', [LoaiHoaController::class, 'destroy']);
            Route::get('DSDonHang',[\App\Http\Controllers\Admin\GioHangController::class,'index']);
            Route::get('detail/{customer}',[\App\Http\Controllers\Admin\GioHangController::class,'detail']);
            Route::get('updatett/{customer}',[\App\Http\Controllers\Admin\GioHangController::class,'updatett']);
            Route::DELETE('donhang/destroy',[\App\Http\Controllers\Admin\GioHangController::class,'destroy']);
        });
    });

});

Route::get('page/Home',[LoaiHoaController::class,'home'])->name('home');

Route::get('page/loaihoa/LoaiHoa',[PhanLoaiController::class,'index']);
Route::get('page/loaihoa/HoaHong',[PhanLoaiController::class,'HoaHong']);
Route::get('page/loaihoa/HoaDongTien',[PhanLoaiController::class,'HoaDongTien']);
Route::get('page/loaihoa/HoaLan',[PhanLoaiController::class,'HoaLan']);
Route::get('page/loaihoa/HoaHuongDuong',[PhanLoaiController::class,'HoaHuongDuong']);
Route::get('page/MuaHang/{bohoa}',[LoaiHoaController::class,'Mua']);
//Route::get('page/MuaHang/{bohoa}',[PhanLoaiController::class,'Mua']);


Route::get('page/ynghiahoa/YNghiaHoa',[YNghiaController::class,'index']);
Route::get('page/ynghiahoa/HoaDongTien',[YNghiaController::class,'HoaCuc']);
Route::get('page/ynghiahoa/HoaHong',[YNghiaController::class,'HoaHong']);
Route::get('page/ynghiahoa/HoaHuongDuong',[YNghiaController::class,'HoaHuongDuong']);
Route::get('page/ynghiahoa/HoaLan',[YNghiaController::class,'HoaLan']);

Route::get('page/GioHang',[GioHangController::class,'index']);
Route::post('page/addGioHang',[GioHangController::class,'add']);
Route::get('page/giohang/delete/{id}',[GioHangController::class,'remove']);
Route::post('page/GioHang',[GioHangController::class,'addCart']);

Route::post('page/tuvan',[TuVanController::class,'create']);
Route::get('admin/tuvan/updatett/{tuvan}',[TuVanController::class,'updatett']);

