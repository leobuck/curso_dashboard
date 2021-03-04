<?php 
    include '../menu.php'; 
    include '../assets.php';

    $codigo_imovel = $_POST['codigo_imovel'];
    $end_imovel = $_POST['end_imovel'];
    $nro_end_imovel = $_POST['nro_end_imovel'];
    $bairro_imovel = $_POST['bairro_imovel'];
    $cidade_imovel = $_POST['cidade_imovel'];
    $uf_imovel = $_POST['uf_imovel'];
    $cep_imovel = $_POST['cep_imovel'];
    $complemento_imovel = $_POST['complemento_imovel'];
    $valor_imovel = $_POST['valor_imovel'];
    $id_modalidade_imovel = $_POST['id_modalidade_imovel'];
    $id_pagamento_imovel = $_POST['id_pagamento_imovel'];
    $id_categoria_imovel = $_POST['id_categoria_imovel'];
    $cpf_cliente_imovel = $_POST['cpf_cliente_imovel'];
    $foto_imovel = $_FILES['foto'];
    $status_imovel = 'Ativo';
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <div class="container-fluid mt--7">
        
            <div class="row">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header border-1">
                            <h3 class="mb-0">Status Cadastro de Imóvel</h3>
                        </div>
                        <div class="container" style="margin-top: 10px;">
                            <?php 
                                include '../conexao/conexao.php';

                                $sql = "INSERT INTO imovel (codigo_imovel, end_imovel, nro_end_imovel, bairro_imovel, cidade_imovel, uf_imovel, cep_imovel, complemento_imovel, valor_imovel, id_modalidade_imovel, id_pagamento_imovel, id_categoria_imovel, cpf_cliente_imovel, status_imovel) 
                                    VALUES ('$codigo_imovel', '$end_imovel', $nro_end_imovel, '$bairro_imovel', '$cidade_imovel', '$uf_imovel', '$cep_imovel', '$complemento_imovel', $valor_imovel, $id_modalidade_imovel, $id_pagamento_imovel, $id_categoria_imovel, $cpf_cliente_imovel, '$status_imovel')";
                                $inserir = mysqli_query($conexao, $sql);
                                
                                if ($inserir) {

                                    mkdir('../fotos/'. $codigo_imovel .'');
                                    
                            ?>
                            <div style="text-align: center;">
                                <div id="certo" style="width: 200px; height: 200px; margin: 0 auto;"></div>
                                <h4>Aprovado</h4>
                                <a href="../formularioImovel.php" role="button" class="btn btn-primary">Voltar</a>
                            </div>
                            <?php
                                    foreach ($_FILES['foto']['name'] as $key => $name) {
                                        $_FILES['foto']['type'][$key];
                                        $_FILES['foto']['tmp_name'][$key];    

                                        preg_match("/\.(png|jpg|jpeg){1}$/i", $_FILES['foto']['name'][$key], $ext);
        
                                        $caminho_foto2 = '../fotos/' . $codigo_imovel .'/' ;

                                        if ($ext) {

                                            $nome_foto = md5(uniqid(time())) . "." . $ext[1];

                                            $caminho_foto = $caminho_foto2 . $nome_foto;

                                            move_uploaded_file($_FILES['foto']['tmp_name'][$key], $caminho_foto);
                                            
                                            $sql2 = "INSERT INTO foto (nome_foto, id_imovel_foto) values ('$nome_foto', $codigo_imovel)";
                                            $inserir2 = mysqli_query($conexao, $sql2);
                                        }
                                    }

                                } else {
                            ?>
                            <div style="text-align: center;">
                                <div id="erro" style="width: 200px; height: 200px; margin: 0 auto;"></div>
                                <h4>Reprovado</h4>
                                <a href="../formularioImovel.php" role="button" class="btn btn-danger">Voltar</a>
                            </div>
                            <?php
                                }
                            ?>
                        </div>

                        <div class="card-footer py-4">
                                
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        

        <!-- Footer -->
        <footer class="footer">
            <div class="row align-items-center justify-content-xl-between">
            <div class="col-xl-6">
                <div class="copyright text-center text-xl-left text-muted">
                &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
                </div>
            </div>
            <div class="col-xl-6">
                <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                <li class="nav-item">
                    <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                    <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
                </li>
                </ul>
            </div>
            </div>
        </footer>
        </div>
        <?php include '../rodape.php'; ?>

        <script src="animacoes/bodymovin.js"></script>
        <script>
            var svgContainer = document.getElementById('erro');
            var animItem = bodymovin.loadAnimation({
                wrapper: svgContainer,
                animType: 'svg',
                loop: true,
                autoplay: true,
                path: 'animacoes/error.json'
            });
        </script>

        <script>
            var svgContainer = document.getElementById('certo');
            var animItem = bodymovin.loadAnimation({
                wrapper: svgContainer,
                animType: 'svg',
                loop: true,
                autoplay: true,
                path: 'animacoes/aprovado.json'
            });
        </script>   
    </body>
</html>