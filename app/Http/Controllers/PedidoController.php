<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidarPedido;
use App\Models\Pedido;

class PedidoController extends Controller
{
	public function index()
	{
		$pedido = Pedido::all();
		return response()->json($pedido);
	}

	public function show($id)
	{
		if( Pedido::where('idPedido', $id)->exists() )
		{
			$pedido = Pedido::where('idPedido', $id)->get();
			return  response()->json($pedido);
		}
		else
		{
			return response()->json([ 'message' => 'Dados do pedido não encontrados', ], 404);
		}
	}

	public function store(ValidarPedido $request)
	{
		$pedido = new Pedido;

		$pedido->idPedido= $request->idPedido;
		$pedido->dataEntrega = $request->dataEntrega;
		$pedido->valorFrete = $request->valorFrete;
		$pedido->descricao = $request->descricao;
		$pedido->idCliente = $request->idCliente;

		$retorno = $pedido->save();

		$msgRetorno = $retorno ? "Pedido criado": "Erro ao criar o pedido";

		return response()->json([
			"message" => $msgRetorno
		], 201);
	}

	public function visualizarPedidos()
	{
		$pedido = Pedido::all();

		return view('visualizarPedidos', ['pedido' => $pedido]);
	}
}