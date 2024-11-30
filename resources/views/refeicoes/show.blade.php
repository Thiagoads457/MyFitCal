<x-app-layout>

    <h5>Excluir Refeição</h5>

    <form action="/refeicoes/{{$refeicao->id}}" method="POST">
        @csrf
        @method('DELETE')
        <div class="row">
            <div class="col">
                <label for="tipo" class="form-label">Tipo de Refeição:</label>
                <input type="text" name="tipo" class="form-control" value="{{ $refeicao->tipo }}" disabled />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">Descrição:</label>
                <input type="text" name="descricao" class="form-control" value="{{ $refeicao->descricao }}" disabled />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="quantidade" class="form-label">Quantidade (gr):</label>
                <input type="text" name="quantidade" class="form-control" value="{{ $refeicao->quantidade }}" disabled />
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informações do Paciente:</label>
                <input type="text" name="nome" class="form-control" 
                       value="{{ $refeicao->informacao?->nome ?? 'Sem informação' }}" disabled />
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
