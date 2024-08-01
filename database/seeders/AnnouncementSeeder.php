<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Announcement;

class AnnouncementSeeder extends Seeder
{
    public function run()
    {
        Announcement::create([
            'title' => 'Annonce 1',
            'description' => 'Description de l\'annonce 1',
            'image' => 'images/annonce.jpg'
        ]);
        Announcement::create([
            'title' => 'Annonce 2',
            'description' => 'Description de l\'annonce 2',
            'image' => 'images/annonce.jpg'
        ]);
        Announcement::create([
            'title' => 'Annonce 3',
            'description' => 'Description de l\'annonce 3',
            'image' => 'images/annonce.jpg'
        ]);
        Announcement::create([
            'title' => 'Annonce 4',
            'description' => 'Description de l\'annonce 4',
            'image' => 'images/annonce.jpg'
        ]);
        Announcement::create([
            'title' => 'Annonce 5',
            'description' => 'Description de l\'annonce 6',
            'image' => 'images/annonce.jpg'
        ]);
        Announcement::create([
            'title' => 'Annonce 6',
            'description' => 'Description de l\'annonce 7',
            'image' => 'images/annonce.jpg'
        ]);

    }
}
