<?php 
    include 'menu.php';
    $id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <div class="container-fluid mt--7">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-1">
              <h3 class="mb-0">Status do Imóvel</h3>
            </div>
            <div class="container" style="margin-top: 10px;">
              <form action="cadastros/inserir_status.php" method="POST">
                <div class="row">
                    <div class="col-md-6">
                        <?php
                            include 'conexao/conexao.php';
                            $sql = "SELECT * FROM imovel WHERE id_imovel = $id";
                            $busca = mysqli_query($conexao, $sql);
                            while ($dados = mysqli_fetch_array($busca)) {
                                $idimovel = $dados['id_imovel'];
                                $codigo = $dados['codigo_imovel'];
                            }
                        ?>
                        <div class="form-group">
                        <label>Código:</label>
                        <input class="form-control form-control-alternative" type="text" name="codigo"
                            value="<?php echo $codigo; ?>" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Corretor:</label>
                            <select class="form-control form-control-alternative" name="corretor">
                                <option>Selecione uma opção</option>
                                <?php
                                    include 'conexao/conexao.php';
                                    $sql = "SELECT * FROM usuario";
                                    $buscar = mysqli_query($conexao, $sql);

                                    while ($dados = mysqli_fetch_array($buscar)) {
                                        $idUsuario = $dados['id_usuario'];
                                        $nomeUsuario = $dados['nome_usuario'];
                                        $usuario = $dados['usuario_usuario'];
                                ?>
                                    <option value="<?php echo $usuario; ?>">
                                        <?php echo $nomeUsuario ." - " . $usuario; ?>
                                    </option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Modalidade:</label>
                            <select class="form-control form-control-alternative" name="modalidade">
                                <option>Selecione uma opção</option>
                                <?php
                                    include 'conexao/conexao.php';
                                    $sql = "SELECT * FROM modalidade";
                                    $buscar = mysqli_query($conexao, $sql);

                                    while ($dados = mysqli_fetch_array($buscar)) {
                                        $idModalidade = $dados['id_modalidade'];
                                        $tipoModalidade = $dados['tipo_modalidade'];
                                ?>
                                    <option value="<?php echo $tipoModalidade; ?>"><?php echo $tipoModalidade; ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Valor do Imóvel:</label>
                            <input class="form-control form-control-alternative" type="number" name="valor"
                                placeholder="Valor do Imóvel" required autocomplete="off">
                        </div>
                    </div>
                </div>

                <div class="card-footer py-4">
                  <div style="text-align: right;">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                  </div>
                </div>
              </form>
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
    <?php include 'rodape.php'; ?>
</body>
</html>