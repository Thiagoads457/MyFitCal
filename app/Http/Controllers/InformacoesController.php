<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informacoes;

class InformacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $informacoes = Informacoes::all();
        return view("informacoes.index", compact('informacoes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("informacoes.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Informacoes::create($request->all());
        return redirect("/informacoes");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $informacoes = Informacoes::findOrFail($id);
        return view("informacoes.show", compact('informacoes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $informacoes = Informacoes::findOrFail($id);
        return view("informacoes.edit", compact('informacoes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $informacoes = Informacoes::findOrFail($id);
        $informacoes->update($request->all());
        return redirect("/informacoes");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $informacoes = Informacoes:: findOrFail($id);
        $informacoes->delete();
        return redirect("/informacoes");

    }
}
