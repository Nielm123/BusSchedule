<?php

namespace Database\Seeders;

use App\Models\Stop;
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

        Stop::create([
            'id'=>'1',
            'schedule_id'=>'1',
            'name'=>'Przeworsk',
            'hour'=>'05',
            'minute'=>'15'
        ]);
        Stop::create([
            'id'=>'2',
            'schedule_id'=>'1',
            'name'=>'Lancut',
            'hour'=>'05',
            'minute'=>'34'
        ]);
        Stop::create([
            'id'=>'3',
            'schedule_id'=>'1',
            'name'=>'Rzeszow',
            'hour'=>'05',
            'minute'=>'55'
        ]);

        Stop::create([
            'id'=>'4',
            'schedule_id'=>'2',
            'name'=>'Rzeszow',
            'hour'=>'06',
            'minute'=>'10'
        ]);
        Stop::create([
            'id'=>'5',
            'schedule_id'=>'2',
            'name'=>'Lancut',
            'hour'=>'06',
            'minute'=>'31'
        ]);
        Stop::create([
            'id'=>'6',
            'schedule_id'=>'2',
            'name'=>'Przeworsk',
            'hour'=>'06',
            'minute'=>'50'
        ]);

        Stop::create([
            'id'=>'7',
            'schedule_id'=>'3',
            'name'=>'Przeworsk',
            'hour'=>'12',
            'minute'=>'41'
        ]);
        Stop::create([
            'id'=>'8',
            'schedule_id'=>'3',
            'name'=>'Lancut',
            'hour'=>'13',
            'minute'=>'00'
        ]);
        Stop::create([
            'id'=>'9',
            'schedule_id'=>'3',
            'name'=>'Rzeszow',
            'hour'=>'13',
            'minute'=>'21'
        ]);
        Stop::create([
            'id'=>'10',
            'schedule_id'=>'4',
            'name'=>'Rzeszow',
            'hour'=>'13',
            'minute'=>'40'
        ]);
        Stop::create([
            'id'=>'11',
            'schedule_id'=>'4',
            'name'=>'Lancut',
            'hour'=>'14',
            'minute'=>'01'
        ]);
        Stop::create([
            'id'=>'12',
            'schedule_id'=>'4',
            'name'=>'Przeworsk',
            'hour'=>'14',
            'minute'=>'20'
        ]);
    }
}
