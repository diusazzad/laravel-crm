<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserFullInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'call_notes',
        'call_date_time',
        'lead_id',
    ];

    /**
     * Get the user that owns the UserFullInfo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(Lead::class, 'foreign_key', 'other_key');
    }
}
