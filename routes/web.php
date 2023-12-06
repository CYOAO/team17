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

Route::get('areas/{id}',[AreasController::class,'show'])->where('id', '[0-9]+')->name('areas.show');

Route::get('areas/{id}/edit',[AreasController::class,'edit'])->where('id', '[0-9]+')->name('areas.edit');

Route::delete('areas/delete/{id}', [AreasController::class, 'destroy'])->where('id', '[0-9]+')->name('areas.destroy');



//顯示所有角色資料
Route::get('roles',[RolesController::class,'index'])->name('roles.index');

//顯示單一角色資料
Route::get('roles/{id}',[RolesController::class,'show'])->where('id', '[0-9]+')->name('roles.show');

//修改單一角色表單
Route::get('roles/{id}/edit',[RolesController::class,'edit'])->where('id', '[0-9]+')->name('roles.edit');

Route::delete('roles/delete/{id}', [RolesController::class, 'destroy'])->where('id', '[0-9]+')->name('roles.destroy');