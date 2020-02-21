<?


class buscaCliente{

  $link = mysql_connect('10.1.10.243', 'root', 'musabela');
           if (!$link) {
               die('Nao foi possivel conectar ao Banco de Dados. Motivo: ' . mysql_error());
           } else{ //echo "conectado";
           }

           //mysql_select_db("sqldados",$link);
           if (mysql_select_db("sqldados",$link))
             {
           //  echo "banco selecionado";
             }
           else
             {
             echo "Erro ao selecionar banco " . mysql_error();
             }


 function chamaCliente($codigo) {

         
          $consulta = "select name as nome, cpf_cgc as cpf, id_sname as identidade, add1 as rua,
                         addComplemento as complemento, nei1 as bairro, city1 as cidade, state1 as
                         estado, mid(zip,1,8) as cep from custp where no = $codigo;";

          $exibe = mysql_query($consulta) or die (mysql_error());
          $verificar=mysql_num_rows($exibe);
          if($verificar > 0){
              while($resultado = mysql_fetch_array($exibe)){
                	  $resultadoCliente['nome'] = $resultado['nome'];
                    $resultadoCliente['cpf'] = $resultado['cpf'];
                    $resultadoCliente['identidade'] = $resultado['identidade'];
                    $resultadoCliente['rua'] = $resultado['rua'];
                    $resultadoCliente['complemento'] = $resultado['complemento'];
                    $resultadoCliente['bairro'] = $resultado['bairro'];
                    $resultadoCliente['cidade'] = $resultado['cidade'];
                    $resultadoCliente['estado'] = $resultado['estado'];
                    $resultadoCliente['cep'] = $resultado['cep'];
                	 }
            }else{
                    echo "Não há registros...";
                  }

      return $resultadoCliente;
}
}

?>
