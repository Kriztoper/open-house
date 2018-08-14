<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('genres')->delete();
        
        \DB::table('genres')->insert(array (
            0 => 
            array (
                'genreID' => 1,
                'genreName' => 'Anime',
                'genreDesc' => 'Japanese Animation',
            ),
            1 => 
            array (
                'genreID' => 2,
                'genreName' => 'Featured Content',
                'genreDesc' => 'Content that is featured',
            ),
            2 => 
            array (
                'genreID' => 3,
                'genreName' => 'K-Drama',
                'genreDesc' => 'Korean Drama',
            ),
            3 => 
            array (
                'genreID' => 4,
                'genreName' => 'Action',
                'genreDesc' => 'Series of challenges',
            ),
            4 => 
            array (
                'genreID' => 5,
                'genreName' => 'Strategy',
                'genreDesc' => 'Think',
            ),
            5 => 
            array (
                'genreID' => 6,
                'genreName' => 'Board Games',
                'genreDesc' => 'Games in the board',
            ),
            6 => 
            array (
                'genreID' => 7,
                'genreName' => 'Anime',
                'genreDesc' => 'Anime',
            ),
            7 => 
            array (
                'genreID' => 8,
                'genreName' => 'Anime',
                'genreDesc' => 'Anime',
            ),
            8 => 
            array (
                'genreID' => 9,
                'genreName' => 'Anime',
                'genreDesc' => 'Anime',
            ),
        ));
        
        
    }
}
