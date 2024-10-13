<x-app-layout>

    <h5>Excluir Informações</h5>

    <form action="/informacoes/{{$informacoes->id}}" method="POST">
        @csrf
        @method('DELETE')
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" name="nome" class="form-control" value="{{$informacoes->nome}}" disabled/>
                    
            </div>
        </div>
        
        <div class="row mt-3">
            <div class="col">
                <label for="pesoatual" class="form-label">Peso Atual(Kg):</label>
                <input type="number" step="0.01" name="pesoatual" class="form-control" value="{{ $informacoes->pesoatual }}" disabled/>
                    
            </div>
            <div class="col">
                <label for="idade" class="form-label">Idade:</label>
                <input type="number" name="idade" class="form-control" value="{{ $informacoes->idade }}"disabled/>
                    
            </div>
        </div>
        
        <div class="row mt-3">
            <div class="col">
                <label for="altura" class="form-label">Altura (em metros):</label>
                <input type="number" step="0.01" name="altura" class="form-control" value="{{ $informacoes->altura }}"disabled/>
                

            </div>
            <div class="col">
                <label for="metapeso" class="form-label">Meta de Peso(Kg):</label>
                <input type="number" step="0.01" name="metapeso" class="form-control" value="{{ $informacoes->metapeso }}"disabled/>
                
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