<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductAdminController extends Controller
{
    //
    public function list(){
       return view("admin/product/list-product");
    }
    public function addpro(){
        $data["product"] = Product::all();
        return view("admin/product/add-product",["addpro" => $data]);
    }
    public function xl_addpro(REQUEST $request){
        DB::table("product")->insert([
            'namePro' => $request->cat_name
        ]);
        return redirect("/admin/category");
    }
}
