<?php

namespace App\Http\Controllers;

use App\Models\Tenan;
use Illuminate\Http\Request;

class TenanController extends Controller
{
    public function index()
    {
        $tenans = Tenan::all();
        return view('tenan.index', compact('tenans'));
    }


    public function create()
    {
        $tenans = Tenan::all();
        return view('tenan', compact('tenans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'NamaTenan' => 'required|string',
            'TenanHP' => 'required|numeric',
        ]);

        Tenan::create($request->all());

        return redirect()->route('tenan.create')->with('success', 'Data barang berhasil disimpan.');
    }
}
