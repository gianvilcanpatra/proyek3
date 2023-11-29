<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function index()
    {
        $kasirs = Kasir::all();
        return view('kasir.index', compact('kasirs'));
    }


    public function create()
    {
        $kasirs = Kasir::all();
        return view('kasir', compact('kasirs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nama' => 'required|string',
            'HP' => 'required|numeric',
        ]);

        Kasir::create($request->all());

        return redirect()->route('kasir.create')->with('success', 'Data barang berhasil disimpan.');
    }
}
