<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventTeamplate extends Model
{
    use HasFactory;
    protected $fillable = [
        'eventName',
        'bandName',
        'startDate',
        'endDate',
        'portfolio',
        'ticketPrice',
        'status',
    ];
}
