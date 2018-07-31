<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
	protected $table = "servico";
	/**
	 * The attributes that should be fillable for arrays.
	 *
	 * @var array
	 */
	protected $fillable = [
		'descricao',
		'valor'
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
		'created_at',
		'updated_at',
	];
}
