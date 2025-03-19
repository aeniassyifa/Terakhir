<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JnsService extends Model
{
    use HasFactory;

    protected $table = 'jns_service'; // Sesuai dengan nama tabel di database
    protected $primaryKey = 'id_jns_service'; // Menyesuaikan dengan Primary Key di tabel
    public $timestamps = true; // Agar created_at & updated_at otomatis diisi

    protected $fillable = [
        'jns_service',
        'keterangan',
    ];

    public function services()
    {
        return $this->hasMany(Service::class, 'id_jns_service');
    }
}
