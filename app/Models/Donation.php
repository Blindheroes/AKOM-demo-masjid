<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{


    protected $table = 'donations';
    protected $primaryKey = 'id_donation';
    protected $fillable = ['type', 'name', 'email', 'phone', 'amount', 'message', 'status', 'payment_method', 'payment_qr', 'payment_va', 'payment_url'];
    public $type = ['infaq', 'zakat fitrah', 'zakat mal'];

    public $timestamps = true;
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id_donation = 'DON' . (string) Carbon::now()->format('YmdHis') . rand(100, 999);
        });

        // phone number format and replace 62 with 0 if exists
        static::creating(function ($model) {
            $model->phone = preg_replace('/[^0-9]/', '', $model->phone);
            if (substr($model->phone, 0, 2) == '62') {
                $model->phone = '0' . substr($model->phone, 2);
            }
        });
    }


    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d F Y H:i');
    }

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d F Y H:i');
    }

    public function getShortMessageAttribute()
    {
        return substr($this->message, 0, 100);
    }

    public function getShortNameAttribute()
    {
        return substr($this->name, 0, 50);
    }

    public function getShortEmailAttribute()
    {
        return substr($this->email, 0, 50);
    }

  
    public function getShortAmountAttribute()
    {
        return substr($this->amount, 0, 50);
    }

    public function chatWahatsapp()
    {
        return 'https://wa.me/62' . $this->phone;
    }

    public static function getType()
    {
        return (new self())->type;
    }
}
