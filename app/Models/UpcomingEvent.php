<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UpcomingEvent extends Model
{
    /** @use HasFactory<\Database\Factories\UpcomingEventFactory> */
    use HasFactory;


    // $table->string('id_event')->primary();
    //         $table->timestamp('date');
    //         $table->string('title');
    //         $table->longText('content');
    //         $table->string('image')->nullable();
    //         $table->string('slug')->unique();
    //         $table->timestamps();
    protected $primaryKey = 'id_event';
    protected $fillable = [
        'id_event',
        'date',
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
                $model->id_event = 'EVN' . (string) Carbon::now()->format('YmdHis') . rand(100, 999);
            } while (static::whereIdEvent($model->id_event)->exists());
        });
    }

    public function scopeUpcoming(Builder $query): void
    {
        $query->where('date', '>', Carbon::now())->orderBy('date', 'asc');
    }
}
