	<div class="row" data-toggle="isotope" data-ng-controller="procujogadorCtrl">
	
		<h1>Busca Avançada</h1>
		<h4>Escolha critérios de pesquisa dos jogadores.</h4>

		<br />
        <div class="col-md-2">
            <div class="md-form">
            	<label for="pesquisarSite" class="">Pesquise aqui</label>
                <input type="text" id="pesquisarSite" class="form-control" ng-model="searchText">
            </div>
        </div>

  

    <hr />


    <table class="table table-striped adminTabela siteTabela">
        <thead>
            <tr>
            	<th><a href="#" ng-click="orderByField='foto'; reverseSort = !reverseSort">Foto do Jogador</a></th>
                <th><a href="#" ng-click="orderByField='apelido'; reverseSort = !reverseSort">Nome</a></th>
                <th><a href="#" ng-click="orderByField='time'; reverseSort = !reverseSort">Time</a></th>
                <th><a href="#" ng-click="orderByField='status.posicao'; reverseSort = !reverseSort">Posição</a></th>
                <th><a href="#" ng-click="orderByField='status.valormercado'; reverseSort = !reverseSort">Valor Mercado</a></th>
                <th><a href="#" ng-click="orderByField='status.salario'; reverseSort = !reverseSort">Valor Salário</a></th>
                <th><a href="#" ng-click="orderByField='status.pontos'; reverseSort = !reverseSort">Pontos</a></th>
                <th><a href="#">Ações</a></th>

            </tr>
        </thead>
        <tbody>

            <tr data-ng-repeat="info in meujogadores | orderBy:orderByField:reverseSort | filter:searchText | pagination : currentPage*itemsPerPage | limitTo: itemsPerPage">
                <th scope="row"><img src="{{info.foto}}" alt=""></th>
                <td>{{info.apelido}}</td>
                <td>{{retornaNomedaEquipeId(info.time)}}</td>
                <td>{{getNomePosicao(info.status.posicao)}}</td>
                <td>{{info.status.valormercado}}</td>
                <td>{{info.status.salario}}</td>
                <td><strong>{{info.status.pontos}}</strong></td>
                <td class="text-center">
                    <button type="button" ng-model="tabelageral" ng-click="editInfo(info)" class="btn btn-default btn-sm waves-effect waves-light"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                </td>
            </tr>



        </tbody>
    </table>

    <div class="pagination-div">
        <ul class="pagination">
            <li class="page-item" ng-class="DisablePrevPage()">
                <a class="page-link" href="#" aria-label="Previous" ng-click="prevPage()">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Prev</span>
                </a>
            </li>

            <li class="page-item" ng-repeat="n in range()" ng-class="{active: n == currentPage}" ng-click="setPage(n)">
                <a href="#" class="page-link">{{n+1}}</a>
            </li>
            <li class="page-item" ng-class="DisableNextPage()">
                <a class="page-link" href="#" aria-label="Next" ng-click="nextPage()">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>                
        </ul>
    </div>


  </div>    