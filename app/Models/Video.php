<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $attributes = [
        'description' => '',
    ];

    protected $fillable = [
        'chanel_id', 'title', 'url', 'image_url', 'description', 'is_visible',
    ];
}
