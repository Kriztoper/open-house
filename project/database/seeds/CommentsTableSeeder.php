<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('comments')->delete();
        
        \DB::table('comments')->insert(array (
            0 => 
            array (
                'id' => 36,
                'forum_id' => 16,
                'content' => 'hello',
                'author' => 'Brey Gandaganda',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            1 => 
            array (
                'id' => 37,
                'forum_id' => 16,
                'content' => 'hala ganern masaya',
                'author' => 'Brey Gandaganda',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            2 => 
            array (
                'id' => 38,
                'forum_id' => 16,
                'content' => 'huyyyyyyyy',
                'author' => 'Brey Gandaganda',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            3 => 
            array (
                'id' => 39,
                'forum_id' => 16,
                'content' => 'Ganda ganda gud.',
                'author' => 'James Michael Kuizon',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            4 => 
            array (
                'id' => 40,
                'forum_id' => 17,
                'content' => 'OH NO!',
                'author' => 'Jhunn Margallo',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            5 => 
            array (
                'id' => 41,
                'forum_id' => 17,
                'content' => 'OH NO!',
                'author' => 'Jhunn Margallo',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            6 => 
            array (
                'id' => 42,
                'forum_id' => 17,
                'content' => 'Huli ka Tingson!',
                'author' => 'Francis Molina',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            7 => 
            array (
                'id' => 43,
                'forum_id' => 17,
                'content' => 'OH NO!',
                'author' => 'Jhunn Margallo',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            8 => 
            array (
                'id' => 44,
                'forum_id' => 17,
                'content' => 'OH NO!',
                'author' => 'Jhunn Margallo',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            9 => 
            array (
                'id' => 45,
                'forum_id' => 16,
                'content' => 'Pikat ka man',
                'author' => 'Francis Molina',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            10 => 
            array (
                'id' => 46,
                'forum_id' => 17,
                'content' => 'Iba gud.',
                'author' => 'James Michael Kuizon',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            11 => 
            array (
                'id' => 47,
                'forum_id' => 18,
                'content' => 'para ha mga nagsasayop pagtitle hin Forum',
                'author' => 'VladJamir Tingson',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            12 => 
            array (
                'id' => 48,
                'forum_id' => 16,
                'content' => 'Hacked',
                'author' => 'James Michael Kuizon',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            13 => 
            array (
                'id' => 49,
                'forum_id' => 17,
                'content' => 'promoted from VP to PRES',
                'author' => 'Albuen Rosello',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            14 => 
            array (
                'id' => 50,
                'forum_id' => 19,
                'content' => 'No title',
                'author' => 'VladJamir Tingson',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            15 => 
            array (
                'id' => 51,
                'forum_id' => 17,
                'content' => 'mayo na sinta ko',
                'author' => 'Albuen Rosello',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            16 => 
            array (
                'id' => 52,
                'forum_id' => 17,
                'content' => 'Ikaw na it CEO?
',
                'author' => 'Jhunn Margallo',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            17 => 
            array (
                'id' => 53,
                'forum_id' => 17,
                'content' => 'hanap hanap kita',
                'author' => 'VladJamir Tingson',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            18 => 
            array (
                'id' => 54,
                'forum_id' => 17,
                'content' => 'test for many messages',
                'author' => 'VladJamir Tingson',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            19 => 
            array (
                'id' => 55,
                'forum_id' => 17,
                'content' => 'test for many messages',
                'author' => 'VladJamir Tingson',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            20 => 
            array (
                'id' => 56,
                'forum_id' => 17,
                'content' => 'test for many messages',
                'author' => 'VladJamir Tingson',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            21 => 
            array (
                'id' => 57,
                'forum_id' => 17,
                'content' => 'test for many messages',
                'author' => 'VladJamir Tingson',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            22 => 
            array (
                'id' => 58,
                'forum_id' => 17,
                'content' => 'test for many messages',
                'author' => 'VladJamir Tingson',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            23 => 
            array (
                'id' => 59,
                'forum_id' => 17,
                'content' => 'test for many messages',
                'author' => 'VladJamir Tingson',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            24 => 
            array (
                'id' => 60,
                'forum_id' => 17,
                'content' => 'KOPI KREMAAAAAAAA',
                'author' => 'VladJamir Tingson',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            25 => 
            array (
                'id' => 61,
                'forum_id' => 17,
                'content' => 'kopi krememes',
                'author' => 'VladJamir Tingson',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            26 => 
            array (
                'id' => 62,
                'forum_id' => 20,
                'content' => 'PLEASE REPORT BUGS IF FOUND',
                'author' => 'VladJamir Tingson',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            27 => 
            array (
                'id' => 63,
                'forum_id' => 21,
                'content' => 'Present!',
                'author' => 'Francis Molina',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            28 => 
            array (
                'id' => 64,
                'forum_id' => 21,
                'content' => 'please post
SCHEDULE
LOCATION
CONTRIBUTION
for the next walwalan sesh',
                'author' => 'VladJamir Tingson',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            29 => 
            array (
                'id' => 65,
                'forum_id' => 20,
                'content' => 'Nandadara la ghap an mga account last year. Ig-flush it database',
                'author' => 'Francis Molina',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            30 => 
            array (
                'id' => 66,
                'forum_id' => 22,
                'content' => 'ANO IT MORNING JOKE HIT CHICKEN?
joke joke joke jojokeeeeee ',
                'author' => 'VladJamir Tingson',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            31 => 
            array (
                'id' => 67,
                'forum_id' => 23,
                'content' => 'alams na...',
                'author' => 'VladJamir Tingson',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            32 => 
            array (
                'id' => 68,
                'forum_id' => 24,
                'content' => 'Free for All',
                'author' => 'Francis Molina',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            33 => 
            array (
                'id' => 69,
                'forum_id' => 24,
                'content' => 'may TEKKEN 7, NARUTO STORM 4, STREET FIGHTER ngan NBA 2K18',
                'author' => 'VladJamir Tingson',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            34 => 
            array (
                'id' => 70,
                'forum_id' => 17,
                'content' => 'Di na napigilan ang pinang gigilan',
                'author' => 'Francis Molina',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            35 => 
            array (
                'id' => 71,
                'forum_id' => 22,
            'content' => '+5 tokens it best joke (daily basis)',
                'author' => 'VladJamir Tingson',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            36 => 
            array (
                'id' => 72,
                'forum_id' => 21,
                'content' => 'Komsai SportsFest Afterparty',
                'author' => 'Francis Molina',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            37 => 
            array (
                'id' => 73,
                'forum_id' => 17,
                'content' => 'bigla na lang siyang lumabas',
                'author' => 'Albuen Rosello',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            38 => 
            array (
                'id' => 74,
                'forum_id' => 20,
                'content' => 'cascade dapat after profile edit!!!',
                'author' => 'Mayonatics President',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            39 => 
            array (
                'id' => 75,
                'forum_id' => 20,
                'content' => 'nawawara an Forum Nav after profile edit',
                'author' => 'VladJamir Tingson',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            40 => 
            array (
                'id' => 76,
                'forum_id' => 18,
                'content' => 'waray karag delete forum',
                'author' => 'Albuen Rosello',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            41 => 
            array (
                'id' => 77,
                'forum_id' => 20,
                'content' => 'titleless forum should not be possible',
                'author' => 'VladJamir Tingson',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            42 => 
            array (
                'id' => 78,
                'forum_id' => 26,
                'content' => 'AMAZING IT OPENHAUS 2017',
                'author' => 'VladJamir Tingson',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            43 => 
            array (
                'id' => 79,
                'forum_id' => 20,
                'content' => 'dre naiban tokens kun naggames',
                'author' => 'VladJamir Tingson',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            44 => 
            array (
                'id' => 80,
                'forum_id' => 26,
                'content' => 'ig lock niyo an firefox',
                'author' => 'Albuen Rosello',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            45 => 
            array (
                'id' => 81,
                'forum_id' => 20,
                'content' => 'JOKE ^^^^^^',
                'author' => 'VladJamir Tingson',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            46 => 
            array (
                'id' => 82,
                'forum_id' => 20,
                'content' => 'Fixed na po ang nawawala ang forum nav after profile edit',
            'author' => 'Juan(John) Gawin(Doe)',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            47 => 
            array (
                'id' => 83,
                'forum_id' => 20,
                'content' => 'Maraming salamat po VladJamir Tingson sa pagreport :D',
            'author' => 'Juan(John) Gawin(Doe)',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            48 => 
            array (
                'id' => 84,
                'forum_id' => 20,
                'content' => 'HTML page title kay 2016 la gihap',
                'author' => 'Noel Garcia',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            49 => 
            array (
                'id' => 85,
                'forum_id' => 26,
                'content' => 'Nakalock na po. Salamat po sa suggestion. :D',
            'author' => 'Juan(John) Gawin(Doe)',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            50 => 
            array (
                'id' => 86,
                'forum_id' => 22,
                'content' => 'Question: Ano na geometric shape it immortal?
Answer: Juan (Cone)ce Enrile',
            'author' => 'Juan(John) Gawin(Doe)',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            51 => 
            array (
                'id' => 87,
                'forum_id' => 22,
            'content' => 'Q: Paano man maggreet an mga cone? A: (Cone)ichiwa',
            'author' => 'Juan(John) Gawin(Doe)',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            52 => 
            array (
                'id' => 88,
                'forum_id' => 20,
                'content' => 'Naedit na po. Salamat po Noel Garcia :D',
            'author' => 'Juan(John) Gawin(Doe)',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            53 => 
            array (
                'id' => 89,
                'forum_id' => 20,
                'content' => 'Fixed na po ang titleless forum bug. Salamat po VladJamir Tingson.',
            'author' => 'Juan(John) Gawin(Doe)',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            54 => 
            array (
                'id' => 90,
                'forum_id' => 22,
                'content' => 'Q: Ano man na parte hit lawas an fake news? A: Mocha Puson',
            'author' => 'Juan(John) Gawin(Doe)',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            55 => 
            array (
                'id' => 91,
                'forum_id' => 23,
                'content' => 'Kobe Alcober',
                'author' => 'Lodi Petmalu',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            56 => 
            array (
                'id' => 92,
                'forum_id' => 21,
                'content' => 'I heard po na meron this saturday at Ken Seco Residence',
                'author' => 'Lodi Petmalu',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            57 => 
            array (
                'id' => 93,
                'forum_id' => 16,
                'content' => 'hello
',
                'author' => 'Coleen Gail Jomadiao',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            58 => 
            array (
                'id' => 94,
                'forum_id' => 16,
                'content' => 'send nukes',
                'author' => 'Coleen Gail Jomadiao',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            59 => 
            array (
                'id' => 95,
                'forum_id' => 17,
                'content' => 'asdasd',
                'author' => 'Jethro Albano',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            60 => 
            array (
                'id' => 96,
                'forum_id' => 16,
                'content' => 'hacked
',
                'author' => 'Coleen Gail Jomadiao',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            61 => 
            array (
                'id' => 97,
                'forum_id' => 16,
                'content' => 'sorryy',
                'author' => 'Coleen Gail Jomadiao',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            62 => 
            array (
                'id' => 98,
                'forum_id' => 22,
                'content' => 'Ikaw',
                'author' => 'Coleen Gail Jomadiao',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            63 => 
            array (
                'id' => 99,
                'forum_id' => 27,
            'content' => 'Guys, pwede po kamo magsuggest dinhi hin features na iyo gusto maimplement. :)',
        'author' => 'Juan(John) Gawin(Doe)',
            'created_at' => '2017-11-14 14:29:41',
            'updated_at' => '2017-11-15 15:38:29',
        ),
        64 => 
        array (
            'id' => 100,
            'forum_id' => 24,
        'content' => 'Hello mic test... mic test... (Sana naglogout nalang ako)',
            'author' => 'JUDE BAGUINANG',
            'created_at' => '2017-11-14 14:29:41',
            'updated_at' => '2017-11-15 15:38:29',
        ),
        65 => 
        array (
            'id' => 101,
            'forum_id' => 24,
            'content' => 'para hindi ako mahacked
',
            'author' => 'JUDE BAGUINANG',
            'created_at' => '2017-11-14 14:29:41',
            'updated_at' => '2017-11-15 15:38:29',
        ),
        66 => 
        array (
            'id' => 102,
            'forum_id' => 24,
            'content' => 'huhuhaha',
            'author' => 'JUDE BAGUINANG',
            'created_at' => '2017-11-14 14:29:41',
            'updated_at' => '2017-11-15 15:38:29',
        ),
        67 => 
        array (
            'id' => 103,
            'forum_id' => 27,
            'content' => 'Delete forum daw. HAHAHAHHA',
            'author' => 'James Michael Kuizon',
            'created_at' => '2017-11-14 14:29:41',
            'updated_at' => '2017-11-15 15:38:29',
        ),
        68 => 
        array (
            'id' => 104,
            'forum_id' => 23,
            'content' => 'Darwin Gompad',
            'author' => 'Kyah Pembarya',
            'created_at' => '2017-11-14 14:29:41',
            'updated_at' => '2017-11-15 15:38:29',
        ),
        69 => 
        array (
            'id' => 105,
            'forum_id' => 23,
            'content' => 'Jay Nuevo <3',
            'author' => 'J Nuevo',
            'created_at' => '2017-11-14 14:29:41',
            'updated_at' => '2017-11-15 15:38:29',
        ),
        70 => 
        array (
            'id' => 106,
            'forum_id' => 27,
            'content' => 'Dire po hiya pwede ha forums. HAHAHAHHA',
        'author' => 'Juan(John) Gawin(Doe)',
            'created_at' => '2017-11-14 14:29:41',
            'updated_at' => '2017-11-15 15:38:29',
        ),
        71 => 
        array (
            'id' => 107,
            'forum_id' => 23,
            'content' => 'Noel Garcia <3',
            'author' => 'J   >:( Nuevo',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            72 => 
            array (
                'id' => 108,
                'forum_id' => 17,
                'content' => 'HUGOT!
',
                'author' => 'Carlo Valleramos',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            73 => 
            array (
                'id' => 109,
                'forum_id' => 17,
                'content' => 'party? big crowd? ayoko niyan',
                'author' => 'Carlo Valleramos',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            74 => 
            array (
                'id' => 110,
                'forum_id' => 24,
                'content' => 'Mamulay ak basta diri mamulay hi onii-chan',
                'author' => 'Mao Zedong',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            75 => 
            array (
                'id' => 111,
                'forum_id' => 23,
                'content' => 'Vladimir Lenin',
                'author' => 'Mao Zedong',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            76 => 
            array (
                'id' => 112,
                'forum_id' => 21,
                'content' => 'Maupod',
                'author' => 'Mao Zedong',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            77 => 
            array (
                'id' => 113,
                'forum_id' => 27,
                'content' => 'Snacks as prizes ha CS Activities',
                'author' => 'Mao Zedong',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            78 => 
            array (
                'id' => 114,
                'forum_id' => 16,
            'content' => 'Are you here often? ;)
',
            'author' => 'Lady Angela Robles',
            'created_at' => '2017-11-14 14:29:41',
            'updated_at' => '2017-11-15 15:38:29',
        ),
        79 => 
        array (
            'id' => 115,
            'forum_id' => 16,
            'content' => 'Musta kayo dito?
',
            'author' => 'Lady Angela Robles',
            'created_at' => '2017-11-14 14:29:41',
            'updated_at' => '2017-11-15 15:38:29',
        ),
        80 => 
        array (
            'id' => 116,
            'forum_id' => 16,
        'content' => 'not really :) ',
        'author' => 'Coleen Gail Jomadiao',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    81 => 
    array (
        'id' => 117,
        'forum_id' => 16,
        'content' => 'HI guys
',
        'author' => 'Lady Angela Robles',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    82 => 
    array (
        'id' => 118,
        'forum_id' => 16,
        'content' => 'coleen fyt me',
        'author' => 'Lady Angela Robles',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    83 => 
    array (
        'id' => 119,
        'forum_id' => 16,
        'content' => 'cashmeouside howboudah?\\
',
        'author' => 'Lady Angela Robles',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    84 => 
    array (
        'id' => 120,
        'forum_id' => 16,
        'content' => 'yooo',
        'author' => 'Poor Chigga',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    85 => 
    array (
        'id' => 121,
        'forum_id' => 23,
        'content' => 'Coleen <3',
        'author' => 'Poor Chigga',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    86 => 
    array (
        'id' => 122,
        'forum_id' => 23,
        'content' => 'Katrina G <3',
        'author' => 'Zander Ford',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    87 => 
    array (
        'id' => 123,
        'forum_id' => 16,
        'content' => 'KAMUSTA KAYOO',
        'author' => 'Zander Ford',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    88 => 
    array (
        'id' => 124,
        'forum_id' => 30,
        'content' => 'ULOL, X hindi Z',
        'author' => 'Xander Ford',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    89 => 
    array (
        'id' => 125,
        'forum_id' => 16,
        'content' => 'hellooo, pinipig o ako?',
        'author' => 'Xander Ford',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    90 => 
    array (
        'id' => 126,
        'forum_id' => 23,
        'content' => 'OLIVER MEJICA p rin mga ****',
        'author' => 'abnkkbsnplk ',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    91 => 
    array (
        'id' => 127,
        'forum_id' => 23,
        'content' => 'Breschia V. <3 ',
        'author' => 'Xander Ford',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    92 => 
    array (
        'id' => 128,
        'forum_id' => 23,
        'content' => 'GO COLEEN!
',
        'author' => 'Richard Redil',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    93 => 
    array (
        'id' => 129,
        'forum_id' => 23,
        'content' => 'COLEEN SHAME!!!!!
',
        'author' => 'Richard Redil',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    94 => 
    array (
        'id' => 130,
        'forum_id' => 23,
        'content' => 'Breshia*',
        'author' => 'Xander Ford',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    95 => 
    array (
        'id' => 131,
        'forum_id' => 23,
        'content' => 'Breschia*',
        'author' => 'Xander Ford',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    96 => 
    array (
        'id' => 132,
        'forum_id' => 23,
        'content' => '*Brescia po.',
        'author' => 'Zaivy Mae Villanobos',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    97 => 
    array (
        'id' => 133,
        'forum_id' => 23,
        'content' => 'Bash nala',
        'author' => 'Xander Ford',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    98 => 
    array (
        'id' => 134,
        'forum_id' => 23,
        'content' => 'Rodrigo Muterte <3',
        'author' => 'Zaivy Mae Villanobos',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    99 => 
    array (
        'id' => 135,
        'forum_id' => 23,
        'content' => 'FUCK YOU COLEEN
',
        'author' => 'Richard Redil',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    100 => 
    array (
        'id' => 136,
        'forum_id' => 23,
        'content' => 'RICHARD REDIL <3 ',
        'author' => 'Shaira Lee',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    101 => 
    array (
        'id' => 137,
        'forum_id' => 23,
        'content' => 'RICHARD REDIL PA RIN! -Richard

',
        'author' => 'Richard Redil',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    102 => 
    array (
        'id' => 138,
        'forum_id' => 30,
        'content' => 'FAKE NEWS!!!',
        'author' => 'abnkkbsnplk ',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    103 => 
    array (
        'id' => 139,
        'forum_id' => 30,
        'content' => 'AHHAHAHAHAHHAHAHA',
        'author' => 'Shaira Lee',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    104 => 
    array (
        'id' => 140,
        'forum_id' => 21,
        'content' => 'WHEN?',
        'author' => 'Shaira Lee',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    105 => 
    array (
        'id' => 141,
        'forum_id' => 23,
        'content' => 'Aweeee. SELF LOVE
',
        'author' => 'DO Kyungsoo',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    106 => 
    array (
        'id' => 142,
        'forum_id' => 22,
        'content' => ':(',
            'author' => 'DO Kyungsoo',
            'created_at' => '2017-11-14 14:29:41',
            'updated_at' => '2017-11-15 15:38:29',
        ),
        107 => 
        array (
            'id' => 143,
            'forum_id' => 22,
            'content' => 'Tak grades :(((',
                'author' => 'Shaira Lee',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            108 => 
            array (
                'id' => 144,
                'forum_id' => 23,
                'content' => 'RICHARD REDIL bakit ka fafa?',
                'author' => 'abnkkbsnplk ',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            109 => 
            array (
                'id' => 145,
                'forum_id' => 23,
                'content' => 'Si Dean?',
                'author' => 'DO Kyungsoo',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            110 => 
            array (
                'id' => 146,
                'forum_id' => 23,
                'content' => 'Hello, ako crushable ',
                'author' => 'Virgildo Sabalo',
                'created_at' => '2017-11-14 14:29:41',
                'updated_at' => '2017-11-15 15:38:29',
            ),
            111 => 
            array (
                'id' => 147,
                'forum_id' => 31,
            'content' => 'Hello, kamusta kayo :) kamusta acads? WALWAL PA MORE',
            'author' => 'Virgildo Sabalo',
            'created_at' => '2017-11-14 14:29:41',
            'updated_at' => '2017-11-15 15:38:29',
        ),
        112 => 
        array (
            'id' => 148,
            'forum_id' => 23,
            'content' => 'Excuse me?',
            'author' => 'JBPCabs _FishLover',
            'created_at' => '2017-11-14 14:29:41',
            'updated_at' => '2017-11-15 15:38:29',
        ),
        113 => 
        array (
            'id' => 149,
            'forum_id' => 21,
            'content' => 'Upaya gud na makagraduate kamo',
            'author' => 'Virgildo Sabalo',
            'created_at' => '2017-11-14 14:29:41',
            'updated_at' => '2017-11-15 15:38:29',
        ),
        114 => 
        array (
            'id' => 150,
            'forum_id' => 22,
            'content' => '5k ng ched',
            'author' => 'Virgildo Sabalo',
            'created_at' => '2017-11-14 14:29:41',
            'updated_at' => '2017-11-15 15:38:29',
        ),
        115 => 
        array (
            'id' => 151,
            'forum_id' => 21,
            'content' => 'I believe in the capabilities of the students.',
            'author' => 'JBPCabs _FishLover',
            'created_at' => '2017-11-14 14:29:41',
            'updated_at' => '2017-11-15 15:38:29',
        ),
        116 => 
        array (
            'id' => 152,
            'forum_id' => 23,
            'content' => 'Huh? Adi hi Dean?',
        'author' => 'Juan(John) Gawin(Doe)',
            'created_at' => '2017-11-14 14:29:41',
            'updated_at' => '2017-11-15 15:38:29',
        ),
        117 => 
        array (
            'id' => 153,
            'forum_id' => 23,
            'content' => 'MAYONA ALCALA
',
        'author' => 'Juan(John) Gawin(Doe)',
            'created_at' => '2017-11-14 14:29:41',
            'updated_at' => '2017-11-15 15:38:29',
        ),
        118 => 
        array (
            'id' => 154,
            'forum_id' => 23,
            'content' => 'CLARK LAJARCA',
        'author' => 'Juan(John) Gawin(Doe)',
            'created_at' => '2017-11-14 14:29:41',
            'updated_at' => '2017-11-15 15:38:29',
        ),
        119 => 
        array (
            'id' => 155,
            'forum_id' => 23,
            'content' => 'Hi Dean. ',
            'author' => 'JBPCabs _FishLover',
            'created_at' => '2017-11-14 14:29:41',
            'updated_at' => '2017-11-15 15:38:29',
        ),
        120 => 
        array (
            'id' => 156,
            'forum_id' => 23,
            'content' => 'Cheers',
            'author' => 'JBPCabs _FishLover',
            'created_at' => '2017-11-14 14:29:41',
            'updated_at' => '2017-11-15 15:38:29',
        ),
        121 => 
        array (
            'id' => 157,
            'forum_id' => 23,
            'content' => 'Nathalie Legion',
            'author' => 'Mc Colleine Gadores',
            'created_at' => '2017-11-14 14:29:41',
            'updated_at' => '2017-11-15 15:38:29',
        ),
        122 => 
        array (
            'id' => 158,
            'forum_id' => 20,
        'content' => '100 nak starter tokens hahah then pag login ko the next day 105 :) thank you hahahaha',
        'author' => 'Coleen Jomadiao',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    123 => 
    array (
        'id' => 159,
        'forum_id' => 21,
        'content' => 'Kakayanin sir para GRUMADUATE',
        'author' => 'Joseph Stalin',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    124 => 
    array (
        'id' => 160,
        'forum_id' => 30,
        'content' => 'ez
bashed af',
        'author' => 'Joseph Stalin',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    125 => 
    array (
        'id' => 161,
        'forum_id' => 20,
        'content' => 'idk tho if considered hiya na "bug" hahaha if not then nsl',
        'author' => 'Coleen Jomadiao',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    126 => 
    array (
        'id' => 162,
        'forum_id' => 21,
        'content' => 'Mamaya man daw?',
        'author' => 'Nikko Gabriel Aquino',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    127 => 
    array (
        'id' => 163,
        'forum_id' => 23,
        'content' => 'Karl Marx',
        'author' => 'Nikko Gabriel Aquino',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    128 => 
    array (
        'id' => 164,
        'forum_id' => 32,
        'content' => 'Maraot pa iyo buot kay tungod nag-gate crash kami?',
        'author' => 'Earth Kingdom',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    129 => 
    array (
        'id' => 165,
        'forum_id' => 26,
        'content' => 'First time so amazing.',
        'author' => 'Earth Kingdom',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    130 => 
    array (
        'id' => 166,
        'forum_id' => 26,
        'content' => 'WARAY APP PARA MAGBILING JOWA?
',
        'author' => 'Earth Kingdom',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    131 => 
    array (
        'id' => 167,
        'forum_id' => 17,
        'content' => 'oh! ang kwek-kweh mo',
        'author' => 'Albuen Rosello',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    132 => 
    array (
        'id' => 168,
        'forum_id' => 32,
        'content' => 'Gulag',
        'author' => 'Joseph Stalin',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    133 => 
    array (
        'id' => 169,
        'forum_id' => 32,
        'content' => 'paano man kun waray gate?',
        'author' => 'Albuen Rosello',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    134 => 
    array (
        'id' => 170,
        'forum_id' => 21,
        'content' => 'Alagad iton ^ walwal pa more',
        'author' => 'Joseph Stalin',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    135 => 
    array (
        'id' => 171,
        'forum_id' => 23,
        'content' => 'Me',
        'author' => 'Joseph Stalin',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    136 => 
    array (
        'id' => 172,
        'forum_id' => 23,
        'content' => 'KIM JUNG CLARK',
        'author' => 'Albuen Rosello',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    137 => 
    array (
        'id' => 173,
        'forum_id' => 20,
        'content' => 'Actually nakalimutan ko na di ko nachange from 100 to 50 ang starting tokens mo',
    'author' => 'Juan(John) Gawin(Doe)',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    138 => 
    array (
        'id' => 174,
        'forum_id' => 20,
        'content' => ' then you got +5 para han activity cguro kakulop na imo na accomplish haha',
    'author' => 'Juan(John) Gawin(Doe)',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    139 => 
    array (
        'id' => 175,
        'forum_id' => 33,
        'content' => 'Ask and you shall receive',
        'author' => 'Kim Jong Un',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    140 => 
    array (
        'id' => 176,
        'forum_id' => 26,
        'content' => 'Try Tinder po',
    'author' => 'Juan(John) Gawin(Doe)',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    141 => 
    array (
        'id' => 177,
        'forum_id' => 32,
        'content' => 'Nagcrash kam ha gate?',
    'author' => 'Juan(John) Gawin(Doe)',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    142 => 
    array (
        'id' => 178,
        'forum_id' => 32,
        'content' => 'kun hi ehemmmmm gate, nagkacrash na ak ha iya',
        'author' => 'VladJamir Tingson',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    143 => 
    array (
        'id' => 179,
        'forum_id' => 23,
        'content' => 'VAL JAMIR TINGSON para libre komsai pasalida tas token #hackerman',
        'author' => 'VladJamir Tingson',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    144 => 
    array (
        'id' => 180,
        'forum_id' => 22,
        'content' => 'ano na cake it dre ginhahatag? -an cake han nagsurprise knina',
        'author' => 'VladJamir Tingson',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    145 => 
    array (
        'id' => 181,
        'forum_id' => 22,
        'content' => 'Lurong baadaw it nga comment ha igbaw^',
        'author' => 'Kim Jong Un',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    146 => 
    array (
        'id' => 182,
        'forum_id' => 22,
        'content' => 'joke la poehwzzz',
        'author' => 'VladJamir Tingson',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    147 => 
    array (
        'id' => 183,
        'forum_id' => 22,
        'content' => 'di na kam makakautro kay waray kam maghatag cake',
        'author' => 'Albuen Rosello',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    148 => 
    array (
        'id' => 184,
        'forum_id' => 34,
        'content' => 'ENUMERATE THE QUALITIES YOU ARE LOOKING FOR IN A JOWA',
        'author' => 'VladJamir Tingson',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    149 => 
    array (
        'id' => 185,
        'forum_id' => 34,
        'content' => 'it iya ngaran kay ....',
        'author' => 'VladJamir Tingson',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    150 => 
    array (
        'id' => 186,
        'forum_id' => 34,
        'content' => 'bis ano basta DAKO',
        'author' => 'Kim Jong Un',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    151 => 
    array (
        'id' => 187,
        'forum_id' => 23,
        'content' => 'april padrigano // gin force la po ak pagsurat haha',
        'author' => 'VladJamir Tingson',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    152 => 
    array (
        'id' => 188,
        'forum_id' => 34,
        'content' => 'pakyu albuen gamit pa tak account',
        'author' => 'Kim Jong Un',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    153 => 
    array (
        'id' => 189,
        'forum_id' => 34,
        'content' => 'clark lajarca po ini',
        'author' => 'Kim Jong Un',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    154 => 
    array (
        'id' => 190,
        'forum_id' => 27,
        'content' => 'SUNOD IT MABIRTHDAY MAPAKAON IT IRA DARA NA CAKE',
        'author' => 'basher org',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    155 => 
    array (
        'id' => 191,
        'forum_id' => 21,
        'content' => 'TARA IRIGNOM',
        'author' => 'basher org',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    156 => 
    array (
        'id' => 192,
        'forum_id' => 21,
        'content' => 'WEAKSHIT LIWAT KUNO HI CLARK KAY NASASAMAD',
        'author' => 'basher org',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    157 => 
    array (
        'id' => 193,
        'forum_id' => 34,
        'content' => 'ako pat ginsala',
        'author' => 'Albuen Rosello',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    158 => 
    array (
        'id' => 194,
        'forum_id' => 27,
        'content' => 'DI NA PAPASAKBON IT DIRI NAHATAG CAKE',
        'author' => 'Albuen Rosello',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    159 => 
    array (
        'id' => 195,
        'forum_id' => 35,
        'content' => 'Legit?
',
    'author' => 'Juan(John) Gawin(Doe)',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    160 => 
    array (
        'id' => 196,
        'forum_id' => 32,
        'content' => 'Hino na ehemmmmm?
',
    'author' => 'Juan(John) Gawin(Doe)',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    161 => 
    array (
        'id' => 197,
        'forum_id' => 34,
        'content' => 'eroy ka la',
        'author' => 'Kim Jong Un',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    162 => 
    array (
        'id' => 198,
        'forum_id' => 23,
        'content' => 'kailangan pa bang imemorize yan?',
        'author' => 'Anez Baekhyun',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    163 => 
    array (
        'id' => 199,
        'forum_id' => 34,
        'content' => 'pogi',
        'author' => 'Ken Seco',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    164 => 
    array (
        'id' => 200,
        'forum_id' => 36,
        'content' => 'adi ha balay',
        'author' => 'Ken Seco',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    165 => 
    array (
        'id' => 201,
        'forum_id' => 20,
        'content' => 'okok thanksss haahaaha',
        'author' => 'Coleen Jomadiao',
        'created_at' => '2017-11-14 14:29:41',
        'updated_at' => '2017-11-15 15:38:29',
    ),
    166 => 
    array (
        'id' => 202,
        'forum_id' => 36,
        'content' => 'ada tim <3',
        'author' => 'J  >:(  ',
            'created_at' => '2017-11-14 14:29:41',
            'updated_at' => '2017-11-15 15:38:29',
        ),
        167 => 
        array (
            'id' => 203,
            'forum_id' => 37,
            'content' => 'Cancelled',
            'author' => 'Nelbert Binongo',
            'created_at' => '2017-11-14 14:29:41',
            'updated_at' => '2017-11-15 15:38:29',
        ),
        168 => 
        array (
            'id' => 204,
            'forum_id' => 37,
            'content' => 'Rakkk!!',
            'author' => 'Clark Lajarca',
            'created_at' => '2017-11-14 14:29:41',
            'updated_at' => '2017-11-15 15:38:29',
        ),
        169 => 
        array (
            'id' => 205,
            'forum_id' => 17,
            'content' => 'LOVE YOU MAYONAA!!!
SAGOTA NA AKO PLEEEEEAAASSEEEE!!!!',
            'author' => 'Clark Lajarca',
            'created_at' => '2017-11-14 14:29:41',
            'updated_at' => '2017-11-15 15:38:29',
        ),
        170 => 
        array (
            'id' => 206,
            'forum_id' => 23,
            'content' => 'MAYONAAA T_T',
            'author' => 'Clark Lajarca',
            'created_at' => '2017-11-14 14:29:41',
            'updated_at' => '2017-11-15 15:38:29',
        ),
        171 => 
        array (
            'id' => 207,
            'forum_id' => 21,
            'content' => 'EDI WOWW!!!!',
            'author' => 'Clark Lajarca',
            'created_at' => '2017-11-14 14:29:41',
            'updated_at' => '2017-11-15 15:38:29',
        ),
        172 => 
        array (
            'id' => 208,
            'forum_id' => 27,
            'content' => 'I SUGGEST _ FOR ME',
            'author' => 'Clark Lajarca',
            'created_at' => '2017-11-14 14:29:41',
            'updated_at' => '2017-11-15 15:38:29',
        ),
        173 => 
        array (
            'id' => 209,
            'forum_id' => 51,
            'content' => 'Uhmmm...',
        'author' => 'Juan(John) Gawin(Doe)',
            'created_at' => '2017-11-19 23:06:56',
            'updated_at' => '2017-11-19 23:06:56',
        ),
        174 => 
        array (
            'id' => 215,
            'forum_id' => 51,
            'content' => 'Yeah...',
        'author' => 'Juan(John) Gawin(Doe)',
            'created_at' => '2017-11-19 23:17:21',
            'updated_at' => '2017-11-19 23:17:21',
        ),
        175 => 
        array (
            'id' => 216,
            'forum_id' => 52,
            'content' => 'I\'ve heard you like VueJS. Do you?',
        'author' => 'Juan(John) Gawin(Doe)',
            'created_at' => '2017-11-19 23:19:26',
            'updated_at' => '2017-11-19 23:19:26',
        ),
        176 => 
        array (
            'id' => 222,
            'forum_id' => 16,
            'content' => 'das',
        'author' => 'Juan(John) Gawin(Doe)',
            'created_at' => '2017-11-28 14:01:05',
            'updated_at' => '2017-11-28 14:01:05',
        ),
        177 => 
        array (
            'id' => 223,
            'forum_id' => 16,
            'content' => 'yas',
        'author' => 'Juan(John) Gawin(Doe)',
            'created_at' => '2017-11-30 14:59:42',
            'updated_at' => '2017-11-30 14:59:42',
        ),
        178 => 
        array (
            'id' => 225,
            'forum_id' => 16,
            'content' => 'gas',
        'author' => 'Juan(John) Gawin(Doe)',
            'created_at' => '2017-11-30 15:19:56',
            'updated_at' => '2017-11-30 15:19:56',
        ),
        179 => 
        array (
            'id' => 226,
            'forum_id' => 17,
            'content' => 'yo',
        'author' => 'Juan(John) Gawin(Doe)',
            'created_at' => '2017-11-30 07:21:00',
            'updated_at' => '2017-11-30 07:21:00',
        ),
        180 => 
        array (
            'id' => 227,
            'forum_id' => 16,
            'content' => 'bas',
        'author' => 'Juan(John) Gawin(Doe)',
            'created_at' => '2017-12-05 03:08:31',
            'updated_at' => '2017-12-05 03:08:31',
        ),
        181 => 
        array (
            'id' => 228,
            'forum_id' => 16,
            'content' => 'mas',
        'author' => 'Juan(John) Gawin(Doe)',
            'created_at' => '2017-12-05 03:08:48',
            'updated_at' => '2017-12-05 03:08:48',
        ),
        182 => 
        array (
            'id' => 229,
            'forum_id' => 16,
            'content' => 'was',
        'author' => 'Juan(John) Gawin(Doe)',
            'created_at' => '2017-12-05 03:11:03',
            'updated_at' => '2017-12-05 03:11:03',
        ),
        183 => 
        array (
            'id' => 230,
            'forum_id' => 16,
            'content' => 'pas',
        'author' => 'Juan(John) Gawin(Doe)',
            'created_at' => '2017-12-05 03:11:30',
            'updated_at' => '2017-12-05 03:11:30',
        ),
    ));
        
        
    }
}
