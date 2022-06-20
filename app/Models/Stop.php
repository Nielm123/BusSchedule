<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stop extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'schedule_id',
        'name',
        'hour',
        'minute'
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }
}
