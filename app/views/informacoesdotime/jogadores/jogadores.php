	<div class="row" data-toggle="isotope" data-ng-controller="jogadoresCtrl">



            <div data-ng-repeat="listajogadores in dadosjogadores" class="item col-xs-12 col-sm-6 col-lg-4">
              <div class="panel panel-default paper-shadow" data-z="0.5">

                <div class="panel-heading">
                  <div class="media media-clearfix-xs-min v-middle">
                    <div class="media-body text-caption text-light">
                      CGJ: {{listajogadores.status.pontos}}
                    </div>
                    <div class="media-right">
                      <div class="progress progress-mini width-100 margin-none">
                        <div class="progress-bar {{corProgress(listajogadores.status.pontos)}}" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:{{listajogadores.status.pontos}}%;">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="cover overlay cover-image-full hover">
                  <span class="img icon-block height-100 bg-default"></span>
                  <a href="website-take-course.html" class="padding-none overlay overlay-full icon-block bg-default">
                    <span class="v-center">
                     <img src="{{listajogadores.foto}}" alt="">
                    </span>
                  </a>

                  <a href="website-take-course.html" class="overlay overlay-full overlay-hover overlay-bg-white">
                    <span class="v-center">
                <span class="btn btn-circle btn-white btn-lg"><i class="fa fa-soccer-ball-o"></i></span>
                    </span>
                  </a>

                </div>

                <div class="panel-body">
                  <h4 class="text-headline margin-v-0-10">
                  {{listajogadores.apelido}}</h4>
                  <h4 style="font-weight: 300;">{{getNomePosicao(listajogadores.status.posicao)}}</h4>
                </div>
                <hr class="margin-none" />
                <div class="panel-body">

                  <a class="btn btn-white btn-flat paper-shadow relative" data-z="0" data-hover-z="1" data-animated href="#">Mais Opções</a>

                </div>

              </div>
            </div>



<!--
		<div data-ng-repeat="listajogadores in dadosjogadores">
			<ul>
				<li>Nome: {{listajogadores.nome}} <br /> Time: {{listajogadores.time}} </li>
			</ul>
		</div>


-->

	</div>
	<br/>

