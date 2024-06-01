<?php

namespace App\Http\Controllers;

use App\Models\TingkatanKelasModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TingkatanKelasController extends Controller
{
    public function index()
    {
        $data = TingkatanKelasModel::get();
        return view('tingkatanKelas.index', compact('data'));
    }
    public function create()
    {
        return view('tingkatanKelas.create');
    }
    public function store()
    {
        $validator = Validator::make(request()->all(), [
            'kelas' => 'required',
        ], [
            'kelas.required' => 'Input kelas wajib di isi',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }

        TingkatanKelasModel::create([
            'nama_kelas' => request()->input('kelas'),
        ]);


        return redirect('/tingkatankelasview');
    }
    public function edit($id)
    {
        $dataOld = TingkatanKelasModel::find($id);
        if ($dataOld == null) {
            return redirect()->back();
        }
        return view('tingkatanKelas.edit', compact("dataOld"));
    }
    public function update($id)
    {
        $validator = Validator::make(request()->all(), [
            'kelas' => 'required',

        ], [
            'kelas.required' => 'Input kelas wajib di isi',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }
        TingkatanKelasModel::where("id", $id)->update([
            'nama_kelas' => request()->input('kelas'),

        ]);
        return redirect('/tingkatankelasview');
    }

    public function delete($id)
    {
        TingkatanKelasModel::where("id", $id)->delete();
        return redirect('/tingkatankelasview');
    }
}
