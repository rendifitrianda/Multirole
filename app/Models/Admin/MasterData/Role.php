<?php

namespace App\Models\Admin\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 
use App\Models\Admin\MAsterData\Module;
use App\Models\Admin\MAsterData\Pegawai;

class Role extends Model
{
   protected $table = 'admin__role';

   public function pegawai()
   {
     return $this->belongsTo(Pegawai::class, 'id_pegawai');
   }

   public function module()
   {
        return $this->belongsTo(Module::class, 'id_module');
   }
}
