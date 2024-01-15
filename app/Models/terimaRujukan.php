<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class terimaRujukan extends Model
{
    use HasFactory;
    protected $table = 'terima_Rujukan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'noktp',
        'keluhan',
        'alamat',
        'kecamatan',
        'desa',
        'noantrian',
        'dokter',
        'ruangan',
        'jam',
    ];
}
