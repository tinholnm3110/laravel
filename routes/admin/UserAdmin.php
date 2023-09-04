<?php

use App\Http\Controllers\UserAdminController;
use Illuminate\Support\Facades\Route;

Route::get("/admin/user/user",[UserAdminController::class,"us"]); 
?>