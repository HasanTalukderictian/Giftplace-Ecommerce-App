<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Client;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    //

    public function index(){
        $LoggedAdminInfo = Admin::find(session('LoggedAdminInfo'));
        $clientsinfo = Client::all();
        $brandsinfo = Brand::all();
        $blogsinfo = Blog::all();
        $bannerinfo = Banner::all();
        return view('admin/Pages/banner', compact('LoggedAdminInfo', 'clientsinfo', 'brandsinfo', 'blogsinfo', 'bannerinfo'));
    }

    public function createbanner(){
        $LoggedAdminInfo = Admin::find(session('LoggedAdminInfo'));
        $clientsinfo = Client::all();
        $blogsinfo = Blog::all();
        $bannerinfo = Banner::all();

        return view('admin/Pages/createbanner', compact('LoggedAdminInfo', 'clientsinfo', 'blogsinfo', 'bannerinfo'));
    }



    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Ensures image upload
            'title' => 'required|string|max:255', // Title is required and must be a string
        ]);

        // Handle the file upload
        if ($request->hasFile('image')) {
            // Save the file in the 'uploads/brands' directory
            $imagePath = $request->file('image')->store('banners', 'public');

            // Store the path in the database (the image path will look like 'brands/filename.jpg')
            Banner::create([
                'image' => $imagePath, // Save the path in the database
                'title' => $request->input('title'), // Save the title
            ]);

            return redirect()->route('banner.show')->with('success', 'Banner added successfully');
        } else {
            return redirect()->back()->with('error', 'Image upload failed');
        }
    }



    // Destroy function to handle banner deletion
    public function destroy($id)
    {
        // Find the banner by its ID
        $banner = Banner::find($id);

        if ($banner) {
            // Remove the image from the public storage folder
            $imagePath = public_path('uploads/banners/' . $banner->image);
            if (file_exists($imagePath)) {
                unlink($imagePath); // Delete the image from the folder
            }

            // Delete the banner record from the database
            $banner->delete();

            return redirect()->back()->with('success', 'Banner deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Banner not found');
        }
    }

}
