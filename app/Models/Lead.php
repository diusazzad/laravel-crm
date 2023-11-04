<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    /**
     * Get all of the comments for the Lead
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userFullInfos(): HasMany
    {
        return $this->hasMany(UserFullInfo::class, 'foreign_key', 'local_key');
    }

}
