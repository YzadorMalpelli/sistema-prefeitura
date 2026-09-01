<?php
 
namespace App\Http\Controllers;
 
use App\Models\Cnh;
use App\Models\Funcionario;
use Illuminate\Http\Request;
 
class CnhController extends Controller
{
    public function index()
    {
        $cnhs = Cnh::with('funcionario')->get();
        return view('cnhs.index', compact('cnhs'));
    }
 
    public function create()
    {
        $funcionarios = Funcionario::all();
        return view('cnhs.create', compact('funcionarios'));
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'numero' => 'required',
            'categoria' => 'required',
            'validade' => 'required|date',
            'funcionario_id' => 'required|unique:cnhs,funcionario_id'
        ]);
 
        Cnh::create($request->all());
 
        return redirect()->route('cnhs.index')
            ->with('success', 'CNH cadastrada!');
    }
 
    public function edit(Cnh $cnh)
    {
        $funcionarios = Funcionario::all();
        return view('cnhs.edit', compact('cnh', 'funcionarios'));
    }
 
    public function update(Request $request, Cnh $cnh)
    {
        $request->validate([
            'numero' => 'required',
            'categoria' => 'required',
            'validade' => 'required|date',
            'funcionario_id' => 'required|unique:cnhs,funcionario_id,' . $cnh->id
        ]);
 
        $cnh->update($request->all());
 
        return redirect()->route('cnhs.index')
            ->with('success', 'CNH atualizada!');
    }
 
    public function destroy(Cnh $cnh)
    {
        $cnh->delete();
 
        return redirect()->route('cnhs.index')
            ->with('success', 'CNH removida!');
    }
}