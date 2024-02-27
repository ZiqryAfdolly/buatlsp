<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $data_kota = Kota::all();
        $data_order_detail = OrderDetail::all();

        return view('penumpang.index', compact('data_kota', 'data_order_detail'));
    }
}
