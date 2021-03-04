<?php include 'menu.php'; ?>
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
              <h3 class="mb-0">Cadastro de Usuário</h3>
            </div>
            <form action="cadastros/inserir_usuario.php" method="POST">
                <div class="container" style="margin-top: 10px;">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nome:</label>
                                <input class="form-control form-control-alternative" type="text" name="nome_usuario"
                                    placeholder="Nome Completo" required autofocus="" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nível do Usuário:</label>
                                <select class="form-control form-control-alternative" name="nivel_acesso_usuario">
                                    <option value="1">Gerente</option>
                                    <option value="2">Vendedor</option>
                                    <option value="3">Recepcionista</option>
                                    <option value="4">Administrador</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Usuário:</label>
                                <input class="form-control form-control-alternative" type="text" name="usuario"
                                    placeholder="Usuário" required autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Senha:</label>
                                <input class="form-control form-control-alternative" type="password" name="senha_usuario"
                                    placeholder="Senha de no minimo 8 digitos" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>E-mail:</label>
                                <input class="form-control form-control-alternative" type="email" name="mail_usuario"
                                    placeholder="E-mail Válido" required autocomplete="off">
                            </div>
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