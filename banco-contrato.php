<?php
require_once("conecta.php");



function buscaContrato($conexao, $cliente, $dp){
	$contratos = array();
	$resultado = mysqli_query($conexao,"select	inst.contrno as contrato, itxa.instno  as parcela, FORMAT(itxa.instamt/100, 2,'de_DE') as valorParcela, DATE_FORMAT(itxa.duedate, '%d/%m/%Y') as vencto, TIMESTAMPDIFF(DAY, DATE_FORMAT(itxa.duedate,'%Y-%m-%d'), '{$dp}') as Atrs from itxa INNER JOIN inst USING(storeno,contrno)INNER JOIN custp ON inst.custno = custp.no	WHERE inst.custno = {$cliente} AND itxa.status in (0,2,3) and inst.status = 0") or die("nao funcionou");
	while($contrato = mysqli_fetch_assoc($resultado)) {
     			array_push($contratos, $contrato);
     		}

     		return $contratos;

}


function calculaJuros($diasAtrasados, $tx){

	$multiplicador = pow(pow((($tx/100)+1),(1/30)), $diasAtrasados);
	
	return $multiplicador;
}



