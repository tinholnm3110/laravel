<?php

use App\Http\Controllers\ProductAdminController;
use Illuminate\Support\Facades\Route;

Route::get("/admin/product/list",[ProductAdminController::class,"list"]); 
Route::get("/admin/product/add-product",[ProductAdminController::class,"addpro"]); 
Route::post("/admin/product/xl_addpro",[ProductAdminController::class,"xl_addpro"]);
?>