<?php


	$post_date = file_get_contents("php://input");
	$datat = json_decode($post_date);

	$contarelementosequipes = 0;


	$str_equipes = file_get_contents("../dados/equipes.json");
	$equipesgeral = json_decode($str_equipes,true);
	$contarelementosequipes  = count($equipesgeral);

	$str_jogadores = file_get_contents("../dados/jogador.json");
	$jogadoresgeral = json_decode($str_jogadores,true);
	$contarelementosjogador  = count($jogadoresgeral);

	//Goleiro
	$goleiro[] = 0;
	$trocaDePosicaogl = 0;
	$indexgl = 0;
	$contaux = 0;

	//Defesa
	$defesa[] = 0;
	$trocaDePosicaodefesa = 0;
	$indexdefesa = 0;
	$contauxdefesa = 0;

	//Lateral
	$lateral[] = 0;
	$trocaDePosicaolateral = 0;
	$indexlateral = 0;
	$contauxlateral = 0;

	//Meio
	$meiocampo[] = 0;
	$trocaDePosicaomeia = 0;
	$indexmeia = 0;
	$contauxmeia = 0;

	//Atacaque
	$ataque[] = 0;
	$trocaDePosicaoataque = 0;
	$indexataque = 0;
	$contauxataque = 0;

	$str_data = file_get_contents("../dados/equipes.json");
	$data = json_decode($str_data,true);


	for($auxeqg = 1; $auxeqg <= $contarelementosequipes; $auxeqg++){





		for($auxjogq = 1; $auxjogq <= $contarelementosjogador; $auxjogq++){

			$valordaequipeid = $equipesgeral[$auxeqg]["idtime"];
			//if($valordaequipeid == 50){
				if($equipesgeral[$auxeqg]["idtime"] == $jogadoresgeral[$auxjogq]["time"]){

					if($jogadoresgeral[$auxjogq]["status"]["posicao"] == 1){

						$dadosjogador['idtime'] = $jogadoresgeral[$auxjogq]["time"];
						$dadosjogador['idjogador'] = $jogadoresgeral[$auxjogq]["idcartola"];
						$dadosjogador['pontos'] = $jogadoresgeral[$auxjogq]["status"]["pontos"];
	       			
						$goleiro[] = $dadosjogador;

					}
					else if($jogadoresgeral[$auxjogq]["status"]["posicao"] == 2){

						$dadosjogador['idtime'] = $jogadoresgeral[$auxjogq]["time"];
						$dadosjogador['idjogador'] = $jogadoresgeral[$auxjogq]["idcartola"];
						$dadosjogador['pontos'] = $jogadoresgeral[$auxjogq]["status"]["pontos"];
	       			
						$lateral[] = $dadosjogador;

					}
					else if($jogadoresgeral[$auxjogq]["status"]["posicao"] == 3){

						$dadosjogador['idtime'] = $jogadoresgeral[$auxjogq]["time"];
						$dadosjogador['idjogador'] = $jogadoresgeral[$auxjogq]["idcartola"];
						$dadosjogador['pontos'] = $jogadoresgeral[$auxjogq]["status"]["pontos"];
	       			
						$defesa[] = $dadosjogador;

					}
					else if($jogadoresgeral[$auxjogq]["status"]["posicao"] == 4){

						$dadosjogador['idtime'] = $jogadoresgeral[$auxjogq]["time"];
						$dadosjogador['idjogador'] = $jogadoresgeral[$auxjogq]["idcartola"];
						$dadosjogador['pontos'] = $jogadoresgeral[$auxjogq]["status"]["pontos"];
	       			
						$meiocampo[] = $dadosjogador;

					}
					else if($jogadoresgeral[$auxjogq]["status"]["posicao"] == 5){

						$dadosjogador['idtime'] = $jogadoresgeral[$auxjogq]["time"];
						$dadosjogador['idjogador'] = $jogadoresgeral[$auxjogq]["idcartola"];
						$dadosjogador['pontos'] = $jogadoresgeral[$auxjogq]["status"]["pontos"];
	       			
						$ataque[] = $dadosjogador;

					}else{
					}

				}

			//}else{
			//}

		}

			//CALCULO DO GOLEIRO O MELHOR PASSA O PRIMEIRO

			$contaux  = count($goleiro);
			while ($indexgl < $contaux - 1) {
				if ($goleiro[$indexgl]['pontos'] < $goleiro[$indexgl + 1]['pontos']) {
					$trocaDePosicaogl = $goleiro[$indexgl];
					$goleiro[$indexgl] = $goleiro[$indexgl + 1];
					$goleiro[$indexgl + 1] = $trocaDePosicaogl;
					$indexgl = 0;
					continue;
				}
				$indexgl++;
			}

			$idtimegerallocal = $goleiro[0]['idtime'];


			$contauxdefesa  = count($defesa);
			while ($indexdefesa < $contauxdefesa - 1) {
				if ($defesa[$indexdefesa]['pontos'] < $defesa[$indexdefesa + 1]['pontos']) {
					$trocaDePosicaodefesa = $defesa[$indexdefesa];
					$defesa[$indexdefesa] = $defesa[$indexdefesa + 1];
					$defesa[$indexdefesa + 1] = $trocaDePosicaodefesa;
					$indexdefesa = 0;
					continue;
				}
				$indexdefesa++;
			}

			$contauxlateral  = count($lateral);
			while ($indexlateral < $contauxlateral - 1) {
				if ($lateral[$indexlateral]['pontos'] < $lateral[$indexlateral + 1]['pontos']) {
					$trocaDePosicaolateral = $lateral[$indexlateral];
					$lateral[$indexlateral] = $lateral[$indexlateral + 1];
					$lateral[$indexlateral + 1] = $trocaDePosicaolateral;
					$indexlateral = 0;
					continue;
				}
				$indexlateral++;
			}

			//Meio Campo
			$contauxmeia  = count($meiocampo);
			while ($indexmeia < $contauxmeia - 1) {
				if ($meiocampo[$indexmeia]['pontos'] < $meiocampo[$indexmeia + 1]['pontos']) {
					$trocaDePosicaomeia = $meiocampo[$indexmeia];
					$meiocampo[$indexmeia] = $meiocampo[$indexmeia + 1];
					$meiocampo[$indexmeia + 1] = $trocaDePosicaomeia;
					$indexmeia = 0;
					continue;
				}
				$indexmeia++;
			}

			//Ataque
			$contauxataque  = count($ataque);
			while ($indexataque < $contauxataque - 1) {
				if ($ataque[$indexataque]['pontos'] < $ataque[$indexataque + 1]['pontos']) {
					$trocaDePosicaoataque = $ataque[$indexataque];
					$ataque[$indexataque] = $ataque[$indexataque + 1];
					$ataque[$indexataque + 1] = $trocaDePosicaoataque;
					$indexataque = 0;
					continue;
				}
				$indexataque++;
			}




					$data[$auxeqg]["timetitular"]["pos1"] = $goleiro[0]['idjogador'];//Goleiro

					$data[$auxeqg]["timetitular"]["pos2"] = $lateral[0]['idjogador'];//lateral1
					$data[$auxeqg]["timetitular"]["pos5"] = $lateral[1]['idjogador'];//lateral2
					$data[$auxeqg]["timetitular"]["pos4"] = $defesa[0]['idjogador'];//Zaga2
					$data[$auxeqg]["timetitular"]["pos3"] = $defesa[1]['idjogador'];//Zaga1

					$data[$auxeqg]["timetitular"]["pos7"] = $meiocampo[0]['idjogador'];//meiocampo1
					$data[$auxeqg]["timetitular"]["pos8"] = $meiocampo[1]['idjogador'];//meiocampo2
					$data[$auxeqg]["timetitular"]["pos6"] = $meiocampo[2]['idjogador'];//meiocampo3
					$data[$auxeqg]["timetitular"]["pos9"] = $meiocampo[3]['idjogador'];//meiocampo4

					$data[$auxeqg]["timetitular"]["pos11"] = $ataque[0]['idjogador'];//ataque1
					$data[$auxeqg]["timetitular"]["pos10"] = $ataque[1]['idjogador'];//ataqua2




			$fh = fopen("../dados/equipes.json", 'w')
			      or die("Error opening output file");
			fwrite($fh, json_encode($data));
			fclose($fh);



	}



	//Já Estava Funcionando ( Código que é chamado do Angular da página de Plao de Jogos)


	$iddotimegeral = $datat->idtime;
	$pos1s = $datat->pos1;
	$pos2s = $datat->pos2;
	$pos3s = $datat->pos3;
	$pos4s = $datat->pos4;
	$pos5s = $datat->pos5;
	$pos6s = $datat->pos6;
	$pos7s = $datat->pos7;
	$pos8s = $datat->pos8;
	$pos9s = $datat->pos9;
	$pos10s = $datat->pos10;
	$pos11s = $datat->pos11;

	//$pos1s = $data->pos1;

	echo $iddotimegeral;
	echo $pos1s;
	 
	 
	$data[$iddotimegeral]["timetitular"]["pos1"] = $pos1s;
	$data[$iddotimegeral]["timetitular"]["pos2"] = $pos2s;
	$data[$iddotimegeral]["timetitular"]["pos3"] = $pos3s;
	$data[$iddotimegeral]["timetitular"]["pos4"] = $pos4s;
	$data[$iddotimegeral]["timetitular"]["pos5"] = $pos5s;
	$data[$iddotimegeral]["timetitular"]["pos6"] = $pos6s;
	$data[$iddotimegeral]["timetitular"]["pos7"] = $pos7s;
	$data[$iddotimegeral]["timetitular"]["pos8"] = $pos8s;
	$data[$iddotimegeral]["timetitular"]["pos9"] = $pos9s;
	$data[$iddotimegeral]["timetitular"]["pos10"] = $pos10s;
	$data[$iddotimegeral]["timetitular"]["pos11"] = $pos11s;
	
	$fh = fopen("../dados/equipes.json", 'w')
	      or die("Error opening output file");
	fwrite($fh, json_encode($data));
	fclose($fh);

?>
