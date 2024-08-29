<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Trip;
use App\Models\Stop;

class Day extends Model
{
    use HasFactory;
    protected $fillable = ['trip_id', 'date'];

    public function stops()
    {
        return $this->hasMany(Stop::class);
    }

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
}
