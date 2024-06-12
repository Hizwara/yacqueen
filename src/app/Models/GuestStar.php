<?php

namespace App\Models;

use App\Models\Event;
use App\Models\Artist;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOneOrMany;

class GuestStar extends Model
{
    use HasFactory;

    protected $fillable = [
        'artist_id',
        'event_id',
        'performance_time'
    ];

    protected $table = 'guest_star';
    // Get Artis populer from Guest Star table and show it in Event Detail
    public function artist()
    {
        return $this->belongsTo(Artist::class, 'artist_id', 'id');
    }

    public function event()
    {
        return $this->hasMany(Event::class, 'id', 'event_id');
    }

}
