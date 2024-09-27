<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255|unique:category,name', // Category name must be unique
        ]);

        // Create a new category
        $category = new Category();
        $category->name = $request->input('name');
        $category->save(); // Save the category to the database

        // Redirect with a success message
        return redirect()->route('admin.category')->with('success', 'Category added successfully!');
    }

    public function destroy($id)
    {
        // Find the category by its ID
        $category = Category::findOrFail($id);

        // Delete the category
        $category->delete();

        // Redirect with a success message
        return redirect()->back()->with('success', 'Category deleted successfully!');
    }


}
