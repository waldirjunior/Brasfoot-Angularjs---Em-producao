<?php
ob_start();

    echo "Nome Jogador: ";
    echo $_POST['nomejogador'];
    echo "<br />"; 

    echo "Apelido do Jogador: ";
    echo $_POST['nomeapelido'];
    echo "<br />"; 

    echo "Nome Time: ";
    echo $_POST['nometime'];
    echo "<br />"; 

    echo "Link Foto: ";
    echo $_POST['fotojogador'];
    echo "<br />"; 

    echo "Posição: ";
    echo $_POST['posicao'];
    echo "<br />";

    echo "Função no Time: ";
    echo $_POST['funcaotime'];
    echo "<br />";

    echo "Valor no Mercado: ";
    echo $_POST['valormercado'];
    echo "<br />";

    echo "Valor Salário: ";
    echo $_POST['valorsalario'];
    echo "<br />";

    echo "Nacionalidade: ";
    echo $_POST['nacionalidade'];
    echo "<br />";

    echo "Idade: ";
    echo $_POST['idade'];
    echo "<br />";

    echo "Perna: ";
    echo $_POST['perna'];
    echo "<br />";

    echo "Habilidade: ";
    echo $_POST['habilidade'];
    echo "<br />";

    echo "Finalização: ";
    echo $_POST['finalizacao'];
    echo "<br />";

    echo "Drible: ";
    echo $_POST['drible'];
    echo "<br />";

    echo "Passe: ";
    echo $_POST['passe'];
    echo "<br />";

    echo "Velocidade: ";
    echo $_POST['velocidade'];
    echo "<br />";

    echo "Resistencia: ";
    echo $_POST['resistencia'];
    echo "<br />";

    echo "Desarme: ";
    echo $_POST['desarme'];
    echo "<br />";

    echo "Habilidade Defensiva: ";
    echo $_POST['habilidadedefensiva'];
    echo "<br />";

    echo "Habilidade de Goleiro: ";
    echo $_POST['habilidadegoleiro'];
    echo "<br />";

    echo "ID do Cartola: ";
    echo $_POST['idcartola'];
    echo "<br />";


    $habilidadedt = $_POST['habilidade'];
    $finalizacaodt =  $_POST['finalizacao'];
    $dribledt = $_POST['drible'];;
    $passedt = $_POST['passe'];
    $velocidadedt = $_POST['velocidade'];
    $resistenciadt = $_POST['resistencia'];
    $desarmedt = $_POST['desarme'];
    $habildefensivadt  = $_POST['habilidadedefensiva'];
    $habilgoleiro = $_POST['habilidadegoleiro'];


    $geral = 0;
    $posicaodojogador = $_POST['posicao'];

    if($posicaodojogador == 1){ // Goleiro
      $geral = $habilgoleiro + $habildefensivadt + $desarmedt + $resistenciadt;
      $geral = $geral/4;
    }
    else if($posicaodojogador == 2){ // Lateral
      $geral = $velocidadedt + $resistenciadt + $desarmedt + $habilidadedt;
      $geral = $geral/4;
    }
    else if($posicaodojogador == 3){ //Zagueiro
      $geral = $velocidadedt + $resistenciadt + $desarmedt + $passedt;
      $geral = $geral/4;
    }
    else if($posicaodojogador == 4){ //Meia
      $geral = $velocidadedt + $resistenciadt + $habilidadedt + $passedt;
      $geral = $geral/4;
    }
    else if($posicaodojogador == 5){ //Atacante
      $geral = $velocidadedt + $finalizacaodt + $habilidadedt + $passedt;
      $geral = $geral/4;
    }
    else{
      //Calculo para Pontos Gerais
      $geral = $habilidadedt+$finalizacaodt+$dribledt+$passedt+$velocidadedt+$resistenciadt+$desarmedt+$habildefensivadt;
      $geral = $geral/8;

    }


    //first copy your json data  data.json
    $str = file_get_contents('../dados/jogador.json');//get contents of your json file and store it in a string,bro small suggestion never keep any JSON data in ur html file its not safe.always keep json data in external file.
    $arr = json_decode($str, true);//decode it

    //Status
       $statusar['selecao'] = "0";
       $statusar['posicao'] = $posicaodojogador;
       $statusar['funcao'] = $_POST['funcaotime'];
       $statusar['valormercado'] = $_POST['valormercado'];
       $statusar['salario'] = $_POST['valorsalario'];
       $statusar['pais'] = $_POST['nacionalidade'];
       $statusar['pontos'] = $geral;
       $statusar['atuando'] = "1";

    //Físico
       $fisicoar['staminageral'] = 100;
       $fisicoar['idade'] = 0;
       $fisicoar['lesao'] = 0;
       $fisicoar['tempolesao'] = 0;
       $fisicoar['perna'] = $_POST['perna'];

    //Habilidades    
       $habilidadesar['habilidade'] = $habilidadedt;
       $habilidadesar['finalizacao'] = $finalizacaodt;
       $habilidadesar['drible'] = $dribledt;
       $habilidadesar['passe'] = $passedt;
       $habilidadesar['velocidade'] = $velocidadedt;
       $habilidadesar['resistencia'] = $resistenciadt;
       $habilidadesar['desarme'] = $desarmedt;
       $habilidadesar['habildefensiva'] = $habildefensivadt;
       $habilidadesar['habilgoleiro'] = $habilgoleiro;

     $idatleta = $_POST['idcartola'];
     $arrne['idcartola'] = $idatleta;
     $arrne['nome'] = $_POST['nomejogador'];
     $arrne['apelido'] = $_POST['nomeapelido'];
     $arrne['foto'] = $_POST['fotojogador'];
     $arrne['time'] = $_POST['nometime'];
     $arrne['status'] = $statusar;
     $arrne['fisico'] = $fisicoar;
     $arrne['habilidades'] = $habilidadesar;



     array_push( $arr, $arrne);//push contents to ur decoded array i.e $arr
     $str = json_encode($arr);
    //now send evrything to ur data.json file using folowing code
     if (json_decode($str) != null){
         $file = fopen('../dados/jogador.json','w');
         fwrite($file, $str);
         fclose($file);

         header("Location: /brasfoot/backend/editarjogador.php?idjogador=$idatleta");
         exit();
    }
    else
    {
     echo "<b>Erro: No insert de jogador.</b>";
    }

?>