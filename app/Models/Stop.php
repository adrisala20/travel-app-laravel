<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Day;

class Stop extends Model
{
    use HasFactory;
    protected $fillable = [
        'day_id', 'title', 'description', 'location', 'lat','long',
         'image','food', 'curiosities', 'rating', 'notes','slug'
    ];

    public function day()
    {
        return $this->belongsTo(Day::class);
    }
}
