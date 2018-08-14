<?php

use Illuminate\Database\Seeder;

class SeriesgenresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('seriesgenres')->delete();
        
        \DB::table('seriesgenres')->insert(array (
            0 => 
            array (
                'seriesGenresID' => 1,
                'videoID' => 2,
                'genreID' => 1,
            ),
            1 => 
            array (
                'seriesGenresID' => 2,
                'videoID' => 2,
                'genreID' => 2,
            ),
            2 => 
            array (
                'seriesGenresID' => 4,
                'videoID' => 3,
                'genreID' => 1,
            ),
            3 => 
            array (
                'seriesGenresID' => 5,
                'videoID' => 3,
                'genreID' => 2,
            ),
            4 => 
            array (
                'seriesGenresID' => 6,
                'videoID' => 4,
                'genreID' => 1,
            ),
            5 => 
            array (
                'seriesGenresID' => 7,
                'videoID' => 4,
                'genreID' => 2,
            ),
            6 => 
            array (
                'seriesGenresID' => 8,
                'videoID' => 5,
                'genreID' => 2,
            ),
            7 => 
            array (
                'seriesGenresID' => 9,
                'videoID' => 5,
                'genreID' => 3,
            ),
            8 => 
            array (
                'seriesGenresID' => 10,
                'videoID' => 6,
                'genreID' => 1,
            ),
            9 => 
            array (
                'seriesGenresID' => 11,
                'videoID' => 6,
                'genreID' => 2,
            ),
            10 => 
            array (
                'seriesGenresID' => 12,
                'videoID' => 8,
                'genreID' => 2,
            ),
            11 => 
            array (
                'seriesGenresID' => 13,
                'videoID' => 8,
                'genreID' => 3,
            ),
            12 => 
            array (
                'seriesGenresID' => 14,
                'videoID' => 7,
                'genreID' => 3,
            ),
            13 => 
            array (
                'seriesGenresID' => 17,
                'videoID' => 11,
                'genreID' => 1,
            ),
            14 => 
            array (
                'seriesGenresID' => 19,
                'videoID' => 14,
                'genreID' => 1,
            ),
            15 => 
            array (
                'seriesGenresID' => 20,
                'videoID' => 14,
                'genreID' => 2,
            ),
            16 => 
            array (
                'seriesGenresID' => 21,
                'videoID' => 15,
                'genreID' => 1,
            ),
            17 => 
            array (
                'seriesGenresID' => 22,
                'videoID' => 13,
                'genreID' => 1,
            ),
            18 => 
            array (
                'seriesGenresID' => 24,
                'videoID' => 17,
                'genreID' => 3,
            ),
            19 => 
            array (
                'seriesGenresID' => 25,
                'videoID' => 18,
                'genreID' => 3,
            ),
        ));
        
        
    }
}
