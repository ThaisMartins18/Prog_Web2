<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gato;

class GatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $gatos = Gato::all();
        return view("gato.index",compact('gatos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Mostrar formulário de cadastro do gato
        //Método Get
        return view('gato.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Gato::create([
            'nome' => $request->input('nome'),
            'cor' => $request->input('cor'),
            'genero' => $request->input('genero')
        ]);
        dd(Gato::all()->toArray());
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $gato = Gato::findOrFail($id);
        return view("gato.edit",compact('gato'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $gato = Gato::findOrFail($id);
        $gato->update([
            'nome' => $request->input('nome'),
            'cor' => $request->input('cor'),
            'genero' => $request->input('genero')
        ]);
        return 'Registro alterado com sucesso!';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $gato = Gato::findOrFail($id);
        $gato->delete();
        return "Registro excluído com sucesso!";
    }

    public function delete(string $id) {
        //Método Get
        //Mostrar o formulário com os dados antes de excluir

        $gato = Gato::findOrFail($id);
        return view("gato.delete",compact('gato'));
    }
}
