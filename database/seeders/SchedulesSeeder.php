<?php

namespace Database\Seeders;

use App\Models\Schedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class SchedulesSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schedule::create([
            'id'=>'1',
            'route_id'=>'2'
        ]);
        Schedule::create([
            'id'=>'2',
            'route_id'=>'1'
        ]);
        Schedule::create([
            'id'=>'3',
            'route_id'=>'2'
        ]);
        Schedule::create([
            'id'=>'4',
            'route_id'=>'1'
        ]);

    }
}
