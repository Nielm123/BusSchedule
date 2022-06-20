<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('vehicles')->insert([
            'id'=>'1',
            'name'=>'Worm',
            'type'=>'bus',
        ]);
        DB::table('vehicles')->insert([
            'id'=>'2',
            'name'=>'Snake',
            'type'=>'bus',
        ]);
        DB::table('vehicles')->insert([
            'id'=>'3',
            'name'=>'Bird',
            'type'=>'bus',
        ]);
        DB::table('vehicles')->insert([
            'id'=>'4',
            'name'=>'Camel',
            'type'=>'bus',
        ]);
    }
}
