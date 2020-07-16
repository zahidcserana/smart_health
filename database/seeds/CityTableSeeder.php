<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\City::class, 50)->create();
        factory(App\City::class, 5)->create()->each(function ($city) {
            $city->areas()->save(factory(App\Area::class)->make());
        });
    }
}
