<?php

namespace App\Http\Controllers;

use App\Models\Secretaria;
use Illuminate\Http\Request;

class SecretariaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $secretarias = Secretaria::all();
        return view('secretarias.index', compact('secretarias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('secretarias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required'
        ]);

        secretaria::create($request->all());

        return redirect()->route('secretarias.index')
        ->with('success', 'Secretaria cadastrada!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Secretaria $secretaria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Secretaria $secretaria)
    {
        return view('secretarias.edit', compact('secretaria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Secretaria $secretaria)
    {
        $request->validate([
            'nome' => 'required'
        ]);

        $secretaria->update($request->all());

        return redirect()->route('secretarias.index')
            ->with('success', 'Secretaria atualizada!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Secretaria $secretaria)
    {
        $secretaria->delete();

        return redirect()->route('secretarias.index')
            ->with('success', 'Secretaria removida!');
    }
}
