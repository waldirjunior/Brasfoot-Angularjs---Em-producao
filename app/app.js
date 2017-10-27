var app = angular.module('brasApp', ['ui.router']);

app.config(['$stateProvider', '$urlRouterProvider', '$locationProvider', function($stateProvider, $urlRouterProvider, $locationProvider) {
  $locationProvider.hashPrefix(''); // by default '!'
  $locationProvider.html5Mode(true);

  $stateProvider
    .state('painel', {
        url: '/',
        controller: 'painelCtrl',
        templateUrl:"/brasfoot/app/views/painel.php"
    })
    .state('calendario', {
        url: '/calendario',
        controller: 'jogosCtrl',
        templateUrl:"/brasfoot/app/views/informacoesdotime/calendario/jogos.php"
    })
    .state('jogadores', {
        url: '/informacoesdotime/jogadores',
        controller: 'jogadoresCtrl',
        templateUrl:"/brasfoot/app/views/informacoesdotime/jogadores/jogadores.php"
    })
    .state('negociacao', {
        url: '/gerenciamento/negociacao',
        templateUrl:"/brasfoot/app/views/gerenciamento/negociacao/negociacao.php"
    })
    .state('procurarjogador', {
        url: '/gerenciamento/negociacao/buscaavancada',
        controller: 'procujogadorCtrl',
        templateUrl:"/brasfoot/app/views/gerenciamento/negociacao/buscaavancada/procurarjogador.php"
    })
    .state('planodejogo', {
        url: '/gerenciamento/planodejogo',
        controller: 'planodejogoCtl',
        templateUrl:"/brasfoot/app/views/gerenciamento/planodejogo/planodejogo.php"
    })
    .state('infodacompeticao', {
        url: '/basededados/infodacompeticao/',
        templateUrl:"/brasfoot/app/views/basededados/infodacompeticao/infcompeticao.php"
    })
    .state('campeonatobrasileiro', {
        url: '/basededados/infodacompeticao/campeonatobrasileiro',
        controller: 'campeonatoBrasileiroCtrl',
        templateUrl:"/brasfoot/app/views/basededados/infodacompeticao/campeonatobrasileiro/campeonatobrasileiro.php"
    });

  $urlRouterProvider.otherwise('/');

}]);

/*
app.factory('DadosJson', function($http) { 
    function getJogadores(){
       return $http.get('/brasfoot/backend/dados/jogador.json').then(function(data) {
            return data.data;
        }); 
    } 
    return {getJogadores: getJogadores};
});
*/

app.service('getJson', function($http){
  this.dadosJogador = function() {
    return $http.get('/brasfoot/backend/dados/jogador.json');
  }
  this.dadosEquipes = function() {
    return $http.get('/brasfoot/backend/dados/equipes.json');
  }
  this.dadosCampeonato = function() {
    return $http.get('/brasfoot/backend/dados/campeonatos.json');
  }

});

app.controller('principalCtrl', function($scope, $http, $location, $stateParams, getJson) {
     //Definições Gerais do Usuário
    $scope.idDoTimeDoUsuario = 50;

    //Dados Global dos Jogadores


    getJson.dadosJogador().then(function(response){
        $scope.jogadores = response.data;
        //console.log($scope.jogadores);

           $scope.meujogadores = [];
           angular.forEach($scope.jogadores, function(item){
              if(item.time == $scope.idDoTimeDoUsuario){
                if(item.status.posicao != 6){
                  $scope.meujogadores.push(item);
                  $scope.meujogadores;
                }
              }
           });
            $scope.meujogadores;

    });


    //Fim dos Dados Globais dos Jogadores
    //
    // Dados Global dos Times
    getJson.dadosEquipes().then(function(response){
        $scope.equipes = response.data;
        //Varrer equipes e puxar dados da equipe de acordo com ID do usuariooo
        angular.forEach($scope.equipes, function(item){
          if(item.idtime == $scope.idDoTimeDoUsuario){
            $scope.dadosArrayUsuario = item;
            //console.log($scope.dadosArrayUsuario);
          }
        });
        //Fim Definições Gerais do Usuário
        $scope.retornaNomedaEquipeId = function(iddotime) {
          $scope.nomeretorno = "0";
          angular.forEach($scope.equipes, function(item){
            if(item.idtime == iddotime){
              return $scope.nomeretorno = item.nome;
            }
          });
          return $scope.nomeretorno;
        };

    });

    //Fim dos Dados Global dos Times



    $scope.corDoTime = function(idTime){
        $scope.cornova = idTime;

        if(idTime == 51 ){
          $scope.cornova = "bg-green-800";
        }
        else if(idTime == 33){
          $scope.cornova = "bg-green-800";
        }
        else if(idTime == 14){
          $scope.cornova = "bg-green-800";
        }
        else if(idTime == 46){
          $scope.cornova = "bg-grey-900";
        }
        else if(idTime == 49){
          $scope.cornova = "bg-grey-900";
        }
        else if(idTime == 50){
          $scope.cornova = "bg-grey-900";
        }
        else if(idTime == 58){
          $scope.cornova = "bg-grey-900";
        }
        else if(idTime == 62){
          $scope.cornova = "bg-grey-900";
        }
        else if(idTime == 65){
          $scope.cornova = "bg-grey-900";
        }
        else if(idTime == 50){
          $scope.cornova = "bg-grey-900";
        }
        else if(idTime == 56){
          $scope.cornova = "bg-light-blue-900";
        }
        else if(idTime == 52){
          $scope.cornova = "bg-light-blue-900";
        }
        else if(idTime == 48){
          $scope.cornova = "bg-light-blue-900";
        }
        else if(idTime == 23){
          $scope.cornova = "bg-light-blue-900";
        }
        else if(idTime == 54){
          $scope.cornova = "bg-red-900";
        }
        else if(idTime == 59){
          $scope.cornova = "bg-red-900";
        }
        else if(idTime == 60){
          $scope.cornova = "bg-red-900";
        }
        else if(idTime == 53){
          $scope.cornova = "bg-red-900";
        }
        else if(idTime == 47){
          $scope.cornova = "bg-red-900";
        }
        else if(idTime == 39){
          $scope.cornova = "bg-red-900";
        }
        else if(idTime == 37){
          $scope.cornova = "bg-red-900";
        }
        else{
          $scope.cornova = "bg-grey-500";
        }
        return $scope.cornova;
    };
    $scope.getNomePosicao = function(numeroposicao){
        $scope.nomeposicao = numeroposicao;

        if(numeroposicao == 5){
          $scope.nomeposicao = "Atacante";
        }
        else if(numeroposicao == 6){
          $scope.nomeposicao = "Tecnico";
        }
        else if(numeroposicao == 4){
          $scope.nomeposicao = "Meia";
        }
        else if(numeroposicao == 3){
          $scope.nomeposicao = "Zagueiro";
        }
        else if(numeroposicao == 2){
          $scope.nomeposicao = "Lateral";
        }
        else if(numeroposicao == 1){
          $scope.nomeposicao = "Goleiro";
        }
        else{
          $scope.nomeposicao = "Sem posição";
        }
        return $scope.nomeposicao;
    };

});

app.controller('painelCtrl', function($scope, $http,$location, $stateParams) {
  $scope.date = new Date();

});

app.controller('jogosCtrl', function($scope, $http,$location, $stateParams) {

});




