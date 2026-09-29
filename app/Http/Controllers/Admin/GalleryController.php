<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
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

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);

        $categories = Gallery::select('category_name')
            ->distinct()
            ->pluck('category_name');

        return view('admin.pages.gallery.edit', compact('gallery', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        $request->validate([
            'category_name' => 'required|string|max:150',
            'title' => 'nullable|string|max:255',
            'file' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'sort_order' => 'nullable|integer',
        ]);

        $filePath = $gallery->file_path;

        if ($request->hasFile('file')) {

            if (
                $gallery->file_path &&
                Storage::disk('public')->exists($gallery->file_path)
            ) {
                Storage::disk('public')->delete($gallery->file_path);
            }

            $filePath = $request->file('file')->store('gallery', 'public');
        }

        $gallery->update([
            'category_name' => $request->category_name,
            'title' => $request->title,
            'file_path' => $filePath,
            'sort_order' => $request->input('sort_order', 0),
        ]);

        return redirect()
            ->route('admin.gallery.index')
            ->with('success', 'Gallery item updated successfully!');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        if ($gallery->media_type === 'image' && $gallery->file_path) {
            Storage::disk('public')->delete($gallery->file_path);
        }

        $gallery->delete();

        return back()->with('success', 'Gallery item deleted successfully!');
    }

    public function create()
    {
        $categories = Gallery::select('category_name')
            ->distinct()
            ->pluck('category_name');

        return view('admin.pages.gallery.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:150',
            'title' => 'nullable|string|max:255',
            'file' => 'required|image|mimes:jpeg,png,jpg,webp|max:5120',
            'sort_order' => 'nullable|integer',
        ]);

        $filePath = $request->file('file')->store('gallery', 'public');

        Gallery::create([
            'category_name' => $request->category_name,
            'title' => $request->title,
            'file_path' => $filePath,
            'sort_order' => $request->input('sort_order', 0),
            'status' => 1,
        ]);

        return redirect()
            ->route('admin.gallery.index')
            ->with('success', 'Gallery item added successfully!');
    }

    public function toggleStatus($id)
    {
        $gallery = Gallery::findOrFail($id);

        $gallery->status = $gallery->status == 1 ? 0 : 1;

        $gallery->save();

        return back()->with('success', 'Status updated successfully!');
    }
}