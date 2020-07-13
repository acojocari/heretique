<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Traits\Seedable;

class VoyagerDummyDatabaseSeeder extends Seeder
{
    use Seedable;

    protected $seedersPath;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedersPath = database_path('seeds').'/';
        $this->seed('CategoriesTableSeeder');
        $this->seed('UsersTableSeeder');
        $this->seed('PostsTableSeeder');
        $this->seed('PagesTableSeeder');
        //TODO TranslationsTableSeeder doesn't work need to update the latest Voyager app
        //$this->seed('TranslationsTableSeeder');
        //Duplicate call, see VoyagerDatabaseSeeder.php
        //$this->seed('PermissionRoleTableSeeder');
    }
}
