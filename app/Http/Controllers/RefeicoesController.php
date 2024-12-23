<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informacoes;
use App\Models\Refeicoes;


class RefeicoesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $refeicoes = Refeicoes::with('informacoes')->get();
        
        return view('refeicoes.index', compact('refeicoes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $informacoes = Informacoes::all();
        return view('refeicoes.create', compact('informacoes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Refeicoes::create($request->all());
        return redirect('/refeicoes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $refeicao = Refeicoes::with('informacoes')->findOrFail($id);
        return view('refeicoes.show', compact('refeicao'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $refeicao = refeicoes::with('informacoes')->findOrFail($id);
        $informacoes = Informacoes::all();
        return view('refeicoes.edit', compact('refeicao', 'informacoes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $refeicao = Refeicoes::findOrFail($id);
        $refeicao->update($request->all());
        return redirect('/refeicoes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $refeicao = Refeicoes::findOrFail($id);
        $refeicao->delete();
        return redirect('/refeicoes');
    }
}
