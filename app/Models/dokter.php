<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    use HasFactory;
    protected $table = 'dokters';

    protected $fillable = [
        'name',
        'email',
        'jenis_kelamin',
        'spesialis',
        'gambar',
    ];
}
