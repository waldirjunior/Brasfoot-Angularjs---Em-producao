	<div class="row" data-toggle="isotope">

			<div class="cards">
				<a class="card" href="#">
					<span class="cardheader" style="background-image: url(/brasfoot/images/campeonatos/Campeonato_Brasileiro_Série_A_logo.png);">
						<span class="cardtitle">
							<h3>Campeonato Brasileiro</h3>
						</span>
					</span>
					<span class="cardsummary">
						Blablabla
					</span>
				</a>

				<a class="card" href="#">
					<span class="cardheader" style="background-image: url(/brasfoot/images/outros/gettyimages-606990680.jpg);">
						<span class="cardtitle">
							<h3>Outros clubes</h3>
						</span>
					</span>
					<span class="cardsummary">
						Negociar com jogadores de outros times.
					</span>
				</a>

				<a class="card" href="#">
					<span class="cardheader" style="background-image: url(/brasfoot/images/outros/16ISRAELSOCCER3-superJumbo.jpg)">
						<span class="cardtitle">
							<h3>Jogadores Listados</h3>
						</span>
					</span>
					<span class="cardsummary">
						Está é uma lista dos seus jogadores favoritos.
					</span>
				</a>

				<a class="card" href="#">
					<span class="cardheader" style="background-image: url(/brasfoot/images/outros/soccer-kick-goal-kickoff-1280.jpg);">
						<span class="cardtitle">
							<h3>Busca avançada</h3>
						</span>
					</span>
					<span class="cardsummary">
						Escolha critérios de pesquisa dos jogadores.
					</span>
				</a>

			</div>


	</div>
	<br/>
	<br/>

<style class="cp-pen-styles">

.cards {
  display: -webkit-flex;
  display: flex;
  -webkit-justify-content: center;
  justify-content: center;
  -webkit-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-top: 10px;
  padding: 1.5%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.card {
  position: relative;
  margin-bottom: 20px;
  background: #fefff9;
  color: #363636;
  text-decoration: none;
  min-width: 320px;
  -moz-box-shadow: rgba(0, 0, 0, 0.19) 0 0 8px 0;
  -webkit-box-shadow: rgba(0, 0, 0, 0.19) 0 0 8px 0;
  box-shadow: rgba(0, 0, 0, 0.19) 0 0 8px 0;
  -moz-border-radius: 10px;
  -webkit-border-radius: 10px;
  border-radius: 10px;
}
@media (max-width: 700px) {
  .card {
    width: 100%;
  }
}
@media (min-width: 700px) {
  .card {
	max-width: 325px;
    margin-left: 38px;
    margin-right: 38px;
    margin-bottom: 45px;
  }
}
.card span {
  display: block;
}
.card .cardheader {
  font-size: 14px;
  position: relative;
  height: 200px;
  overflow: hidden;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  background-color: rgba(255, 255, 255, 0.15);
  background-blend-mode: overlay;
  -moz-border-radius: 4px 4px 0 0;
  -webkit-border-radius: 4px;
  border-radius: 4px 4px 0 0;
}
.card .cardheader:hover, .card .cardheader:focus {
  background-color: rgba(255, 255, 255, 0);
}
.card .cardheader:hover img, .card .cardheader:focus img {
  -webkit-transform: scale(1.1);
  -moz-transform: scale(1.1);
  transform: scale(1.1);
  opacity: .6;
}
.card .heart {
  border: 5px solid #fff;
  border-radius: 40px;
  width: 40px;
  height: 40px;
  background: rgba(0, 0, 0, 0.2);
  opacity: .3;
  color: #fff;
  font-size: 22px;
  text-align: center;
  padding-top: 2px;
  box-sizing: border-box;
  float: right;
  margin-right: 15px;
  margin-top: 15px;
  cursor: default;
}
.card .cardtitle {
  background: #6babd6;
  padding: 3.5% 0 2.5% 0;
  color: white;
  text-transform: uppercase;
  position: absolute;
  bottom: 0;
  width: 100%;
}
.card .cardtitle h3 {
  font-size: 1.2em;
  line-height: 1.2;
  padding: 0 3.5%;
  margin: 0;
}
.card .cardsummary {
  padding: 5% 5% 3% 5%;
  color: #a59e9c;
}
.card .tags {
  padding: 1% 5% 3% 5%;
  color: #33425B;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.card .tags .tag {
  -moz-border-radius: 50px;
  -webkit-border-radius: 50px;
  border-radius: 50px;
  font-size: 0.2em;
  display: inline-block;
  border: 2px solid #f0f0f0;
  margin-right: 5px;
  margin-bottom: 5px;
  padding-left: 10px;
  padding-right: 10px;
  position: relative;
  background-color: #D8E9F0;
}
.card:hover, .card:focus {
  background: white;
  -moz-box-shadow: rgba(0, 0, 0, 0.45) 0px 0px 20px 0px;
  -webkit-box-shadow: rgba(0, 0, 0, 0.45) 0px 0px 20px 0px;
  box-shadow: rgba(0, 0, 0, 0.45) 0px 0px 20px 0px;
}
.card:hover .cardtitle, .card:focus .cardtitle {
  background: #29D2E4;
}
.card:hover .cardmeta, .card:focus .cardmeta {
  max-height: 1em;
}

</style>