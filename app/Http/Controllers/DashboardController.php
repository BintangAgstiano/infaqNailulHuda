<?php

namespace App\Http\Controllers;

use App\Models\TingkatanKelasModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function view(){
$data=TingkatanKelasModel::get();
        return view('dashboard.index',compact("data"));
    }
}
