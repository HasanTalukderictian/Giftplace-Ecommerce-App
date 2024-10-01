<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Blog;
use App\Models\Brand;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    //

    public function show() {

        $LoggedAdminInfo = Admin::find(session('LoggedAdminInfo'));
        $clientsinfo = Client::all();
        $brandsinfo = Brand::all();
        $blogsinfo = Blog::all();

        return view('admin.blogs', compact('LoggedAdminInfo', 'clientsinfo', 'brandsinfo', 'blogsinfo'));
    }

    public function index(){
        $LoggedAdminInfo = Admin::find(session('LoggedAdminInfo'));
        $clientsinfo = Client::all();
        $blogsinfo = Blog::all();

        return view('admin.createblog', compact('LoggedAdminInfo', 'clientsinfo', 'blogsinfo'));
    }


    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Validate each image
        ]);

        // Create a new blog record first
        $blog = Blog::create([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        // Check if images are uploaded
        if ($request->hasFile('images')) {
            $imagePaths = []; // Array to store image paths

            foreach ($request->file('images') as $imageFile) {
                // Store the image and get its path
                $imagePath = $imageFile->store('images', 'public'); // Store in 'storage/app/public/images'

                // Add image path to the array
                $imagePaths[] = $imagePath;
            }

            // Update the blog with the image paths (store as JSON if multiple images)
            $blog->update([
                'images' => json_encode($imagePaths), // Store as JSON
            ]);
        }

        // Redirect or respond as needed
        return redirect()->route('blogs.show')->with('success', 'Blog created successfully!');
    }


    public function destroy($id)
    {
        // Find the blog by ID
        $blog = Blog::findOrFail($id);

        // Decode the JSON string of images
        $images = json_decode($blog->images);

        // Delete each image file from storage
        if ($images) {
            foreach ($images as $image) {
                Storage::disk('public')->delete($image);
            }
        }

        // Delete the blog record
        $blog->delete();

        // Redirect or respond as needed
        return redirect()->route('blogs.show')->with('success', 'Blog deleted successfully!');
    }


}
