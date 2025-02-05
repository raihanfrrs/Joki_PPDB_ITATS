<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Father extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $keyType = 'string';
    protected $guarded = [];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('father_images');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(368)
            ->height(232)
            ->sharpen(10);
    }

    public function student()
    {
        return $this->hasOne(Student::class);
    }
}
