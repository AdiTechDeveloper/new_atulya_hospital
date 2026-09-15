<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Models\Gallery;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
 public function index()
    {
        // Fetch a flat list for the admin data table (No groupBy here!)
        $galleries = Gallery::orderBy('sort_order', 'asc')->get();

        return view('admin.pages.gallery.index', compact('galleries'));
    }

   

    public function show(Gallery $gallery): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => $gallery
        ]);
    }

    // Show the form to edit an existing gallery item
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        $categories = Gallery::select('category_name')->distinct()->pluck('category_name');
        
        return view('admin.pages.gallery.edit', compact('gallery', 'categories'));
    }

    // Update the gallery item in the database
  public function update(Request $request, $id)
{
    $gallery = Gallery::findOrFail($id);

    $request->validate([
        'category_name' => 'required|string|max:150',
        'title'         => 'nullable|string|max:255',
        'file'          => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
        'sort_order'    => 'nullable|integer',
    ]);

    // Keep existing image by default
    $filePath = $gallery->file_path;

    /*
    |--------------------------------------------------------------------------
    | Replace Image
    |--------------------------------------------------------------------------
    */

    if ($request->hasFile('file')) {

        // Delete old image
        if (
            $gallery->file_path &&
            Storage::disk('public')->exists($gallery->file_path)
        ) {
            Storage::disk('public')->delete($gallery->file_path);
        }

        // Store new image
        $filePath = $request->file('file')->store('gallery', 'public');
    }

    /*
    |--------------------------------------------------------------------------
    | Update Gallery
    |--------------------------------------------------------------------------
    */

    $gallery->update([
        'category_name' => $request->category_name,
        'title'         => $request->title,
        'file_path'     => $filePath,
        'sort_order'    => $request->input('sort_order', 0),
    ]);

    return redirect()
        ->route('admin.gallery.index')
        ->with('success', 'Gallery item updated successfully!');
}

    // Delete gallery item
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        
        // Delete physical file if it's an uploaded image
        if ($gallery->media_type === 'image' && $gallery->file_path) {
            Storage::disk('public')->delete($gallery->file_path);
        }

        $gallery->delete();

        return back()->with('success', 'Gallery item deleted successfully!');
    }

    // Show the form to create a new gallery item
    public function create()
    {
        // Fetch existing categories to show suggestions or dropdown options if needed
        $categories = Gallery::select('category_name')->distinct()->pluck('category_name');
        return view('admin.pages.gallery.create', compact('categories'));
    }

    // Store the newly created gallery item in database
    public function store(Request $request)
{
    $request->validate([
        'category_name' => 'required|string|max:150',
        'title'         => 'nullable|string|max:255',
        'file'          => 'required|image|mimes:jpeg,png,jpg,webp|max:5120',
        'sort_order'    => 'nullable|integer',
    ]);

    // Store image in storage/app/public/gallery
    $filePath = $request->file('file')->store('gallery', 'public');

    Gallery::create([
        'category_name' => $request->category_name,
        'title'         => $request->title,
        'file_path'     => $filePath,
        'sort_order'    => $request->input('sort_order', 0),
        'status'        => 1,
    ]);

    return redirect()
        ->route('admin.gallery.index')
        ->with('success', 'Gallery item added successfully!');
}

    // Toggle status active/inactive
    public function toggleStatus($id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->status = $gallery->status == 1 ? 0 : 1;
        $gallery->save();

        return back()->with('success', 'Status updated successfully!');
    }
}
