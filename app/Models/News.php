<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    /** @use HasFactory<\Database\Factories\NewsFactory> */
    use HasFactory;

    // $table->string('id_news')->primary();
    // $table->string('title');
    // $table->longText('content');
    // $table->string('image')->nullable();
    // $table->string('slug')->unique();
    protected $primaryKey = 'id_news';
    protected $fillable = [
        'id_news',
        'title',
        'content',
        'image',
        'slug',
    ];
    public $incrementing = false;
    public $timestamps = true;
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // buat slug
            do {
                $model->slug = Str::slug($model->title) . '-' . Str::random(3);
            } while (static::whereSlug($model->slug)->exists());
            // buat ID
            do {
                $model->id_news = 'NEWS' . (string) Carbon::now()->format('YmdHis') . rand(100, 999);
            } while (static::whereIdNews($model->id_news)->exists());
        });
    }
    // if image is null, return default image
    public function getImageAttribute($value)
    {
        return $value ? asset('storage/' . $value) : asset('images/defaultNews.png');
    }
}
