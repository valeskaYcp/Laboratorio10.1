<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;

class NotaController extends Controller
{
    public function index()
    {
        $notas = Nota::where('user_id', auth()->id())->get();
        return view('dashboard', compact('notas'));
    }

    public function create()
    {
        return view('notas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'curso' => 'required|string|max:255',
            'nota1' => 'required|integer|min:0|max:20',
            'nota2' => 'required|integer|min:0|max:20',
            'nota3' => 'required|integer|min:0|max:20',
            'nota4' => 'required|integer|min:0|max:20',
            'nota5' => 'required|integer|min:0|max:20',
        ]);

        $promedio = ($request->nota1 + $request->nota2 + $request->nota3 + $request->nota4 + $request->nota5) / 5;

        Nota::create([
            'user_id' => auth()->id(),
            'curso' => $request->curso,
            'nota1' => $request->nota1,
            'nota2' => $request->nota2,
            'nota3' => $request->nota3,
            'nota4' => $request->nota4,
            'nota5' => $request->nota5,
            'promedio' => $promedio,
        ]);

        return redirect()->route('notas.index');
    }
}

