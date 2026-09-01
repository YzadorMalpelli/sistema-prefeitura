<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use app\models\Bairro;
use App\Models\Secretaria;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projetos = Projeto::with('secretaria')->get();
        return view('projetos.index', compact('projetos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $secretarias = Secretaria::all();
        $bairros = Bairro::all();
        return view('projetos.create', compact('bairros'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'secretaria_id' => 'required'
        ]);

        Projeto::create($request->all());
        $projeto = Projeto::create($request->all());
        $projeto->bairros()->sync($request->bairros);

        return redirect()->route('projetos.index')
        ->with('success', 'Projeto cadastrado!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projeto $projeto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projeto $projeto)
    {
        $secretarias = Secretaria::all();
        return view('projetos.edit', compact('projeto', 'secretarias'));

        return view('projetos.edit', compact('projeto', 'secretarias', 'bairros'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projeto $projeto)
    {
        $request->validate([
            'nome' => 'required',
            'secretaria_id' => 'required'
        ]);

        $projeto->update($request->all());
        $projeto->bairros()->sync($request->bairros);
        return redirect()->route('projetos.index')
           ->with('success', 'Projeto atualizado!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projeto $projeto)
    {
        $projeto->delete();

        return redirect()->route('projetos.index')
            ->with('success', 'Projeto removido!');
    }
}