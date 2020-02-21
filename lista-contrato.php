<?php require_once("banco-contrato.php");

$cliente = $_POST['cliente'];

$contratos = buscaContrato($conexao, $cliente);
?>

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <div class="pull-left col-md-12 bg-success" >
	    <form name="form" action="lista-contrato.php" method="post">
	        <div class="form-group">
	            <p>Data Pagamento:<input type="date" class="form-control" name="DP"></p>
	            <p>Taxa :<input type="text" class="form-control" name="TX"></p>
	            <td><button class="btn btn-primary" type="submit">Calcular</button></td>

	        </div>
	    </form>
	</div>
</head>


<table class="table table-striped table-bordered">
		<?php
            
            
            foreach ($contratos as $contrato ) :
        ?>
        <tr>
            <td><?= $contrato['contrato'] ?></td>
            <td><?= $contrato['parcela'] ?></td>
            <td><?= $contrato['valorParcela'] ?></td>
            <td><?= $contrato['vencto'] ?></td>
        </tr>
        <?php 
            endforeach
        ?>
</table>

