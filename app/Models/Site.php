<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'link',
        'image'
    ];

    public function events()
    {
        return $this->hasMany(SiteEvent::class, 'site_id', 'id');
    }

    public function eventComment()
    {
        return $this->hasMany(eventComment::class, 'site_id', 'id');
    }
}
