
<?php

$arquivo = $_FILES['arquivo'];

if($arquivo !== null) {

preg_match("/\.(png|jpg|jpeg){1}$/i", $arquivo["name"], $ext);
    // Gera um nome único para a imagem


if ($ext == true) {

$nome_arquivo = md5(uniqid(time())) . "." . $ext[1];

$caminho_arquivo = "documentos/" . $nome_arquivo;

move_uploaded_file($arquivo["tmp_name"], $caminho_arquivo);


include 'conexao.php';
$sql = "INSERT INTO foto (nome_foto, id_imovel_foto) values ('$nome_arquivo',1)";
$inserir = mysqli_query($conexao,$sql);


}

}

?>
