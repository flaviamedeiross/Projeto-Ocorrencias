<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ocorrencia;
use Inertia\Inertia;

class OcorrenciaController extends Controller
{
    public function create()
    {
        return Inertia::render('App');
    }

    public function store(Request $request)
    {
        $request->validate([
            'rela' => 'required|string|max:255',
            'endere' => 'required|string|max:255',
            'dat' => 'required|date',
            'horari' => 'required|date_format:H:i',
        ]);

        $ocorrencia = Ocorrencia::create([
            'identi' => $request->identi,
            'rela' => $request->rela,
            'endere' => $request->endere,
            'dat' => $request->dat,
            'horari' => $request->horari,
        ]);

        return response()->json(['message' => 'Ocorrencia registrada com sucesso!']);
    }
}