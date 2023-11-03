<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'account',
        'revenue',
        'stage',
        'owner',
        'probability',
        'trend',
        'files',
        'type',
        'lead_source',
        'close_date',
        'forecasted_revenue',
        'updated_by',
        'created_by',
    ];

}
