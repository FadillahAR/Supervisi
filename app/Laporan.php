<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $fillable = [
        'materi', 'mapel', 'rombel','author','deskripsi'
    ];
}
