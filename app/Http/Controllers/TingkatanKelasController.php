<?php

namespace App\Http\Controllers;

use App\Models\TingkatanKelasModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TingkatanKelasController extends Controller
{
    public function index()
    {
        $data=TingkatanKelasModel::get();
        return view('tingkatanKelas.index',compact('data'));
    }
    public function create()
    {
        return view('tingkatanKelas.create');
    }
    public function store()
    {
        $validator = Validator::make(request()->all(), [
            'kelas' => 'required',
            'jurusan' => 'required'
        ], [
            'kelas.required' => 'Input kelas wajib di isi',
            'jurusan.required' => 'Input jurusan wajib di isi',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }

        TingkatanKelasModel::create([
            'kelas' => request()->input('kelas'),
            'jurusan' => request()->input('jurusan'),
        ]);
      

        return redirect('/tingkatankelasview');
    }
}
