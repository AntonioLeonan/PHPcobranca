<?php //require_once("banco-contrato.php");?>
<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    
	<title>Cálculo de Juros de Parcelas - Pintos Ltda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">

</head>

	<form action="lista-contrato.php" method="post">
		<p>Código do Cliente: <input class="form-control" type="text" name="cliente"/></p>
		<td><button class="btn btn-primary" type="submit">Buscar</button></td>
	</form>
	
	