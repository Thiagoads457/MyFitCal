<x-app-layout>

    <h5 class="mt-3">Gerenciar Refeicoes</h5>

    <a class="btn btn-success" href="/refeicoes/create">
        Inserir Nova Refeição
    </a>

    <table class="table table-hover mt-3">
        <thead>
            <tr>
                <th>Tipo</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Informacoes</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($refeicoes as $refeicao)
                <tr>
                    <td>{{$refeicao->tipo}}</td>
                    <td>{{$refeicao->descricao}}</td>
                    <td>{{$refeicao->quantidade}}</td>
                    <td>{{$refeicao->informacoes->nome}}</td>
                    <td>
                        <a href='/refeicoes/{{$refeicao->id}}/edit' class="btn btn-warning">Alterar</a>
                        <a href='/refeicoes/{{$refeicao->id}}' class='btn btn-danger'>Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-app-layout>