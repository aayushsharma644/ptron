<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class SmsControl extends Model
{
    protected $guarded = ['id'];

    protected static function boot()
    {
        parent::boot();
        static::saved(function () {
            Cache::forget('SmsNotifySet');
        });
    }
}
