<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    
    protected $fillable = [
        'nama', 'alamat', 'jk'
    ];
}
