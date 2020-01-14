<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CampanhasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('campanhas')->insert([
            'campanha' => 'Aplicação',
            'created_at' => Carbon::now('America/Fortaleza')->format('Y-m-d H:i:s')
        ]);
    }
}
