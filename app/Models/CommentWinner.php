<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentWinner extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'event_comment_id',
        'winner_list_id',
        'site_event_id',
        'failed_reason',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function eventComment()
    {
        return $this->belongsTo(EventComment::class);
    }

    public function winnerList()
    {
        return $this->belongsTo(WinnerList::class);
    }

    public function siteEvent()
    {
        return $this->belongsTo(SiteEvent::class, 'site_event_id', 'id');
    }
}
