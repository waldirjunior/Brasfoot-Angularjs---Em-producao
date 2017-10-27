<?php
	include "class/editar-informacoes.php";
	if (empty($_GET)) {
		$semidcartola = "Jogador sem ID do Cartola";
		$dadosdoatleta = null;
		$novashabilidadesjogador = null;
	}else{
		$idjogador = $_GET['idjogador'];
		$classeditarjogador = new editarInfo();
	  	$dadosdoatleta = $classeditarjogador->retornadadosatleta($idjogador);
	  	$novashabilidadesjogador = $classeditarjogador->calculohabilidadejogador($idjogador);

	  	//echo var_dump($dadosdoatleta);
	  	//print json_encode($novashabilidadesjogador);
	  	$semidcartola = null;

  	}

?>  	

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="assets/images/favicon.ico">

	<title>Backend - BrasPlay</title>

	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/neon-core.css">
	<link rel="stylesheet" href="assets/css/neon-theme.css">
	<link rel="stylesheet" href="assets/css/neon-forms.css">
	<link rel="stylesheet" href="assets/css/custom.css">
	<link rel="stylesheet" type="text/css" href="assets/css/easy-autocomplete.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/easy-autocomplete.themes.min.css">

	<script src="assets/js/jquery-1.11.3.min.js"></script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style type="text/css" media="screen">
		body {
		    font-size: 17px;
		    color: #2d2d2d;
		}

	</style>

</head>
<body class="page-body" data-ng-app="backApp" data-ng-controller="dadosCtrl">

<div class="page-container sidebar-collapsed">
	
	<?php include_once "comuns/menu.php"; ?>

	<div class="main-content">

		<hr />
					
		<h2>Adicionar Jogador</h2>
		<h2><?php echo $semidcartola ?></h2>
		<br />

		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title">
							Dados do Jogador - 
						</div>
						
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
					
					<div class="panel-body">

						<hr />
						
						<form role="form" action="class/insert-jogador.php" method="post" class="form-horizontal form-groups-bordered">

									<input type="submit" />
									
									<div class="form-group">
										<label for="field-1" class="col-sm-3 control-label">Nome do Jogador</label>
										
										<div class="col-sm-5">
											<input type="text" name="nomejogador" class="form-control" id="nome-jogador" placeholder="Digite o nome" value="<?php echo $dadosdoatleta['nome']; ?>">
										</div>
									</div>

									<div class="form-group">
										<label for="field-1" class="col-sm-3 control-label">Apelido do Jogador</label>
										
										<div class="col-sm-5">
											<input type="text" name="nomeapelido" class="form-control" id="nome-apelido" placeholder="Digite o nome" value="<?php echo $dadosdoatleta['apelido']; ?>">
										</div>
									</div>
							

					
									<div class="form-group">
										<label for="field-1" class="col-sm-3 control-label">Time de Futebol</label>
										
										<div class="col-sm-5">
											<input type="text" name="nometime" value="<?php echo $dadosdoatleta['clube_id']; ?>" class="form-control" id="input" placeholder="Digite o link da foto do jogador">
										</div>
									</div>


									<div class="form-group">
										<label for="field-1" class="col-sm-3 control-label">Foto do jogador</label>
										
										<div class="col-sm-5">
											<input type="text" name="fotojogador" value="<?php echo $dadosdoatleta['foto']; ?>" class="form-control" id="foto-jogador" placeholder="Digite o time">

										</div>
										<div align="right">
											<img src="<?php echo $dadosdoatleta['foto']; ?>" alt="" >
										</div>
									</div>

									<!--<div class="form-group">
										<label class="col-sm-3 control-label">Seleção</label>
										
										<div class="col-sm-5">
											<div class="make-switch">
											    <input type="checkbox" name="selecaoconvocado">
											</div>
										</div>
									</div>-->
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label">Posição</label>
										
										<div class="col-sm-5">
										
											<select name="posicao" class="form-control">
												<option value="5" <?php echo $dadosdoatleta['posicao_id']=='5'?'selected':'';?>>Atacante</option>
												<option value="4" <?php echo $dadosdoatleta['posicao_id']=='4'?'selected':'';?>>Meia</option>
												<option value="2" <?php echo $dadosdoatleta['posicao_id']=='2'?'selected':'';?>>Lateral</option>
												<option value="3" <?php echo $dadosdoatleta['posicao_id']=='3'?'selected':'';?>>Zagueiro</option>
												<option value="1" <?php echo $dadosdoatleta['posicao_id']=='1'?'selected':'';?>>Goleiro</option>
												<option value="6" <?php echo $dadosdoatleta['posicao_id']=='6'?'selected':'';?>>Técnico</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label">Função no Time</label>
										
										<div class="col-sm-5">
											<select class="form-control" name="funcaotime">
												<option value="0"></option>
												<option value="1">Jovem Promessa</option>
												<option value="2">Líder</option>
												<option value="3">General</option>
												<option value="4">Astro</option>
												<option value="5">Criador de jogadas</option>
												<option value="6">Superastro</option>
												<option value="7">Ídolo</option>
												<option value="8">Lenda</option>
											</select>
										</div>
									</div>
									
									
									<div class="form-group">
										<label class="col-sm-3 control-label">Valor de mercado</label>
										
										<div class="col-sm-5">
											<div class="input-group">
												<span class="input-group-addon">R$</span>
												<input type="text" class="form-control" name="valormercado" value="<?php echo $novashabilidadesjogador['valormercado']; ?>">
												<span class="input-group-addon">.00</span>
											</div>
										</div>
									</div>

									
									<div class="form-group">
										<label class="col-sm-3 control-label">Salário anual</label>
										
										<div class="col-sm-5">
											<div class="input-group">
												<span class="input-group-addon">R$</span>
												<input type="text" class="form-control" name="valorsalario" value="<?php echo $novashabilidadesjogador['salarioanual']; ?>">
												<span class="input-group-addon">.00</span>
											</div>
										</div>
									</div>
									
									
									<div class="form-group">
										<label for="field-1" class="col-sm-3 control-label">Nacionalidade</label>
										
										<div class="col-sm-5">
											<input type="text" name="nacionalidade" value="Brasil" class="form-control" id="countries" placeholder="Digite a nacionalidade">
										</div>
									</div>
									
									
									<!--<div class="form-group">
										<label class="col-sm-3 control-label">Atuando</label>
										
										<div class="col-sm-5">
											<div class="make-switch">
											    <input type="checkbox" name="atuando" checked>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label for="field-1" class="col-sm-3 control-label">Idade</label>
										
										<div class="col-sm-5">
											<input type="text" name="idade" value="" class="form-control" id="field-1" placeholder="Digite a idade">
										</div>
									</div>	-->						
									
									<div class="form-group">
										<label class="col-sm-3 control-label">Perna</label>
										
										<div class="col-sm-5">
											<div class="radio radio-replace">
												<input type="radio" id="rd-1" name="perna" value="direita" checked>
												<label>Direita</label>
											</div>
											
											<div class="radio radio-replace">
												<input type="radio" id="rd-2" name="perna" value="esquerda">
												<label>Esquerda</label>
											</div>

										</div>
									</div>
									

									<div class="form-group">
										<label for="field-1" class="col-sm-3 control-label">Habilidade</label>
										
										<div class="col-sm-5">
											<input type="text" class="form-control" id="field-1" name="habilidade" value="<?php echo $novashabilidadesjogador['habilidade']; ?>" placeholder="Digite a habilidade">
										</div>
									</div>

									<div class="form-group">
										<label for="field-1" class="col-sm-3 control-label">Finalização</label>
										
										<div class="col-sm-5">
											<input type="text" class="form-control" id="field-1" name="finalizacao" value="<?php echo $novashabilidadesjogador['finalizacao']; ?>" placeholder="Digite a finalização">
										</div>
									</div>

									<div class="form-group">
										<label for="field-1" class="col-sm-3 control-label">Drible</label>
										
										<div class="col-sm-5">
											<input type="text" class="form-control" id="field-1" name="drible" value="<?php echo $novashabilidadesjogador['drible']; ?>" placeholder="Digite o drible">
										</div>
									</div>

									<div class="form-group">
										<label for="field-1" class="col-sm-3 control-label">Passe</label>
										
										<div class="col-sm-5">
											<input type="text" class="form-control" id="field-1" name="passe" value="<?php echo $novashabilidadesjogador['passe']; ?>" placeholder="Digite o passe">
										</div>
									</div>

									<div class="form-group">
										<label for="field-1" class="col-sm-3 control-label">Velocidade</label>
										
										<div class="col-sm-5">
											<input type="text" class="form-control" id="field-1" name="velocidade" value="<?php echo $novashabilidadesjogador['velocidade']; ?>" placeholder="Digite a velocidade">
										</div>
									</div>									

									
									<div class="form-group">
										<label for="field-1" class="col-sm-3 control-label">Resistência</label>
										
										<div class="col-sm-5">
											<input type="text" class="form-control" id="field-1" name="resistencia" value="<?php echo $novashabilidadesjogador['resistencia']; ?>" placeholder="Digite a resistência">
										</div>
									</div>	
									
									<div class="form-group">
										<label for="field-1" class="col-sm-3 control-label">Desarme</label>
										
										<div class="col-sm-5">
											<input type="text" class="form-control" id="field-1" name="desarme" value="<?php echo $novashabilidadesjogador['desarme']; ?>" placeholder="Digite o desarme">
										</div>
									</div

									<div class="form-group">
										<label for="field-1" class="col-sm-3 control-label">Habilidade Defensiva</label>

										<div class="col-sm-5">
											<input type="text" class="form-control" id="field-1" name="habilidadedefensiva" value="<?php echo $novashabilidadesjogador['habilidadedefensiva']; ?>" placeholder="Digite o desarme">
										</div>
									</div>
									<br />
									<div class="form-group">
										<label for="field-1" class="col-sm-3 control-label">Habilidade de Goleiro</label>

										<div class="col-sm-5">
											<input type="text" class="form-control" id="field-1" name="habilidadegoleiro" value="<?php echo $novashabilidadesjogador['goleiro']; ?>" placeholder="Digite o habilidade de goleiro">
										</div>
									</div>	

									<br />
									<div class="form-group">
										<label for="field-1" class="col-sm-3 control-label">ID do Cartola</label>
										
										<div class="col-sm-5">
											<input type="text" name="idcartola" value="<?php echo $dadosdoatleta['atleta_id']; ?> " class="form-control" id="nome-cartola" placeholder="Digite o nome">
										</div>
									</div>

						</form>
						
					</div>
				
				</div>
			
			</div>
		</div>


		<?php include_once "comuns/rodape.php"; ?>	
		
	</div>

	<?php include_once "comuns/rodapeplus.php"; ?>	
		
</div>
	



	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/bootstrap-switch.min.js"></script>
	<script src="assets/js/neon-chat.js"></script>


	<!--Angular-->

	<script src="../js/angular/angular.min.js" type="text/javascript"></script>
	<script src="../js/angular/angular-ui-router.min.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

	<script src="assets/js/jquery.easy-autocomplete.min.js"></script>


	<script type="text/javascript" src="assets/js/demos.js"></script>
    <script type="text/javascript" src="assets/js/jqxcore.js"></script>
    <script type="text/javascript" src="assets/js/jqxinput.js"></script>

    <link rel="stylesheet" type="text/css" href="assets/css/jqx.base.css">

		<script type="text/javascript">

		var app = angular.module('backApp', ['ui.router']);
		app.controller('dadosCtrl', function($scope,$http) {

			$http.get("dados/equipes.json")
		    .then(function(response) {
		       $scope.equipe = response.data;
		       $scope.equipesnome = [];
	           angular.forEach($scope.equipe, function(item){
	           		$scope.equipesnome.push(item.nome);
	            });

	           var testeequipe = $scope.equipesnome;


		    $(document).ready(function () {              
                var countries = testeequipe;
                $("#input").jqxInput({placeHolder: "Digite o nome da equipe", height: 25, width: 200, minLength: 1,  source: countries });
            });

		    });

		});


		/* Parte do da busca facilitar do pais*/
		var options = {

		  url: "dados/cartola/countries.json",

		  getValue: "name",

		  list: {	
		    match: {
		      enabled: true
		    }
		  },

		  theme: "square"
		};


		$("#countries").easyAutocomplete(options);
		//$("#time").easyAutocomplete(options);


		




	</script>

</body>
</html>