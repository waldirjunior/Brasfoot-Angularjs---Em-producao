app.controller('jogadoresCtrl', function($scope, $http,$location, $stateParams, getJson) {
  //Jogadores Informações do Time
  getJson.dadosJogador().then(function(response){
      $scope.jogadores = response.data;

      $scope.meujogadores = [];
       angular.forEach($scope.jogadores, function(item){
          if(item.time == $scope.idDoTimeDoUsuario){
            if(item.status.posicao != 6){
              $scope.meujogadores.push(item);
            }
          }
       });

       
       $scope.dadosjogadores = $scope.meujogadores;
       console.log($scope.dadosjogadores);
  });


  $scope.corProgress = function(numeropont){
    $scope.retorndaclass = "";
    if(numeropont > 80){
       $scope.retorndaclass = "progress-bar-blue-300";
    }
    else if(numeropont > 60){
      $scope.retorndaclass = "progress-bar-orange-300";
    }
    else if(numeropont > 50){
      $scope.retorndaclass = "progress-bar-grey-600";
    }else{
       $scope.retorndaclass = "progress-bar-red-300";
    }
    return $scope.retorndaclass;
  };


  /*
    $http.get('/brasfoot/backend/dados/jogador.json')
      .then(function(response) {
        $scope.jogadores = response.data;
    })
    .catch(function(response) {
      console.error('Erro conteudo', response.status, response.data);
    })
    .finally(function() {
      //console.log("Finalizado Lista de Jogadores PrincipalCtrl");
    });
    //console.log($scope.names);

  */

});