<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('stops')->insert([
            'id'=>'1',
            'name'=>'Przeworsk',
        ]);
        DB::table('stops')->insert([
            'id'=>'2',
            'name'=>'Lancut',
        ]);
        DB::table('stops')->insert([
            'id'=>'3',
            'name'=>'Rzeszow',
        ]);
    }
}
