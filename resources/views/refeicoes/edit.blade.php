<x-app-layout>

    <h5>Alterar Refeição</h5>

    <form action="/refeicoes/{{$refeicoes->id}}" method="POST">
        @CSRF
        @method('PUT')
        <div class="row">
            <div class="col">
                <label for="tipo" class="form-label">Tipo de Refeição:</label>
                <input type="text" name="tipo" class="form-control" value="{{ $refeicoes->tipo }}"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">Descrição:</label>
                <input type="text" name="descricao" class="form-control" value="{{ $refeicoes->descricao }}"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="quantidade" class="form-label">Quantidade (gr):</label>
                <input type="text" name="quantidade" class="form-control" value="{{ $quantidade->valor }}"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="informacoes_id" class="form-label">Informação do Paciente:</label>
                <select name="informacoes_id" class="form-select">
				    @foreach ($informacoes as $informacoes)
                        <option value="{{$informacoes->id}}"
                                {{ $refeicoes->informacoes->id == $informacoes->id ? 'selected' : '' }}>
                                {{$informacoes->nome}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-primary">
                    Salvar
                </button>
            </div>
        </div>
    </form>

</x-app-layout>