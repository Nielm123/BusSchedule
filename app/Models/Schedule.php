<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

   protected $fillable = [
       'id',
       'route_id',
   ] ;

    public function stops()
    {
        return $this->hasMany(Stop::class);
    }

    public function busRoute()
    {
        return $this->belongsTo(BusRoute::class, 'route_id', 'id', 'routes');
    }




}
