<?php

namespace App\Http\Requests;

class AgendarAgendamentoPost extends ApiFormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'datahora' => 'required|date|unique:agendamentos',
            'servico.id' => 'required|exists:servico,id',
        ];
    }

    public function messages()
    {
        return [
            'datahora.required' => 'O campo data é obrigatório',
            'datahora.unique' => 'Horário desejado não está disponível',
            'servico.id.required' => 'O campo serviço é obrigatório',
            'servico.id.exists' => 'Serviço passado inválido ou não encontrado',
        ];
    }
}
