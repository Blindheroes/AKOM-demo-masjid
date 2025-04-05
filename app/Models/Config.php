<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    /** @use HasFactory<\Database\Factories\ConfigFactory> */
    use HasFactory;
    protected $table = 'configs';
    protected $primaryKey = 'id_config';
    public $incrementing = false;
    protected $guarded = [];


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            do {
                $model->id_config = 'CFG' . (string) now()->format('YmdHis') . rand(100, 999);
            } while (static::whereIdConfig($model->id_config)->exists());
        });
    }
    public $timestamps = true;

    // get masque_logo
    public function getMasqueLogoAttribute($value)
    {
        return asset('storage/' . $value);
    }
}
