<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    public function index()
    {
        return view('history-transaksi.pengeluaran');
    }
    public function create()
    {
        return view('pengeluaran.create');
    }
}
