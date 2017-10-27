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


</head>
<body class="page-body" data-ng-app="backApp" data-ng-controller="dadosCtrl">

<div class="page-container sidebar-collapsed">

	<?php include_once "comuns/menu.php"; ?>

	<div class="main-content">

		<hr />

		<h2>Exibir Times</h2>
		<br />

		<table class="table table-bordered datatable" id="table-1">
			<thead>
				<tr>
					<th data-hide="phone">Fotos Exibir () <input type="checkbox" ng-model="checked" aria-label="Toggle ngShow"></th>
					<th>Botão Cadastrar</th>
					<th data-hide="phone">ID do Time</th>
					<th data-hide="phone,tablet">Apelido</th>
					<th>ID jogador</th>
				</tr>
			</thead>
			<tbody>
				<tr class="odd gradeX" data-ng-repeat="conteudotime in equipetd">
					<td><strong class="check-element animate-show-hide" ng-show="checked"><img src="{{conteudotime.foto}}" alt=""></strong></td>
					<td><a href="/brasfoot/backend/addjogador.php?idjogador={{conteudotime.atleta_id}}" title=""><button type="button" class="btn btn-blue btn-lg">CADASTRAR JOGADOR</button></a><!----></td>
					<td>{{getNomedoTime(conteudotime.clube_id)}} {{nomedotimereal}}</td>
					<td class="center">{{conteudotime.apelido}}</td>
					<td class="center">{{conteudotime.atleta_id}}</td>
				</tr>
			</tbody>
			<tfoot>
				<tr>
					<th>Nome</th>
					<th>Foto</th>
					<th>ID do Time</th>
					<th>Apelido</th>
					<th>ID jogador</th>
				</tr>
			</tfoot>
		</table>



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
	<script src="assets/js/datatables/datatables.js"></script>
	<script src="assets/js/select2/select2.min.js"></script>
	<script src="assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>


	<!--Angular-->

	<script src="../js/angular/angular.min.js" type="text/javascript"></script>
	<script src="../js/angular/angular-ui-router.min.js"></script>



		<script type="text/javascript">

		var app = angular.module('backApp', ['ui.router']);

		app.controller('dadosCtrl', function($scope,$http) {

			/*$scope.equipesnomegeral = [];
			for(var x = 0; x < 69; x++){
				var link = "/brasfoot/backend/dados/times/"+x+".json";
				$http.get(link)
				    .then(function(response) {
				       $scope.equipe = response.data;
				       $scope.equipesnome = [];

			           $scope.equipesnomegeral.push($scope.equipe);

				  })
				  .catch(function(response) {
				  	x = 69;
			      console.error('Erro conteudo', response.status, response.data);
			    })
			    .finally(function() {
			      //console.log("Finalizado Ativas");
			    });

			}*/

				$http.get("dados/equipes.json").then(function(response) {
				       $scope.equipesreal = response.data;

				  })
				  .catch(function(response) {
			      console.error('Erro conteudo', response.status, response.data);
			    })
			    .finally(function() {
			    });

				$http.get("dados/cartola/jogadores.json").then(function(response) {
				       $scope.equipe = response.data;
				       $scope.equipetd = [];
				       angular.forEach($scope.equipe.atletas, function(item){
				       		if(item.jogadoreditado != 1){
				       			$scope.equipetd.push(item);
				       		}
				       });
				       console.log($scope.equipetd);

				  })
				  .catch(function(response) {
				
			      console.error('Erro conteudo', response.status, response.data);
			    })
			    .finally(function() {
			     // console.log("Finalizado Ativas");
			    });

			$scope.getNomedoTime = function (idtimes){
				$scope.equiperealtd = [];
				var retornonometime = idtimes;
		       	angular.forEach($scope.equipesreal, function(item){
		       		if(item.idtime == idtimes){
		       			$scope.nomedotimereal = item.nome;
		       			//retornonometime = item.nome;
		       			//return retornonometime;
		       		}
		       	}); 	
				//console.log(idtime);
				//return idtimes;
			}

		});

	</script>

</body>
</html>