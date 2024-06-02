<?php

namespace App\Http\Controllers;

use App\Models\pemasukan;
use App\Models\pengeluaran;
use App\Models\TingkatanKelasModel;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $params = [];
    public function view(){
        $this->params['data']=TingkatanKelasModel::get();

        $pemasukan = pemasukan::where('is_delete',null)
        ->select('nominal')->sum('nominal');
        $allPengeluaran = pengeluaran::where('is_delete',null)
        ->select('nominal')->sum('nominal');
        $this->params['dana'] = $pemasukan-$allPengeluaran;

        $blnSekarang = Carbon::now()->month;
        $thnSekarang = Carbon::now()->year;
        $this->params['pengeluaranBulan'] = pengeluaran::whereMonth('created_at',$blnSekarang)
        ->whereYear('created_at', $thnSekarang)
        ->sum('nominal');

        return view('dashboard.index',$this->params);
    }
}
