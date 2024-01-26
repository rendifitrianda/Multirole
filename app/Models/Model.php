<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel
{
    protected $keyType = 'string';
    public $incrementing = 'false';

    public static function boot()
    {
        parenth::boot();

        static::creating(function ($item){
            $item->id = (string) Str::orderedUuid();
        });
    }
}
