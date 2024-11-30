<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Refeicoes;

class DashboardController extends Controller
{
    Public function gerarGrafico()
    {
        // Obter os dados de refeicoes, com a média de quantidade por 'informacoes_id'
        $data = Refeicoes::select('informacoes_id', DB::raw('AVG(quantidade) as quantidade_media'))
                ->groupBy('informacoes_id')
                ->get();

    
        // Inicializando os arrays para categorias e valores médios
        $informacoes = [];
        $quantidades_media = [];
    
        // Verificando se os dados estão sendo processados corretamente
        foreach ($data as $linha) {
            $informacoes[] = $linha->informacoes->nome ?? 'N/A';  // Verifica se o nome da informacao existe
            $quantidades_media[] = $linha->quantidade_media;
        }
    
        // Exibir os dados para verificar
        
    
        // Retornar a view com os dados processados
        return view('dashboard', compact('informacoes', 'quantidades_media'));
    }
}
