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
              <h3 class="mb-0">Cadastro de Cliente</h3>
            </div>
            <form action="cadastros/inserir_cliente.php" method="GET">
                <div class="container" style="margin-top: 10px;">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nome:</label>
                                <input class="form-control form-control-alternative" type="text" name="nome_cliente"
                                    placeholder="Nome" required autofocus="" autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Sobrenome:</label>
                                <input class="form-control form-control-alternative" type="text" name="sobrenome_cliente"
                                    placeholder="Sobrenome" required autofocus="" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Endereço:</label>
                                <input class="form-control form-control-alternative" type="text" name="endereco_cliente"
                                    placeholder="Endereço" required autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Número:</label>
                                <input class="form-control form-control-alternative" type="number" name="nro_end_cliente"
                                    placeholder="Número" required autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Bairro:</label>
                                <input class="form-control form-control-alternative" type="text" name="bairro_cliente"
                                    placeholder="Bairro" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Complemento:</label>
                                <input class="form-control form-control-alternative" type="text" name="complemento_cliente"
                                    placeholder="Complemento" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cidade:</label>
                                <input class="form-control form-control-alternative" type="text" name="cidade_cliente"
                                    placeholder="Cidade" required autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>UF:</label>
                                <select class="form-control form-control-alternative" name="uf_cliente">
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>CEP:</label>
                                <input class="form-control form-control-alternative" type="text" name="cep_cliente"
                                    placeholder="CEP" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>E-mail:</label>
                                <input class="form-control form-control-alternative" type="email" name="mail_cliente"
                                    placeholder="E-mail Válido" required autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>CPF:</label>
                                <input class="form-control form-control-alternative" type="text" name="cpf_cliente"
                                    placeholder="CPF" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Interesse:</label>
                                <select class="form-control form-control-alternative" name="interesse_cliente">
                                    <option>Comprar</option>
                                    <option>Alugar</option>
                                    <option>Ambos</option>
                                </select>
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