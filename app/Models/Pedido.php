<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
	protected $table = "pedido";
	public $timestamps = false;
	protected $fillable = ['dataEntrega', 'valorFrete', 'descricao', 'idCliente' ];

	public function cliente()
	{
		return $this->belongsTo('App\Cliente');
	}
}