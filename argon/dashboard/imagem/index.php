<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

	<div class="container" style="width: 500px; margin-top: 50px">
		<form action="index2.php" method="post" enctype="multipart/form-data">
			<h6> Salvar nome no Banco e Arquivo na Pasta </h6>
			<div class="form-group">
				<label for="exampleFormControlFile1">Imagem</label>
				<input type="file" name='arquivo' class="form-control-file" id="exampleFormControlFile1">
			</div>
			<button type="submit" class="btn btn-primary">Cadastrar</button>
		</form>

	</div>




</body>
</html>