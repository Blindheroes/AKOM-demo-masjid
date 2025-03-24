<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{



    protected $table = 'subscribers';
    protected $primaryKey = 'id_subscriber';
    public $incrementing = false;

    protected $fillable = [
        'id_subscriber',
        'email',
        'whatsapp',
    ];


    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id_subscriber = 'SB' . Carbon::now()->format('YmdHis') . rand(100, 999);

            // Check if there is an existing subscriber with the same email or whatsapp
            $subscriber = self::where('email', $model->email)
                ->orWhere('whatsapp', $model->whatsapp)
                ->first();

            if ($subscriber) {
                $subscriber->update([
                    'email' => $model->email,
                    'whatsapp' => $model->whatsapp,
                ]);
                return false;
            }
        });
    }
}
