<?php

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'migration' => '2016_10_01_045816_create_games_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'migration' => '2016_10_01_050107_create_videos_table',
                'batch' => 1,
            ),
            4 => 
            array (
                'migration' => '2016_10_01_050238_create_genres_table',
                'batch' => 1,
            ),
            5 => 
            array (
                'migration' => '2016_10_01_050452_create_gameGenres_table',
                'batch' => 1,
            ),
            6 => 
            array (
                'migration' => '2016_10_01_050615_create_videosGenres_table',
                'batch' => 1,
            ),
            7 => 
            array (
                'migration' => '2016_10_01_050738_create_images_table',
                'batch' => 1,
            ),
            8 => 
            array (
                'migration' => '2016_10_01_050914_create_scores_table',
                'batch' => 1,
            ),
            9 => 
            array (
                'migration' => '2016_10_10_132422_create_tokens_table',
                'batch' => 1,
            ),
            10 => 
            array (
                'migration' => '2016_10_10_132519_create_userVideos_table',
                'batch' => 1,
            ),
            11 => 
            array (
                'migration' => '2016_10_11_122431_create_series_table',
                'batch' => 1,
            ),
            12 => 
            array (
                'migration' => '2016_10_12_054121_create_seriesVideos_table',
                'batch' => 1,
            ),
            13 => 
            array (
                'migration' => '2016_10_12_113833_create_seriesGenres_table',
                'batch' => 1,
            ),
            14 => 
            array (
                'migration' => '2016_10_14_160417_user_time',
                'batch' => 1,
            ),
            15 => 
            array (
                'migration' => '2016_10_15_054307_create_userGames_table',
                'batch' => 1,
            ),
            16 => 
            array (
                'migration' => '2016_10_16_041855_create_userTimes_table',
                'batch' => 1,
            ),
            17 => 
            array (
                'migration' => '2016_10_16_061100_create_videoTime',
                'batch' => 1,
            ),
            18 => 
            array (
                'migration' => '2016_10_16_061836_create_gamerTimer',
                'batch' => 1,
            ),
            19 => 
            array (
                'migration' => '2016_10_16_154656_create_VidTimer',
                'batch' => 2,
            ),
            20 => 
            array (
                'migration' => '2016_11_14_015436_add_column_to_users',
                'batch' => 3,
            ),
            21 => 
            array (
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            22 => 
            array (
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            23 => 
            array (
                'migration' => '2016_10_01_045816_create_games_table',
                'batch' => 1,
            ),
            24 => 
            array (
                'migration' => '2016_10_01_050107_create_videos_table',
                'batch' => 1,
            ),
            25 => 
            array (
                'migration' => '2016_10_01_050238_create_genres_table',
                'batch' => 1,
            ),
            26 => 
            array (
                'migration' => '2016_10_01_050452_create_gameGenres_table',
                'batch' => 1,
            ),
            27 => 
            array (
                'migration' => '2016_10_01_050615_create_videosGenres_table',
                'batch' => 1,
            ),
            28 => 
            array (
                'migration' => '2016_10_01_050738_create_images_table',
                'batch' => 1,
            ),
            29 => 
            array (
                'migration' => '2016_10_01_050914_create_scores_table',
                'batch' => 1,
            ),
            30 => 
            array (
                'migration' => '2016_10_10_132422_create_tokens_table',
                'batch' => 1,
            ),
            31 => 
            array (
                'migration' => '2016_10_10_132519_create_userVideos_table',
                'batch' => 1,
            ),
            32 => 
            array (
                'migration' => '2016_10_11_122431_create_series_table',
                'batch' => 1,
            ),
            33 => 
            array (
                'migration' => '2016_10_12_054121_create_seriesVideos_table',
                'batch' => 1,
            ),
            34 => 
            array (
                'migration' => '2016_10_12_113833_create_seriesGenres_table',
                'batch' => 1,
            ),
            35 => 
            array (
                'migration' => '2016_10_14_160417_user_time',
                'batch' => 1,
            ),
            36 => 
            array (
                'migration' => '2016_10_15_054307_create_userGames_table',
                'batch' => 1,
            ),
            37 => 
            array (
                'migration' => '2016_10_16_041855_create_userTimes_table',
                'batch' => 1,
            ),
            38 => 
            array (
                'migration' => '2016_10_16_061100_create_videoTime',
                'batch' => 1,
            ),
            39 => 
            array (
                'migration' => '2016_10_16_061836_create_gamerTimer',
                'batch' => 1,
            ),
            40 => 
            array (
                'migration' => '2016_10_16_154656_create_VidTimer',
                'batch' => 2,
            ),
            41 => 
            array (
                'migration' => '2016_11_14_015436_add_column_to_users',
                'batch' => 3,
            ),
            42 => 
            array (
                'migration' => '2014_05_19_151759_create_forum_table_categories',
                'batch' => 4,
            ),
            43 => 
            array (
                'migration' => '2014_05_19_152425_create_forum_table_threads',
                'batch' => 4,
            ),
            44 => 
            array (
                'migration' => '2014_05_19_152611_create_forum_table_posts',
                'batch' => 4,
            ),
            45 => 
            array (
                'migration' => '2015_04_14_180344_create_forum_table_threads_read',
                'batch' => 4,
            ),
            46 => 
            array (
                'migration' => '2015_07_22_181406_update_forum_table_categories',
                'batch' => 4,
            ),
            47 => 
            array (
                'migration' => '2015_07_22_181409_update_forum_table_threads',
                'batch' => 4,
            ),
            48 => 
            array (
                'migration' => '2015_07_22_181417_update_forum_table_posts',
                'batch' => 4,
            ),
            49 => 
            array (
                'migration' => '2016_05_24_114302_add_defaults_to_forum_table_threads_columns',
                'batch' => 4,
            ),
            50 => 
            array (
                'migration' => '2016_07_09_111441_add_counts_to_categories_table',
                'batch' => 4,
            ),
            51 => 
            array (
                'migration' => '2016_07_09_122706_add_counts_to_threads_table',
                'batch' => 4,
            ),
            52 => 
            array (
                'migration' => '2016_07_10_134700_add_sequence_to_posts_table',
                'batch' => 4,
            ),
            53 => 
            array (
                'migration' => '2016_07_29_171118_create_chatter_categories_table',
                'batch' => 4,
            ),
            54 => 
            array (
                'migration' => '2016_07_29_171118_create_chatter_discussion_table',
                'batch' => 4,
            ),
            55 => 
            array (
                'migration' => '2016_07_29_171118_create_chatter_post_table',
                'batch' => 4,
            ),
            56 => 
            array (
                'migration' => '2016_07_29_171128_create_foreign_keys',
                'batch' => 4,
            ),
            57 => 
            array (
                'migration' => '2016_08_02_183143_add_slug_field_for_discussions',
                'batch' => 4,
            ),
            58 => 
            array (
                'migration' => '2016_08_03_121747_add_color_row_to_chatter_discussions',
                'batch' => 4,
            ),
            59 => 
            array (
                'migration' => '2017_01_16_121747_add_markdown_and_lock_to_chatter_posts',
                'batch' => 4,
            ),
            60 => 
            array (
                'migration' => '2017_01_16_121747_create_chatter_user_discussion_pivot_table',
                'batch' => 4,
            ),
            61 => 
            array (
                'migration' => '2017_10_21_062303_create_forums_table',
                'batch' => 5,
            ),
            62 => 
            array (
                'migration' => '2017_10_21_063401_create_comments_table',
                'batch' => 6,
            ),
            63 => 
            array (
                'migration' => '2017_10_21_065615_create_forums_table',
                'batch' => 7,
            ),
            64 => 
            array (
                'migration' => '2017_10_21_180123_add_author_to_forums',
                'batch' => 8,
            ),
            65 => 
            array (
                'migration' => '2017_10_21_180130_add_author_to_comments',
                'batch' => 8,
            ),
            66 => 
            array (
                'migration' => '2017_10_22_003748_add_starts_ends_table',
                'batch' => 9,
            ),
            67 => 
            array (
                'migration' => '2017_10_22_005318_add_total_time_table',
                'batch' => 1,
            ),
            68 => 
            array (
                'migration' => '2017_10_22_050853_add_time_start_table',
                'batch' => 10,
            ),
            69 => 
            array (
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            70 => 
            array (
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            71 => 
            array (
                'migration' => '2016_10_01_045816_create_games_table',
                'batch' => 1,
            ),
            72 => 
            array (
                'migration' => '2016_10_01_050107_create_videos_table',
                'batch' => 1,
            ),
            73 => 
            array (
                'migration' => '2016_10_01_050238_create_genres_table',
                'batch' => 1,
            ),
            74 => 
            array (
                'migration' => '2016_10_01_050452_create_gameGenres_table',
                'batch' => 1,
            ),
            75 => 
            array (
                'migration' => '2016_10_01_050615_create_videosGenres_table',
                'batch' => 1,
            ),
            76 => 
            array (
                'migration' => '2016_10_01_050738_create_images_table',
                'batch' => 1,
            ),
            77 => 
            array (
                'migration' => '2016_10_01_050914_create_scores_table',
                'batch' => 1,
            ),
            78 => 
            array (
                'migration' => '2016_10_10_132422_create_tokens_table',
                'batch' => 1,
            ),
            79 => 
            array (
                'migration' => '2016_10_10_132519_create_userVideos_table',
                'batch' => 1,
            ),
            80 => 
            array (
                'migration' => '2016_10_11_122431_create_series_table',
                'batch' => 1,
            ),
            81 => 
            array (
                'migration' => '2016_10_12_054121_create_seriesVideos_table',
                'batch' => 1,
            ),
            82 => 
            array (
                'migration' => '2016_10_12_113833_create_seriesGenres_table',
                'batch' => 1,
            ),
            83 => 
            array (
                'migration' => '2016_10_14_160417_user_time',
                'batch' => 1,
            ),
            84 => 
            array (
                'migration' => '2016_10_15_054307_create_userGames_table',
                'batch' => 1,
            ),
            85 => 
            array (
                'migration' => '2016_10_16_041855_create_userTimes_table',
                'batch' => 1,
            ),
            86 => 
            array (
                'migration' => '2016_10_16_061100_create_videoTime',
                'batch' => 1,
            ),
            87 => 
            array (
                'migration' => '2016_10_16_061836_create_gamerTimer',
                'batch' => 1,
            ),
            88 => 
            array (
                'migration' => '2016_10_16_154656_create_VidTimer',
                'batch' => 2,
            ),
            89 => 
            array (
                'migration' => '2016_11_14_015436_add_column_to_users',
                'batch' => 3,
            ),
            90 => 
            array (
                'migration' => '2014_10_12_000000_create_users_table',
                'batch' => 1,
            ),
            91 => 
            array (
                'migration' => '2014_10_12_100000_create_password_resets_table',
                'batch' => 1,
            ),
            92 => 
            array (
                'migration' => '2016_10_01_045816_create_games_table',
                'batch' => 1,
            ),
            93 => 
            array (
                'migration' => '2016_10_01_050107_create_videos_table',
                'batch' => 1,
            ),
            94 => 
            array (
                'migration' => '2016_10_01_050238_create_genres_table',
                'batch' => 1,
            ),
            95 => 
            array (
                'migration' => '2016_10_01_050452_create_gameGenres_table',
                'batch' => 1,
            ),
            96 => 
            array (
                'migration' => '2016_10_01_050615_create_videosGenres_table',
                'batch' => 1,
            ),
            97 => 
            array (
                'migration' => '2016_10_01_050738_create_images_table',
                'batch' => 1,
            ),
            98 => 
            array (
                'migration' => '2016_10_01_050914_create_scores_table',
                'batch' => 1,
            ),
            99 => 
            array (
                'migration' => '2016_10_10_132422_create_tokens_table',
                'batch' => 1,
            ),
            100 => 
            array (
                'migration' => '2016_10_10_132519_create_userVideos_table',
                'batch' => 1,
            ),
            101 => 
            array (
                'migration' => '2016_10_11_122431_create_series_table',
                'batch' => 1,
            ),
            102 => 
            array (
                'migration' => '2016_10_12_054121_create_seriesVideos_table',
                'batch' => 1,
            ),
            103 => 
            array (
                'migration' => '2016_10_12_113833_create_seriesGenres_table',
                'batch' => 1,
            ),
            104 => 
            array (
                'migration' => '2016_10_14_160417_user_time',
                'batch' => 1,
            ),
            105 => 
            array (
                'migration' => '2016_10_15_054307_create_userGames_table',
                'batch' => 1,
            ),
            106 => 
            array (
                'migration' => '2016_10_16_041855_create_userTimes_table',
                'batch' => 1,
            ),
            107 => 
            array (
                'migration' => '2016_10_16_061100_create_videoTime',
                'batch' => 1,
            ),
            108 => 
            array (
                'migration' => '2016_10_16_061836_create_gamerTimer',
                'batch' => 1,
            ),
            109 => 
            array (
                'migration' => '2016_10_16_154656_create_VidTimer',
                'batch' => 2,
            ),
            110 => 
            array (
                'migration' => '2016_11_14_015436_add_column_to_users',
                'batch' => 3,
            ),
            111 => 
            array (
                'migration' => '2014_05_19_151759_create_forum_table_categories',
                'batch' => 4,
            ),
            112 => 
            array (
                'migration' => '2014_05_19_152425_create_forum_table_threads',
                'batch' => 4,
            ),
            113 => 
            array (
                'migration' => '2014_05_19_152611_create_forum_table_posts',
                'batch' => 4,
            ),
            114 => 
            array (
                'migration' => '2015_04_14_180344_create_forum_table_threads_read',
                'batch' => 4,
            ),
            115 => 
            array (
                'migration' => '2015_07_22_181406_update_forum_table_categories',
                'batch' => 4,
            ),
            116 => 
            array (
                'migration' => '2015_07_22_181409_update_forum_table_threads',
                'batch' => 4,
            ),
            117 => 
            array (
                'migration' => '2015_07_22_181417_update_forum_table_posts',
                'batch' => 4,
            ),
            118 => 
            array (
                'migration' => '2016_05_24_114302_add_defaults_to_forum_table_threads_columns',
                'batch' => 4,
            ),
            119 => 
            array (
                'migration' => '2016_07_09_111441_add_counts_to_categories_table',
                'batch' => 4,
            ),
            120 => 
            array (
                'migration' => '2016_07_09_122706_add_counts_to_threads_table',
                'batch' => 4,
            ),
            121 => 
            array (
                'migration' => '2016_07_10_134700_add_sequence_to_posts_table',
                'batch' => 4,
            ),
            122 => 
            array (
                'migration' => '2016_07_29_171118_create_chatter_categories_table',
                'batch' => 4,
            ),
            123 => 
            array (
                'migration' => '2016_07_29_171118_create_chatter_discussion_table',
                'batch' => 4,
            ),
            124 => 
            array (
                'migration' => '2016_07_29_171118_create_chatter_post_table',
                'batch' => 4,
            ),
            125 => 
            array (
                'migration' => '2016_07_29_171128_create_foreign_keys',
                'batch' => 4,
            ),
            126 => 
            array (
                'migration' => '2016_08_02_183143_add_slug_field_for_discussions',
                'batch' => 4,
            ),
            127 => 
            array (
                'migration' => '2016_08_03_121747_add_color_row_to_chatter_discussions',
                'batch' => 4,
            ),
            128 => 
            array (
                'migration' => '2017_01_16_121747_add_markdown_and_lock_to_chatter_posts',
                'batch' => 4,
            ),
            129 => 
            array (
                'migration' => '2017_01_16_121747_create_chatter_user_discussion_pivot_table',
                'batch' => 4,
            ),
            130 => 
            array (
                'migration' => '2017_10_21_062303_create_forums_table',
                'batch' => 5,
            ),
            131 => 
            array (
                'migration' => '2017_10_21_063401_create_comments_table',
                'batch' => 6,
            ),
            132 => 
            array (
                'migration' => '2017_10_21_065615_create_forums_table',
                'batch' => 7,
            ),
            133 => 
            array (
                'migration' => '2017_10_21_180123_add_author_to_forums',
                'batch' => 8,
            ),
            134 => 
            array (
                'migration' => '2017_10_21_180130_add_author_to_comments',
                'batch' => 8,
            ),
            135 => 
            array (
                'migration' => '2017_10_22_003748_add_starts_ends_table',
                'batch' => 9,
            ),
            136 => 
            array (
                'migration' => '2017_10_22_005318_add_total_time_table',
                'batch' => 1,
            ),
            137 => 
            array (
                'migration' => '2017_10_22_050853_add_time_start_table',
                'batch' => 10,
            ),
            138 => 
            array (
                'migration' => '2017_11_27_065328_create_web_app_category_table',
                'batch' => 11,
            ),
            139 => 
            array (
                'migration' => '2017_11_27_071913_create_web_app_table',
                'batch' => 11,
            ),
            140 => 
            array (
                'migration' => '2018_08_14_054042_create_categories_table',
                'batch' => 0,
            ),
            141 => 
            array (
                'migration' => '2018_08_14_054042_create_comments_table',
                'batch' => 0,
            ),
            142 => 
            array (
                'migration' => '2018_08_14_054042_create_forum_tags_table',
                'batch' => 0,
            ),
            143 => 
            array (
                'migration' => '2018_08_14_054042_create_forums_table',
                'batch' => 0,
            ),
            144 => 
            array (
                'migration' => '2018_08_14_054042_create_gamegenres_table',
                'batch' => 0,
            ),
            145 => 
            array (
                'migration' => '2018_08_14_054042_create_games_table',
                'batch' => 0,
            ),
            146 => 
            array (
                'migration' => '2018_08_14_054042_create_gametime_table',
                'batch' => 0,
            ),
            147 => 
            array (
                'migration' => '2018_08_14_054042_create_genres_table',
                'batch' => 0,
            ),
            148 => 
            array (
                'migration' => '2018_08_14_054042_create_images_table',
                'batch' => 0,
            ),
            149 => 
            array (
                'migration' => '2018_08_14_054042_create_password_resets_table',
                'batch' => 0,
            ),
            150 => 
            array (
                'migration' => '2018_08_14_054042_create_pinned_forums_table',
                'batch' => 0,
            ),
            151 => 
            array (
                'migration' => '2018_08_14_054042_create_scores_table',
                'batch' => 0,
            ),
            152 => 
            array (
                'migration' => '2018_08_14_054042_create_series_table',
                'batch' => 0,
            ),
            153 => 
            array (
                'migration' => '2018_08_14_054042_create_seriesgenres_table',
                'batch' => 0,
            ),
            154 => 
            array (
                'migration' => '2018_08_14_054042_create_seriesvideo_table',
                'batch' => 0,
            ),
            155 => 
            array (
                'migration' => '2018_08_14_054042_create_tokens_table',
                'batch' => 0,
            ),
            156 => 
            array (
                'migration' => '2018_08_14_054042_create_usergames_table',
                'batch' => 0,
            ),
            157 => 
            array (
                'migration' => '2018_08_14_054042_create_users_table',
                'batch' => 0,
            ),
            158 => 
            array (
                'migration' => '2018_08_14_054042_create_uservideos_table',
                'batch' => 0,
            ),
            159 => 
            array (
                'migration' => '2018_08_14_054042_create_videos_table',
                'batch' => 0,
            ),
            160 => 
            array (
                'migration' => '2018_08_14_054042_create_videosgenres_table',
                'batch' => 0,
            ),
            161 => 
            array (
                'migration' => '2018_08_14_054042_create_videotime_table',
                'batch' => 0,
            ),
            162 => 
            array (
                'migration' => '2018_08_14_054042_create_web_apps_table',
                'batch' => 0,
            ),
            163 => 
            array (
                'migration' => '2018_08_14_054042_create_webappcategory_table',
                'batch' => 0,
            ),
            164 => 
            array (
                'migration' => '2018_08_14_054042_create_webapps_table',
                'batch' => 0,
            ),
        ));
        
        
    }
}
