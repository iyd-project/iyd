<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $aboutUs = AboutUs::all();
        return view('admin.aboutus.index', compact('aboutUs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:500',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image_path')) {
            $imagePath = $request->file('image_path')->store('aboutus', 'public');
        }

        AboutUs::create([
            'description' => $request->description,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('admin.aboutus.index')->with('success', 'About Us entry added successfully.');
    }

    public function update(Request $request, AboutUs $aboutUs)
    {
        $request->validate([
            'description' => 'required|string|max:500',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image_path')) {
            if ($aboutUs->image_path && file_exists(public_path('storage/' . $aboutUs->image_path))) {
                unlink(public_path('storage/' . $aboutUs->image_path));
            }
            $aboutUs->image_path = $request->file('image_path')->store('aboutus', 'public');
        }

        $aboutUs->description = $request->description;
        $aboutUs->save();

        return redirect()->route('admin.aboutus.index')->with('success', 'About Us entry updated successfully.');
    }

    public function destroy(AboutUs $aboutUs)
    {
        if ($aboutUs->image_path && file_exists(public_path('storage/' . $aboutUs->image_path))) {
            unlink(public_path('storage/' . $aboutUs->image_path));
        }

        $aboutUs->delete();

        return redirect()->route('admin.aboutus.index')->with('success', 'About Us entry deleted successfully.');
    }
}
