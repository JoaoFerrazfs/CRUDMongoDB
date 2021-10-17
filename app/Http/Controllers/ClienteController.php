<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Jenssegers\Mongodb\Eloquent\Model;


class ClienteController extends Controller
{
    public function index()
    {

        $cliente = Cliente::all();

        return view('welcome', ['cliente' => $cliente]);
    }

    public function cadastrar(Request $request)
    {
        $cliente = new Cliente;

        $cliente->nome = $request->nome;
        $cliente->telefone = $request->telefone;
        $cliente->email = $request->email;
        $cliente->save();

        return redirect('/');
    }

    public function visualizar($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('viewCliente.visualizarCliente', ['cliente' => $cliente]);
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id)->delete();
        return redirect('/');
    }

    public function update(Request $request)
    {
        $dados = $request->all();
        Cliente::findOrFail($request->id)->update($dados);
        return redirect('/');

    }
}
