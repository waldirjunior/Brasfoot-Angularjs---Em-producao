<?php


		class editarInfo {


			public $nomedojogador;
		    public $contarelementos;
		    public $contador;
		    public $cont;

		    // Metodo construtor setamos aqui o que queremos que ele faça ao criar o objeto
		    function __construct(){
		        //criamos a nossa conexao com o banco de dados e selecionamos o banco
		    }


		    public function retornadadosatleta($idatleta){
		    	$dadosdoatleta = $idatleta;
				$str_data = file_get_contents($_SERVER['DOCUMENT_ROOT']."/brasfoot/backend/dados/cartola/jogadores.json");
				$data = json_decode($str_data,true);
				$contarelementos  = count($data["atletas"]);

				for($contador = 0; $contador < $contarelementos; $contador++){
					if($data["atletas"][$contador]["atleta_id"] == $idatleta){
						$dadosdoatleta = $data["atletas"][$contador];
					}
				}
				return $dadosdoatleta;

		    }

		    public function editarjogadorfunc($idatleta){
		    	$nomedojogador = $idatleta;
				$str_data = file_get_contents($_SERVER['DOCUMENT_ROOT']."/brasfoot/backend/dados/cartola/jogadores.json");
				$data = json_decode($str_data,true);
				$contarelementos  = count($data["atletas"]);

				for($contador = 0; $contador < $contarelementos; $contador++){
					if($data["atletas"][$contador]["atleta_id"] == $idatleta){
						//$nomedojogador = $data["atletas"][$contador]["apelido"];
						$data["atletas"][$contador]["jogadoreditado"] = 1;
						$fh = fopen($_SERVER['DOCUMENT_ROOT']."/brasfoot/backend/dados/cartola/jogadores.json", 'w')
						      or die("Error opening output file");
						fwrite($fh, json_encode($data));
						fclose($fh);

						$nomedojogador = 0;
					}
				}

				return $nomedojogador;

		    }
		    public function editatime(){

		    }

		    public function calculohabilidadejogador($idjogador){
		    	$retornoarray = null;
		    	$str_data = file_get_contents($_SERVER['DOCUMENT_ROOT']."/brasfoot/backend/dados/cartola/jogadores.json");
				$data = json_decode($str_data,true);
				$contarelementos  = count($data["atletas"]);

				$str_time = file_get_contents($_SERVER['DOCUMENT_ROOT']."/brasfoot/backend/dados/equipes.json");
				$arquivo = json_decode($str_time,true);
				$contarelementostime  = count($arquivo);



				for($contador = 0; $contador < $contarelementos; $contador++){
					if($data["atletas"][$contador]["atleta_id"] == $idjogador){

						for($cont = 1; $cont < $contarelementostime; $cont++){
							
							$novovalor = $arquivo[$cont]["idtime"];
							
							if($data["atletas"][$contador]["clube_id"] == $novovalor){

								$forcadotime = $arquivo[$cont]["forcatime"];
								$posicaodojogador = $data["atletas"][$contador]["posicao_id"];
								$novoparametro = $forcadotime - 30;
								$valorbase = rand($novoparametro, $forcadotime);

								$valormercado = $valorbase * 100000;
								$salarioanual = rand(1000,10000);

								//Calculo para Goleiro
								if($posicaodojogador == 1){

									$goleirovalor = $valorbase * 1.1;
									$novavariavelbase = $goleirovalor - 15;

									$habildefensivadt = rand($valorbase,$novavariavelbase);
									$desarmedt = rand($valorbase,$novavariavelbase);
									$resistenciadt = rand($valorbase,$novavariavelbase);

									$habilidadedt = rand(10,$forcadotime);
									$finalizacaodt = rand(10,$forcadotime);
									$dribledt = rand(10,$forcadotime);
									$passedt = rand(10,$forcadotime);
									$velocidade = rand(10,$forcadotime);

								}
								else if($posicaodojogador == 2){

										$velocidade = $valorbase * 1.1;
										$novavariavelbase = $velocidade - 15;

										$habilidadedt = rand($valorbase,$novavariavelbase);
										$desarmedt = rand($valorbase,$novavariavelbase);
										$resistenciadt = rand($valorbase,$novavariavelbase);

										$habildefensivadt = rand(10,$forcadotime);
										$finalizacaodt = rand(10,$forcadotime);
										$dribledt = rand(10,$forcadotime);
										$passedt = rand(10,$forcadotime);
										$goleirovalor = rand(10,$forcadotime);
								}

								else if($posicaodojogador == 3){

										$desarmedt = $valorbase * 1.1;
										$novavariavelbase = $desarmedt - 15;

										$passedt = rand($valorbase,$novavariavelbase);
										$velocidade = rand($valorbase,$novavariavelbase);
										$resistenciadt = rand($valorbase,$novavariavelbase);

										$habildefensivadt = rand(10,$forcadotime);
										$finalizacaodt = rand(10,$forcadotime);
										$dribledt = rand(10,$forcadotime);
										$habilidadedt = rand(10,$forcadotime);
										$goleirovalor = rand(10,$forcadotime);
								}
								else if($posicaodojogador == 4){

										$passedt = $valorbase * 1.1;
										$novavariavelbase = $passedt - 15;

										$habilidadedt = rand($valorbase,$novavariavelbase);
										$velocidade = rand($valorbase,$novavariavelbase);
										$resistenciadt = rand($valorbase,$novavariavelbase);

										$desarmedt = rand(10,$forcadotime);
										$finalizacaodt = rand(10,$forcadotime);
										$dribledt = rand(10,$forcadotime);
										$habildefensivadt = rand(10,$forcadotime);
										$goleirovalor = rand(10,$forcadotime);
								}
								else if($posicaodojogador == 5){

										$finalizacaodt = $valorbase * 1.1;
										$novavariavelbase = $finalizacaodt - 15;

										$habilidadedt = rand($valorbase,$novavariavelbase);
										$velocidade = rand($valorbase,$novavariavelbase);
										$passedt = rand($valorbase,$novavariavelbase);

										$desarmedt = rand(10,$forcadotime);
										$resistenciadt = rand(10,$forcadotime);
										$dribledt = rand(10,$forcadotime);
										$habildefensivadt = rand(10,$forcadotime);
										$goleirovalor = rand(10,$forcadotime);
								}else{
										$finalizacaodt = 10;
										$novavariavelbase = 10;
										$habilidadedt = 10;
										$velocidade = 10;
										$passedt = 10;
										$desarmedt = 10;
										$resistenciadt = 10;
										$dribledt = 10;
										$habildefensivadt = 10;
										$goleirovalor = 10;
								}



								//Fim Calculo para Goleiro

								$retornoarray = [
									"valormercado" => $valormercado,
									"salarioanual" => $salarioanual,
								    "habilidade" => $habilidadedt,
								    "finalizacao" => $finalizacaodt,
								    "drible" => $dribledt,
								    "passe" => $passedt,
								    "velocidade" => $velocidade,
								    "resistencia" => $resistenciadt,
								    "desarme" => $desarmedt,
								    "habilidadedefensiva" => $habildefensivadt,
								    "goleiro" => $goleirovalor,
								];
							}

						}

					}
				}

		    	return $retornoarray;
		    }

		}



?>