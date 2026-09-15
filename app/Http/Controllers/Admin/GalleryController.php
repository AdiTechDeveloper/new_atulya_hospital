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
            'media_type'    => 'required|in:image,video',
            'file'          => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'file_path'     => 'required_if:media_type,video|nullable|string',
            'sort_order'    => 'nullable|integer',
        ]);

        $filePath = $gallery->file_path; // Default to existing file path

        if ($request->media_type === 'image') {
            if ($request->hasFile('file')) {
                // Delete old physical image if it exists
                if ($gallery->media_type === 'image' && $gallery->file_path) {
                    Storage::disk('public')->delete($gallery->file_path);
                }
                // Store the new uploaded image
                $filePath = $request->file('file')->store('gallery', 'public');
            }
        } elseif ($request->media_type === 'video') {
            // If switching from image to video, clean up old image file
            if ($gallery->media_type === 'image' && $gallery->file_path) {
                Storage::disk('public')->delete($gallery->file_path);
            }
            $filePath = $request->input('file_path');
        }

        $gallery->update([
            'category_name' => $request->category_name,
            'title'         => $request->title,
            'media_type'    => $request->media_type,
            'file_path'     => $filePath,
            'sort_order'    => $request->input('sort_order', 0),
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery item updated successfully!');
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
        'media_type'    => 'required|in:image,video',
        'file'          => 'required_if:media_type,image|image|mimes:jpeg,png,jpg,webp',
        'file_path'     => 'required_if:media_type,video|nullable|string',
        'sort_order'    => 'nullable|integer',
    ]);

        $filePath = '';

        if ($request->media_type === 'image' && $request->hasFile('file')) {
            // Store image in storage/app/public/gallery
            $filePath = $request->file('file')->store('gallery', 'public');
             
        } elseif ($request->media_type === 'video') {
            // Store video URL (e.g., YouTube embed link or direct file path)
            $filePath = $request->file_path;
        }

       

        Gallery::create([
            'category_name' => $request->category_name,
            'title'         => $request->title,
            'media_type'    => $request->media_type,
            'file_path'     => $filePath,
            'sort_order'    => $request->input('sort_order', 0),
            'status'        => 1,
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery item added successfully!');
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
