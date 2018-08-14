<?php

use Illuminate\Database\Seeder;

class GamegenresTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('gamegenres')->delete();
        
        \DB::table('gamegenres')->insert(array (
            0 => 
            array (
                'gamegenresID' => 1,
                'gameID' => 1,
                'genreID' => 4,
            ),
            1 => 
            array (
                'gamegenresID' => 2,
                'gameID' => 2,
                'genreID' => 4,
            ),
            2 => 
            array (
                'gamegenresID' => 3,
                'gameID' => 3,
                'genreID' => 5,
            ),
            3 => 
            array (
                'gamegenresID' => 4,
                'gameID' => 4,
                'genreID' => 2,
            ),
            4 => 
            array (
                'gamegenresID' => 5,
                'gameID' => 4,
                'genreID' => 4,
            ),
            5 => 
            array (
                'gamegenresID' => 6,
                'gameID' => 5,
                'genreID' => 5,
            ),
            6 => 
            array (
                'gamegenresID' => 7,
                'gameID' => 7,
                'genreID' => 4,
            ),
            7 => 
            array (
                'gamegenresID' => 8,
                'gameID' => 10,
                'genreID' => 5,
            ),
            8 => 
            array (
                'gamegenresID' => 9,
                'gameID' => 13,
                'genreID' => 5,
            ),
            9 => 
            array (
                'gamegenresID' => 10,
                'gameID' => 14,
                'genreID' => 4,
            ),
            10 => 
            array (
                'gamegenresID' => 11,
                'gameID' => 16,
                'genreID' => 5,
            ),
            11 => 
            array (
                'gamegenresID' => 12,
                'gameID' => 17,
                'genreID' => 4,
            ),
            12 => 
            array (
                'gamegenresID' => 13,
                'gameID' => 19,
                'genreID' => 4,
            ),
            13 => 
            array (
                'gamegenresID' => 14,
                'gameID' => 20,
                'genreID' => 5,
            ),
            14 => 
            array (
                'gamegenresID' => 15,
                'gameID' => 22,
                'genreID' => 5,
            ),
            15 => 
            array (
                'gamegenresID' => 17,
                'gameID' => 24,
                'genreID' => 5,
            ),
            16 => 
            array (
                'gamegenresID' => 18,
                'gameID' => 25,
                'genreID' => 5,
            ),
            17 => 
            array (
                'gamegenresID' => 19,
                'gameID' => 26,
                'genreID' => 4,
            ),
            18 => 
            array (
                'gamegenresID' => 20,
                'gameID' => 27,
                'genreID' => 4,
            ),
            19 => 
            array (
                'gamegenresID' => 21,
                'gameID' => 28,
                'genreID' => 5,
            ),
            20 => 
            array (
                'gamegenresID' => 22,
                'gameID' => 29,
                'genreID' => 4,
            ),
            21 => 
            array (
                'gamegenresID' => 24,
                'gameID' => 29,
                'genreID' => 5,
            ),
            22 => 
            array (
                'gamegenresID' => 25,
                'gameID' => 31,
                'genreID' => 4,
            ),
            23 => 
            array (
                'gamegenresID' => 26,
                'gameID' => 32,
                'genreID' => 4,
            ),
            24 => 
            array (
                'gamegenresID' => 27,
                'gameID' => 15,
                'genreID' => 2,
            ),
            25 => 
            array (
                'gamegenresID' => 33,
                'gameID' => 9,
                'genreID' => 2,
            ),
            26 => 
            array (
                'gamegenresID' => 35,
                'gameID' => 11,
                'genreID' => 2,
            ),
            27 => 
            array (
                'gamegenresID' => 37,
                'gameID' => 12,
                'genreID' => 2,
            ),
            28 => 
            array (
                'gamegenresID' => 39,
                'gameID' => 21,
                'genreID' => 2,
            ),
            29 => 
            array (
                'gamegenresID' => 40,
                'gameID' => 21,
                'genreID' => 5,
            ),
            30 => 
            array (
                'gamegenresID' => 45,
                'gameID' => 33,
                'genreID' => 5,
            ),
            31 => 
            array (
                'gamegenresID' => 47,
                'gameID' => 35,
                'genreID' => 5,
            ),
            32 => 
            array (
                'gamegenresID' => 48,
                'gameID' => 36,
                'genreID' => 4,
            ),
            33 => 
            array (
                'gamegenresID' => 49,
                'gameID' => 37,
                'genreID' => 5,
            ),
            34 => 
            array (
                'gamegenresID' => 51,
                'gameID' => 39,
                'genreID' => 5,
            ),
            35 => 
            array (
                'gamegenresID' => 52,
                'gameID' => 40,
                'genreID' => 4,
            ),
            36 => 
            array (
                'gamegenresID' => 53,
                'gameID' => 41,
                'genreID' => 5,
            ),
            37 => 
            array (
                'gamegenresID' => 54,
                'gameID' => 42,
                'genreID' => 4,
            ),
            38 => 
            array (
                'gamegenresID' => 55,
                'gameID' => 43,
                'genreID' => 5,
            ),
            39 => 
            array (
                'gamegenresID' => 56,
                'gameID' => 44,
                'genreID' => 4,
            ),
            40 => 
            array (
                'gamegenresID' => 57,
                'gameID' => 45,
                'genreID' => 5,
            ),
            41 => 
            array (
                'gamegenresID' => 58,
                'gameID' => 48,
                'genreID' => 4,
            ),
            42 => 
            array (
                'gamegenresID' => 59,
                'gameID' => 49,
                'genreID' => 5,
            ),
            43 => 
            array (
                'gamegenresID' => 60,
                'gameID' => 50,
                'genreID' => 4,
            ),
            44 => 
            array (
                'gamegenresID' => 61,
                'gameID' => 51,
                'genreID' => 4,
            ),
            45 => 
            array (
                'gamegenresID' => 62,
                'gameID' => 53,
                'genreID' => 5,
            ),
        ));
        
        
    }
}
