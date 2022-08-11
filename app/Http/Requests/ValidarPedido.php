<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarPedido extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, mixed>
	 */
	public function rules()
	{
		return [
			'dataEntrega' => 'required',
			'valorFrete' => 'required',
			'descricao' => 'required|max:255',
			'idCliente' => 'required'
		];
	}

	public function messages()
	{
		return [
			'dataEntrega.required' => 'É necessário enviar a data de entrega.',
			'valorFrete.required' => 'É necessário enviar o valor do frete',
			'descricao.required' => 'É necessário enviar os dados do pedido.',
			'idCliente.required' => 'É necessário enviar o idCliente.'
		];
	}
}