<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RoutesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('routes')->insert([
            'id'=>'1',
            'name'=>'Rzeszow-Lancut-Przeworsk',
            'vehicle_id'=>'2',
        ]);
        DB::table('routes')->insert([
            'id'=>'2',
            'name'=>'Przeworsk-Lancut-Rzeszow',
            'vehicle_id'=>'1',
        ]);
    }
}
