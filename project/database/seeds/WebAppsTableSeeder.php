<?php

use Illuminate\Database\Seeder;

class WebAppsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('web_apps')->delete();
        
        \DB::table('web_apps')->insert(array (
            0 => 
            array (
                'id' => 1,
                'pagename' => 'Daniel Hizon',
                'link' => 'http://foodesire.herokuapp.com',
                'category' => 'Ibang Iba',
                'imagename' => 'Bird_s View.jpg',
                'pagedescription' => 'Daniel mehehee',
                'created_at' => '2017-12-20 04:02:06',
                'updated_at' => '2017-12-20 04:02:06',
            ),
        ));
        
        
    }
}
