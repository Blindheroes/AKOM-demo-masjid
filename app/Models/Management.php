<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Management extends Model
{
    /** @use HasFactory<\Database\Factories\ManagementFactory> */
    use HasFactory;

    protected $guarded = [];

    protected $primaryKey = 'id_management';
    public $incrementing = false;
    public $timestamps = true;
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // buat ID
            do {
                $model->id_management = 'MNG' . (string) now()->format('YmdHis') . rand(100, 999);
            } while (static::whereIdManagement($model->id_management)->exists());
        });
    }
    // if image is null, return default image
    public function getImageAttribute($value)
    {
        return $value ? asset('storage/' . $value) : asset('images/defaultManagement.png');
    }
}
