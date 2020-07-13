<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(VoyagerDatabaseSeeder::class);
        //Duplicate call, see VoyagerDummyDatabaseSeeder.php
        // $this->call(CategoriesTableSeeder::class);
        $this->call(VoyagerDummyDatabaseSeeder::class);
        $this->call(ProductsTablesSeeder::class);
        $this->call(CouponsTableSeeder::class);
    }
}
