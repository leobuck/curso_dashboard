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
              <h3 class="mb-0">Cadastro de Imóvel</h3>
            </div>
            <form action="cadastros/inserir_imovel.php" method="POST" enctype="multipart/form-data">
                <div class="container" style="margin-top: 10px;">
                    <div class="row">
                        <div class="col-md-6">
                            <?php
                                $codigo = rand(1, 99999);
                            ?>
                            <div class="form-group">
                                <label>Código Imóvel:</label>
                                <input class="form-control form-control-alternative" type="text" name="codigo_imovel"
                                    placeholder="Código do Imóvel" required readonly value="<?php echo $codigo; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Endereço:</label>
                                <input class="form-control form-control-alternative" type="text" name="end_imovel"
                                    placeholder="Endereço" required autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Número:</label>
                                <input class="form-control form-control-alternative" type="number" name="nro_end_imovel"
                                    placeholder="Número" required autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Bairro:</label>
                                <input class="form-control form-control-alternative" type="text" name="bairro_imovel"
                                    placeholder="Bairro" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Complemento:</label>
                                <input class="form-control form-control-alternative" type="text" name="complemento_imovel"
                                    placeholder="Complemento" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cidade:</label>
                                <input class="form-control form-control-alternative" type="text" name="cidade_imovel"
                                    placeholder="Cidade" required autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>UF:</label>
                                <select class="form-control form-control-alternative" name="uf_imovel">
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
                                <input class="form-control form-control-alternative" type="text" name="cep_imovel"
                                    placeholder="CEP" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Valor do Imóvel:</label>
                                <input class="form-control form-control-alternative" type="number" name="valor_imovel"
                                    placeholder="Valor do Imóvel" required autocomplete="off">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>CPF do Cliente:</label>
                                <input class="form-control form-control-alternative" type="text" name="cpf_cliente_imovel"
                                    placeholder="CPF do Cliente" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Modalidade:</label>
                                <select class="form-control form-control-alternative" name="id_modalidade_imovel">
                                    <option>Selecione uma opção</option>
                                    <?php
                                        include 'conexao/conexao.php';
                                        $sql = "SELECT * FROM modalidade";
                                        $buscar = mysqli_query($conexao, $sql);

                                        while ($dados = mysqli_fetch_array($buscar)) {
                                            $idModalidade = $dados['id_modalidade'];
                                            $tipoModalidade = $dados['tipo_modalidade'];
                                    ?>
                                        <option value="<?php echo $idModalidade; ?>"><?php echo $tipoModalidade; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Forma de Pagamento:</label>
                                <select class="form-control form-control-alternative" name="id_pagamento_imovel">
                                    <option>Selecione uma opção</option>
                                    <?php
                                        include 'conexao/conexao.php';
                                        $sql = "SELECT * FROM pagamento";
                                        $buscar = mysqli_query($conexao, $sql);

                                        while ($dados = mysqli_fetch_array($buscar)) {
                                            $idPagamento = $dados['id_pagamento'];
                                            $tipoPagamento = $dados['tipo_pagamento'];
                                    ?>
                                        <option value="<?php echo $idPagamento; ?>"><?php echo $tipoPagamento; ?></option>
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
                                <label>Categoria:</label>
                                <select class="form-control form-control-alternative" name="id_categoria_imovel">
                                    <option>Selecione uma opção</option>
                                    <?php
                                        include 'conexao/conexao.php';
                                        $sql = "SELECT * FROM categoria";
                                        $buscar = mysqli_query($conexao, $sql);

                                        while ($dados = mysqli_fetch_array($buscar)) {
                                            $idCategoria = $dados['id_categoria'];
                                            $tipoCategoria = $dados['tipo_categoria'];
                                    ?>
                                        <option value="<?php echo $idCategoria; ?>"><?php echo $tipoCategoria; ?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Fotos</label>
                                <table class="table" id="products-table">
                                    <tbody>
                                        <tr>
                                            <?php $i=0;?>
                                            <td>
                                                <input type="file" name="foto[<?php echo $i?>]" class="form-control-file" id="exampleFormControlFile1">
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="5" style="text-align: right;">
                                                <button onclick="AddTableRow()" type="button" class="btn btn-success">Adicionar Foto</button>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
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
    <script language="javascript">
        var maximo = 6;
        (function($) {
        AddTableRow = function() {
            var qtd = $("#products-table tbody tr").length;
            if (qtd < maximo) {
            var newRow = $("<tr>");
            var cols = "";

            cols += '<td>  <input type="file" name="foto['+ qtd +']" class="form-control-file" id="exampleFormControlFile1"></td></tr>';
            
            
            newRow.append(cols);
            $("#products-table").append(newRow);
            resetId();
            return false;
            }
        };
        })(jQuery);
        //renova os ids dos campos dinâmicos
    </script>
</body>
</html>