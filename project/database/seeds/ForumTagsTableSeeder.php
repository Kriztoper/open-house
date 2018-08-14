<?php

use Illuminate\Database\Seeder;

class ForumTagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('forum_tags')->delete();
        
        \DB::table('forum_tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tag' => 'openhouse',
            ),
            1 => 
            array (
                'id' => 2,
                'tag' => 'OneUP',
            ),
            2 => 
            array (
                'id' => 3,
                'tag' => 'tech',
            ),
            3 => 
            array (
                'id' => 4,
                'tag' => 'jokes',
            ),
        ));
        
        
    }
}
