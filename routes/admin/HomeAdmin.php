<?php

use App\Http\Controllers\HomeAdminController;
use Illuminate\Support\Facades\Route;

Route::get("/admin/home",[HomeAdminController::class,"home"]); 
?>