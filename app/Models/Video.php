<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Video extends Model
{
    protected $guarded = ['id'];

    protected static function booted()
    {
        self::deleting(function (Video $video) {
            Storage::disk('public')->delete($video->url);
        });
        
        self::updated(function (Video $video) {
            if ($video->isDirty('url')) {
                Storage::disk('public')->delete($video->getOriginal('url'));
            }
        });
    }
}
