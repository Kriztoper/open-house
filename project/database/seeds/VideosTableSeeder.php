<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('videos')->delete();
        
        \DB::table('videos')->insert(array (
            0 => 
            array (
                'videoID' => 1,
                'videoName' => 'Kokoro Connect Episode 1',
                'videoDesc' => 'Episode 1 of the series:Kokoro Connect',
                'videoURL' => 'vids/Kokoro Connect/1.flv',
                'genre' => 0,
            ),
            1 => 
            array (
                'videoID' => 2,
                'videoName' => 'Kokoro Connect Episode 2',
                'videoDesc' => 'Episode 2 of the series:Kokoro Connect',
                'videoURL' => 'vids/Kokoro Connect/2.flv',
                'genre' => 0,
            ),
            2 => 
            array (
                'videoID' => 3,
                'videoName' => 'Kokoro Connect Episode 3',
                'videoDesc' => 'Episode 3 of the series:Kokoro Connect',
                'videoURL' => 'vids/Kokoro Connect/3.flv',
                'genre' => 0,
            ),
            3 => 
            array (
                'videoID' => 4,
                'videoName' => 'Kokoro Connect Episode 4',
                'videoDesc' => 'Episode 4 of the series:Kokoro Connect',
                'videoURL' => 'vids/Kokoro Connect/4.flv',
                'genre' => 0,
            ),
            4 => 
            array (
                'videoID' => 5,
                'videoName' => 'Kokoro Connect Episode 5',
                'videoDesc' => 'Episode 5 of the series:Kokoro Connect',
                'videoURL' => 'vids/Kokoro Connect/5.flv',
                'genre' => 0,
            ),
            5 => 
            array (
                'videoID' => 6,
                'videoName' => 'Kokoro Connect Episode 6',
                'videoDesc' => 'Episode 6 of the series:Kokoro Connect',
                'videoURL' => 'vids/Kokoro Connect/6.flv',
                'genre' => 0,
            ),
            6 => 
            array (
                'videoID' => 7,
                'videoName' => 'Kokoro Connect Episode 7',
                'videoDesc' => 'Episode 7 of the series:Kokoro Connect',
                'videoURL' => 'vids/Kokoro Connect/7.flv',
                'genre' => 0,
            ),
            7 => 
            array (
                'videoID' => 8,
                'videoName' => 'Kokoro Connect Episode 8',
                'videoDesc' => 'Episode 8 of the series:Kokoro Connect',
                'videoURL' => 'vids/Kokoro Connect/8.flv',
                'genre' => 0,
            ),
            8 => 
            array (
                'videoID' => 9,
                'videoName' => 'Kokoro Connect Episode 9',
                'videoDesc' => 'Episode 9 of the series:Kokoro Connect',
                'videoURL' => 'vids/Kokoro Connect/9.flv',
                'genre' => 0,
            ),
            9 => 
            array (
                'videoID' => 10,
                'videoName' => 'Kokoro Connect Episode 10',
                'videoDesc' => 'Episode 10 of the series:Kokoro Connect',
                'videoURL' => 'vids/Kokoro Connect/A10.flv',
                'genre' => 0,
            ),
            10 => 
            array (
                'videoID' => 11,
                'videoName' => 'Kokoro Connect Episode 11',
                'videoDesc' => 'Episode 11 of the series:Kokoro Connect',
                'videoURL' => 'vids/Kokoro Connect/A11.flv',
                'genre' => 0,
            ),
            11 => 
            array (
                'videoID' => 12,
                'videoName' => 'Kokoro Connect Episode 12',
                'videoDesc' => 'Episode 12 of the series:Kokoro Connect',
                'videoURL' => 'vids/Kokoro Connect/A12.flv',
                'genre' => 0,
            ),
            12 => 
            array (
                'videoID' => 13,
                'videoName' => 'Kokoro Connect Episode 13',
                'videoDesc' => 'Episode 13 of the series:Kokoro Connect',
                'videoURL' => 'vids/Kokoro Connect/A13.flv',
                'genre' => 0,
            ),
            13 => 
            array (
                'videoID' => 14,
                'videoName' => 'Kokoro Connect Episode 14',
                'videoDesc' => 'Episode 14 of the series:Kokoro Connect',
                'videoURL' => 'vids/Kokoro Connect/A14.flv',
                'genre' => 0,
            ),
            14 => 
            array (
                'videoID' => 15,
                'videoName' => 'Kokoro Connect Episode 15',
                'videoDesc' => 'Episode 15 of the series:Kokoro Connect',
                'videoURL' => 'vids/Kokoro Connect/A15.flv',
                'genre' => 0,
            ),
            15 => 
            array (
                'videoID' => 16,
                'videoName' => 'Kokoro Connect Episode 16',
                'videoDesc' => 'Episode 16 of the series:Kokoro Connect',
                'videoURL' => 'vids/Kokoro Connect/A16.flv',
                'genre' => 0,
            ),
            16 => 
            array (
                'videoID' => 17,
                'videoName' => 'Kokoro Connect Episode 17',
                'videoDesc' => 'Episode 17 of the series:Kokoro Connect',
                'videoURL' => 'vids/Kokoro Connect/A17.flv',
                'genre' => 0,
            ),
            17 => 
            array (
                'videoID' => 18,
                'videoName' => 'D-Frag! Episode 1',
                'videoDesc' => 'Episode 1 of the series:D-Frag!',
                'videoURL' => 'vids/D-Frag!/1.mp4',
                'genre' => 0,
            ),
            18 => 
            array (
                'videoID' => 19,
                'videoName' => 'D-Frag! Episode 2',
                'videoDesc' => 'Episode 2 of the series:D-Frag!',
                'videoURL' => 'vids/D-Frag!/2.mp4',
                'genre' => 0,
            ),
            19 => 
            array (
                'videoID' => 20,
                'videoName' => 'D-Frag! Episode 3',
                'videoDesc' => 'Episode 3 of the series:D-Frag!',
                'videoURL' => 'vids/D-Frag!/3.mp4',
                'genre' => 0,
            ),
            20 => 
            array (
                'videoID' => 21,
                'videoName' => 'D-Frag! Episode 4',
                'videoDesc' => 'Episode 4 of the series:D-Frag!',
                'videoURL' => 'vids/D-Frag!/4.mp4',
                'genre' => 0,
            ),
            21 => 
            array (
                'videoID' => 22,
                'videoName' => 'D-Frag! Episode 5',
                'videoDesc' => 'Episode 5 of the series:D-Frag!',
                'videoURL' => 'vids/D-Frag!/5.mp4',
                'genre' => 0,
            ),
            22 => 
            array (
                'videoID' => 23,
                'videoName' => 'D-Frag! Episode 6',
                'videoDesc' => 'Episode 6 of the series:D-Frag!',
                'videoURL' => 'vids/D-Frag!/6.mp4',
                'genre' => 0,
            ),
            23 => 
            array (
                'videoID' => 24,
                'videoName' => 'D-Frag! Episode 7',
                'videoDesc' => 'Episode 7 of the series:D-Frag!',
                'videoURL' => 'vids/D-Frag!/7.mp4',
                'genre' => 0,
            ),
            24 => 
            array (
                'videoID' => 25,
                'videoName' => 'D-Frag! Episode 8',
                'videoDesc' => 'Episode 8 of the series:D-Frag!',
                'videoURL' => 'vids/D-Frag!/8.mp4',
                'genre' => 0,
            ),
            25 => 
            array (
                'videoID' => 26,
                'videoName' => 'D-Frag! Episode 9',
                'videoDesc' => 'Episode 9 of the series:D-Frag!',
                'videoURL' => 'vids/D-Frag!/9.mp4',
                'genre' => 0,
            ),
            26 => 
            array (
                'videoID' => 27,
                'videoName' => 'D-Frag! Episode 10',
                'videoDesc' => 'Episode 10 of the series:D-Frag!',
                'videoURL' => 'vids/D-Frag!/A10.mp4',
                'genre' => 0,
            ),
            27 => 
            array (
                'videoID' => 28,
                'videoName' => 'D-Frag! Episode 11',
                'videoDesc' => 'Episode 11 of the series:D-Frag!',
                'videoURL' => 'vids/D-Frag!/A11.mp4',
                'genre' => 0,
            ),
            28 => 
            array (
                'videoID' => 29,
                'videoName' => 'D-Frag! Episode 12',
                'videoDesc' => 'Episode 12 of the series:D-Frag!',
                'videoURL' => 'vids/D-Frag!/A12.mp4',
                'genre' => 0,
            ),
            29 => 
            array (
                'videoID' => 30,
                'videoName' => 'Assassination Classroom Episode 1',
                'videoDesc' => 'Episode 1 of the series:Assassination Classroom',
                'videoURL' => 'vids/Assassination Classroom/1.mp4',
                'genre' => 0,
            ),
            30 => 
            array (
                'videoID' => 31,
                'videoName' => 'Assassination Classroom Episode 2',
                'videoDesc' => 'Episode 2 of the series:Assassination Classroom',
                'videoURL' => 'vids/Assassination Classroom/2.mp4',
                'genre' => 0,
            ),
            31 => 
            array (
                'videoID' => 32,
                'videoName' => 'Assassination Classroom Episode 3',
                'videoDesc' => 'Episode 3 of the series:Assassination Classroom',
                'videoURL' => 'vids/Assassination Classroom/3.mp4',
                'genre' => 0,
            ),
            32 => 
            array (
                'videoID' => 33,
                'videoName' => 'Assassination Classroom Episode 4',
                'videoDesc' => 'Episode 4 of the series:Assassination Classroom',
                'videoURL' => 'vids/Assassination Classroom/4.mp4',
                'genre' => 0,
            ),
            33 => 
            array (
                'videoID' => 34,
                'videoName' => 'Assassination Classroom Episode 5',
                'videoDesc' => 'Episode 5 of the series:Assassination Classroom',
                'videoURL' => 'vids/Assassination Classroom/5.mp4',
                'genre' => 0,
            ),
            34 => 
            array (
                'videoID' => 35,
                'videoName' => 'Assassination Classroom Episode 6',
                'videoDesc' => 'Episode 6 of the series:Assassination Classroom',
                'videoURL' => 'vids/Assassination Classroom/6.mp4',
                'genre' => 0,
            ),
            35 => 
            array (
                'videoID' => 36,
                'videoName' => 'Assassination Classroom Episode 7',
                'videoDesc' => 'Episode 7 of the series:Assassination Classroom',
                'videoURL' => 'vids/Assassination Classroom/7.mp4',
                'genre' => 0,
            ),
            36 => 
            array (
                'videoID' => 37,
                'videoName' => 'Assassination Classroom Episode 8',
                'videoDesc' => 'Episode 8 of the series:Assassination Classroom',
                'videoURL' => 'vids/Assassination Classroom/8.mp4',
                'genre' => 0,
            ),
            37 => 
            array (
                'videoID' => 38,
                'videoName' => 'Assassination Classroom Episode 9',
                'videoDesc' => 'Episode 9 of the series:Assassination Classroom',
                'videoURL' => 'vids/Assassination Classroom/9.mp4',
                'genre' => 0,
            ),
            38 => 
            array (
                'videoID' => 39,
                'videoName' => 'Assassination Classroom Episode 10',
                'videoDesc' => 'Episode 10 of the series:Assassination Classroom',
                'videoURL' => 'vids/Assassination Classroom/10.mp4',
                'genre' => 0,
            ),
            39 => 
            array (
                'videoID' => 40,
                'videoName' => 'Assassination Classroom Episode 11',
                'videoDesc' => 'Episode 11 of the series:Assassination Classroom',
                'videoURL' => 'vids/Assassination Classroom/A11.mp4',
                'genre' => 0,
            ),
            40 => 
            array (
                'videoID' => 41,
                'videoName' => 'Assassination Classroom Episode 12',
                'videoDesc' => 'Episode 12 of the series:Assassination Classroom',
                'videoURL' => 'vids/Assassination Classroom/A12.mp4',
                'genre' => 0,
            ),
            41 => 
            array (
                'videoID' => 42,
                'videoName' => 'Assassination Classroom Episode 13',
                'videoDesc' => 'Episode 13 of the series:Assassination Classroom',
                'videoURL' => 'vids/Assassination Classroom/A13.mp4',
                'genre' => 0,
            ),
            42 => 
            array (
                'videoID' => 43,
                'videoName' => 'Assassination Classroom Episode 14',
                'videoDesc' => 'Episode 14 of the series:Assassination Classroom',
                'videoURL' => 'vids/Assassination Classroom/A14.mp4',
                'genre' => 0,
            ),
            43 => 
            array (
                'videoID' => 44,
                'videoName' => 'Assassination Classroom Episode 15',
                'videoDesc' => 'Episode 15 of the series:Assassination Classroom',
                'videoURL' => 'vids/Assassination Classroom/A15.mp4',
                'genre' => 0,
            ),
            44 => 
            array (
                'videoID' => 45,
                'videoName' => 'Assassination Classroom Episode 16',
                'videoDesc' => 'Episode 16 of the series:Assassination Classroom',
                'videoURL' => 'vids/Assassination Classroom/A16.mp4',
                'genre' => 0,
            ),
            45 => 
            array (
                'videoID' => 46,
                'videoName' => 'Assassination Classroom Episode 17',
                'videoDesc' => 'Episode 17 of the series:Assassination Classroom',
                'videoURL' => 'vids/Assassination Classroom/A17.mp4',
                'genre' => 0,
            ),
            46 => 
            array (
                'videoID' => 47,
                'videoName' => 'Assassination Classroom Episode 18',
                'videoDesc' => 'Episode 18 of the series:Assassination Classroom',
                'videoURL' => 'vids/Assassination Classroom/A18.mp4',
                'genre' => 0,
            ),
            47 => 
            array (
                'videoID' => 48,
                'videoName' => 'Assassination Classroom Episode 19',
                'videoDesc' => 'Episode 19 of the series:Assassination Classroom',
                'videoURL' => 'vids/Assassination Classroom/A19.mp4',
                'genre' => 0,
            ),
            48 => 
            array (
                'videoID' => 49,
                'videoName' => 'Assassination Classroom Episode 20',
                'videoDesc' => 'Episode 20 of the series:Assassination Classroom',
                'videoURL' => 'vids/Assassination Classroom/A20.mp4',
                'genre' => 0,
            ),
            49 => 
            array (
                'videoID' => 50,
                'videoName' => 'Assassination Classroom Episode 21',
                'videoDesc' => 'Episode 21 of the series:Assassination Classroom',
                'videoURL' => 'vids/Assassination Classroom/A21.mp4',
                'genre' => 0,
            ),
            50 => 
            array (
                'videoID' => 51,
                'videoName' => 'Assassination Classroom Episode 22',
                'videoDesc' => 'Episode 22 of the series:Assassination Classroom',
                'videoURL' => 'vids/Assassination Classroom/A22.mp4',
                'genre' => 0,
            ),
            51 => 
            array (
                'videoID' => 52,
                'videoName' => 'Assassination Classroom Episode 23',
                'videoDesc' => 'Episode 23 of the series:Assassination Classroom',
                'videoURL' => 'vids/Assassination Classroom/A23.mp4',
                'genre' => 0,
            ),
            52 => 
            array (
                'videoID' => 53,
                'videoName' => 'One Punch Man Episode 1',
                'videoDesc' => 'Episode 1 of the series:One Punch Man',
                'videoURL' => 'vids/One Punch Man/1.mp4',
                'genre' => 0,
            ),
            53 => 
            array (
                'videoID' => 54,
                'videoName' => 'One Punch Man Episode 2',
                'videoDesc' => 'Episode 2 of the series:One Punch Man',
                'videoURL' => 'vids/One Punch Man/2.mp4',
                'genre' => 0,
            ),
            54 => 
            array (
                'videoID' => 55,
                'videoName' => 'One Punch Man Episode 3',
                'videoDesc' => 'Episode 3 of the series:One Punch Man',
                'videoURL' => 'vids/One Punch Man/3.mp4',
                'genre' => 0,
            ),
            55 => 
            array (
                'videoID' => 56,
                'videoName' => 'One Punch Man Episode 4',
                'videoDesc' => 'Episode 4 of the series:One Punch Man',
                'videoURL' => 'vids/One Punch Man/4.mp4',
                'genre' => 0,
            ),
            56 => 
            array (
                'videoID' => 57,
                'videoName' => 'One Punch Man Episode 5',
                'videoDesc' => 'Episode 5 of the series:One Punch Man',
                'videoURL' => 'vids/One Punch Man/5.mp4',
                'genre' => 0,
            ),
            57 => 
            array (
                'videoID' => 58,
                'videoName' => 'One Punch Man Episode 6',
                'videoDesc' => 'Episode 6 of the series:One Punch Man',
                'videoURL' => 'vids/One Punch Man/6.mp4',
                'genre' => 0,
            ),
            58 => 
            array (
                'videoID' => 59,
                'videoName' => 'One Punch Man Episode 7',
                'videoDesc' => 'Episode 7 of the series:One Punch Man',
                'videoURL' => 'vids/One Punch Man/7.mp4',
                'genre' => 0,
            ),
            59 => 
            array (
                'videoID' => 60,
                'videoName' => 'One Punch Man Episode 8',
                'videoDesc' => 'Episode 8 of the series:One Punch Man',
                'videoURL' => 'vids/One Punch Man/8.mp4',
                'genre' => 0,
            ),
            60 => 
            array (
                'videoID' => 61,
                'videoName' => 'One Punch Man Episode 9',
                'videoDesc' => 'Episode 9 of the series:One Punch Man',
                'videoURL' => 'vids/One Punch Man/9.mp4',
                'genre' => 0,
            ),
            61 => 
            array (
                'videoID' => 62,
                'videoName' => 'One Punch Man Episode 10',
                'videoDesc' => 'Episode 10 of the series:One Punch Man',
                'videoURL' => 'vids/One Punch Man/A10.mp4',
                'genre' => 0,
            ),
            62 => 
            array (
                'videoID' => 63,
                'videoName' => 'One Punch Man Episode 11',
                'videoDesc' => 'Episode 11 of the series:One Punch Man',
                'videoURL' => 'vids/One Punch Man/A11.mp4',
                'genre' => 0,
            ),
            63 => 
            array (
                'videoID' => 64,
                'videoName' => 'One Punch Man Episode 12',
                'videoDesc' => 'Episode 12 of the series:One Punch Man',
                'videoURL' => 'vids/One Punch Man/A12.mp4',
                'genre' => 0,
            ),
            64 => 
            array (
                'videoID' => 65,
                'videoName' => 'Pinocchio Episode 1',
                'videoDesc' => 'Episode 1 of the series:Pinocchio',
                'videoURL' => 'vids/Pinocchio/Episode 1.mp4',
                'genre' => 1,
            ),
            65 => 
            array (
                'videoID' => 66,
                'videoName' => 'Pinocchio Episode 2',
                'videoDesc' => 'Episode 2 of the series:Pinocchio',
                'videoURL' => 'vids/Pinocchio/Episode 2.mp4',
                'genre' => 1,
            ),
            66 => 
            array (
                'videoID' => 67,
                'videoName' => 'Pinocchio Episode 3',
                'videoDesc' => 'Episode 3 of the series:Pinocchio',
                'videoURL' => 'vids/Pinocchio/Episode 3.mp4',
                'genre' => 1,
            ),
            67 => 
            array (
                'videoID' => 68,
                'videoName' => 'Pinocchio Episode 4',
                'videoDesc' => 'Episode 4 of the series:Pinocchio',
                'videoURL' => 'vids/Pinocchio/Episode 4.mp4',
                'genre' => 1,
            ),
            68 => 
            array (
                'videoID' => 69,
                'videoName' => 'Pinocchio Episode 5',
                'videoDesc' => 'Episode 5 of the series:Pinocchio',
                'videoURL' => 'vids/Pinocchio/Episode 5.mp4',
                'genre' => 1,
            ),
            69 => 
            array (
                'videoID' => 70,
                'videoName' => 'Pinocchio Episode 6',
                'videoDesc' => 'Episode 6 of the series:Pinocchio',
                'videoURL' => 'vids/Pinocchio/Episode 6.mp4',
                'genre' => 1,
            ),
            70 => 
            array (
                'videoID' => 71,
                'videoName' => 'Pinocchio Episode 7',
                'videoDesc' => 'Episode 7 of the series:Pinocchio',
                'videoURL' => 'vids/Pinocchio/Episode 7.mp4',
                'genre' => 1,
            ),
            71 => 
            array (
                'videoID' => 72,
                'videoName' => 'Pinocchio Episode 8',
                'videoDesc' => 'Episode 8 of the series:Pinocchio',
                'videoURL' => 'vids/Pinocchio/Episode 8.mp4',
                'genre' => 1,
            ),
            72 => 
            array (
                'videoID' => 73,
                'videoName' => 'Pinocchio Episode 9',
                'videoDesc' => 'Episode 9 of the series:Pinocchio',
                'videoURL' => 'vids/Pinocchio/Episode 9.mp4',
                'genre' => 1,
            ),
            73 => 
            array (
                'videoID' => 74,
                'videoName' => 'Pinocchio Episode 10',
                'videoDesc' => 'Episode 10 of the series:Pinocchio',
                'videoURL' => 'vids/Pinocchio/Episode 10.mp4',
                'genre' => 1,
            ),
            74 => 
            array (
                'videoID' => 75,
                'videoName' => 'Pinocchio Episode 11',
                'videoDesc' => 'Episode 11 of the series:Pinocchio',
                'videoURL' => 'vids/Pinocchio/Episode 11.mp4',
                'genre' => 1,
            ),
            75 => 
            array (
                'videoID' => 76,
                'videoName' => 'Pinocchio Episode 12',
                'videoDesc' => 'Episode 12 of the series:Pinocchio',
                'videoURL' => 'vids/Pinocchio/Episode 12.mp4',
                'genre' => 1,
            ),
            76 => 
            array (
                'videoID' => 77,
                'videoName' => 'Pinocchio Episode 13',
                'videoDesc' => 'Episode 13 of the series:Pinocchio',
                'videoURL' => 'vids/Pinocchio/Episode 13.mp4',
                'genre' => 1,
            ),
            77 => 
            array (
                'videoID' => 78,
                'videoName' => 'Pinocchio Episode 14',
                'videoDesc' => 'Episode 14 of the series:Pinocchio',
                'videoURL' => 'vids/Pinocchio/Episode 14.mp4',
                'genre' => 1,
            ),
            78 => 
            array (
                'videoID' => 79,
                'videoName' => 'Pinocchio Episode 15',
                'videoDesc' => 'Episode 15 of the series:Pinocchio',
                'videoURL' => 'vids/Pinocchio/Episode 15.mp4',
                'genre' => 1,
            ),
            79 => 
            array (
                'videoID' => 80,
                'videoName' => 'Pinocchio Episode 16',
                'videoDesc' => 'Episode 16 of the series:Pinocchio',
                'videoURL' => 'vids/Pinocchio/Episode 16.mp4',
                'genre' => 1,
            ),
            80 => 
            array (
                'videoID' => 81,
                'videoName' => 'Pinocchio Episode 17',
                'videoDesc' => 'Episode 17 of the series:Pinocchio',
                'videoURL' => 'vids/Pinocchio/Episode 17.mp4',
                'genre' => 1,
            ),
            81 => 
            array (
                'videoID' => 82,
                'videoName' => 'Pinocchio Episode 18',
                'videoDesc' => 'Episode 18 of the series:Pinocchio',
                'videoURL' => 'vids/Pinocchio/Episode 18.mp4',
                'genre' => 1,
            ),
            82 => 
            array (
                'videoID' => 83,
                'videoName' => 'Pinocchio Episode 19',
                'videoDesc' => 'Episode 19 of the series:Pinocchio',
                'videoURL' => 'vids/Pinocchio/Episode 19.mp4',
                'genre' => 1,
            ),
            83 => 
            array (
                'videoID' => 84,
                'videoName' => 'Pinocchio Episode 20',
                'videoDesc' => 'Episode 20 of the series:Pinocchio',
                'videoURL' => 'vids/Pinocchio/Episode 20.mp4',
                'genre' => 1,
            ),
            84 => 
            array (
                'videoID' => 85,
                'videoName' => 'White Album 2 Episode 1',
                'videoDesc' => 'Episode 1 of the series:White Album 2',
                'videoURL' => 'vids/White Album 2/1.mp4',
                'genre' => 1,
            ),
            85 => 
            array (
                'videoID' => 86,
                'videoName' => 'White Album 2 Episode 2',
                'videoDesc' => 'Episode 2 of the series:White Album 2',
                'videoURL' => 'vids/White Album 2/2.mp4',
                'genre' => 1,
            ),
            86 => 
            array (
                'videoID' => 87,
                'videoName' => 'White Album 2 Episode 3',
                'videoDesc' => 'Episode 3 of the series:White Album 2',
                'videoURL' => 'vids/White Album 2/3.mp4',
                'genre' => 1,
            ),
            87 => 
            array (
                'videoID' => 88,
                'videoName' => 'White Album 2 Episode 4',
                'videoDesc' => 'Episode 4 of the series:White Album 2',
                'videoURL' => 'vids/White Album 2/4.mp4',
                'genre' => 1,
            ),
            88 => 
            array (
                'videoID' => 89,
                'videoName' => 'White Album 2 Episode 5',
                'videoDesc' => 'Episode 5 of the series:White Album 2',
                'videoURL' => 'vids/White Album 2/5.mp4',
                'genre' => 1,
            ),
            89 => 
            array (
                'videoID' => 90,
                'videoName' => 'White Album 2 Episode 6',
                'videoDesc' => 'Episode 6 of the series:White Album 2',
                'videoURL' => 'vids/White Album 2/6.mp4',
                'genre' => 1,
            ),
            90 => 
            array (
                'videoID' => 91,
                'videoName' => 'White Album 2 Episode 7',
                'videoDesc' => 'Episode 7 of the series:White Album 2',
                'videoURL' => 'vids/White Album 2/7.mp4',
                'genre' => 1,
            ),
            91 => 
            array (
                'videoID' => 92,
                'videoName' => 'White Album 2 Episode 8',
                'videoDesc' => 'Episode 8 of the series:White Album 2',
                'videoURL' => 'vids/White Album 2/8.mp4',
                'genre' => 1,
            ),
            92 => 
            array (
                'videoID' => 93,
                'videoName' => 'White Album 2 Episode 9',
                'videoDesc' => 'Episode 9 of the series:White Album 2',
                'videoURL' => 'vids/White Album 2/9.mp4',
                'genre' => 1,
            ),
            93 => 
            array (
                'videoID' => 94,
                'videoName' => 'White Album 2 Episode 10',
                'videoDesc' => 'Episode 10 of the series:White Album 2',
                'videoURL' => 'vids/White Album 2/A10.mp4',
                'genre' => 1,
            ),
            94 => 
            array (
                'videoID' => 95,
                'videoName' => 'White Album 2 Episode 11',
                'videoDesc' => 'Episode 11 of the series:White Album 2',
                'videoURL' => 'vids/White Album 2/A11.mp4',
                'genre' => 1,
            ),
            95 => 
            array (
                'videoID' => 96,
                'videoName' => 'White Album 2 Episode 12',
                'videoDesc' => 'Episode 12 of the series:White Album 2',
                'videoURL' => 'vids/White Album 2/A12.mp4',
                'genre' => 1,
            ),
            96 => 
            array (
                'videoID' => 97,
                'videoName' => 'White Album 2 Episode 13',
                'videoDesc' => 'Episode 13 of the series:White Album 2',
                'videoURL' => 'vids/White Album 2/A13.mp4',
                'genre' => 1,
            ),
            97 => 
            array (
                'videoID' => 143,
                'videoName' => 'She Was Pretty Episode 1',
                'videoDesc' => 'Episode 1 of the series:She Was Pretty',
                'videoURL' => 'vids/She Was Pretty/01.mp4',
                'genre' => 1,
            ),
            98 => 
            array (
                'videoID' => 144,
                'videoName' => 'She Was Pretty Episode 2',
                'videoDesc' => 'Episode 2 of the series:She Was Pretty',
                'videoURL' => 'vids/She Was Pretty/02.mp4',
                'genre' => 1,
            ),
            99 => 
            array (
                'videoID' => 145,
                'videoName' => 'She Was Pretty Episode 3',
                'videoDesc' => 'Episode 3 of the series:She Was Pretty',
                'videoURL' => 'vids/She Was Pretty/04.mp4',
                'genre' => 1,
            ),
            100 => 
            array (
                'videoID' => 146,
                'videoName' => 'She Was Pretty Episode 4',
                'videoDesc' => 'Episode 4 of the series:She Was Pretty',
                'videoURL' => 'vids/She Was Pretty/05.mp4',
                'genre' => 1,
            ),
            101 => 
            array (
                'videoID' => 147,
                'videoName' => 'She Was Pretty Episode 5',
                'videoDesc' => 'Episode 5 of the series:She Was Pretty',
                'videoURL' => 'vids/She Was Pretty/06.mp4',
                'genre' => 1,
            ),
            102 => 
            array (
                'videoID' => 148,
                'videoName' => 'She Was Pretty Episode 6',
                'videoDesc' => 'Episode 6 of the series:She Was Pretty',
                'videoURL' => 'vids/She Was Pretty/07.mp4',
                'genre' => 1,
            ),
            103 => 
            array (
                'videoID' => 149,
                'videoName' => 'She Was Pretty Episode 7',
                'videoDesc' => 'Episode 7 of the series:She Was Pretty',
                'videoURL' => 'vids/She Was Pretty/08.mp4',
                'genre' => 1,
            ),
            104 => 
            array (
                'videoID' => 150,
                'videoName' => 'She Was Pretty Episode 8',
                'videoDesc' => 'Episode 8 of the series:She Was Pretty',
                'videoURL' => 'vids/She Was Pretty/09.mp4',
                'genre' => 1,
            ),
            105 => 
            array (
                'videoID' => 151,
                'videoName' => 'She Was Pretty Episode 9',
                'videoDesc' => 'Episode 9 of the series:She Was Pretty',
                'videoURL' => 'vids/She Was Pretty/10.mp4',
                'genre' => 1,
            ),
            106 => 
            array (
                'videoID' => 152,
                'videoName' => 'She Was Pretty Episode 10',
                'videoDesc' => 'Episode 10 of the series:She Was Pretty',
                'videoURL' => 'vids/She Was Pretty/11.mp4',
                'genre' => 1,
            ),
            107 => 
            array (
                'videoID' => 153,
                'videoName' => 'She Was Pretty Episode 11',
                'videoDesc' => 'Episode 11 of the series:She Was Pretty',
                'videoURL' => 'vids/She Was Pretty/12.mp4',
                'genre' => 1,
            ),
            108 => 
            array (
                'videoID' => 154,
                'videoName' => 'She Was Pretty Episode 12',
                'videoDesc' => 'Episode 12 of the series:She Was Pretty',
                'videoURL' => 'vids/She Was Pretty/13.mp4',
                'genre' => 1,
            ),
            109 => 
            array (
                'videoID' => 155,
                'videoName' => 'She Was Pretty Episode 13',
                'videoDesc' => 'Episode 13 of the series:She Was Pretty',
                'videoURL' => 'vids/She Was Pretty/14.mp4',
                'genre' => 1,
            ),
            110 => 
            array (
                'videoID' => 156,
                'videoName' => 'She Was Pretty Episode 14',
                'videoDesc' => 'Episode 14 of the series:She Was Pretty',
                'videoURL' => 'vids/She Was Pretty/15.mp4',
                'genre' => 1,
            ),
            111 => 
            array (
                'videoID' => 157,
                'videoName' => 'She Was Pretty Episode 15',
                'videoDesc' => 'Episode 15 of the series:She Was Pretty',
                'videoURL' => 'vids/She Was Pretty/16.mp4',
                'genre' => 1,
            ),
            112 => 
            array (
                'videoID' => 158,
                'videoName' => 'KHR Episode 1',
                'videoDesc' => 'Episode 1 of the series:KHR',
                'videoURL' => 'vids/KHR/Episode 020.mp4',
                'genre' => 1,
            ),
            113 => 
            array (
                'videoID' => 159,
                'videoName' => 'KHR Episode 2',
                'videoDesc' => 'Episode 2 of the series:KHR',
                'videoURL' => 'vids/KHR/Episode 021.mp4',
                'genre' => 1,
            ),
            114 => 
            array (
                'videoID' => 160,
                'videoName' => 'KHR Episode 3',
                'videoDesc' => 'Episode 3 of the series:KHR',
                'videoURL' => 'vids/KHR/Episode 066.mp4',
                'genre' => 1,
            ),
            115 => 
            array (
                'videoID' => 161,
                'videoName' => 'KHR Episode 1',
                'videoDesc' => 'Episode 1 of the series:KHR',
                'videoURL' => 'vids/KHR/Episode 020.mp4',
                'genre' => 1,
            ),
            116 => 
            array (
                'videoID' => 162,
                'videoName' => 'KHR Episode 2',
                'videoDesc' => 'Episode 2 of the series:KHR',
                'videoURL' => 'vids/KHR/Episode 021.mp4',
                'genre' => 1,
            ),
            117 => 
            array (
                'videoID' => 163,
                'videoName' => 'KHR Episode 3',
                'videoDesc' => 'Episode 3 of the series:KHR',
                'videoURL' => 'vids/KHR/Episode 066.mp4',
                'genre' => 1,
            ),
            118 => 
            array (
                'videoID' => 164,
                'videoName' => 'Kiseijuu sei no kakuritsu Episode 1',
                'videoDesc' => 'Episode 1 of the series:Kiseijuu sei no kakuritsu',
                'videoURL' => 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_01.mp4',
                'genre' => 0,
            ),
            119 => 
            array (
                'videoID' => 165,
                'videoName' => 'Kiseijuu sei no kakuritsu Episode 2',
                'videoDesc' => 'Episode 2 of the series:Kiseijuu sei no kakuritsu',
                'videoURL' => 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_02.mp4',
                'genre' => 0,
            ),
            120 => 
            array (
                'videoID' => 166,
                'videoName' => 'Kiseijuu sei no kakuritsu Episode 3',
                'videoDesc' => 'Episode 3 of the series:Kiseijuu sei no kakuritsu',
                'videoURL' => 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_03.mp4',
                'genre' => 0,
            ),
            121 => 
            array (
                'videoID' => 167,
                'videoName' => 'Kiseijuu sei no kakuritsu Episode 4',
                'videoDesc' => 'Episode 4 of the series:Kiseijuu sei no kakuritsu',
                'videoURL' => 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_04_2.mp4',
                'genre' => 0,
            ),
            122 => 
            array (
                'videoID' => 168,
                'videoName' => 'Kiseijuu sei no kakuritsu Episode 5',
                'videoDesc' => 'Episode 5 of the series:Kiseijuu sei no kakuritsu',
                'videoURL' => 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_05.mp4',
                'genre' => 0,
            ),
            123 => 
            array (
                'videoID' => 169,
                'videoName' => 'Kiseijuu sei no kakuritsu Episode 6',
                'videoDesc' => 'Episode 6 of the series:Kiseijuu sei no kakuritsu',
                'videoURL' => 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_06.mp4',
                'genre' => 0,
            ),
            124 => 
            array (
                'videoID' => 170,
                'videoName' => 'Kiseijuu sei no kakuritsu Episode 7',
                'videoDesc' => 'Episode 7 of the series:Kiseijuu sei no kakuritsu',
                'videoURL' => 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_07.mp4',
                'genre' => 0,
            ),
            125 => 
            array (
                'videoID' => 171,
                'videoName' => 'Kiseijuu sei no kakuritsu Episode 8',
                'videoDesc' => 'Episode 8 of the series:Kiseijuu sei no kakuritsu',
                'videoURL' => 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_08.mp4',
                'genre' => 0,
            ),
            126 => 
            array (
                'videoID' => 172,
                'videoName' => 'Kiseijuu sei no kakuritsu Episode 9',
                'videoDesc' => 'Episode 9 of the series:Kiseijuu sei no kakuritsu',
                'videoURL' => 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_09.mp4',
                'genre' => 0,
            ),
            127 => 
            array (
                'videoID' => 173,
                'videoName' => 'Kiseijuu sei no kakuritsu Episode 10',
                'videoDesc' => 'Episode 10 of the series:Kiseijuu sei no kakuritsu',
                'videoURL' => 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_10.mp4',
                'genre' => 0,
            ),
            128 => 
            array (
                'videoID' => 174,
                'videoName' => 'Kiseijuu sei no kakuritsu Episode 11',
                'videoDesc' => 'Episode 11 of the series:Kiseijuu sei no kakuritsu',
                'videoURL' => 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_11.mp4',
                'genre' => 0,
            ),
            129 => 
            array (
                'videoID' => 175,
                'videoName' => 'Kiseijuu sei no kakuritsu Episode 12',
                'videoDesc' => 'Episode 12 of the series:Kiseijuu sei no kakuritsu',
                'videoURL' => 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_12.mp4',
                'genre' => 0,
            ),
            130 => 
            array (
                'videoID' => 176,
                'videoName' => 'Kiseijuu sei no kakuritsu Episode 13',
                'videoDesc' => 'Episode 13 of the series:Kiseijuu sei no kakuritsu',
                'videoURL' => 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_13_2.mp4',
                'genre' => 0,
            ),
            131 => 
            array (
                'videoID' => 177,
                'videoName' => 'Kiseijuu sei no kakuritsu Episode 14',
                'videoDesc' => 'Episode 14 of the series:Kiseijuu sei no kakuritsu',
                'videoURL' => 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_14.mp4',
                'genre' => 0,
            ),
            132 => 
            array (
                'videoID' => 178,
                'videoName' => 'Kiseijuu sei no kakuritsu Episode 15',
                'videoDesc' => 'Episode 15 of the series:Kiseijuu sei no kakuritsu',
                'videoURL' => 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_15.mp4',
                'genre' => 0,
            ),
            133 => 
            array (
                'videoID' => 179,
                'videoName' => 'Kiseijuu sei no kakuritsu Episode 16',
                'videoDesc' => 'Episode 16 of the series:Kiseijuu sei no kakuritsu',
                'videoURL' => 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_16.mp4',
                'genre' => 0,
            ),
            134 => 
            array (
                'videoID' => 180,
                'videoName' => 'Kiseijuu sei no kakuritsu Episode 17',
                'videoDesc' => 'Episode 17 of the series:Kiseijuu sei no kakuritsu',
                'videoURL' => 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_17.mp4',
                'genre' => 0,
            ),
            135 => 
            array (
                'videoID' => 181,
                'videoName' => 'Kiseijuu sei no kakuritsu Episode 18',
                'videoDesc' => 'Episode 18 of the series:Kiseijuu sei no kakuritsu',
                'videoURL' => 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_18.mp4',
                'genre' => 0,
            ),
            136 => 
            array (
                'videoID' => 182,
                'videoName' => 'Kiseijuu sei no kakuritsu Episode 19',
                'videoDesc' => 'Episode 19 of the series:Kiseijuu sei no kakuritsu',
                'videoURL' => 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_19.mp4',
                'genre' => 0,
            ),
            137 => 
            array (
                'videoID' => 183,
                'videoName' => 'Kiseijuu sei no kakuritsu Episode 20',
                'videoDesc' => 'Episode 20 of the series:Kiseijuu sei no kakuritsu',
                'videoURL' => 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_20.mp4',
                'genre' => 0,
            ),
            138 => 
            array (
                'videoID' => 184,
                'videoName' => 'Kiseijuu sei no kakuritsu Episode 21',
                'videoDesc' => 'Episode 21 of the series:Kiseijuu sei no kakuritsu',
                'videoURL' => 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_21.mp4',
                'genre' => 0,
            ),
            139 => 
            array (
                'videoID' => 185,
                'videoName' => 'Kiseijuu sei no kakuritsu Episode 22',
                'videoDesc' => 'Episode 22 of the series:Kiseijuu sei no kakuritsu',
                'videoURL' => 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_22.mp4',
                'genre' => 0,
            ),
            140 => 
            array (
                'videoID' => 186,
                'videoName' => 'Kiseijuu sei no kakuritsu Episode 23',
                'videoDesc' => 'Episode 23 of the series:Kiseijuu sei no kakuritsu',
                'videoURL' => 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_23.mp4',
                'genre' => 0,
            ),
            141 => 
            array (
                'videoID' => 187,
                'videoName' => 'Kiseijuu sei no kakuritsu Episode 24',
                'videoDesc' => 'Episode 24 of the series:Kiseijuu sei no kakuritsu',
                'videoURL' => 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_24.mp4',
                'genre' => 0,
            ),
            142 => 
            array (
                'videoID' => 188,
                'videoName' => 'Magi Kingdom of Magic Episode 1',
                'videoDesc' => 'Episode 1 of the series:Magi Kingdom of Magic',
                'videoURL' => 'vids/Magi Kingdom of Magic/Magi  The Kingdom Of Magic Episode 07 Sub - Watch Magi  The Kingdom Of Magic 7 Online   AnimeSeason.com.mp4',
                'genre' => 0,
            ),
            143 => 
            array (
                'videoID' => 189,
                'videoName' => 'Seven Deadly Sins Episode 1',
                'videoDesc' => 'Episode 1 of the series:Seven Deadly Sins',
                'videoURL' => 'vids/Seven Deadly Sins/1.mp4',
                'genre' => 0,
            ),
            144 => 
            array (
                'videoID' => 190,
                'videoName' => 'Seven Deadly Sins Episode 2',
                'videoDesc' => 'Episode 2 of the series:Seven Deadly Sins',
                'videoURL' => 'vids/Seven Deadly Sins/2.mp4',
                'genre' => 0,
            ),
            145 => 
            array (
                'videoID' => 191,
                'videoName' => 'Seven Deadly Sins Episode 3',
                'videoDesc' => 'Episode 3 of the series:Seven Deadly Sins',
                'videoURL' => 'vids/Seven Deadly Sins/3.mp4',
                'genre' => 0,
            ),
            146 => 
            array (
                'videoID' => 192,
                'videoName' => 'Seven Deadly Sins Episode 4',
                'videoDesc' => 'Episode 4 of the series:Seven Deadly Sins',
                'videoURL' => 'vids/Seven Deadly Sins/4.mp4',
                'genre' => 0,
            ),
            147 => 
            array (
                'videoID' => 193,
                'videoName' => 'Seven Deadly Sins Episode 5',
                'videoDesc' => 'Episode 5 of the series:Seven Deadly Sins',
                'videoURL' => 'vids/Seven Deadly Sins/5.mp4',
                'genre' => 0,
            ),
            148 => 
            array (
                'videoID' => 194,
                'videoName' => 'Seven Deadly Sins Episode 6',
                'videoDesc' => 'Episode 6 of the series:Seven Deadly Sins',
                'videoURL' => 'vids/Seven Deadly Sins/6.mp4',
                'genre' => 0,
            ),
            149 => 
            array (
                'videoID' => 195,
                'videoName' => 'Seven Deadly Sins Episode 7',
                'videoDesc' => 'Episode 7 of the series:Seven Deadly Sins',
                'videoURL' => 'vids/Seven Deadly Sins/7.mp4',
                'genre' => 0,
            ),
            150 => 
            array (
                'videoID' => 196,
                'videoName' => 'Seven Deadly Sins Episode 8',
                'videoDesc' => 'Episode 8 of the series:Seven Deadly Sins',
                'videoURL' => 'vids/Seven Deadly Sins/8.mp4',
                'genre' => 0,
            ),
            151 => 
            array (
                'videoID' => 197,
                'videoName' => 'Seven Deadly Sins Episode 9',
                'videoDesc' => 'Episode 9 of the series:Seven Deadly Sins',
                'videoURL' => 'vids/Seven Deadly Sins/9.mp4',
                'genre' => 0,
            ),
            152 => 
            array (
                'videoID' => 198,
                'videoName' => 'Seven Deadly Sins Episode 10',
                'videoDesc' => 'Episode 10 of the series:Seven Deadly Sins',
                'videoURL' => 'vids/Seven Deadly Sins/10.mp4',
                'genre' => 0,
            ),
            153 => 
            array (
                'videoID' => 199,
                'videoName' => 'Seven Deadly Sins Episode 11',
                'videoDesc' => 'Episode 11 of the series:Seven Deadly Sins',
                'videoURL' => 'vids/Seven Deadly Sins/A11.mp4',
                'genre' => 0,
            ),
            154 => 
            array (
                'videoID' => 200,
                'videoName' => 'Seven Deadly Sins Episode 12',
                'videoDesc' => 'Episode 12 of the series:Seven Deadly Sins',
                'videoURL' => 'vids/Seven Deadly Sins/A12.mp4',
                'genre' => 0,
            ),
            155 => 
            array (
                'videoID' => 201,
                'videoName' => 'Seven Deadly Sins Episode 13',
                'videoDesc' => 'Episode 13 of the series:Seven Deadly Sins',
                'videoURL' => 'vids/Seven Deadly Sins/A13.mp4',
                'genre' => 0,
            ),
            156 => 
            array (
                'videoID' => 202,
                'videoName' => 'Seven Deadly Sins Episode 14',
                'videoDesc' => 'Episode 14 of the series:Seven Deadly Sins',
                'videoURL' => 'vids/Seven Deadly Sins/A14.mp4',
                'genre' => 0,
            ),
            157 => 
            array (
                'videoID' => 203,
                'videoName' => 'Seven Deadly Sins Episode 15',
                'videoDesc' => 'Episode 15 of the series:Seven Deadly Sins',
                'videoURL' => 'vids/Seven Deadly Sins/A15.mp4',
                'genre' => 0,
            ),
            158 => 
            array (
                'videoID' => 204,
                'videoName' => 'Seven Deadly Sins Episode 16',
                'videoDesc' => 'Episode 16 of the series:Seven Deadly Sins',
                'videoURL' => 'vids/Seven Deadly Sins/A16.mp4',
                'genre' => 0,
            ),
            159 => 
            array (
                'videoID' => 205,
                'videoName' => 'Seven Deadly Sins Episode 17',
                'videoDesc' => 'Episode 17 of the series:Seven Deadly Sins',
                'videoURL' => 'vids/Seven Deadly Sins/A17.mp4',
                'genre' => 0,
            ),
            160 => 
            array (
                'videoID' => 206,
                'videoName' => 'Seven Deadly Sins Episode 18',
                'videoDesc' => 'Episode 18 of the series:Seven Deadly Sins',
                'videoURL' => 'vids/Seven Deadly Sins/A18.mp4',
                'genre' => 0,
            ),
            161 => 
            array (
                'videoID' => 207,
                'videoName' => 'Seven Deadly Sins Episode 19',
                'videoDesc' => 'Episode 19 of the series:Seven Deadly Sins',
                'videoURL' => 'vids/Seven Deadly Sins/A19.mp4',
                'genre' => 0,
            ),
            162 => 
            array (
                'videoID' => 208,
                'videoName' => 'Seven Deadly Sins Episode 20',
                'videoDesc' => 'Episode 20 of the series:Seven Deadly Sins',
                'videoURL' => 'vids/Seven Deadly Sins/A20.mp4',
                'genre' => 0,
            ),
            163 => 
            array (
                'videoID' => 209,
                'videoName' => 'Seven Deadly Sins Episode 21',
                'videoDesc' => 'Episode 21 of the series:Seven Deadly Sins',
                'videoURL' => 'vids/Seven Deadly Sins/A21.mp4',
                'genre' => 0,
            ),
            164 => 
            array (
                'videoID' => 210,
                'videoName' => 'Seven Deadly Sins Episode 22',
                'videoDesc' => 'Episode 22 of the series:Seven Deadly Sins',
                'videoURL' => 'vids/Seven Deadly Sins/A22.mp4',
                'genre' => 0,
            ),
            165 => 
            array (
                'videoID' => 211,
                'videoName' => 'Seven Deadly Sins Episode 23',
                'videoDesc' => 'Episode 23 of the series:Seven Deadly Sins',
                'videoURL' => 'vids/Seven Deadly Sins/A23.mp4',
                'genre' => 0,
            ),
            166 => 
            array (
                'videoID' => 212,
                'videoName' => 'Seven Deadly Sins Episode 24',
                'videoDesc' => 'Episode 24 of the series:Seven Deadly Sins',
                'videoURL' => 'vids/Seven Deadly Sins/A24.mp4',
                'genre' => 0,
            ),
            167 => 
            array (
                'videoID' => 213,
                'videoName' => 'Tokyo Ghoul S1 Episode 1',
                'videoDesc' => 'Episode 1 of the series:Tokyo Ghoul S1',
                'videoURL' => 'vids/Tokyo Ghoul S1/episode 1.mp4',
                'genre' => 0,
            ),
            168 => 
            array (
                'videoID' => 214,
                'videoName' => 'Tokyo Ghoul S1 Episode 2',
                'videoDesc' => 'Episode 2 of the series:Tokyo Ghoul S1',
                'videoURL' => 'vids/Tokyo Ghoul S1/episode 2.mp4',
                'genre' => 0,
            ),
            169 => 
            array (
                'videoID' => 215,
                'videoName' => 'Tokyo Ghoul S1 Episode 3',
                'videoDesc' => 'Episode 3 of the series:Tokyo Ghoul S1',
                'videoURL' => 'vids/Tokyo Ghoul S1/episode 3.mp4',
                'genre' => 0,
            ),
            170 => 
            array (
                'videoID' => 216,
                'videoName' => 'Tokyo Ghoul S1 Episode 4',
                'videoDesc' => 'Episode 4 of the series:Tokyo Ghoul S1',
                'videoURL' => 'vids/Tokyo Ghoul S1/episode 4.mp4',
                'genre' => 0,
            ),
            171 => 
            array (
                'videoID' => 217,
                'videoName' => 'Tokyo Ghoul S1 Episode 5',
                'videoDesc' => 'Episode 5 of the series:Tokyo Ghoul S1',
                'videoURL' => 'vids/Tokyo Ghoul S1/episode 5.mp4',
                'genre' => 0,
            ),
            172 => 
            array (
                'videoID' => 218,
                'videoName' => 'Tokyo Ghoul S1 Episode 6',
                'videoDesc' => 'Episode 6 of the series:Tokyo Ghoul S1',
                'videoURL' => 'vids/Tokyo Ghoul S1/episode 6.mp4',
                'genre' => 0,
            ),
            173 => 
            array (
                'videoID' => 219,
                'videoName' => 'Tokyo Ghoul S1 Episode 7',
                'videoDesc' => 'Episode 7 of the series:Tokyo Ghoul S1',
                'videoURL' => 'vids/Tokyo Ghoul S1/episode 7.mp4',
                'genre' => 0,
            ),
            174 => 
            array (
                'videoID' => 220,
                'videoName' => 'Tokyo Ghoul S1 Episode 8',
                'videoDesc' => 'Episode 8 of the series:Tokyo Ghoul S1',
                'videoURL' => 'vids/Tokyo Ghoul S1/episode 8.mp4',
                'genre' => 0,
            ),
            175 => 
            array (
                'videoID' => 221,
                'videoName' => 'Tokyo Ghoul S1 Episode 9',
                'videoDesc' => 'Episode 9 of the series:Tokyo Ghoul S1',
                'videoURL' => 'vids/Tokyo Ghoul S1/episode 9.mp4',
                'genre' => 0,
            ),
            176 => 
            array (
                'videoID' => 222,
                'videoName' => 'Tokyo Ghoul S1 Episode 10',
                'videoDesc' => 'Episode 10 of the series:Tokyo Ghoul S1',
                'videoURL' => 'vids/Tokyo Ghoul S1/episode A10.mp4',
                'genre' => 0,
            ),
            177 => 
            array (
                'videoID' => 223,
                'videoName' => 'Tokyo Ghoul S1 Episode 11',
                'videoDesc' => 'Episode 11 of the series:Tokyo Ghoul S1',
                'videoURL' => 'vids/Tokyo Ghoul S1/episode A11.mp4',
                'genre' => 0,
            ),
            178 => 
            array (
                'videoID' => 224,
                'videoName' => 'Tokyo Ghoul S1 Episode 12',
                'videoDesc' => 'Episode 12 of the series:Tokyo Ghoul S1',
                'videoURL' => 'vids/Tokyo Ghoul S1/episode A12.mp4',
                'genre' => 0,
            ),
            179 => 
            array (
                'videoID' => 225,
                'videoName' => 'Tokyo Ghoul S2 Episode 1',
                'videoDesc' => 'Episode 1 of the series:Tokyo Ghoul S2',
                'videoURL' => 'vids/Tokyo Ghoul S2/TG s2 ep1.mp4',
                'genre' => 0,
            ),
            180 => 
            array (
                'videoID' => 226,
                'videoName' => 'Tokyo Ghoul S2 Episode 2',
                'videoDesc' => 'Episode 2 of the series:Tokyo Ghoul S2',
                'videoURL' => 'vids/Tokyo Ghoul S2/TG s2 ep2.mp4',
                'genre' => 0,
            ),
            181 => 
            array (
                'videoID' => 227,
                'videoName' => 'Tokyo Ghoul S2 Episode 3',
                'videoDesc' => 'Episode 3 of the series:Tokyo Ghoul S2',
                'videoURL' => 'vids/Tokyo Ghoul S2/TG s2 ep3.mp4',
                'genre' => 0,
            ),
            182 => 
            array (
                'videoID' => 228,
                'videoName' => 'Tokyo Ghoul S2 Episode 4',
                'videoDesc' => 'Episode 4 of the series:Tokyo Ghoul S2',
                'videoURL' => 'vids/Tokyo Ghoul S2/TG s2 ep4.mp4',
                'genre' => 0,
            ),
            183 => 
            array (
                'videoID' => 229,
                'videoName' => 'Tokyo Ghoul S2 Episode 5',
                'videoDesc' => 'Episode 5 of the series:Tokyo Ghoul S2',
                'videoURL' => 'vids/Tokyo Ghoul S2/TG s2 ep5.mp4',
                'genre' => 0,
            ),
            184 => 
            array (
                'videoID' => 230,
                'videoName' => 'Tokyo Ghoul S2 Episode 6',
                'videoDesc' => 'Episode 6 of the series:Tokyo Ghoul S2',
                'videoURL' => 'vids/Tokyo Ghoul S2/TG s2 ep6.mp4',
                'genre' => 0,
            ),
            185 => 
            array (
                'videoID' => 231,
                'videoName' => 'Tokyo Ghoul S2 Episode 7',
                'videoDesc' => 'Episode 7 of the series:Tokyo Ghoul S2',
                'videoURL' => 'vids/Tokyo Ghoul S2/TG s2 ep7.mp4',
                'genre' => 0,
            ),
            186 => 
            array (
                'videoID' => 232,
                'videoName' => 'Tokyo Ghoul S2 Episode 8',
                'videoDesc' => 'Episode 8 of the series:Tokyo Ghoul S2',
                'videoURL' => 'vids/Tokyo Ghoul S2/TG s2 ep8.mp4',
                'genre' => 0,
            ),
            187 => 
            array (
                'videoID' => 233,
                'videoName' => 'Tokyo Ghoul S2 Episode 9',
                'videoDesc' => 'Episode 9 of the series:Tokyo Ghoul S2',
                'videoURL' => 'vids/Tokyo Ghoul S2/TG s2 ep9.mp4',
                'genre' => 0,
            ),
            188 => 
            array (
                'videoID' => 234,
                'videoName' => 'Tokyo Ghoul S2 Episode 10',
                'videoDesc' => 'Episode 10 of the series:Tokyo Ghoul S2',
                'videoURL' => 'vids/Tokyo Ghoul S2/TG s2 epA10.mp4',
                'genre' => 0,
            ),
            189 => 
            array (
                'videoID' => 235,
                'videoName' => 'Tokyo Ghoul S2 Episode 11',
                'videoDesc' => 'Episode 11 of the series:Tokyo Ghoul S2',
                'videoURL' => 'vids/Tokyo Ghoul S2/TG s2 epA11.mp4',
                'genre' => 0,
            ),
            190 => 
            array (
                'videoID' => 236,
                'videoName' => 'Tokyo Ghoul S2 Episode 12',
                'videoDesc' => 'Episode 12 of the series:Tokyo Ghoul S2',
                'videoURL' => 'vids/Tokyo Ghoul S2/TG s2 epA12.mp4',
                'genre' => 0,
            ),
            191 => 
            array (
                'videoID' => 248,
                'videoName' => 'Cheese in the Trap Episode 1',
                'videoDesc' => 'Episode 1 of the series:Cheese in the Trap',
                'videoURL' => 'vids/Cheese in the Trap/Cheese in the Trap episode 1.mp4',
                'genre' => 1,
            ),
            192 => 
            array (
                'videoID' => 249,
                'videoName' => 'Cheese in the Trap Episode 2',
                'videoDesc' => 'Episode 2 of the series:Cheese in the Trap',
                'videoURL' => 'vids/Cheese in the Trap/Cheese in the Trap episode 10.mp4',
                'genre' => 1,
            ),
            193 => 
            array (
                'videoID' => 250,
                'videoName' => 'Cheese in the Trap Episode 3',
                'videoDesc' => 'Episode 3 of the series:Cheese in the Trap',
                'videoURL' => 'vids/Cheese in the Trap/Cheese in the Trap episode 11.mp4',
                'genre' => 1,
            ),
            194 => 
            array (
                'videoID' => 251,
                'videoName' => 'Cheese in the Trap Episode 4',
                'videoDesc' => 'Episode 4 of the series:Cheese in the Trap',
                'videoURL' => 'vids/Cheese in the Trap/Cheese in the Trap episode 12.mp4',
                'genre' => 1,
            ),
            195 => 
            array (
                'videoID' => 252,
                'videoName' => 'Cheese in the Trap Episode 5',
                'videoDesc' => 'Episode 5 of the series:Cheese in the Trap',
                'videoURL' => 'vids/Cheese in the Trap/Cheese in the Trap episode 13.mp4',
                'genre' => 1,
            ),
            196 => 
            array (
                'videoID' => 253,
                'videoName' => 'Cheese in the Trap Episode 6',
                'videoDesc' => 'Episode 6 of the series:Cheese in the Trap',
                'videoURL' => 'vids/Cheese in the Trap/Cheese in the Trap episode 14.mp4',
                'genre' => 1,
            ),
            197 => 
            array (
                'videoID' => 254,
                'videoName' => 'Cheese in the Trap Episode 7',
                'videoDesc' => 'Episode 7 of the series:Cheese in the Trap',
                'videoURL' => 'vids/Cheese in the Trap/Cheese in the Trap episode 15.mp4',
                'genre' => 1,
            ),
            198 => 
            array (
                'videoID' => 255,
                'videoName' => 'Cheese in the Trap Episode 8',
                'videoDesc' => 'Episode 8 of the series:Cheese in the Trap',
                'videoURL' => 'vids/Cheese in the Trap/Cheese in the Trap episode 16.mp4',
                'genre' => 1,
            ),
            199 => 
            array (
                'videoID' => 256,
                'videoName' => 'Cheese in the Trap Episode 9',
                'videoDesc' => 'Episode 9 of the series:Cheese in the Trap',
                'videoURL' => 'vids/Cheese in the Trap/Cheese in the Trap episode 2.mp4',
                'genre' => 1,
            ),
            200 => 
            array (
                'videoID' => 257,
                'videoName' => 'Cheese in the Trap Episode 10',
                'videoDesc' => 'Episode 10 of the series:Cheese in the Trap',
                'videoURL' => 'vids/Cheese in the Trap/Cheese in the Trap episode 3.mp4',
                'genre' => 1,
            ),
            201 => 
            array (
                'videoID' => 258,
                'videoName' => 'Cheese in the Trap Episode 11',
                'videoDesc' => 'Episode 11 of the series:Cheese in the Trap',
                'videoURL' => 'vids/Cheese in the Trap/Cheese in the Trap episode 4.mp4',
                'genre' => 1,
            ),
            202 => 
            array (
                'videoID' => 259,
                'videoName' => 'Cheese in the Trap Episode 12',
                'videoDesc' => 'Episode 12 of the series:Cheese in the Trap',
                'videoURL' => 'vids/Cheese in the Trap/Cheese in the Trap episode 5.mp4',
                'genre' => 1,
            ),
            203 => 
            array (
                'videoID' => 260,
                'videoName' => 'Cheese in the Trap Episode 13',
                'videoDesc' => 'Episode 13 of the series:Cheese in the Trap',
                'videoURL' => 'vids/Cheese in the Trap/Cheese in the Trap episode 6.mp4',
                'genre' => 1,
            ),
            204 => 
            array (
                'videoID' => 261,
                'videoName' => 'Cheese in the Trap Episode 14',
                'videoDesc' => 'Episode 14 of the series:Cheese in the Trap',
                'videoURL' => 'vids/Cheese in the Trap/Cheese in the Trap episode 7.mp4',
                'genre' => 1,
            ),
            205 => 
            array (
                'videoID' => 262,
                'videoName' => 'Cheese in the Trap Episode 15',
                'videoDesc' => 'Episode 15 of the series:Cheese in the Trap',
                'videoURL' => 'vids/Cheese in the Trap/Cheese in the Trap episode 8.mp4',
                'genre' => 1,
            ),
            206 => 
            array (
                'videoID' => 263,
                'videoName' => 'Cheese in the Trap Episode 16',
                'videoDesc' => 'Episode 16 of the series:Cheese in the Trap',
                'videoURL' => 'vids/Cheese in the Trap/Cheese in the Trap episode 9.mp4',
                'genre' => 0,
            ),
        ));
        
        
    }
}
