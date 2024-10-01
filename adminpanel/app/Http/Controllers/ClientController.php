<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Brand;
use App\Models\client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //

    public function show(){

        $LoggedAdminInfo = Admin::find(session('LoggedAdminInfo'));
        $clientsinfo = client::all();
        $brandsinfo = Brand::all();
        return view('admin.client',compact('LoggedAdminInfo', 'clientsinfo', 'brandsinfo'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255|unique:clients,name',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            // Store the image and get its path
            $imagePath = $request->file('image')->store('clients', 'public');
        }

        // Create a new client
        $client = new Client();
        $client->name = $request->input('name');
        $client->image = $imagePath; // Store the image path
        $client->save(); // Save the client to the database

        // Redirect with a success message
        return redirect()->route('clients.show')->with('success', 'Clients added successfully!');
    }


    public function destroy($id)
    {
        // Find the client by its ID
        $client = Client::findOrFail($id);

        // Optionally, delete the associated image from storage
        if ($client->image) {
            $imagePath = public_path('storage/' . $client->image);
            if (file_exists($imagePath)) {
                unlink($imagePath); // Delete the image from storage
            }
        }

        // Delete the client from the database
        $client->delete();

        // Redirect with a success message
        return redirect()->route('clients.show')->with('success', 'Client deleted successfully!');
    }


}
