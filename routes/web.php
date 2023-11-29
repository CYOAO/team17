<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreasController;
use App\Http\Controllers\RolesController;
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
Route::get("/",function(){
    return redirect('roles');
});
Route::get("/",function(){
    return redirect('areas');
});
Route::get('areas',[AreasController::class,'index'])->name('areas.index');

Route::get('areas/{id}', [AreasController::class, 'show'])->where('id', '[0-9]+')->name('areas.show');

Route::get('areas/{id}/edit', [AreasController::class, 'edit'])->where('id', '[0-9]+')->name('areas.edit');

// 顯示顯示所有球隊資料
Route::get('roles',[RolesController::class,'index'])->name('roles.index');
// 顯示單一球隊資料
Route::get('roles/{id}', [RolesController::class, 'show'])->where('id', '[0-9]+')->name('roles.show');
// 修改單一球隊表單
Route::get('roles/{id}/edit', [RolesController::class, 'edit'])->where('id', '[0-9]+')->name('roles.edit');