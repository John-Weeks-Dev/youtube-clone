<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('videos')->insert([
            'title' => 'Car from the future',
            'thumbnail' => '/videos/Thumbnails/Auto.png',
            'video' => '/videos/Auto.mp4',
            'user' => 'John Weeks Dev',
            'views' => '34k views - 12 days ago',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('videos')->insert([
            'title' => 'Car in Race - FAST!!!',
            'thumbnail' => '/videos/Thumbnails/Car.png',
            'video' => '/videos/Car.mp4',
            'user' => 'John Weeks Dev',
            'views' => '89k views - 2 months ago',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('videos')->insert([
            'title' => 'Cool red car',
            'thumbnail' => '/videos/Thumbnails/Car1.png',
            'video' => '/videos/Car1.mp4',
            'user' => 'John Weeks Dev',
            'views' => '4k views - 6 days ago',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
