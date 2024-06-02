<?php

namespace App\Http\Controllers;

use App\Models\pemasukan;
use App\Models\Riwayat;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PemasukanController extends Controller
{
    private $params = [];
    public function index(){
        $this->params['data'] = pemasukan::where('is_delete',null)->get();
        $this->params['total'] = $this->params['data']->sum('nominal');
        return view('pemasukan.index',$this->params);
    }
    public function create(){
        return view('pemasukan.create');
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

        $add = pemasukan::create([
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

        return redirect('/pemasukanview');

    }

    public function edit($id){
        $this->params['data']=pemasukan::find($id);
        return view('pemasukan.update',$this->params);
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

        pemasukan::where('id',$id)->update([
            'nominal'=>$request->nominal,
            'keterangan'=>$request->keterangan,
            'tanggal'=>$request->tanggal,
        ]);

        Riwayat::where('id',$id)->update([
            'nominal'=>$request->nominal,
            'keterangan'=>$request->keterangan,
            'tanggal'=>$request->tanggal,
            'tipe'=>'pemasukan'
        ]);


        return redirect('/pemasukanview');
    }

    public function delete($id){
        pemasukan::where('id',$id)->update([
            'is_delete'=>Carbon::now()
        ]);
        return redirect('/pemasukanview');
    }

}
