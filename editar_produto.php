<?php

include 'conexao.php';
echo $id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulário de Peças</title>
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
    <h4>Formulário de Peças</h4>
      <form action="_atualizar_produto.php" method="post" style="margin-top: 20px;">

      	<?php

      	$sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";

      	$buscar = mysqli_query($conexao,$sql);
      	while ($array = mysqli_fetch_array($buscar)){

      		$id_estoque = $array['id_estoque'];
    			$nroproduto = $array['nroproduto'];
    			$nomeproduto = $array['nomeproduto'];
    			$categoria = $array['categoria'];
    			$quantidade = $array['quantidade'];
    			$fornecedor = $array['fornecedor'];




      	?>

          <div class="form-group">
            <label>Nro Produto</label>
            <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disabled>
             <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">

          </div>

          <div class="form-group">
            <label>Nome Produto</label>
            <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">

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
              <input type="number" class="form-control" name="quantidade"value="<?php echo $quantidade ?>">

            </div>

            <div class="form-group">
                <label>Fornecedor</label>
                <select  class="form-control" name="fornecedor">
                  <option>Chevrolet</option>
                  <option>Audi</option>
                  <option>BMW</option>
                  <option>Ford</option>

                </select>
            </div>

            <div style="text-align: right;">
            <button type="submit" class="btn btn-sm" id="botao">Atualizar</button>
          </div>
      <?php } ?>
      </form>
    </div>








  <script type="text/javascript" src="js/bootstrap.js"></script>
  </body>
</html>
