<x-app-layout>

    <h5 class="mt-3">Gerenciar Informações dos Pacientes</h5>

    <a class="btn btn-success" href="/informacoes/create">
        Inserir novas Informações
    </a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Peso Atual(Kg)</th>
                <th>Idade</th>
                <th>Altura</th>
                <th>Meta de Peso(Kg)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($informacoes as $c)
            <tr>
                <td>{{ $c->nome }}</td>
                <td>{{ $c->pesoatual }}</td>
                <td>{{ $c->idade }}</td>
                <td>{{ $c->altura }}</td>
                <td>{{ $c->metapeso }}</td>
                <td>
                    <a href="/informacoes/{{ $c->id }}/edit" class="btn btn-warning">Alterar</a>
                    <a href="/informacoes/{{ $c->id }}" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>