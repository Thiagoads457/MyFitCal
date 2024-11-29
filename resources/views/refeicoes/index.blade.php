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
            @foreach ($refeicoes as $refeicoes)
                <tr>
                    <td>{{$refeicoes->tipo}}</td>
                    <td>{{$refeicoes->descricao}}</td>
                    <td>{{$refeicoes->quantidade}}</td>
                    <td>{{$refeicoes->categoria->nome}}</td>
                    <td>
                        <a href='/refeicoes/{{$refeicoes->id}}/edit' class="btn btn-warning">Alterar</a>
                        <a href='/refeicoes/{{$refeicoes->id}}' class='btn btn-danger'>Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-app-layout>