<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rujukan extends Model
{
    use HasFactory;
    protected $table = 'rujukan';
    protected $fillable = [
        'name',
        'noktp',
        'alamat',
        'keluhan',
        'kecamatan',
        'desa',
        'kodepos',
        'status',
    ];
}