<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        Setting::updateOrCreate(
            ['id' => 1],
            [
                'hospital_name' => 'Atulya Super Speciality Hospital & ICU',

                'logo' => 'assets/img/logo/Atulya-logo.png',

                'phone' => '+91 97275 79000',

                'address' => '206–214, 2nd Floor, Elite Magnum, Bhuyangdev Cross Road, Ahmedabad – 380061, Gujarat',

                'google_maps_url' => 'https://maps.app.goo.gl/Q57Xx13m5LiAcwwA6',

                'google_maps_embed_url' => 'https://www.google.com/maps?q=Atulya+Super+Speciality+Hospital+%26+ICU,+2nd+Floor,+Elite+Magnum,+Bhuyangdev+Cross+Road,+Ahmedabad,+Gujarat+380061&output=embed',

                'facebook_url' => 'https://www.facebook.com/AtulyaSuperSpecialityHospital/',

                'instagram_url' => 'https://www.instagram.com/atulya_superspeciality/',

                'youtube_url' => 'https://www.youtube.com/@atulyasuperspecialityhospital',

                'whatsapp_url' => 'https://wa.me/919727579000',

                'is_24_hours' => true,

                'opening_time' => null,

                'closing_time' => null,
            ]
        );
    }
}