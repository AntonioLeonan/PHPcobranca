<?
//Conexao com o Sqldados:
include('conexao.php');
include('extenso.php');


 $clienteNome = buscaCliente::chamaCliente($_POST['cliente']);


 setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
 date_default_timezone_set('America/Sao_Paulo');

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

    <div class="container">
      <div class="row">
          <div class="col-md-12">
              <h3 style="margin-top:40px;margin-bottom:40px;"><center>TERMO DE ACORDO</center></h3>
              <div style="text-align:justify;">
                <p><b>CREDOR: PINTOS LTDA</b>, sociedade empres&aacute;ria limitada, inscrita no CNPJ sob o n&uacute;mero 06.837.645/0001-60,
                  com sede na &Aacute;lvaro Mendes, n&deg; 1237, Centro, CEP 64.000-060, na cidade de Teresina, Piau&iacute;, neste ato representado por
                  MARIA JOS&Eacute; ALVES DE ALBUQUERQUE, Gerente de Atendimento. </p>
                <p><b>DEVEDOR:</b> <? echo $clienteNome['nome']; ?>, portador (a) da c&eacute;dula de identidade R.G. n&deg; <? echo $clienteNome['identidade']; ?>, CPF n&deg; <? echo $clienteNome['cpf']; ?>,
                  residente e domiciliado(a) na <? echo $clienteNome['rua']; ?> <? echo $clienteNome['complemento']; ?>, BAIRRO <? echo $clienteNome['bairro']; ?>, CEP <? echo $clienteNome['cep']; ?> <? echo $clienteNome['cidade']; ?> - <? echo $clienteNome['estado']; ?>. </p>
                <p>Pelo presente instrumento particular e na melhor forma de direito, confessam e assumem como l&iacute;quida e certa a d&iacute;vida a seguir
                  descrita:</p>
                <p>
                  <b>CL&Aacute;USULA PRIMEIRA:</b> Ressalvadas quaisquer outras obriga&ccedil;&otilde;es aqui n&atilde;o inclu&iacute;das, pelo presente instrumento e na melhor forma de
                  direito, o DEVEDOR confessa dever ao CREDOR a quantia l&iacute;quida, certa e exig&iacute;vel no valor de R$ <?=$_POST['valorDivida']?> ( <?=extenso($_POST['valorDivida'])?> ) referente ao (s) contrato (s) sob n&deg; <?=$_POST['contratos']?> </p>
                <p>
                  <b>CL&Aacute;USULA SEGUNDA:</b> O DEVEDOR, compromete-se a pagar ao CREDOR, a import&acirc;ncia de R$ <?=$_POST['valorAtualDivida']?> ( <?=extenso($_POST['valorAtualDivida'])?> ) com entrada de
                  R$ <?echo $_POST['entrada']; echo " (".extenso($_POST['entrada'])." ) "; ?> a ser paga no ato da assinatura do presente instrumento e o restante em <?=$_POST['qtdeParcelas']?> parcela(s) mensal(is)
                  de R$ <?=$_POST['vlParcelas']?> (<?=extenso($_POST['vlParcelas'])?> ) sendo a primeira para <? echo strftime(' %d/%m/%Y', strtotime('today + 1 month'));?> e as demais para cada dia <? echo strftime(' %d', strtotime('today'));?> do m&ecirc;s subsequente
                  ao vencido, conforme carn&ecirc; n&deg; <?=$_POST['novoContrato']?>.<br/>
                  <b>Par&aacute;grafo &Uacute;nico:</b> O n&atilde;o pagamento de qualquer parcela no seu vencimento, incidir&aacute; a aplica&ccedil;&atilde;o de juros compensat&oacute;rios &agrave; base de <?=$_POST['juros']?>
                  ao m&ecirc;s sobre o valor da presta&ccedil;&atilde;o vencida e n&atilde;o paga.</p>
                <p><b>CL&Aacute;USULA TERCEIRA:</b> &Agrave; D&Iacute;VIDA ora reconhecida e assumida pelo DEVEDOR, como l&iacute;quida, certa e exig&iacute;vel, no valor acima
                  mencionado, aplica-se o disposto no artigo 585, II, do C&oacute;digo de Processo Civil Brasileiro, haja vista o car&aacute;ter de t&iacute;tulo
                  executivo extrajudicial do presente instrumento de confiss&atilde;o de d&iacute;vida. </p>
                <p><b>CL&Aacute;USULA QUARTA:</b> A eventual toler&acirc;ncia &agrave; infring&ecirc;ncia de qualquer das cl&aacute;usulas deste instrumento ou o n&atilde;o exerc&iacute;cio de qualquer
                  direito nele previsto constituir&aacute; mera liberalidade, n&atildeo implicando em nova&ccedil;&atilde;o ou transa&ccedil;&atilde;o de qualquer esp&eacute;cie. </p>
                <p><b>CL&Aacute;USULA QUINTA:</b> Ap&oacute;s efetuado o pagamento da entrada do acordo, prevista na cl&aacute;usula segunda, o CREDOR compromete-se a retirar
                   o nome do DEVEDOR dos &oacute;rg&atilde;os de prote&ccedil;&atilde;o ao cr&eacute;dito, no prazo de dois dias &uacute;teis, contados da data do efetivo pagamento.<br/>
                   <b>Par&aacute;grafo &Uacute;nico:</b> O descumprimento do pagamento das demais parcelas, ocasionar&aacute; a inscri&ccedil;&atilde;o do nome do DEVEDOR nos &oacute;rg&atilde;os de prote&ccedil;&atilde;o
                  ao cr&eacute;dito.</p>
                <p><b>CL&Aacute;USULA SEXTA:</b> Para dirimir qualquer d&uacute;vida oriunda deste instrumento fica eleito o Foro de Teresina, Piau&iacute;.</p>
                <p style="margin-top:40px;"><center>Teresina (PI), <? echo strftime(' %d de %B de %Y', strtotime('today'));?>.</center></p>
                <p style="margin-top:40px;"><center>________________________________________________________ <br/>
                                     PINTOS LTDA </center></p>
                <p style="margin-top:40px;"><center>________________________________________________________ <br/>
                                    <? echo $clienteNome['nome']; ?> </center></p>
                <p style="margin-top:40px;">Testemunhas:</p>
                <p>________________________________________________________ <br/>
                                    RG:<br/>CPF: </p>
                <p>________________________________________________________ <br/>
                                    RG:<br/>CPF: </p>

            </div>
          </div>
      </div>
    </div>

</body>
</html>
