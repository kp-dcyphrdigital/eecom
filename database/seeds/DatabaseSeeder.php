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
		$this->call(CategoriesTableSeeder::class);
        // $this->call(ProductsTableSeeder::class);
        // $this->call(VariantsTableSeeder::class);
        $this->call(BannersTableSeeder::class);
        $this->call(SubscribersTableSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
