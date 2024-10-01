<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    //


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'base_price' => 'required|numeric',
            'stock' => 'required|numeric',
            'brand_id' => 'required|exists:brands,id',
            'category_id' => 'required|exists:category,id',
            'description' => 'nullable|string',
            'summary_extra_description' => 'nullable|string',
            'extra_summary' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video_link' => 'nullable|url',
            'show_in_frontend' => 'required|in:yes,no',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        Product::create([
            'name' => $request->name,
            'model' => $request->model,
            'base_price' => $request->base_price,
            'stock' => $request->stock,
            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'summary_extra_description' => $request->summary_extra_description,
            'extra_summary' => $request->extra_summary,
            'image' => $imagePath,
            'video_link' => $request->video_link,
            'show_in_frontend' => $request->show_in_frontend,
        ]);

        return redirect()->back()->with('success', 'Product added successfully!');
    }


    public function show(){
        $LoggedAdminInfo = Admin::find(session('LoggedAdminInfo'));
        $brandsinfo = Brand::all();
        $categoryinfo = Category::all();
        $productInfo = Product::all();
        return view('admin.product', compact('LoggedAdminInfo', 'brandsinfo', 'categoryinfo', 'productInfo'));
    }

    public function destroy($id)
    {
        // Find the product by ID
        $product = Product::findOrFail($id);

        // Check if the product has an image and delete it from storage
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        // Delete the product from the database
        $product->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Product deleted successfully!');
    }
}
