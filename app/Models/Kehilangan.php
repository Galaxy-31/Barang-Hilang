<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kehilangan extends Model
{
    use HasFactory;
    protected $table = 'kehilangans';

    protected $fillable = [
        'nama',
        'email',
        'hp',
        'alamat',
        'foto',
        'tipe',
        'keterangan',
        'facebook',
        'instagram'
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
}
