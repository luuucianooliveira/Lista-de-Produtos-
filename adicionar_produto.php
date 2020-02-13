<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulário de cadastro</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <style type="text/css">
        #tamanhoContainer {
          width: 500px;
        }

        #botao {
            background-color: #0E6AF1;
            color : #FFFFFF;
            font-weight: bold;
        }

    </style>

  </head>
  <body>

<div class="container" id="tamanhoContainer" style="margin-top: 40px">

  <div style="text-align: right">
    
  <a href="index.php" role="button" class="btn btn-sm" id="botao">Voltar</a>
  </div>

    <h4>Formulário de cadastro</h4>
      <form action="_inserir_produto.php" method="post" style="margin-top: 20px;">
          <div class="form-group">
            <label>Nro Produto</label>
            <input type="number" class="form-control" name="nroproduto" placeholder="insira o número do produto" required autocomplete="off">

          </div>

          <div class="form-group">
            <label>Nome Produto</label>
            <input type="text" class="form-control" name="nomeproduto" placeholder="insira o nome do produto" required autocomplete="off">

          </div>

          <div class="form-group">
              <label >Categoria</label>
              <select  class="form-control" name="categoria">
                <option>Periféricos</option>
                <option>Lataria</option>
                <option>Motores</option>
                <option>Pneus</option>

              </select>
          </div>

            <div class="form-group">
              <label>Quantidade</label>
              <input type="number" class="form-control" name="quantidade" placeholder="insira a quantidade do produto" required autocomplete="off">

            </div>

            <div class="form-group">
                <label>Fornecedor</label>
                <select  class="form-control" name="fornecedor">
                  <option>Chevrolet</option>
                  <option>Audi B</option>
                  <option>BMW C</option>
                  <option>Ford D</option>

                </select>
            </div>

            <div style="text-align: right;">

            <button type="submit" class="btn btn-sm" id="botao">Cadastrar</button>
          </div>
      </form>



    </div>








  <script type="text/javascript" src="js/bootstrap.js"></script>
  </body>
</html>
