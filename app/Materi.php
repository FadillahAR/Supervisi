<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $fillable = [
        'materi', 'mapel', 'rombel','author','file'
    ];
}
