<?php

use Illuminate\Database\Seeder;

class PinnedForumsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pinned_forums')->delete();
        
        \DB::table('pinned_forums')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 165,
                'forum_id' => 54,
            ),
            1 => 
            array (
                'id' => 3,
                'user_id' => 167,
                'forum_id' => 54,
            ),
        ));
        
        
    }
}
