
	<div class="row" data-toggle="isotope" data-ng-controller="campeonatoBrasileiroCtrl">





          <h4 class="page-section-heading">BRASILEIRÃO SÉRIE A</h4>
          <div class="panel panel-default">
            <!-- Progress table -->
            <div class="table-responsive">
              <table class="table v-middle">
                <thead>
                  <tr>
                  	<th></th>
                    <th>CLASSIFICAÇÃO</th>
                    <th>P</th>
                    <th>J</th>
                    <th>V</th>
                    <th>E</th>
                    <th>D</th>
                    <th>GP</th>
                    <th>GC</th>
                    <th>%</th>
                  </tr>
                </thead>
                <tbody id="responsive-table-body">

                  <tr data-ng-repeat="campeonato in classificacaobr">
                  	<td><center>{{$index + 1}}</center></td>
                  	<td>{{retornaNomedaEquipeId(campeonato.idclube)}}</td>
                  	<td><strong>{{campeonato.pontos}}</strong></td>
                  	<td>{{campeonato.jogos}}</td>
                  	<td>{{campeonato.vitorias}}</td>
                  	<td>{{campeonato.empates}}</td>
                  	<td>{{campeonato.derrotas}}</td>
                  	<td>{{campeonato.golsmarcados}}</td>
                  	<td>{{campeonato.golssofridos}}</td>
                  	<td>--</td>
                  </tr>

                </tbody>
              </table>
            </div>
            <!-- // Progress table -->
	<br />
          </div>

	<br />
	<br />
	<br />
	</div>
