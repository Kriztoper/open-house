<?php

use Illuminate\Database\Seeder;

class SeriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('series')->delete();
        
        \DB::table('series')->insert(array (
            0 => 
            array (
                'seriesID' => 1,
                'seriesName' => 'Kokoro Connect',
                'seriesDesc' => 'Connection Story',
                'thumbnail' => 'Kokoro Connect',
                'fthumbnail' => 'Kokoro Connect 950',
            ),
            1 => 
            array (
                'seriesID' => 2,
                'seriesName' => 'D-Frag!',
                'seriesDesc' => 'Delinquent comedy',
                'thumbnail' => 'D-Frag!',
                'fthumbnail' => 'D-Frag! 950',
            ),
            2 => 
            array (
                'seriesID' => 3,
                'seriesName' => 'Assassination Classroom',
                'seriesDesc' => 'Assassination of an octopus',
                'thumbnail' => 'Assassination Classroom',
                'fthumbnail' => 'Assassination Classroom 950',
            ),
            3 => 
            array (
                'seriesID' => 4,
                'seriesName' => 'One Punch Man',
                'seriesDesc' => 'Extremely OP MC',
                'thumbnail' => 'One Punch Man',
                'fthumbnail' => 'One Punch Man 950',
            ),
            4 => 
            array (
                'seriesID' => 5,
                'seriesName' => 'Pinocchio',
                'seriesDesc' => 'Korean Pinocchio',
                'thumbnail' => 'Pinocchio',
                'fthumbnail' => 'Pinocchio 950',
            ),
            5 => 
            array (
                'seriesID' => 6,
                'seriesName' => 'White Album 2',
                'seriesDesc' => 'Winter "Romance" story',
                'thumbnail' => 'White Album 2',
                'fthumbnail' => 'White Album 2 950',
            ),
            6 => 
            array (
                'seriesID' => 8,
                'seriesName' => 'She Was Pretty',
                'seriesDesc' => 'Beautiful Korean',
                'thumbnail' => 'She Was Pretty',
                'fthumbnail' => 'She Was Pretty 950',
            ),
            7 => 
            array (
                'seriesID' => 9,
                'seriesName' => 'KHR',
                'seriesDesc' => 'The manga is about a young boy, Tsunayoshi Sawada, who discovers that he is next in line to become boss of the Vongola family, a powerful Mafia organization. The Vongolas\' most powerful hitman, a gun-toting infant named Reborn, is sent to teach Tsuna how ',
                'thumbnail' => 'khr 250x250',
                'fthumbnail' => 'khr 250x250 950',
            ),
            8 => 
            array (
                'seriesID' => 10,
                'seriesName' => 'KHR',
            'seriesDesc' => 'Reborn!, known in Japan as Katekyō Hitman Reborn! (Japanese: 家庭教師ヒットマンリボーン! Hepburn: Katekyō Hittoman Ribōn!?, Katekyō, a portmanteau of Katei Kyōshi, means "home tutor"), is a Japanese manga written and illustrated by Akira Amano. The manga is about a yo',
                'thumbnail' => 'khr',
                'fthumbnail' => 'khr 950',
            ),
            9 => 
            array (
                'seriesID' => 11,
                'seriesName' => 'Kiseijuu sei no kakuritsu',
            'seriesDesc' => 'Parasyte (Japanese: 寄生獣 Hepburn: Kiseijū?, lit. "Parasitic Beasts") is a science fiction horror manga series written and illustrated by Hitoshi Iwaaki, and published in Kodansha\'s Afternoon magazine from 1988 to 1995. The manga was published in North Amer',
                'thumbnail' => 'parasyte',
                'fthumbnail' => 'parasyte 950',
            ),
            10 => 
            array (
                'seriesID' => 12,
                'seriesName' => 'Magi Kingdom of Magic',
            'seriesDesc' => 'Magi: The Labyrinth of Magic (Japanese: マギ Hepburn: Magi?) is a Japanese fantasy action adventure manga series written and illustrated by Shinobu Ohtaka. It has been serialized in Weekly Shōnen Sunday since June 2009, with the individual chapters collecte',
                'thumbnail' => 'magi',
                'fthumbnail' => 'magi 950',
            ),
            11 => 
            array (
                'seriesID' => 13,
                'seriesName' => 'Seven Deadly Sins',
            'seriesDesc' => 'The Seven Deadly Sins (Japanese: 七つの大罪 Hepburn: Nanatsu no Taizai?) is a Japanese fantasy manga series written and illustrated by Nakaba Suzuki. It has been serialized in Kodansha\'s Weekly Shōnen Magazine since October 2012, with the chapters collected in',
                'thumbnail' => '7 deadly sins',
                'fthumbnail' => '7 deadly sins 950',
            ),
            12 => 
            array (
                'seriesID' => 14,
                'seriesName' => 'Tokyo Ghoul S1',
                'seriesDesc' => 'Tokyo Ghoul is an anime television series by Studio Pierrot aired on Tokyo MX between July and September 2014 with a second season titled Tokyo Ghoul √A that aired January 8, 2015, to March 26, 2015. Studio Pierrot also did an OVA for Tokyo Ghoul: JACK al',
                'thumbnail' => 'tokyo ghoul',
                'fthumbnail' => 'tokyo ghoul 950',
            ),
            13 => 
            array (
                'seriesID' => 15,
                'seriesName' => 'Tokyo Ghoul S2',
                'seriesDesc' => 'Tokyo Ghoul is an anime television series by Studio Pierrot aired on Tokyo MX between July and September 2014 with a second season titled Tokyo Ghoul √A that aired January 8, 2015, to March 26, 2015. Studio Pierrot also did an OVA for Tokyo Ghoul: JACK al',
                'thumbnail' => 'tokyo ghoulS2',
                'fthumbnail' => 'tokyo ghoulS2 950',
            ),
            14 => 
            array (
                'seriesID' => 18,
                'seriesName' => 'Cheese in the Trap',
            'seriesDesc' => 'depicts the delicate relationship between female university student Hong Seol (Kim Go-Eun) and her senior Yoo Jung (Park Hae-Jin). Hong-Seol works part-time due to her family\'s poor background. Yoo Jung is good looking, gets good grades, athletic and has ',
                'thumbnail' => 'Cheese In The Trap',
                'fthumbnail' => 'Cheese In The Trap 950',
            ),
        ));
        
        
    }
}
