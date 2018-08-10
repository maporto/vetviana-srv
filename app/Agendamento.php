<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PessoaFisica;
use App\Servico;

class Agendamento extends Model
{
    const STATUS_SOLICITADO = 'S';
    const STATUS_AGENDADO = 'A';
    const STATUS_CANCELADO = 'C';
    const STATUS_FINALIZADO = 'F';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'datahora', 'status', 'pessoafisica_id', 'servico_id',
    ];

    /**
     * Get the phone record associated with the user.
     */
    public function pessoa()
    {
        return $this->belongsTo(PessoaFisica::class, 'pessoafisica_id', 'id');
    }

    /**
     * Get the phone record associated with the user.
     */
    public function servico()
    {
        return $this->belongsTo(Servico::class, 'servico_id', 'id');
    }
}
