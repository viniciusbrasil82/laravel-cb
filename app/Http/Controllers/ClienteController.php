<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{

public function index()
{
    $clientes = Cliente::all();
    return view('Clientes.index', compact('Clientes'));
}

public function create()
{
    return view('Clientes.create');
}

public function store(Request $request)
{
    Cliente::create($request->all());
    return redirect('Clientes')->with('success', 'Cliente created successfully.');
}

public function edit($id)
{
    $cliente = Cliente::findOrFail($id);
    return view('Clientes.edit', compact('Cliente'));
}

public function update(Request $request, $id)
{
    $cliente = Cliente::findOrFail($id);
    $cliente->update($request->all());
    return redirect('Clientes')->with('success', 'Cliente updated successfully.');
}

public function destroy($id)
{
    $cliente = Cliente::findOrFail($id);
    $cliente->delete();
    return redirect('Clientes')->with('success', 'Cliente deleted successfully.');
}

}