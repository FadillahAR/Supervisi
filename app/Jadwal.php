<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Jadwal extends Model
{
    protected $fillable = [
        'tanggal', 'guru', 'supervisor'
    ];

}
