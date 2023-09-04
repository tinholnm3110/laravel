<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryAdminController extends Controller
{
    //
    public function cate(){
        $data["category"] = Category::all();
        return view("admin/category/category",["data" => $data]);
    }
    public function addcate(){
        $data["category"] = Category::all();
        return view("admin/category/add_category",["addcate" => $data]);
    }
    public function xl_add(REQUEST $request){
        DB::table("category")->insert([
            'nameCate' => $request->cat_name
        ]);
        return redirect("/admin/category");
    }
    public function xl_delete($id){
        DB::table("category")->where("id",$id)->delete();
        return redirect("/admin/category");
    }
    public function edit($id){
        $data['category']=DB::table("category")->where("id",$id)->first();
        return view("/admin/category/edit_category",["data" => $data]);
    }
}
