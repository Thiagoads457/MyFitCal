<x-app-layout>

    <h5>Nova Refeição</h5>

    <form action="/refeicoes" method="POST">
        @CSRF
        <div class="row">
            <div class="col">
                <label for="tipo" class="form-label">Tipo de Refeição</label>
                <input type="text" name="tipo" class="form-control"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">Descrição:</label>
                <input type="text" name="descricao" class="form-control"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="quantidade" class="form-label">Quantidade (gr):</label>
                <input type="text" name="quantidade" class="form-control"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="informacoes_id" class="form-label">Informação do Paciente</label>
                <select name="informacoes_id" class="form-select">
                    @foreach ($informacoes as $informacoes)
                        <option value="{{$informacoes->id}}">{{$informacoes->nome}}</option>
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