<?php require_once("banco-contrato.php"); ?>

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
</head>
<div class="container" >
    <div class="panel-heading">
            <form name="form" action="lista-contrato.php" method="post">
                <p>Código do Cliente: <input type="text" name="cliente" id="cliente"></p>
                <p>Data Pagamento:<input type="date" name="dp" id="dp"></p>
                <p>Taxa :<input type="number" step="0.01" min="0" max="10" name="tx" id="tx"></p>
                <td><button class="btn btn-primary" type="submit" name="formulario">Calcular</button></td>
            </form>
    </div>
</div>
<body>
    <?php 
        if  ( isset($_POST["formulario"])) {    
            $cliente = isset($_POST['cliente']) ? $_POST['cliente'] : "";
            $dp = isset($_POST['dp']) ? $_POST['dp'] : date("Ymd");
            $tx = isset($_POST['tx']) ? $_POST['tx'] : "Você esqueceu a taxa";
            $contratos = buscaContrato($conexao, $cliente, $dp); ?>                
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table  table-bordered">
                                <tr>
                                    <th scope="col">Contrato</th>
                                    <th scope="col">Parcela</th>
                                    <th scope="col">Valor da Parcela</th>
                                    <th scope="col">Vencimento</th>
                                    <th scope="col">Dias Atrasados</th>
                                    <th scope="col">Multiplicador</th>
                                    <th scope="col">Valor atual</th>
                                </tr>
                        		<?php                        
                                    foreach ($contratos as $contrato ) :
                                        $multiplicador = round(calculaJuros($contrato['Atrs'], $tx), 4);
                                        $valorAtual = $multiplicador * str_replace(",","",($contrato['valorParcela']))/100; 
                                         // para que a multiplicação de certo tem que remover a virgula utilizando o str_replace e resultado dividir por 100. 

                                ?>
                                <tr>
                                    <td><?= $contrato['contrato'] ?></td>
                                    <td><?= $contrato['parcela'] ?></td>
                                    <td><?= $contrato['valorParcela'] ?></td>
                                    <td><?= $contrato['vencto'] ?></td>
                                    <td><?= $contrato['Atrs'] ?></td>
                                    <td><?= $multiplicador ?></td>
                                    <td><?= $valorAtual ?></td>
                                </tr>
                                <?php 
                                    endforeach
                                ?>
                        </table>
                    </div>
                </div>
    <?php } ?>
</body>
