<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidarCliente;
use App\Models\Cliente;

class ClienteController extends Controller
{
	public function index()
	{
		$cliente = Cliente::all();
		return response()->json($cliente);
	}

	public function show($id)
	{
		if( Cliente::where('idCliente', $id)->exists() )
		{
			$cliente = Cliente::where('idCliente', $id)->get();
			return  response()->json($cliente);
		}
		else
		{
			return response()->json([ 'message' => 'Dados do cliente não encontrados', ], 404);
		}
	}

	public function store(ValidarCliente $request)
	{
		$cliente = new Cliente;

		$cliente->nome= $request->nome;
		$cliente->telefone = $request->telefone;
		$cliente->email = $request->email;

		$retorno = $cliente->save();

		$msgRetorno = $retorno ? "Cliente criado": "Erro ao salvar os dados do cliente";

		return response()->json([
			"message" => $msgRetorno
		], 201);
	}
}