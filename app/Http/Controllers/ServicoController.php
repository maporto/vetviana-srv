<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servico;

class ServicoController extends Controller
{
	public function getList()
	{
		return Servico::get();
	}
}
