<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalPenerbangan extends Model
{
    use HasFactory;

    protected $table = 'jadwal_penerbangan';

    // public function rute() {
    //     return $this->hasOneThrough(
    //         Rute::class,
    //         JadwalPenerbangan::class,
    //         'id_penerbangan', 
    //         'id_rute', 
    //         'id_penerbangan', 
    //         'id_rute' 
    //     );
    // }

    public function rute() {
        return $this->belongsTo(Rute::class, 'id_rute','id_rute');
    }
}
