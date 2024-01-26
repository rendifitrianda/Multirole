<?php

namespace App\Models\Admin\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;


class Pegawai extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'admin__pegawai';

    public $filabble = [
        'nama',
        'nip',
        'email',
    ];

    public function setPasswordAtribute($value)
    {
        $this->attributes[password] = bcrypt($value);
    }

    public function role()
    {
       return $this->hasMany(Role::class, 'id_module');
    }
}
