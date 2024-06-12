<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_name',
        'location',
        'date',
        'time',
        'description',
        'user_id',
        'price',
        'capacity',
    ];

    protected $table = 'events';

    public function guestStar()
    {
        return $this->hasMany(GuestStar::class, 'event_id', 'events.id')->where('event_id', $this->id);
    }
    
    public function user():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
