<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobrancaController extends Controller
{

public function index()
{
    $cobrancas = Cobranca::all();
    return view('Cobrancas.index', compact('Cobrancas'));
}

public function create()
{
    return view('Cobrancas.create');
}

public function store(Request $request)
{
    Cobranca::create($request->all());
    return redirect('Cobrancas')->with('success', 'Cobranca created successfully.');
}

public function edit($id)
{
    $cobranca = Cobranca::findOrFail($id);
    return view('Cobrancas.edit', compact('Cobranca'));
}

public function update(Request $request, $id)
{
    $cobranca = Cobranca::findOrFail($id);
    $cobranca->update($request->all());
    return redirect('Cobrancas')->with('success', 'Cobranca updated successfully.');
}

public function destroy($id)
{
    $cobranca = Cobranca::findOrFail($id);
    $cobranca->delete();
    return redirect('Cobrancas')->with('success', 'Cobranca deleted successfully.');
}

}