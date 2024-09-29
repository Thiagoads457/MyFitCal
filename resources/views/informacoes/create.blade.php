<x-app-layout>

    <h5>Novas Informações</h5>

    <form action="/informacoes" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" name="nome" class="form-control" required/>
            </div>
        </div>
        
        <div class="row mt-3">
            <div class="col">
                <label for="pesoatual" class="form-label">Peso Atual(Kg):</label>
                <input type="number" step="0.01" name="pesoatual" class="form-control" required/>
            </div>
            <div class="col">
                <label for="idade" class="form-label">Idade:</label>
                <input type="number" name="idade" class="form-control" required/>
            </div>
        </div>
        
        <div class="row mt-3">
            <div class="col">
                <label for="altura" class="form-label">Altura (em metros):</label>
                <input type="number" step="0.01" name="altura" class="form-control" required/>
            </div>
            <div class="col">
                <label for="metapeso" class="form-label">Meta de Peso(Kg):</label>
                <input type="number" step="0.01" name="metapeso" class="form-control" required/>
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
