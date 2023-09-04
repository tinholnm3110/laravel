<?php

use App\Http\Controllers\CategoryAdminController;
use Illuminate\Support\Facades\Route;

Route::get("/admin/category",[CategoryAdminController::class,"cate"]); 
Route::get("/admin/category/add_category",[CategoryAdminController::class,"addcate"]); 
Route::post("/admin/category/xl_add",[CategoryAdminController::class,"xl_add"]);
Route::get("/admin/category/xl_delete/{id}",[CategoryAdminController::class,"xl_delete"]); 
Route::get("/admin/category/edit/{id}",[CategoryAdminController::class,"edit"]); 
?>