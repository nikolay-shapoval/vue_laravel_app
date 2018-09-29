<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $fillable = [
        'title',
        'description',
        'url',
        'is_visible',
    ];

    protected $appends = [
        'photo_link'
    ];

    public function getPhotoLinkAttribute()
    {
        return $this->file_id ? '/api/download/' . $this->file_id : '/img/photo.jpg';
    }

    public function videos()
    {
        return $this->hasMany(Video::class, 'chanel_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'item_id', 'id');
    }
}
