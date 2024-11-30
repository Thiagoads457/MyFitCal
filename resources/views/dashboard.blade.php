<x-app-layout>

    <h5 class="mt-3">Bem-vindo ao sistema de controle de estoque de refeições!</h5>

    <!-- Carregando a biblioteca Google Charts -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        // Converte os dados para o formato adequado ao Google Charts
        var data = google.visualization.arrayToDataTable([
          ['Informações', 'Quantidade Média'],
          @foreach($informacoes as $index => $informacao)
            ["{{$informacao}}", {{$quantidades_media[$index]}}],
          @endforeach
        ]);

        // Definindo as opções para o gráfico
        var options = {
          title: 'Média de Quantidade(gr) de Refeições por Paciente'
        };

        // Criando o gráfico de pizza
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>

    <!-- Área onde o gráfico será exibido -->
    <div class="d-flex justify-content-center">
        <div id="piechart" style="width: 900px; height: 500px;"></div>
    </div>

</x-app-layout>


