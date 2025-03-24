<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class News extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id_news';
    protected $fillable = ['title', 'content', 'image', 'slug'];
    public $timestamps = true;
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            do {
                $model->slug = Str::slug($model->title) . '-' . Str::random(3);
            } while (static::whereSlug($model->slug)->exists());

            do {
                $model->id_news = 'NWS' . (string) Carbon::now()->format('YmdHis') . rand(100, 999);
            } while (static::whereIdNews($model->id_news)->exists());
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d F Y H:i');
    }

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d F Y H:i');
    }

    public function getShortContentAttribute()
    {
        return substr($this->content, 0, 100);
    }

    public function getShortTitleAttribute()
    {
        return substr($this->title, 0, 50);
    }

    public function getShortSlugAttribute()
    {
        return substr($this->slug, 0, 50);
    }
}
