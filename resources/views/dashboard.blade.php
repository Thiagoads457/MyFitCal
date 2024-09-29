<x-app-layout>

    <h5 class="mt-3">Bem vindo ao Sistema de Controle de Calorias!</h5>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Refeição', 'Calorias 100gr'],
          ['Arroz Branco Cozido',     130],
          ['Feijão Carioca Cozido',      77],
          ['Peito de Frango Grelhado',  165],
          ['Batata Frita', 312],
          ['Farofa',    350]
        ]);

        var options = {
          title: '% de Calorias em uma Refeição (100gr)'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

    <div class="d-flex justify-content-center">
        <div id="piechart" style="width: 900px; height: 500px;"></div>
    </div>
</x-app-layout>
