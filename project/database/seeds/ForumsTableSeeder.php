<?php

use Illuminate\Database\Seeder;

class ForumsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('forums')->delete();
        
        \DB::table('forums')->insert(array (
            0 => 
            array (
                'id' => 16,
                'title' => 'Hi
',
                'author' => 'James Michael Kuizon',
                'tag_id' => 1,
                'num_comments' => 26,
                'color' => '#00cdfa',
                'created_at' => '2017-10-23 13:44:18',
                'updated_at' => '2017-12-05 03:11:30',
            ),
            1 => 
            array (
                'id' => 17,
                'title' => 'Mayonatics Fan Club',
                'author' => 'VladJamir Tingson',
                'tag_id' => 1,
                'num_comments' => 26,
                'color' => '#6a5477',
                'created_at' => '2017-10-23 13:52:26',
                'updated_at' => '2017-11-30 07:21:01',
            ),
            2 => 
            array (
                'id' => 18,
                'title' => 'DAPAT NADEDELETE IT FORUM',
                'author' => 'VladJamir Tingson',
                'tag_id' => 1,
                'num_comments' => 2,
                'color' => '#151512',
                'created_at' => '2017-10-23 13:47:26',
                'updated_at' => '2017-11-15 15:39:24',
            ),
            3 => 
            array (
                'id' => 20,
                'title' => 'REPORT BUGS',
                'author' => 'VladJamir Tingson',
                'tag_id' => 1,
                'num_comments' => 17,
                'color' => '#fa4412',
                'created_at' => '2017-10-23 13:50:43',
                'updated_at' => '2017-11-15 15:39:24',
            ),
            4 => 
            array (
                'id' => 21,
                'title' => 'WALWALAN FORUM #OneUP',
                'author' => 'VladJamir Tingson',
                'tag_id' => 1,
                'num_comments' => 14,
                'color' => '#010203',
                'created_at' => '2017-10-23 13:47:33',
                'updated_at' => '2017-11-15 15:39:24',
            ),
            5 => 
            array (
                'id' => 22,
                'title' => 'JOKES SECTION',
                'author' => 'VladJamir Tingson',
                'tag_id' => 1,
                'num_comments' => 13,
                'color' => '#999900',
                'created_at' => '2017-10-23 13:49:27',
                'updated_at' => '2017-11-15 15:39:24',
            ),
            6 => 
            array (
                'id' => 23,
                'title' => 'CRUSHABLES in UP',
                'author' => 'VladJamir Tingson',
                'tag_id' => 1,
                'num_comments' => 38,
                'color' => '#abcdef',
                'created_at' => '2017-10-23 14:08:26',
                'updated_at' => '2017-11-15 15:39:24',
            ),
            7 => 
            array (
                'id' => 24,
                'title' => 'ARCADE TOURNAMENT somewhere ha CS LAB 3 pamakiana nala',
                'author' => 'VladJamir Tingson',
                'tag_id' => 1,
                'num_comments' => 6,
                'color' => '#fedcba',
                'created_at' => '2017-10-23 14:17:09',
                'updated_at' => '2017-11-15 15:39:24',
            ),
            8 => 
            array (
                'id' => 26,
                'title' => 'COMMEND SECTION',
                'author' => 'VladJamir Tingson',
                'tag_id' => 1,
                'num_comments' => 6,
                'color' => '#123456',
                'created_at' => '2017-10-23 13:47:37',
                'updated_at' => '2017-11-15 15:39:24',
            ),
            9 => 
            array (
                'id' => 27,
                'title' => 'SUGGESTIONS BOX',
            'author' => 'Juan(John) Gawin(Doe)',
                'tag_id' => 1,
                'num_comments' => 7,
                'color' => '#654321',
                'created_at' => '2017-10-23 17:43:12',
                'updated_at' => '2017-11-15 15:39:24',
            ),
            10 => 
            array (
                'id' => 28,
                'title' => 'TEST FORUM',
                'author' => 'VladJamir Tingson',
                'tag_id' => 1,
                'num_comments' => 0,
                'color' => '#ab5487',
                'created_at' => '2017-10-24 12:24:35',
                'updated_at' => '2017-11-15 15:39:24',
            ),
            11 => 
            array (
                'id' => 29,
                'title' => 'Papa Mao',
                'author' => 'Mao Zedong',
                'tag_id' => 1,
                'num_comments' => 0,
                'color' => '#fd54a3',
                'created_at' => '2017-10-24 15:39:22',
                'updated_at' => '2017-11-15 15:39:24',
            ),
            12 => 
            array (
                'id' => 30,
                'title' => 'ZANDERNATICS!!!',
                'author' => 'Zander Ford',
                'tag_id' => 1,
                'num_comments' => 4,
                'color' => '#12adbb',
                'created_at' => '2017-10-24 16:36:47',
                'updated_at' => '2017-11-15 15:39:24',
            ),
            13 => 
            array (
                'id' => 31,
                'title' => 'Kamusta Scholars!!!',
                'author' => 'Virgildo Sabalo',
                'tag_id' => 1,
                'num_comments' => 1,
                'color' => '#bcbccb',
                'created_at' => '2017-10-24 16:45:41',
                'updated_at' => '2017-11-15 15:39:24',
            ),
            14 => 
            array (
                'id' => 32,
                'title' => 'GATE CRASH',
                'author' => 'Earth Kingdom',
                'tag_id' => 1,
                'num_comments' => 6,
                'color' => '#981256',
                'created_at' => '2017-10-24 17:29:36',
                'updated_at' => '2017-11-15 15:39:24',
            ),
            15 => 
            array (
                'id' => 33,
                'title' => 'SEND NUKES',
                'author' => 'Albuen Rosello',
                'tag_id' => 1,
                'num_comments' => 1,
                'color' => '#cccccc',
                'created_at' => '2017-10-24 17:35:19',
                'updated_at' => '2017-11-15 15:39:24',
            ),
            16 => 
            array (
                'id' => 34,
                'title' => 'FINDING JOWA',
                'author' => 'VladJamir Tingson',
                'tag_id' => 1,
                'num_comments' => 8,
                'color' => '#6512ff',
                'created_at' => '2017-10-24 17:45:35',
                'updated_at' => '2017-11-15 15:39:24',
            ),
            17 => 
            array (
                'id' => 35,
                'title' => 'ANNOUNCEMENT',
                'author' => 'John Ultra',
                'tag_id' => 1,
                'num_comments' => 1,
                'color' => '#abc123',
                'created_at' => '2017-10-24 17:59:00',
                'updated_at' => '2017-11-15 15:39:24',
            ),
            18 => 
            array (
                'id' => 36,
                'title' => 'Hain ba tak crush?',
                'author' => 'Anez Baekhyun',
                'tag_id' => 1,
                'num_comments' => 2,
                'color' => '#bbbccc',
                'created_at' => '2017-10-26 11:32:06',
                'updated_at' => '2017-11-15 15:39:24',
            ),
            19 => 
            array (
                'id' => 37,
                'title' => '#OneUP',
                'author' => 'Anez Baekhyun',
                'tag_id' => 1,
                'num_comments' => 2,
                'color' => '#423902',
                'created_at' => '2017-10-26 11:32:41',
                'updated_at' => '2017-11-15 15:39:24',
            ),
            20 => 
            array (
                'id' => 38,
                'title' => 'KOMSAI WARS',
                'author' => 'ENTREL B',
                'tag_id' => 1,
                'num_comments' => 0,
                'color' => '#981723',
                'created_at' => '2017-10-27 11:03:37',
                'updated_at' => '2017-11-15 15:39:24',
            ),
            21 => 
            array (
                'id' => 50,
                'title' => '#OneUP Tambayan',
            'author' => 'Juan(John) Gawin(Doe)',
                'tag_id' => 2,
                'num_comments' => 0,
                'color' => '#412904',
                'created_at' => '2017-11-18 03:44:58',
                'updated_at' => '2017-11-18 03:44:58',
            ),
            22 => 
            array (
                'id' => 51,
                'title' => 'Mic Test',
            'author' => 'Juan(John) Gawin(Doe)',
                'tag_id' => 3,
                'num_comments' => 2,
                'color' => '#940782',
                'created_at' => '2017-11-19 23:05:28',
                'updated_at' => '2017-11-19 23:05:28',
            ),
            23 => 
            array (
                'id' => 52,
            'title' => 'Let\'s talk about frameworks :)',
        'author' => 'Juan(John) Gawin(Doe)',
            'tag_id' => 3,
            'num_comments' => 1,
            'color' => '#fbc123',
            'created_at' => '2017-11-19 23:18:45',
            'updated_at' => '2017-11-19 23:18:45',
        ),
        24 => 
        array (
            'id' => 53,
            'title' => 'knock knock jokes section',
        'author' => 'Juan(John) Gawin(Doe)',
            'tag_id' => 4,
            'num_comments' => 0,
            'color' => '#afcbaa',
            'created_at' => '2017-11-20 03:55:09',
            'updated_at' => '2017-11-20 03:55:09',
        ),
        25 => 
        array (
            'id' => 54,
            'title' => 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into',
        'author' => 'Juan(John) Gawin(Doe)',
            'tag_id' => 3,
            'num_comments' => 0,
            'color' => '#66ccff',
            'created_at' => '2017-11-30 08:57:24',
            'updated_at' => '2017-11-30 08:57:24',
        ),
        26 => 
        array (
            'id' => 55,
            'title' => 'Random stuffs',
        'author' => 'Juan(John) Gawin(Doe)',
            'tag_id' => 1,
            'num_comments' => 0,
            'color' => '#ff0a0a',
            'created_at' => '2017-11-30 09:22:36',
            'updated_at' => '2017-11-30 09:22:36',
        ),
        27 => 
        array (
            'id' => 56,
            'title' => 'Startup Ideas',
        'author' => 'Juan(John) Gawin(Doe)',
            'tag_id' => 3,
            'num_comments' => 0,
            'color' => '#56e236',
            'created_at' => '2017-11-30 14:13:51',
            'updated_at' => '2017-11-30 14:13:51',
        ),
        28 => 
        array (
            'id' => 57,
            'title' => 'Which is the best JS Framework?',
            'author' => 'Gary Kasparov',
            'tag_id' => 3,
            'num_comments' => 0,
            'color' => '#2a2f57',
            'created_at' => '2017-12-04 15:38:59',
            'updated_at' => '2017-12-04 15:38:59',
        ),
        29 => 
        array (
            'id' => 58,
            'title' => 'Which is the best PHP Framework?',
            'author' => 'Gary Kasparov',
            'tag_id' => 3,
            'num_comments' => 0,
            'color' => '#2c810f',
            'created_at' => '2017-12-04 15:53:30',
            'updated_at' => '2017-12-04 15:53:30',
        ),
        30 => 
        array (
            'id' => 59,
            'title' => 'What book should I read about Effective Reading',
            'author' => 'Gary Kasparov',
            'tag_id' => 3,
            'num_comments' => 0,
            'color' => '#8e8f60',
            'created_at' => '2017-12-04 16:04:17',
            'updated_at' => '2017-12-04 16:04:17',
        ),
        31 => 
        array (
            'id' => 60,
            'title' => 'Suggest productivity tools',
            'author' => 'Gary Kasparov',
            'tag_id' => 3,
            'num_comments' => 0,
            'color' => '#cfa927',
            'created_at' => '2017-12-04 16:54:16',
            'updated_at' => '2017-12-04 16:54:16',
        ),
        32 => 
        array (
            'id' => 61,
            'title' => 'Suggest programming tips',
            'author' => 'Gary Kasparov',
            'tag_id' => 3,
            'num_comments' => 0,
            'color' => '#53b82b',
            'created_at' => '2017-12-04 16:56:11',
            'updated_at' => '2017-12-04 16:56:11',
        ),
        33 => 
        array (
            'id' => 62,
            'title' => 'Suggest computer architecture books',
            'author' => 'Gary Kasparov',
            'tag_id' => 3,
            'num_comments' => 0,
            'color' => '#9f2b39',
            'created_at' => '2017-12-04 16:57:41',
            'updated_at' => '2017-12-04 16:57:41',
        ),
        34 => 
        array (
            'id' => 63,
            'title' => 'Suggest data structures book',
            'author' => 'Gary Kasparov',
            'tag_id' => 3,
            'num_comments' => 0,
            'color' => '#cd6c8f',
            'created_at' => '2017-12-04 16:58:40',
            'updated_at' => '2017-12-04 16:58:40',
        ),
        35 => 
        array (
            'id' => 64,
            'title' => 'Life of a Computer Science Student?',
        'author' => 'Juan(John) Gawin(Doe)',
            'tag_id' => 3,
            'num_comments' => 0,
            'color' => '#448c31',
            'created_at' => '2018-07-26 03:54:07',
            'updated_at' => '2018-07-26 03:54:07',
        ),
    ));
        
        
    }
}
