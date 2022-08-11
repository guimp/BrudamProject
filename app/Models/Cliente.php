<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	protected $table = "cliente";
	public $timestamps = false;
	protected $fillable = ['nome', 'telefone', 'email'];

	public function pedidos()
	{
		return $this->hasMany('App\Pedido');
	}
}