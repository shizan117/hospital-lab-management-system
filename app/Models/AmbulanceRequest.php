<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmbulanceRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'from',
        'destination',
        'ambulance_type',
        'date',
        'round_trip',
        'name',
        'phone',
        'status',
    ];
}
