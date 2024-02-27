<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $table = 'order_detail';

    public function user() {
        return $this->hasMany(User::class, 'id_user','id_user');
    }

    public function penerbangan() {
        return $this->hasOne(JadwalPenerbangan::class, 'id_penerbangan','id_penerbangan');
    }

    public function orderTiket() {
        return $this->hasMany(OrderTiket::class, 'id_order','id_order');
    }
}
