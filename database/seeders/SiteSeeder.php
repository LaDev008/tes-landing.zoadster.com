<?php

namespace Database\Seeders;

use App\Models\Site;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sites = [
            [
                'name' => "Nana4D",
                'link' => 'https://nana4d.online',
                'image' => '/storage/page/logo.png',
            ],
        ];

        foreach ($sites as $site) {
            Site::create([
                'name' => $site['name'],
                'link' => $site['link'],
                'image' => $site['image'],
            ]);
        }
    }
}
