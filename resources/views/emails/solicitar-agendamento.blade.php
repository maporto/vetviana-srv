<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Solicitação de Agendamento</title>
    </head>
    <body>
        <div class="content">
            <h1>Solicitação de Agendamento</h1>
            <p>Nome: {{$agendamento->pessoa->nome}}</p>
            <p>Telefone: {{$agendamento->pessoa->telefone}}</p>
            <p>Data: {{date('d/m/Y', strtotime($agendamento->datahora))}}</p>
            <p>Horário: {{date('H:i', strtotime($agendamento->datahora))}}</p>
            <p>Serviço: {{$agendamento->servico->descricao}}</p>
        </div>
    </body>
</html>
