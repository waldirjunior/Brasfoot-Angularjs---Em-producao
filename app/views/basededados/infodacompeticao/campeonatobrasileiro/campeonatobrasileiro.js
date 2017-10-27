app.controller('campeonatoBrasileiroCtrl', function($scope, $http,$location, $stateParams, getJson) {

    getJson.dadosEquipes().then(function(response){
        $scope.equipes = response.data;

    });

    getJson.dadosCampeonato().then(function(response){
        $scope.campeonato = response.data;
        //console.log($scope.campeonato);

       //Temporada Atual
       $scope.temporadaatual = [];
       angular.forEach($scope.campeonato, function(item){
            $scope.temporadaatual.push(item);
       });

       //Campeonato Brasileiro Geral
       $scope.campeonatobrtd = [];
       angular.forEach($scope.temporadaatual, function(item){
            $scope.campeonatobrtd.push(item.campeonatobrasileiro);
       });
       		       //Classificação Campeonato Brasileiro
			       $scope.classificacaobr = [];
			       angular.forEach($scope.campeonatobrtd, function(item){
			       		//console.log(item.classificacao);
			       		$scope.classificacaobr = item.classificacao;
			            //$scope.classificacaobr.push(item.classificacao.$index);
			       });

			       //Artilharia
			       $scope.artilhariabr = [];
			       angular.forEach($scope.campeonatobrtd, function(item){
			            $scope.artilhariabr = item.artilharia;
			       });
	       

	        
		console.log($scope.classificacaobr);
       /*
       //artilharia
       angular.forEach($scope.jogadores, function(item){
          if(item.time == $scope.idDoTimeDoUsuario){
            if(item.status.posicao != 6){
              $scope.meujogadores.push(item);
            }
          }
       });*/

    });



});