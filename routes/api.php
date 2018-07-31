<?php

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->group(function () {
	Route::get('meus-agendamento', 'AgendamentoController@meusAgendamentos');
	Route::get('agendamento', 'AgendamentoController@getList');
	Route::post('agendamento', 'AgendamentoController@agendar');
	Route::get('servico', 'ServicoController@getList');
});

Route::post('login', 'Auth\LoginController@do');
Route::post('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@do']);
Route::post('signup', 'UserController@create');
// Route::get('auth/register', [
//   'as' => 'register', 
//   'uses' => 'Auth\AuthController@getRegister'
// ]);
// Route::middleware('auth:api')->get('/user',
// function (Request $request) {
// 	return $request->user();
// });


// Route::post('login', 'Auth\LoginController@ApiLogin');

// Route::middleware('auth:api')->post('logout', function (Request $request) {
    
//     if (auth()->user()) {
//         $user = auth()->user();
//         $user->api_token = null; // clear api token
//         $user->save();

//         return response()->json([
//             'message' => 'Thank you for using our application',
//         ]);
//     }
    
//     return response()->json([
//         'error' => 'Unable to logout user',
//         'code' => 401,
//     ], 401);
// });
// Route::post('pessoa-fisica', 'PessoaFisicaController@create');
// Route::put('pessoa-fisica/{pessoa}', 'PessoaFisicaController@update');
// Route::delete('pessoa-fisica/{pessoa}', 'PessoaFisicaController@delete');
// Route::get('pessoa-fisica', 'PessoaFisicaController@getList');
// Route::get('pessoa-fisica/{pessoa}', 'PessoaFisicaController@get');
// Route::post('pessoa-fisica', 'PessoaFisicaController@create');
// Route::get('veiculo', 'VeiculoController@getList');
// Route::get('veiculo/{veiculo}', 'VeiculoController@get');
// Route::post('veiculo', 'VeiculoController@create');
// Route::put('veiculo/{veiculo}', 'VeiculoController@update');
// Route::delete('veiculo/{veiculo}', 'VeiculoController@delete');