<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Client;
use App\Models\Midbanner;
use Illuminate\Http\Request;

class MidBannerController extends Controller
{
    //
    public function show()
    {

        $LoggedAdminInfo = Admin::find(session('LoggedAdminInfo'));
        $clientsinfo = Client::all();
        $brandsinfo = Brand::all();
        $blogsinfo = Blog::all();

        return view('admin.midbanner', compact('LoggedAdminInfo', 'clientsinfo', 'brandsinfo', 'blogsinfo'));
    }

    public function index() {
        $LoggedAdminInfo = Admin::find(session('LoggedAdminInfo'));
        return view('admin.createmidbanner', compact('LoggedAdminInfo'));
    }


    public function store(Request $request)
    {
        // Validate incoming request
        $validatedData = $request->validate([
            'Category' => 'required|string|unique:midbanner,Category',
            'totalCategory' => 'required|integer',
            'producttype' => 'required|string|unique:midbanner,producttype',
            'totalproduct' => 'required|integer',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048' // Single image validation
        ]);

        // Handle single image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '-' . $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('uploads/midbanner_images', $imageName, 'public');
        }

        // Create a new Midbanner record
        Midbanner::create([
            'Category' => $validatedData['Category'],
            'totalCategory' => $validatedData['totalCategory'],
            'producttype' => $validatedData['producttype'],
            'totalproduct' => $validatedData['totalproduct'],
            'description' => $validatedData['description'],
            'image' => $imagePath // Store the image path directly
        ]);

        // Redirect with success message
        return redirect()->route('midbanner.index')->with('success', 'Midbanner added successfully!');
    }

}
