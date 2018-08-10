<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agendamento;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\AgendarAgendamentoPost as AgendarRequest;

class AgendamentoController extends Controller
{
	public function getList(Request $request)
	{
		return Agendamento::with('servico')->where('datahora', '>=', new \DateTime())->orderBy('datahora', 'asc')->get();
	}
	public function meusAgendamentos(Request $request)
	{
		return Agendamento::where('pessoafisica_id', Auth::user()->pessoa->id)->with('servico')->get();
	}

	public function agendar(AgendarRequest $request)
	{   
		$agendamento = new Agendamento([
			'datahora' => $request->input('datahora'),
			'servico_id' => $request->input('servico')['id'],
			'pessoafisica_id' => Auth::user()->pessoa->id,
			'status' => Agendamento::STATUS_SOLICITADO
		]);

		$agendamento->save();

		$this->solicitaAgendamento($request, $agendamento);

		return $agendamento;
	}

	protected function solicitaAgendamento($request, $agendamento)
	{
        $title = $request->input('title');
        $content = $request->input('content');
        $assunto = "Agendamento de ".$agendamento->pessoa->nome;

        Mail::send('emails.solicitar-agendamento', ['agendamento' => $agendamento], function ($message) use ($assunto)
        {
            $message->from(env('MAIL_USERNAME'), 'Rações Viana');
            $message->to(env('EMAIL_MASTER'));
            $message->subject($assunto);
        });

        return response()->json(['message' => 'Request completed']);
	}
}
