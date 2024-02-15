<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PilotRequest extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'type',
        'frameno',
        'fuel',
        'metric',
        'mission',
        'setelapsetime',
        'elapsetime',
        'etd',
        'etdfeild',
        'eta',
        'etafeild',
        'pilotgiveremark',
        'radarradarsurveillance',
        'adcno',
        'captain',
        'copilot',
    ];
}
