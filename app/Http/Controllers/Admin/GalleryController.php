<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Package;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::with('package')->get();
        $packages = Package::all();

        return view('admin.gallery.index', compact('galleries', 'packages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'package_id' => 'required|exists:packages,id',
            'image_path' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $imagePath = $request->file('image_path')->store('galleries', 'public');

        Gallery::create([
            'package_id' => $request->package_id,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery added successfully.');
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'package_id' => 'required|exists:packages,id',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Jika ada gambar baru, hapus gambar lama dan simpan yang baru
        if ($request->hasFile('image_path')) {
            if ($gallery->image_path && file_exists(public_path('storage/' . $gallery->image_path))) {
                unlink(public_path('storage/' . $gallery->image_path));
            }
            $imagePath = $request->file('image_path')->store('galleries', 'public');
            $gallery->image_path = $imagePath;
        }

        // Update data lainnya
        $gallery->package_id = $request->package_id;
        $gallery->save();

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery updated successfully.');
    }

    public function destroy(Gallery $gallery)
    {
        if (!$gallery) {
            return redirect()->route('admin.gallery.index')->with('error', 'Gallery not found.');
        }

        if ($gallery->image_path && file_exists(public_path('storage/' . $gallery->image_path))) {
            unlink(public_path('storage/' . $gallery->image_path));
        }

        $gallery->delete();

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery deleted successfully.');
    }
}
