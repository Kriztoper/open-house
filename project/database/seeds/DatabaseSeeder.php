<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);

        Model::reguard();
        $this->call('CategoriesTableSeeder');
        $this->call('CommentsTableSeeder');
        $this->call('ForumsTableSeeder');
        $this->call('ForumTagsTableSeeder');
        $this->call('GamegenresTableSeeder');
        $this->call('GamesTableSeeder');
        $this->call('GametimeTableSeeder');
        $this->call('GenresTableSeeder');
        $this->call('ImagesTableSeeder');
        $this->call('MigrationsTableSeeder');
        $this->call('PasswordResetsTableSeeder');
        $this->call('PinnedForumsTableSeeder');
        $this->call('ScoresTableSeeder');
        $this->call('SeriesTableSeeder');
        $this->call('SeriesgenresTableSeeder');
        $this->call('SeriesvideoTableSeeder');
        $this->call('TokensTableSeeder');
        $this->call('UsergamesTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('UservideosTableSeeder');
        $this->call('VideosTableSeeder');
        $this->call('VideosgenresTableSeeder');
        $this->call('VideotimeTableSeeder');
        $this->call('WebappcategoryTableSeeder');
        $this->call('WebappsTableSeeder');
        $this->call('WebAppsTableSeeder');
    }
}
