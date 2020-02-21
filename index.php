<?
//Conexao com o Sqldados:
include('conexao.php');

?>
<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
	<title>Renegocia&ccedil;&atilde;o de D&iacute;vidas - Pintos Ltda</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>
<body>
	<div class="container" style="background-color:#f4f4f4;">
      <div class="row border" style="margin-top:10px;padding:20px;">

            <div class="col-md-4"> <img src="imagens/logo.png" width="200px"/></div>
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <h3 style="padding:5%;">RENEGOCIA&Ccedil;&Atilde;O DE D&Iacute;VIDAS</h3>
            </div>
            <div class="col-md-4" ></div>
            <div class="col-md-4" style="margin-top:80px;">
                <div class="align-items-center justify-content-center">
                <!-- Button trigger modal -->
                <button style="margin:20px;" type="button" class="btn btn-lg btn-info" data-toggle="modal" data-target="#cliente">
                Contrato - Cliente sem Avalista
                </button>
                <button style="margin:20px;" type="button" class="btn btn-lg btn-info" data-toggle="modal" data-target="#avalista">
                Contrato - Cliente com Avalista
                </button>
				<button style="margin:20px;" type="button" class="btn btn-lg btn-info" onclick="location.href='calculo.php';" target="_blank">
				<!--input type="button" onclick="location.href='http://google.com';" value="Go to Google" /-->
                Cálculo de Juros de Parcelas
                </button>
               </div>
            </div>
            <div class="col-md-4"></div>

              <!-- Modal Cliente Sem Avalista -->
              <div class="modal fade" id="cliente" tabindex="-1" role="dialog" aria-labelledby="clienteLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Contrato com Cliente Sem Avalista</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
										<form action="semAvalista.php" method="post">
											  <div class="row form-group">
											    <div class="col">
											      <input type="text" class="form-control" name="cliente" placeholder="C&oacute;digo do Cliente">
											    </div>
											  </div>
												<div class="row form-group">
											    <div class="col">
											      <input type="text" class="form-control" name="valorDivida" placeholder="Valor da D&iacute;vida">
											    </div>
											    <div class="col">
											      <input type="text" class="form-control" name="valorAtualDivida" placeholder="Valor Atualizado da D&iacute;vida">
											    </div>
											  </div>
												<div class="row form-group">
											    <div class="col">
											      <input type="text" class="form-control" name="contratos" placeholder="Contrato(s)">
											    </div>
											    <div class="col">
											      <input type="text" class="form-control" name="entrada" placeholder="Entrada">
											    </div>
											  </div>
												<div class="row form-group">
											    <div class="col">
											      <input type="text" class="form-control" placeholder="Quantidade de Parcelas" name="qtdeParcelas">
											    </div>
											    <div class="col">
											      <input type="text" class="form-control" placeholder="Valor da Parcela" name="vlParcelas">
											    </div>
											  </div>
												<div class="row form-group">
											    <div class="col">
											      <input type="text" class="form-control" placeholder="Taxa de Juros" name="juros">
											    </div>
													<div class="col">
 													 <input type="text" class="form-control" placeholder="Novo Contrato" name="novoContrato">
 												 </div>
											  </div>
												<div class="row form-group">
											    <div class="col">
											      <button type="submit" class="btn btn-info">Gerar</button>
											    </div>
											  </div>
										</form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                  </div>
                </div>
              </div>
              </div>
              <!-- Modal com Avalista-->
              <div class="modal fade" id="avalista" tabindex="-1" role="dialog" aria-labelledby="clienteLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Contrato com Cliente Com Avalista</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
										<form action="comAvalista.php" method="post">
											  <div class="row form-group">
											    <div class="col">
											      <input type="text" class="form-control" placeholder="C&oacute;digo do Cliente" name="cliente">
											    </div>
											    <div class="col">
											      <input type="text" class="form-control" placeholder="C&oacute;digo do Avalista" name="avalista">
											    </div>
											  </div>
												<div class="row form-group">
											    <div class="col">
											      <input type="text" class="form-control" placeholder="Valor da D&iacute;vida" name="valorDivida">
											    </div>
											    <div class="col">
											      <input type="text" class="form-control" placeholder="Valor Atualizado da D&iacute;vida" name="valorAtualDivida">
											    </div>
											  </div>
												<div class="row form-group">
											    <div class="col">
											      <input type="text" class="form-control" placeholder="Contrato(s)" name="contratos">
											    </div>
											    <div class="col">
											      <input type="text" class="form-control" placeholder="Entrada" name="entrada">
											    </div>
											  </div>
												<div class="row form-group">
											    <div class="col">
											      <input type="text" class="form-control" placeholder="Quantidade de Parcelas" name="qtdeParcelas">
											    </div>
											    <div class="col">
											      <input type="text" class="form-control" placeholder="Valor da Parcela" name="vlParcelas">
											    </div>
											  </div>
												<div class="row form-group">
											    <div class="col">
											      <input type="text" class="form-control" placeholder="Taxa de Juros" name="juros">
											    </div>
													<div class="col">
 													 <input type="text" class="form-control" placeholder="Novo Contrato" name="novoContrato">
 												 </div>
											  </div>
												<div class="row form-group">
											    <div class="col">
											      <button type="submit" class="btn btn-info">Gerar</button>
											    </div>
											  </div>
										</form>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

                  </div>
                </div>
              </div>
              </div>
              <!-- Fim Modal-->

              <section id="footer" style="margin-top:180px;" class="col-md-12">
                <p class="text-center">Pintos Ltda - Todos os direitos reservados.</p>
              </section>
            </div>
      </div>
  </div>


     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
<?
?>
