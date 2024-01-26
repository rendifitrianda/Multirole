<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\MasterData\Pegawai;

class ModelAuthenticate extends  Authenticatable
{
    protected $keyType = 'string';
    protected $incrementing = 'false';

    public static function boot()
    {
        parenth::boot();

        static::creating(function ($item){
            $item->id = (string) str::orderedUuid();
        });
    }
}
