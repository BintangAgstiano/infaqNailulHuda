<?php

namespace App\Http\Controllers;

use App\Models\pengeluaran;
use App\Models\Riwayat;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PengeluaranController extends Controller
{
    private $params = [];
    public function index(){
        $this->params['data'] = pengeluaran::where('is_delete',null)->get();
        $this->params['total'] = $this->params['data']->sum('nominal');
        return view('pengeluaran.index',$this->params);
    }
    public function create(){
        return view('pengeluaran.create');
    }

    public function store(Request $request){
        $request->nominal = (int)str_replace(['Rp.','.',' '],'',$request->nominal);

        $validator = Validator::make($request->all(),[
            'nominal'=>'required',
            'keterangan'=>'required',
            'tanggal'=>'required|date'
        ],[
            'nominal.required'=>'Nominal wajib di isi',
            'keterangan.required'=>'Nominal wajib di isi',
            'tanggal.required'=>'Nominal wajib di isi',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator->errors());
        }

        $add = pengeluaran::create([
            'nominal'=>$request->nominal,
            'keterangan'=>$request->keterangan,
            'tanggal'=>$request->tanggal,
            'user_id'=>Auth::user()->id
        ]);

        Riwayat::create([
            'id'=>$add->id,
            'nominal'=>$request->nominal,
            'keterangan'=>$request->keterangan,
            'tanggal'=>$request->tanggal,
            'user_id'=>Auth::user()->id,
            'tipe'=>'pemasukan'
        ]);

        return redirect('/pengeluaranview');
    }

    public function edit($id){
        $this->params['data']=pengeluaran::find($id);
        return view('pengeluaran.update',$this->params);
    }

    public function update(Request $request,$id){
        $request->nominal = (int)str_replace(['Rp.','.',' '],'',$request->nominal);

        $validator = Validator::make($request->all(),[
            'nominal'=>'required',
            'keterangan'=>'required',
            'tanggal'=>'required|date'
        ],[
            'nominal.required'=>'Nominal wajib di isi',
            'keterangan.required'=>'Nominal wajib di isi',
            'tanggal.required'=>'Nominal wajib di isi',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator->errors());
        }

        pengeluaran::where('id',$id)->update([
            'nominal'=>$request->nominal,
            'keterangan'=>$request->keterangan,
            'tanggal'=>$request->tanggal,
            'user_id'=>Auth::user()->id
        ]);

        Riwayat::where('id',$id)->update([
            'nominal'=>$request->nominal,
            'keterangan'=>$request->keterangan,
            'tanggal'=>$request->tanggal,
            'user_id'=>Auth::user()->id,
            'tipe'=>'pemasukan'
        ]);

        return redirect('/pengeluaranview');
    }

    public function delete($id){
        pengeluaran::where('id',$id)->update([
            'is_delete'=>Carbon::now()
        ]);
        return redirect('/pengeluaranview');
    }

}
