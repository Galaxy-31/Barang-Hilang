<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menemukan extends Model
{
    use HasFactory;

    protected $table = 'menemukans';

    protected $fillable = [
        'nama',
        'email',
        'hp',
        'alamat',
        'tipe',
        'foto',
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
