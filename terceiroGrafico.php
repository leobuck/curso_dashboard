<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        // dados
        var data = google.visualization.arrayToDataTable([
          ['Cidade', 'População'],
          <?php

            include 'conexao.php';
            $sql = "SELECT * FROM cidades";
            $buscar = mysqli_query($conexao, $sql);

            while($dados = mysqli_fetch_array($buscar)) {
              $cidade = $dados['cidade'];
              $populacao = $dados['populacao'];
            
          ?>

          ['<?php echo $cidade; ?>',  <?php echo $populacao; ?>],

          <?php
            }
          ?>
        ]);

        var options = {
          title: 'População das Cidades'
        };

        var chart = new google.visualization.PieChart(document.getElementById('graficoPizza'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="graficoPizza" style="height: 400px; width: 400px;"></div>
  </body>
</html>
