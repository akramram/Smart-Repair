<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MasalahTableSeeder::class);
        $this->call(MerekTableSeeder::class);
        $this->call(TipeTableSeeder::class);
    }
}
