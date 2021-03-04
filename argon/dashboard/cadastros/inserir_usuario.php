<?php 
    include '../menu.php'; 
    include '../assets.php';
    include '../script/password.php';

    $nome_usuario = $_POST['nome_usuario'];
    $nivel_acesso_usuario = $_POST['nivel_acesso_usuario'];
    $mail_usuario = $_POST['mail_usuario'];
    $usuario = $_POST['usuario'];
    $senha_usuario = $_POST['senha_usuario'];
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
                            <h3 class="mb-0">Status Cadastro de Usuário</h3>
                        </div>
                        <div class="container" style="margin-top: 10px;">
                            <?php 
                                include '../conexao/conexao.php';

                                $sql = "INSERT INTO usuario (nome_usuario, nivel_acesso_usuario, mail_usuario, usuario, senha_usuario) VALUES ('$nome_usuario', $nivel_acesso_usuario, '$mail_usuario', '$usuario', 'md5($senha_usuario)')";
                                $inserir = mysqli_query($conexao, $sql);
                                
                                if ($inserir) {                                    
                            ?>
                            <div style="text-align: center;">
                                <div id="certo" style="width: 200px; height: 200px; margin: 0 auto;"></div>
                                <h4>Aprovado</h4>
                                <a href="../formularioUsuario.php" role="button" class="btn btn-primary">Voltar</a>
                            </div>
                            <?php
                                } else {
                            ?>
                            <div style="text-align: center;">
                                <div id="erro" style="width: 200px; height: 200px; margin: 0 auto;"></div>
                                <h4>Reprovado</h4>
                                <a href="../formularioUsuario.php" role="button" class="btn btn-danger">Voltar</a>
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