<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::firstOrFail();

        return view('admin.pages.settings.index', compact('setting'));
    }

    public function update(Request $request)
    {
        $setting = Setting::firstOrFail();

        $validated = $request->validate([
            'hospital_name' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'phone' => 'nullable|string|max:50',
            'address' => 'nullable|string',

            'google_maps_url' => 'nullable|url|max:500',
            'google_maps_embed_url' => 'nullable|url|max:1000',

            'facebook_url' => 'nullable|url|max:500',
            'instagram_url' => 'nullable|url|max:500',
            'youtube_url' => 'nullable|url|max:500',
            'whatsapp_url' => 'nullable|url|max:500',

            'is_24_hours' => 'nullable|boolean',
            'opening_time' => 'nullable|date_format:H:i',
            'closing_time' => 'nullable|date_format:H:i',
        ]);

        $logo = $setting->logo;

        if ($request->hasFile('logo')) {
            if (
                $setting->logo &&
                str_starts_with($setting->logo, 'settings/')
            ) {
                Storage::disk('public')->delete($setting->logo);
            }

            $logo = $request
                ->file('logo')
                ->store('settings', 'public');
        }

        $is24Hours = $request->boolean('is_24_hours');

        $setting->update([
            'hospital_name' => $validated['hospital_name'],
            'logo' => $logo,
            'phone' => $validated['phone'] ?? null,
            'address' => $validated['address'] ?? null,

            'google_maps_url' => $validated['google_maps_url'] ?? null,
            'google_maps_embed_url' => $validated['google_maps_embed_url'] ?? null,

            'facebook_url' => $validated['facebook_url'] ?? null,
            'instagram_url' => $validated['instagram_url'] ?? null,
            'youtube_url' => $validated['youtube_url'] ?? null,
            'whatsapp_url' => $validated['whatsapp_url'] ?? null,

            'is_24_hours' => $is24Hours,

            'opening_time' => $is24Hours
                ? null
                : ($validated['opening_time'] ?? null),

            'closing_time' => $is24Hours
                ? null
                : ($validated['closing_time'] ?? null),
        ]);

        return redirect()
            ->route('admin.settings.index')
            ->with('success', 'Settings updated successfully.');
    }
}