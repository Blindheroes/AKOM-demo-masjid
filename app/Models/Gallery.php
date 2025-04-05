<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'id_gallery';
    public $incrementing = false;
    protected $keyType = 'string';


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            do {
                $model->id_gallery = 'GLR' .  Str::random(10);
            } while (static::where('id_gallery', $model->id_gallery)->exists());
        });
    }

    public function getPathAttribute($value)
    {
        return asset('storage/' . $value);
    }
}
