<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PublicRelationOfficer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'location_id'
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function location():BelongsTo
    {
        return $this->belongsTo(Location::class, 'location_id');
    }
}
