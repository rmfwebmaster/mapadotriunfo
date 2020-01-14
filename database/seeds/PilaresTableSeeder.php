<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PilaresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pilares')->insert([
            'pilar' => 'Familiar',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('pilares')->insert([
            'pilar' => 'Saúde',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('pilares')->insert([
            'pilar' => 'Financeiro',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('pilares')->insert([
            'pilar' => 'Profissional',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('pilares')->insert([
            'pilar' => 'Intelectual',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('pilares')->insert([
            'pilar' => 'Amor',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('pilares')->insert([
            'pilar' => 'Social',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);

        DB::table('pilares')->insert([
            'pilar' => 'Espiritual',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);
    }
}
