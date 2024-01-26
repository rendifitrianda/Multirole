<?php

namespace App\Models\Admin\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table = 'admin__module';

    public function role()
    {
        return $this->hasMany(Role::class, 'id_module');
    }
}
