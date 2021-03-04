<?php

$foto = $_FILES['foto'];
 
array_map(function ($foto) {
    $a = 0;
 
 
   include 'conexao.php';
 
    #gravação do caminho no banco de dados da aula passada
     
 
 	 
 
    $a++;
}, $foto);
 
 

 
?>