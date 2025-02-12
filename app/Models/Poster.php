<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Poster extends Model
{
    protected $guarded = ['id'];

    protected static function booted()
    {
        self::deleting(function (Poster $poster) {
            Storage::disk('public')->delete($poster->image);
        });
        
        self::updated(function (Poster $poster) {
            if ($poster->isDirty('image')) {
                Storage::disk('public')->delete($poster->getOriginal('image'));
            }
        });
    }
}
