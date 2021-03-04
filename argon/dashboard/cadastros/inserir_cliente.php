<?php 
    include '../menu.php'; 
    include '../assets.php';

    $nome_cliente = $_GET['nome_cliente'];
    $sobrenome_cliente = $_GET['sobrenome_cliente'];
    $endereco_cliente = $_GET['endereco_cliente'];
    $nro_end_cliente = $_GET['nro_end_cliente'];
    $complemento_cliente = $_GET['complemento_cliente'];
    $bairro_cliente = $_GET['bairro_cliente'];
    $cidade_cliente = $_GET['cidade_cliente'];
    $uf_cliente = $_GET['uf_cliente'];
    $cep_cliente = $_GET['cep_cliente'];
    $mail_cliente = $_GET['mail_cliente'];
    $cpf_cliente = $_GET['cpf_cliente'];
    $interesse_cliente = $_GET['interesse_cliente'];
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
                            <h3 class="mb-0">Status Cadastro de Cliente</h3>
                        </div>
                        <div class="container" style="margin-top: 10px;">
                            <?php 
                                include '../conexao/conexao.php';

                                $sql = "INSERT INTO cliente (nome_cliente, sobrenome_cliente, endereco_cliente, nro_end_cliente, complemento_cliente, bairro_cliente, cidade_cliente, uf_cliente, cep_cliente, mail_cliente, cpf_cliente, interesse_cliente) VALUES ('$nome_cliente', '$sobrenome_cliente', '$endereco_cliente', $nro_end_cliente, '$complemento_cliente', '$bairro_cliente', '$cidade_cliente', '$uf_cliente', '$cep_cliente', '$mail_cliente', '$cep_cliente', '$interesse_cliente')";
                                $inserir = mysqli_query($conexao, $sql);

                                if ($inserir) {
                            ?>
                            <div style="text-align: center;">
                                <div id="certo" style="width: 200px; height: 200px; margin: 0 auto;"></div>
                                <h4>Aprovado</h4>
                                <a href="../formularioCliente.php" role="button" class="btn btn-primary">Voltar</a>
                            </div>
                            <?php
                                } else {
                            ?>
                            <div style="text-align: center;">
                                <div id="erro" style="width: 200px; height: 200px; margin: 0 auto;"></div>
                                <h4>Reprovado</h4>
                                <a href="../formularioCliente.php" role="button" class="btn btn-danger">Voltar</a>
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