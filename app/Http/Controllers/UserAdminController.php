<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaiKhoan;

class UserAdminController extends Controller
{
    public function us(){
        $data["user"] = TaiKhoan::all();
        return view("admin/user/user",["ndung" => $data]);
    }
}
