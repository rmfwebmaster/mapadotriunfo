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
         $this->call(PilaresTableSeeder::class);
         $this->call(PerguntasTableSeeder::class);
         $this->call(CursosTableSeeder::class);
//         $this->call(CampanhasTableSeeder::class);
    }
}
