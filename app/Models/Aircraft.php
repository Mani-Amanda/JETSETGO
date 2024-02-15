<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aircraft extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'frameno',
        'serviceability',
        'endurance',
        'engineergiveremark',

    ];
}
