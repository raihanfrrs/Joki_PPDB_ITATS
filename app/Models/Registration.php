<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Registration extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $keyType = 'string';
    protected $guarded = [];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('akta_kelahiran_images');
        $this->addMediaCollection('ktp_images');
        $this->addMediaCollection('pasfoto_images');
        $this->addMediaCollection('ijasah_tk_images');
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
        return $this->belongsTo(Student::class);
    }
}
