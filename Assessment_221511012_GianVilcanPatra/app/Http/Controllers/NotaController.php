<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function index()
    {
        $notas = Nota::with(['barangs', 'kasirs', 'tenans'])->get();
        return view('nota', compact('notas'));
    }
}
