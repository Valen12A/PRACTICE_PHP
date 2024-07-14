<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workday extends Model
{
    use HasFactory;

    protected $fillable = [
        'workday'
    ];

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}
