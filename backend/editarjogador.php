<?php 
	include "class/editar-informacoes.php";
	if (empty($_GET)) {
		echo "Nenhum dados encontrado";
	}else{
		$idjogador = $_GET['idjogador'];
		$classeditarjogador = new editarInfo();
	  	$nomedojogador = $classeditarjogador->editarjogadorfunc($idjogador);

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
		<br />
		

		<div class="row">
			<div class="col-md-12">
				
				<?php 
					if($nomedojogador == 0){
					echo '<script type="text/javascript">
			           window.location = "/brasfoot/backend/exibircartola.php"
			      </script>';
	
					}else{
						echo "Algum erro aconteceu!";
					}  
				?>

			
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



		});






	</script>

</body>
</html>