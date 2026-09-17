<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::orderBy('sort_order')
            ->orderBy('id')
            ->get();

        return view('admin.pages.facilities.index', compact('facilities'));
    }

    public function create()
    {
        return view('admin.pages.facilities.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => [
                'required',
                'string',
                'max:255',
            ],

            'slug' => [
                'nullable',
                'string',
                'max:255',
            ],

            'short_description' => [
                'required',
                'string',
            ],

            'main_image' => [
                'required',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],

            'secondary_image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],

            'section_heading' => [
                'required',
                'string',
                'max:255',
            ],

            'section_description' => [
                'required',
                'string',
            ],

            'features' => [
                'required',
                'array',
                'min:1',
            ],

            'features.*' => [
                'required',
                'string',
                'max:255',
            ],

            'bottom_heading' => [
                'required',
                'string',
                'max:255',
            ],

            'bottom_description' => [
                'required',
                'string',
            ],

            'sort_order' => [
                'nullable',
                'integer',
                'min:1',
            ],

            'is_active' => [
                'nullable',
                'boolean',
            ],
        ]);

        /*
        |--------------------------------------------------------------------------
        | Slug
        |--------------------------------------------------------------------------
        */

        $slug = $validated['slug'] ?? '';

        if (!$slug) {
            $slug = Str::slug($validated['title']);
        } else {
            $slug = Str::slug($slug);
        }

        $originalSlug = $slug;
        $counter = 1;

        while (Facility::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter++;
        }

        /*
        |--------------------------------------------------------------------------
        | Sort Order
        |--------------------------------------------------------------------------
        */

        $sortOrder = (int) ($validated['sort_order'] ?? 0);

        $maxSort = Facility::max('sort_order') ?? 0;

        if ($sortOrder < 1) {
            $sortOrder = $maxSort + 1;
        }

        $sortOrder = min($sortOrder, $maxSort + 1);

        Facility::where('sort_order', '>=', $sortOrder)
            ->increment('sort_order');

        /*
        |--------------------------------------------------------------------------
        | Images
        |--------------------------------------------------------------------------
        */

        $mainImage = null;
        $secondaryImage = null;

        if ($request->hasFile('main_image')) {
            $mainImage = $request
                ->file('main_image')
                ->store('facilities', 'public');
        }

        if ($request->hasFile('secondary_image')) {
            $secondaryImage = $request
                ->file('secondary_image')
                ->store('facilities', 'public');
        }

        /*
        |--------------------------------------------------------------------------
        | Create
        |--------------------------------------------------------------------------
        */

        Facility::create([
            'title' => $validated['title'],
            'slug' => $slug,
            'short_description' => $validated['short_description'],
            'main_image' => $mainImage,
            'secondary_image' => $secondaryImage,
            'section_heading' => $validated['section_heading'],
            'section_description' => $validated['section_description'],
            'features' => array_values(
                array_filter($validated['features'])
            ),
            'bottom_heading' => $validated['bottom_heading'],
            'bottom_description' => $validated['bottom_description'],
            'sort_order' => $sortOrder,
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()
            ->route('admin.facilities.index')
            ->with('success', 'Facility created successfully.');
    }

    public function edit(Facility $facility)
    {
        return view(
            'admin.pages.facilities.edit',
            compact('facility')
        );
    }

    public function update(Request $request, Facility $facility)
    {
        $validated = $request->validate([
            'title' => [
                'required',
                'string',
                'max:255',
            ],

            'slug' => [
                'nullable',
                'string',
                'max:255',
            ],

            'short_description' => [
                'required',
                'string',
            ],

            'main_image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],

            'secondary_image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],

            'section_heading' => [
                'required',
                'string',
                'max:255',
            ],

            'section_description' => [
                'required',
                'string',
            ],

            'features' => [
                'required',
                'array',
                'min:1',
            ],

            'features.*' => [
                'required',
                'string',
                'max:255',
            ],

            'bottom_heading' => [
                'required',
                'string',
                'max:255',
            ],

            'bottom_description' => [
                'required',
                'string',
            ],

            'sort_order' => [
                'nullable',
                'integer',
                'min:1',
            ],

            'is_active' => [
                'nullable',
                'boolean',
            ],
        ]);

        /*
        |--------------------------------------------------------------------------
        | Slug
        |--------------------------------------------------------------------------
        */

        $slug = $validated['slug'] ?? '';

        if (!$slug) {
            $slug = Str::slug($validated['title']);
        } else {
            $slug = Str::slug($slug);
        }

        $originalSlug = $slug;
        $counter = 1;

        while (
            Facility::where('slug', $slug)
                ->where('id', '!=', $facility->id)
                ->exists()
        ) {
            $slug = $originalSlug . '-' . $counter++;
        }

        /*
        |--------------------------------------------------------------------------
        | Sort Order
        |--------------------------------------------------------------------------
        */

        $oldSortOrder = (int) $facility->sort_order;

        $newSortOrder = (int) (
            $validated['sort_order'] ?? $oldSortOrder
        );

        $maxSort = Facility::where(
            'id',
            '!=',
            $facility->id
        )->max('sort_order') ?? 0;

        if ($newSortOrder < 1) {
            $newSortOrder = $oldSortOrder;
        }

        $newSortOrder = min(
            $newSortOrder,
            $maxSort + 1
        );

        if ($newSortOrder < $oldSortOrder) {

            Facility::where('id', '!=', $facility->id)
                ->whereBetween(
                    'sort_order',
                    [
                        $newSortOrder,
                        $oldSortOrder - 1
                    ]
                )
                ->increment('sort_order');

        } elseif ($newSortOrder > $oldSortOrder) {

            Facility::where('id', '!=', $facility->id)
                ->whereBetween(
                    'sort_order',
                    [
                        $oldSortOrder + 1,
                        $newSortOrder
                    ]
                )
                ->decrement('sort_order');
        }

        /*
        |--------------------------------------------------------------------------
        | Images
        |--------------------------------------------------------------------------
        */

        $mainImage = $facility->main_image;
        $secondaryImage = $facility->secondary_image;

        if ($request->hasFile('main_image')) {

            if ($facility->main_image) {
                Storage::disk('public')
                    ->delete($facility->main_image);
            }

            $mainImage = $request
                ->file('main_image')
                ->store('facilities', 'public');
        }

        if ($request->hasFile('secondary_image')) {

            if ($facility->secondary_image) {
                Storage::disk('public')
                    ->delete($facility->secondary_image);
            }

            $secondaryImage = $request
                ->file('secondary_image')
                ->store('facilities', 'public');
        }

        /*
        |--------------------------------------------------------------------------
        | Update
        |--------------------------------------------------------------------------
        */

        $facility->update([
            'title' => $validated['title'],
            'slug' => $slug,
            'short_description' => $validated['short_description'],
            'main_image' => $mainImage,
            'secondary_image' => $secondaryImage,
            'section_heading' => $validated['section_heading'],
            'section_description' => $validated['section_description'],
            'features' => array_values(
                array_filter($validated['features'])
            ),
            'bottom_heading' => $validated['bottom_heading'],
            'bottom_description' => $validated['bottom_description'],
            'sort_order' => $newSortOrder,
            'is_active' => $request->boolean('is_active'),
        ]);

        return redirect()
            ->route('admin.facilities.index')
            ->with('success', 'Facility updated successfully.');
    }

    public function destroy(Facility $facility)
    {
        $deletedSortOrder = $facility->sort_order;

        if ($facility->main_image) {
            Storage::disk('public')
                ->delete($facility->main_image);
        }

        if ($facility->secondary_image) {
            Storage::disk('public')
                ->delete($facility->secondary_image);
        }

        $facility->delete();

        Facility::where(
            'sort_order',
            '>',
            $deletedSortOrder
        )->decrement('sort_order');

        return redirect()
            ->route('admin.facilities.index')
            ->with('success', 'Facility deleted successfully.');
    }

    public function toggleStatus(Facility $facility)
    {
        $facility->update([
            'is_active' => !$facility->is_active,
        ]);

        return redirect()
            ->route('admin.facilities.index')
            ->with('success', 'Facility status updated successfully.');
    }
}