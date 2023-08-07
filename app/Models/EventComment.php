<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventComment extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_event_id',
        'user_id',
        'site_id',
        'image',
        'answer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function siteEvent()
    {
        return $this->belongsTo(SiteEvent::class, 'site_event_id', 'id');
    }

    public function site()
    {
        return $this->belongsTo(Site::class);
    }

    public function commentWinners()
    {
        return $this->hasMany(CommentWinner::class);
    }
}
