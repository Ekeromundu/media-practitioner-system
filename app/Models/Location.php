<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;
    protected $fillable = [
        'parent_id',
        'type',
        'name'
    ];

    public function parent():BelongsTo
    {
        return $this->belongsTo(Location::class, 'parent_id');
    }
}
