<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserFeedback extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'practitioner_id',
        'comment'
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function practitioner():BelongsTo
    {
        return $this->belongsTo(User::class, 'practitioner_id');
    }
}
