<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

include 'conexao.php';
$sql = "select * from foto where id_imovel_foto = 1";
$buscar = mysqli_query($conexao,$sql);
$dados = mysqli_fetch_array($buscar);
$arquivo = $dados['nome_foto'];

?>
<img src="documentos/<?php echo $arquivo ?>">



</body>
</html>