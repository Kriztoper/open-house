<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category' => 'Entertainment',
                'created_at' => '2017-12-20 03:59:46',
                'updated_at' => '2017-12-20 03:59:46',
            ),
        ));
        
        
    }
}
