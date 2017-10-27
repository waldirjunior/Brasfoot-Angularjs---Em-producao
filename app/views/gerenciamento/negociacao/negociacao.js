app.controller('procujogadorCtrl', function($scope, $http,$location, $stateParams, getJson) {
  //Exibir Todos os Jogadores

    getJson.dadosJogador().then(function(response){
        $scope.jogadores = response.data;
        //console.log($scope.jogadores);

           $scope.meujogadores = [];
           angular.forEach($scope.jogadores, function(item){
                if(item.status.posicao != 6){
                  $scope.meujogadores.push(item);
                }
           });
           $scope.meujogadores;
           //console.log($scope.meujogadores);


            $scope.orderByField = 'apelido';
            $scope.reverseSort = false;
            $scope.itemsPerPage = 10;
            $scope.currentPage = 0;
            $scope.datalists = $scope.meujogadores;
            $scope.range = function () {
                var rangeSize = 10;
                var ps = [];
                var start;

                start = $scope.currentPage;
                if (start > $scope.pageCount() - rangeSize) {
                    start = $scope.pageCount() - rangeSize + 1;
                }

                for (var i = start; i < start + rangeSize; i++) {
                    if (i >= 0)
                        ps.push(i);
                }
                return ps;
            };

            $scope.prevPage = function () {
                if ($scope.currentPage > 0) {
                    $scope.currentPage--;
                }
                event.preventDefault();
            };

            $scope.DisablePrevPage = function () {
                return $scope.currentPage === 0 ? "disabled" : "";
            };

            $scope.pageCount = function () {
                return Math.ceil($scope.datalists.length / $scope.itemsPerPage) - 1;
            };

            $scope.nextPage = function () {
                if ($scope.currentPage < $scope.pageCount()) {
                    $scope.currentPage++;
                }
                event.preventDefault();
            };

            $scope.DisableNextPage = function () {
                return $scope.currentPage === $scope.pageCount() ? "disabled" : "";
            };

            $scope.setPage = function (n) {
                $scope.currentPage = n;
                event.preventDefault();
            };


    });


});

app.filter('pagination', function () {
return function (input, start) {
    if (!input || !input.length) { return; }
    start = +start; //parse to int
    return input.slice(start);
}
});
