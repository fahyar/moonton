<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movie = [
            [
                'name' => 'The Shawsank Redemption',
                'slug' => 'the-shawsank-redemption',
                'category' => 'Drama',
                'video_url' => 'https://youtu.be/PLl99DlL6b4?si=-yuNamQORkBxmfTn',
                'thumbnail' => 'https://upload.wikimedia.org/wikipedia/id/8/81/ShawshankRedemptionMoviePoster.jpg',
                'rating' => 9.3,
                'is_featured' => 1,
            ],
            [
                'name' => 'The Godfather',
                'slug' => 'the-godfather',
                'category' => 'Drama',
                'video_url' => 'https://youtu.be/UaVTIH8mujA?si=DSOosliskCTt8WIj',
                'thumbnail' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqDMhkR0minR9Ze99dS1q0iuFNIhnhYNNiTw&s',
                'rating' => 9.2,
                'is_featured' => 0,
            ],
            [
                'name' => 'The Godfather 2' ,
                'slug' => 'the-godfather-2',
                'category' => 'Drama',
                'video_url' => 'https://youtu.be/9O1Iy9od7-A?si=dJjgQ5iAiymF5FT0',
                'thumbnail' => 'https://ntvb.tmsimg.com/assets/p6319_v_h8_bi.jpg?w=1280&h=720',
                'rating' => 9.0,
                'is_featured' => 0,
            ],
        ];
        Movie::insert($movie);
    }
}
