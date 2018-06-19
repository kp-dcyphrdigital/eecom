<?php

use Illuminate\Database\Seeder;

class VariantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\Variant')->create(['attribute4' => 'Left', 'attribute5' => '95', 'attribute6' => 'P92',]);
        factory('App\Models\Variant')->create(['attribute4' => 'Right', 'attribute5' => '95', 'attribute6' => 'P92',]);
        factory('App\Models\Variant')->create(['attribute4' => 'Left', 'attribute5' => '96', 'attribute6' => 'P92',]);
        factory('App\Models\Variant')->create(['attribute4' => 'Right', 'attribute5' => '96', 'attribute6' => 'P92',]);
        factory('App\Models\Variant')->create(['attribute4' => 'Left', 'attribute5' => '95', 'attribute6' => 'P93',]);
        factory('App\Models\Variant')->create(['attribute4' => 'Right', 'attribute5' => '95', 'attribute6' => 'P93',]);
        factory('App\Models\Variant')->create(['attribute4' => 'Left', 'attribute5' => '97', 'attribute6' => 'P92',]);
        factory('App\Models\Variant')->create(['attribute4' => 'Right', 'attribute5' => '97', 'attribute6' => 'P92',]);
    }
}
