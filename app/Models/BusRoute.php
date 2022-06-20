<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusRoute extends Model
{
    use HasFactory;
    protected $table="routes";

    protected $fillable = [
        'id',
        'name',
        'vehicle_id',
    ] ;
    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
