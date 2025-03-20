<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JnsService extends Model
{
    use HasFactory;

    protected $table = 'jns_service'; 

    protected $fillable = [
        'jns_service',
        'nm_jns_kendaraan',
    ];

    public function service()
    {
        return $this->hasMany(Service::class, 'id_jns_service');
    }
}
