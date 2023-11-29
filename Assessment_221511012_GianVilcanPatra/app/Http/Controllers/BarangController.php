<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        return view('barangindex', compact('barangs'));
    }

    public function create()
    {
        $barangs = Barang::all();
        return view('barang', compact('barangs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'NamaBarang' => 'required|string',
            'Satuan' => 'required|string',
            'HargaSatuan' => 'required|numeric',
            'Stok' => 'required|integer',
        ]);

        Barang::create($request->all());

        return redirect()->route('barang.create')->with('success', 'Data barang berhasil disimpan.');
    }

    public function tampilbarang($id)
    {
        // dd($id);
        $barangs = Barang::find($id)->get();
        return view('tampilbarang', compact('barangs'));
    }

    public function updatebarang(Request $request, $id)
    {
    
        $validator = Validator::make($request->all(), [
            'NamaBarang' => 'nullable|string',
            'Satuan' => 'nullable|string',
            'HargaSatuan' => 'nullable|numeric',
            'Stok' => 'nullable|integer',
        ]);
    
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
    
        // Ambil pengguna_id dari pengguna yang sedang login atau sesuaikan dengan logika aplikasi Anda
        $barangs = Barang::find($id);
    
        $barangs->update([
            'NamaBarang' => $request->input('NamaBarang'),
            'Satuan' => $request->input('Satuan'),
            'HargaSatuan' => $request->input('HargaSatuan'),
            'Stok' => $request->input('Stok'),
        ]);
            
    return redirect()->route('barang.create')->with('success', 'Data Berhasil di Update');
    
    }

    public function delete($id)
    {
        $barangs = Barang::find($id);
        $barangs->delete();
        return redirect()->route('barang.create');
    }
}
