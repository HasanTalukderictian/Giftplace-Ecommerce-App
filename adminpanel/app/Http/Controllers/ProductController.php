<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function show()
    {
        $LoggedAdminInfo = Admin::find(session('LoggedAdminInfo'));
        $productInfo = Product::all();
        return view('admin.productshow', compact('LoggedAdminInfo', 'productInfo'));
    }


    public function brands(){
        $LoggedAdminInfo = Admin::find(session('LoggedAdminInfo'));
        $brandsinfo =Brand::all();
        return view('admin.brand', compact('LoggedAdminInfo', 'brandsinfo'));
    }


    public function categories()
    {
        $LoggedAdminInfo = Admin::find(session('LoggedAdminInfo'));
        $categoryinfo = Category::all();
        return view('admin.categories', compact('LoggedAdminInfo', 'categoryinfo'));
    }

    public function products(){
        $LoggedAdminInfo = Admin::find(session('LoggedAdminInfo'));
        $brandsinfo = Brand::all();
        $categoryinfo= Category::all();
        $productInfo = Product::all();
        return view('admin.product',compact('LoggedAdminInfo', 'brandsinfo', 'categoryinfo', 'productInfo'));
    }
}
