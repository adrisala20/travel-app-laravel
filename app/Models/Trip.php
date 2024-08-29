<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Day;


class Trip extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'title', 'description', 'start_date', 
        'end_date','location','lat','long', 'slug'];

    public function days()
    {
        return $this->hasMany(Day::class);
    }
}
