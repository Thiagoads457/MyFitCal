<x-app-layout>

    <h5>Excluir Refeicoes</h5>

    <form action="/refeicoes/{{$refeicoes->id}}" method="POST">
        @CSRF
        @method('DELETE')
        <div class="row">
            <div class="col">
                <label for="tipo" class="form-label">Tipo de Refeição:</label>
                <input type="text" name="tipo" class="form-control" value="{{$refeicoes->tipo}}" disabled/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">Descrição:</label>
                <input type="text" name="descricao" class="form-control" value="{{$refeicoes->descricao}}" disabled/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="quantidade" class="form-label">Quantidade (gr):</label>
                <input type="text" name="quantidade" class="form-control" value="{{$refeicoes->quantidade}}" disabled/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="informacoes" class="form-label">Informações do Paciente:</label>
                <input type="text" name="informacoes" class="form-control" value="{{$refeicoes->informacoes->nome}}" disabled/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-danger">
                    Excluir
                </button>
            </div>
        </div>
    </form>

</x-app-layout>