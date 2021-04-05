<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supervisi extends Model
{
    protected $fillable = [
        'materi', 'mapel', 'rombel','author','status','deskripsi'
    ];
}
