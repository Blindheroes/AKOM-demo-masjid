<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    /** @use HasFactory<\Database\Factories\GalleryFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];

    protected $table = 'gallery';
    protected $primaryKey = 'id_gallery';
    public $timestamps = true;
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id_gallery = 'GAL' . (string) now()->format('YmdHis') . rand(100, 999);
        });
    }
    public function registerMediaCollections(): void
    {


        $this->addMediaCollection('gallery_images')
            ->acceptsMimeTypes(['image/jpeg', 'image/png'])
            ->withResponsiveImages()
            ->useDisk('gallery');
    }
}
