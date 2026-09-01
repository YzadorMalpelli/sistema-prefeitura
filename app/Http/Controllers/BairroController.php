<?php

namespace App\Http\Controllers;

use App\Models\Bairro;
use Illuminate\Http\Request;

class BairroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bairros = Bairro::all();
        return view('bairros.index', compact('bairros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bairros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['nome' => 'required']);
        Bairro::create($request->all());

        return redirect()->route('bairros.index')
           ->with('success', 'Bairro cadastrado!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bairro $bairro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bairro $bairro)
    {
        return view('bairros.edit', compact('bairro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bairro $bairro)
    {
        $request->validate(['nome' => 'required']);
        $bairro->update($request->all());

        return redirect()->route('bairros.index')
            ->with('success', 'Bairro atualizado!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bairro $bairro)
    {
       $bairro->delete();

       return redirect()->route('bairros.index')
            ->with('success', 'Bairro removido!');

    }
}