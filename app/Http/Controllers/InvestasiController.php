<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investasi;

class InvestasiController extends Controller
{
    public function index()
    {
        $investasis = Investasi::all();
        return view('investasi.index', ['investasis' => $investasis]);
    }

    public function hitung(Request $request)
    {
        $pv = $request->input('pv');
        $i = $request->input('i') / 100; 
        $n = $request->input('n');

        $futureValue = $pv * pow((1 + $i), $n);

        $investasi = new Investasi([
            'pv' => $pv,
            'i' => $request->input('i'),
            'n' => $n,
            'future_value' => $futureValue
        ]);
        $investasi->save();

        return redirect('/')->with('success', 'Data berhasil disimpan!');
    }
}
