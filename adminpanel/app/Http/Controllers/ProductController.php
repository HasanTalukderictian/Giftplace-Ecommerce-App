<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function show()
    {
        $LoggedAdminInfo = Admin::find(session('LoggedAdminInfo'));

        return view('admin.productshow', compact('LoggedAdminInfo'));
    }

}
