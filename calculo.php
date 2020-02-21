<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    $(document).ready(function() {
    $('#table-dados-cliente').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "url": "arquivo_buscar_dados.php",
                "type": "POST"
    } );
    } );
	<title>Cálculo de Juros de Parcelas - Pintos Ltda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
</head>

<body>
    <form action="arquivo_buscar_dados.php" method="post">
        <p>Código do Cliente: <input type="text" name="codigo" /></p>
        <p><input type="submit" /></p>
    </form>

    <form name="form" action="" method="get">
        <p>Data Pagamento:<input type="text" name="subject" id="subject" value=""></p>
        <p>Data Pagamento:<input type="text" name="subject" id="subject" value=""></p>
    </form>

    <table id="table-dados-cliente" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Valor Prestação</th>
                <th>Data Vencimento</th>
                <th>Dias de Atraso</th>
                <th>Multiplicador</th>
                <th>Valor Atualizado</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Valor Prestação</th>
                <th>Data Vencimento</th>
                <th>Dias de Atraso</th>
                <th>Multiplicador</th>
                <th>Valor Atualizado</th>
            </tr>
        </tfoot>
    </table>

    <form name="form" action="" method="get">
        <p>Total:<input type="text" name="subject" id="subject" value=""></p>
    </form>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
<??>