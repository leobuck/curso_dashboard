<?php
	include 'conexao/conexao.php';

	$sql = "SELECT * FROM lucros";

	$buscar = mysqli_query($conexao, $sql);

	# chart.js: preparando valores #

	$mes = "";
	$ano_2018 = "";
	$ano_2019 = ""; 

	while($dados = mysqli_fetch_array($buscar)) {

		$mes = $mes . '"' . $dados['mes'] . '",';
		$ano_2018 = $ano_2018 . '"' . $dados['ano_2018'] . '",';
		$ano_2019 = $ano_2019 . '"' . $dados['ano_2019'] . '",';

		$mes = trim($mes);
		$ano_2018 = trim($ano_2018);
		$ano_2019 = trim($ano_2019);
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Chart JS</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
	</head>
	<body>
		<div class="container" style="background-color: #FAFAFA">
			<canvas id="Linha"></canvas>
		</div>
		
		<br>

		<div class="container" style="background-color: #FAFAFA">
			<canvas id="Barra"></canvas>
			<br>
			<button class="btn btn-primary" onclick="addData()">Adicionar Valor 2019</button>
			<button class="btn btn-primary" onclick="addData2()">Adicionar Valor 2018</button>
			<button class="btn btn-primary" onclick="addData3()">Adicionar Meta 2019</button>
			<button class="btn btn-primary" onclick="addData4()">Adicionar Meta 2018</button>
			<br><br>
			<button class="btn btn-danger" onclick="removeData()">Remover Valor 2019</button>			
			<button class="btn btn-danger" onclick="removeData2()">Remover Valor 2018</button>
			<button class="btn btn-danger" onclick="removeData3()">Remover Meta 2019</button>
			<button class="btn btn-danger" onclick="removeData4()">Remover Meta 2018</button>
		</div>

		<br>

		<script type="text/javascript">
			var ctx = document.getElementById('Linha').getContext('2d');
			var ctx2 = document.getElementById('Barra').getContext('2d');

			var myLineChart = new Chart(ctx, {
				type: 'line',
				data: {
					labels: [<?php echo $mes; ?>],
					datasets: [{
						label: '2018', 
						data: [<?php echo $ano_2018; ?>],
						backgroundColor: 'transparent',
						borderColor: 'rgba(255,99,132)',
						borderWidth: 3
					},
					{
						label: '2019', 
						data: [<?php echo $ano_2019; ?>],
						backgroundColor: 'transparent',
						borderColor: 'rgba(0,255,255)',
						borderWidth: 3
					}]
				},
				options: {
					scales: {scales: {yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
					tooltips:{mode: 'nearest'},
					Legend: {display: true, position: 'top', labels: {fontColor: 'rgb(255, 255, 255)', fontSize: 16}}
				}
			});

			var myBarChart = new Chart(ctx2, {
				type: 'bar',
				data: {
					labels: [<?php echo $mes; ?>],
					datasets: [{
						label: 'Meta 2018', 
						data: [120, 300, 99, 155.70, 547.53],
						borderColor: 'rgba(255,206,86)',
						borderWidth: 3,
						type: 'line'
					},	
					{
						label: 'Meta 2019', 
						data: [255, 160, 120, 69.45, 237.67],
						borderColor: 'rgba(0,255,255)',
						borderWidth: 3,
						type: 'line'
					},	
					{
						label: '2018', 
						data: [<?php echo $ano_2018; ?>],
						backgroundColor: 'rgba(204,101,254,0.5)',
						borderColor: 'rgba(204,101,254)',
						borderWidth: 3
					},
					{
						label: '2019', 
						data: [<?php echo $ano_2019; ?>],
						backgroundColor: 'rgba(255,99,132,0.5)',
						borderColor: 'rgba(255,99,132)',
						borderWidth: 3
					}]
				},
				options: {
					scales: {
						scales: {
							yAxes: [{
								display: true,
								scaleLabel: {
									display: true,
									labelString: 'Valores',
									fontColor: '#000',
									fontSize: 10
								},
								ticks: {
									fontColor: 'black',
									fontSize: 14
								}
							}], 
							xAxes: [{
								display: true,
								scaleLabel: {
									display: true,
									labelString: 'Meses',
									fontColor: '#000',
									fontSize: 10
								},
								ticks: {
									fontColor: 'black',
									fontSize: 14
								}
							}]
						}
					},
					tooltips: {
						mode: 'point'
					},
					legend: {
						display: true, 
						position: 'top', 
						labels: {
							fontColor: 'black', 
							fontSize: 18
						}
					}
				}
			});

			function addData() {
				myBarChart.data.datasets[3].data[5] = 622;
				myBarChart.data.labels[5] = "Junho";
				myBarChart.update();
			}
			
			function removeData() {
				myBarChart.data.labels.splice(5);
				myBarChart.data.datasets[3].data.splice(5);
				myBarChart.update();
			}

			function addData2() {
				myBarChart.data.datasets[2].data[5] = 255.30;
				myBarChart.data.labels[5] = "Junho";
				myBarChart.update();
			}
			
			function removeData2() {
				myBarChart.data.labels.splice(5);
				myBarChart.data.datasets[2].data.splice(5);
				myBarChart.update();
			}

			function addData3() {
				myBarChart.data.datasets[1].data[5] = 255.30;
				myBarChart.data.labels[0] = "Junho";
				myBarChart.update();
			}
			
			function removeData3() {
				myBarChart.data.labels.splice(5);
				myBarChart.data.datasets[1].data.splice(5);
				myBarChart.update();
			}

			function addData4() {
				myBarChart.data.datasets[0].data[5] = 255.30;
				myBarChart.data.labels[5] = "Junho";
				myBarChart.update();
			}
			
			function removeData4() {
				myBarChart.data.labels.splice(5);
				myBarChart.data.datasets[0].data.splice(5);
				myBarChart.update();
			}
		</script>
	</body>
</html>