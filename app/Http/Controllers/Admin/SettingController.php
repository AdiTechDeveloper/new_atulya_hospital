<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();

        if (!$setting) {
            abort(404, 'Settings record not found.');
        }

        return view('admin.pages.settings.index', compact('setting'));
    }


    /*
    |--------------------------------------------------------------------------
    | Change Admin Password
    |--------------------------------------------------------------------------
    */

public function changePassword(Request $request)
{
    $validated = $request->validate([
        'current_password' => ['required', 'string'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);

    $user = Auth::user();

    if (!$user) {
        return back()->withErrors([
            'current_password' => 'User session not found. Please login again.',
        ]);
    }

    // Check current password
    if (!Hash::check($validated['current_password'], $user->password)) {
        return back()
            ->withErrors([
                'current_password' => 'Current password is incorrect.',
            ])
            ->withInput();
    }

    // Update password
    $user->password = $validated['password'];

    // Laravel User model has:
    // 'password' => 'hashed'
    // so Laravel will hash it automatically.
    $user->save();

    return redirect()
        ->route('admin.settings.index')
        ->with(
            'success',
            'Password updated successfully. Please login again with your new password.'
        );
}
 /*
    |--------------------------------------------------------------------------
    | Update Hospital Settings
    |--------------------------------------------------------------------------
    */

    public function update(Request $request)
    {
        $setting = Setting::first();

        if (!$setting) {
            abort(404, 'Settings record not found.');
        }

        $validated = $request->validate([
            'hospital_name' => [
                'required',
                'string',
                'max:255',
            ],

            'phone' => [
                'required',
                'regex:/^[6-9][0-9]{9}$/',
            ],

            'address' => [
                'required',
                'string',
            ],

            'google_maps_url' => [
                'required',
                'url',
                'max:2048',
            ],

            'google_maps_embed_url' => [
                'required',
                'url',
                'max:2048',
            ],

            'facebook_url' => [
                'required',
                'url',
                'max:2048',
            ],

            'instagram_url' => [
                'required',
                'url',
                'max:2048',
            ],

            'youtube_url' => [
                'required',
                'url',
                'max:2048',
            ],

            'whatsapp_url' => [
                'required',
                'url',
                'max:2048',
            ],

            'is_24_hours' => [
                'nullable',
                'boolean',
            ],

            'opening_time' => [
                'required_unless:is_24_hours,1',
                'date_format:H:i',
            ],

            'closing_time' => [
                'required_unless:is_24_hours,1',
                'date_format:H:i',
            ],

            'logo' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:2048',
            ],
        ], [

            'hospital_name.required' =>
            'Please enter the hospital name.',

            'phone.required' =>
            'Please enter the phone number.',

            'phone.regex' =>
            'Please enter a valid 10-digit mobile number.',

            'address.required' =>
            'Please enter the hospital address.',

            'google_maps_url.required' =>
            'Please enter the Google Maps link.',

            'google_maps_url.url' =>
            'Please enter a valid Google Maps URL.',

            'google_maps_embed_url.required' =>
            'Please enter the Google Maps embed URL.',

            'google_maps_embed_url.url' =>
            'Please enter a valid Google Maps embed URL.',

            'facebook_url.required' =>
            'Please enter the Facebook URL.',

            'facebook_url.url' =>
            'Please enter a valid Facebook URL.',

            'instagram_url.required' =>
            'Please enter the Instagram URL.',

            'instagram_url.url' =>
            'Please enter a valid Instagram URL.',

            'youtube_url.required' =>
            'Please enter the YouTube URL.',

            'youtube_url.url' =>
            'Please enter a valid YouTube URL.',

            'whatsapp_url.required' =>
            'Please enter the WhatsApp URL.',

            'whatsapp_url.url' =>
            'Please enter a valid WhatsApp URL.',

            'opening_time.required_unless' =>
            'Please enter the opening time.',

            'closing_time.required_unless' =>
            'Please enter the closing time.',

            'opening_time.date_format' =>
            'Please enter a valid opening time.',

            'closing_time.date_format' =>
            'Please enter a valid closing time.',

            'logo.image' =>
            'The logo must be a valid image.',

            'logo.mimes' =>
            'Logo must be JPG, JPEG, PNG or WEBP.',

            'logo.max' =>
            'Logo size must not exceed 2MB.',
        ]);


        /*
        |--------------------------------------------------------------------------
        | Logo
        |--------------------------------------------------------------------------
        */

        $logo = $setting->logo;

        if ($request->hasFile('logo')) {

            if (
                $setting->logo &&
                str_starts_with($setting->logo, 'settings/')
            ) {
                Storage::disk('public')
                    ->delete($setting->logo);
            }

            $logo = $request
                ->file('logo')
                ->store('settings', 'public');
        }


        /*
        |--------------------------------------------------------------------------
        | Update Settings
        |--------------------------------------------------------------------------
        */

        $setting->update([

            'hospital_name' =>
            $validated['hospital_name'],

            'phone' =>
            $validated['phone'],

            'address' =>
            $validated['address'],

            'google_maps_url' =>
            $validated['google_maps_url'],

            'google_maps_embed_url' =>
            $validated['google_maps_embed_url'],

            'facebook_url' =>
            $validated['facebook_url'],

            'instagram_url' =>
            $validated['instagram_url'],

            'youtube_url' =>
            $validated['youtube_url'],

            'whatsapp_url' =>
            $validated['whatsapp_url'],

            'opening_time' =>
            $request->boolean('is_24_hours')
                ? null
                : $validated['opening_time'],

            'closing_time' =>
            $request->boolean('is_24_hours')
                ? null
                : $validated['closing_time'],

            'is_24_hours' =>
            $request->boolean('is_24_hours'),

            'logo' =>
            $logo,
        ]);


        return redirect()
            ->route('admin.settings.index')
            ->with(
                'success',
                'Settings updated successfully.'
            );
    }
}
