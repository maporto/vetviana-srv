<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\PessoaFisica;

class UserController extends Controller
{
	public function create(Request $request) {
		$pessoa = new PessoaFisica($request->all());
		$pessoa->save();
		$usuario = new User([
			'name' => $request->input('nome'),
			'email' => $request->input('email'),
			'password' => $request->input('password'),
			'pessoafisica_id' => $pessoa->id
		]);
		$usuario->save();

		return response()->json(User::with('pessoa')->find($usuario->id), 201);
	}
}
