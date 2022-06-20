<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

   protected $fillable = [
       'vechicle_id',
       'stops_id',
       'route_id',
       'day',
       'time',
   ] ;

    public function stops()
    {
        return $this->hasMany(Stop::class);
    }

}
