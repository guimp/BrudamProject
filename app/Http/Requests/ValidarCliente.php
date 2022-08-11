<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarCliente extends FormRequest
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
			'nome' => 'required|max:255',
			'telefone' => 'required|max:20',
			'email' => 'required|unique:cliente,email|email|max:255'
		];
	}

	public function messages()
	{
		return [
			'nome.required' => 'É necessário enviar o nome.',
			'telefone.required' => 'É necessário enviar o telefone',
			'email.required' => 'É necessário enviar o email.',
			'email.email' => 'É necessário enviar o email com o formato adequado.',
			'email.unique' => 'Esse email já está sendo utilizado.'
		];
	}
}