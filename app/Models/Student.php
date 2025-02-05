<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Student extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $keyType = 'string';
    protected $guarded = [];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('student_images');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(368)
            ->height(232)
            ->sharpen(10);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function registration()
    {
        return $this->hasOne(Registration::class);
    }

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

    public function father()
    {
        return $this->belongsTo(Father::class);
    }

    public function mother()
    {
        return $this->belongsTo(Mother::class);
    }

    public function custodian()
    {
        return $this->belongsTo(Custodian::class);
    }
}
