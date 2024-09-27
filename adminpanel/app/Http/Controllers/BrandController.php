<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    //

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255|unique:brands,name',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            // Store the image and get its path
            $imagePath = $request->file('image')->store('brands', 'public');
        }

        // Create a new brand
        $brand = new Brand();
        $brand->name = $request->input('name');
        $brand->image = $imagePath; // Store the image path
        $brand->save(); // Save the brand to the database

        // Redirect with a success message
        return redirect()->route('product.brands')->with('success', 'Brand added successfully!');
    }


    public function destroy($id)
    {
        // Find the brand by its ID
        $brand = Brand::findOrFail($id);

        // Delete the image from storage
        if (Storage::exists('public/' . $brand->image)) {
            Storage::delete('public/' . $brand->image);
        }

        // Delete the brand from the database
        $brand->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Brand deleted successfully!');
    }

}
