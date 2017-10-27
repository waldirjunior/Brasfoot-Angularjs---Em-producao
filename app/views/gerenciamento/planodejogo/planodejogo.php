<div class="row" data-toggle="isotope" data-ng-controller="planodejogoCtl">

      <a class="btn btn-lg btn-primary" ng-click="planodeJogo()" href="#"" style="position: absolute;left: 62%;">Começar partida</a>


  	<canvas id="pitch" width="600" height="600"></canvas>

    <ul id="starting_11" class="4-4-2">
      <li data-pos="gk" id="pos1"></li>
      <li data-pos="df" id="pos2" draggable="true"></li>
      <li data-pos="df" id="pos3" draggable="true"></li>
      <li data-pos="df" id="pos4" draggable="true"></li>
      <li data-pos="df" id="pos5" draggable="true"></li>
      <li data-pos="md" id="pos6" draggable="true"></li>
      <li data-pos="md" id="pos7" draggable="true"></li>
      <li data-pos="md" id="pos8" draggable="true"></li>
      <li data-pos="md" id="pos9" draggable="true"></li>
      <li data-pos="fw" id="pos10" draggable="true"></li>
      <li data-pos="fw" id="pos11" draggable="true"></li>
    </ul>


  <section>
    <center><h3>Lista de Jogadores</h3></center>
    <div class="positions menu">
      <h4 style="color: #66bb6a">Goleiro</h4>
      <ul data-pos="gk">
        <li data-ng-repeat="goleiro in goleiroar">
          <div draggable="true" data-player="{{goleiro.idcartola}}">
            <img draggable="false" src="{{goleiro.foto}}" style="width: 40px" />
            <p>{{goleiro.apelido}}</p>
          </div>
        </li>
      </ul>
    </div>

    <div class="positions menu">
      <h4 style="color: #66bb6a">Defesa</h4>
      <ul data-pos="df">
        <li data-ng-repeat="defesa in zagageral">
          <div draggable="true" data-player="{{defesa.idcartola}}">
            <img draggable="false" src="{{defesa.foto}}" style="width: 40px" />
            <p>{{defesa.apelido}}</p>
          </div>
        </li>
      </ul>
    </div>
    
    <div class="positions menu">

      <h4 style="color: #66bb6a">Meio Campo</h4>

      <ul data-pos="md">
        <li data-ng-repeat="meio in meiaar">
          <div draggable="true" data-player="{{meio.idcartola}}">
            <img draggable="false" src="{{meio.foto}}" style="width: 40px" />
            <p>{{meio.apelido}}</p>
          </div>
        </li>
      </ul>
    </div>
    
    <div class="positions menu">
      <h4 style="color: #66bb6a">Atacantes</h4>
      <ul data-pos="fw">
        <li data-ng-repeat="atacante in atacantear">
          <div draggable="true" data-player="{{atacante.idcartola}}">
            <img draggable="false" src="{{atacante.foto}}" style="width: 40px" />
            <p>{{atacante.apelido}}</p>
          </div>
        </li>
      </ul>
    </div>
  </section>

<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />



</div>

<style type="text/css" media="screen">


.ts-hide:not(.ng-hide-animate) {
  /* These are just alternative ways of hiding an element */
  display: block!important;
  position: absolute;
  top: -9999px;
  left: -9999px;
}


section {
  width: 300px;
  top: 45px;
  left: 0px;
  position: absolute;
  background-color: #ffffff;
  border-color: #e2e9e6;
  padding: 0 10px 0 10px;
  border-radius: 5px;
  border-color: #e2e9e6 !important;
}

section h4 {
    display: block;
    clear: left;
    border-top: 1px solid #eee;
    padding-top: 10px;
    font-size: 18px;
}
section a {
  display: block;
  clear: left;
  border-top: 1px solid #eee;
  padding-top: 10px;
  font-size: 18px;
}
section ul {
  padding: 0px;
  margin: 0px;
  width: 100%;
  clear: left;
}
section ul li {
  width: 40px;
  height: 40px;
  margin: 10px;
  background: #eee;
  border-radius: 100px;
  overflow: hidden;
  float: left;
  box-shadow: 0px 2px 2px 0px #999;
}
section ul li div img {
  margin-top: -5px;
}
section ul li div p {
  display: none;
}
section div#fm li {
  border-radius: 5px;
  width: auto;
  height: auto;
  padding: 5px;
  font-size: 14px;
  color: #fff;
  cursor: pointer;
  background: #333;
}
section div#fm li:hover {
  background: #000;
}
canvas {
  position: relative;
  left: 350px;
  top: 30px;
  fill: green;
}
ul#starting_11 {
  position: absolute;
  top: 30px;
  left: 350px;
}
ul#starting_11 li {
  width: 40px;
  height: 40px;
    background: #fff;
    display: block;
    opacity: 0.1;
    border-radius: 100px;
    box-shadow: 0px -2px 5px 1px #fff;
  border: 1px solid #666;
}
ul#starting_11 li img {
  margin-top: -5px;
}
ul#starting_11 li#pos1 {
  top: 20px;
  left: 265px;
  position: absolute;
}
ul#starting_11 li#pos2 {
  top: 120px;
  left: 110px;
  position: absolute;
}
ul#starting_11 li#pos3 {
  top: 100px;
  left: 210px;
  position: absolute;
}
ul#starting_11 li#pos4 {
  top: 100px;
  left: 320px;
  position: absolute;
}
ul#starting_11 li#pos5 {
  top: 120px;
  left: 415px;
  position: absolute;
}
ul#starting_11 li#pos6 {
  top: 250px;
  left: 100px;
  position: absolute;
}
ul#starting_11 li#pos7 {
  top: 250px;
  left: 210px;
  position: absolute;
}
ul#starting_11 li#pos8 {
  top: 250px;
  left: 320px;
  position: absolute;
}
ul#starting_11 li#pos9 {
  top: 250px;
  left: 430px;
  position: absolute;
}
ul#starting_11 li#pos10 {
  top: 400px;
  left: 320px;
  position: absolute;
}
ul#starting_11 li#pos11 {
  top: 400px;
  left: 210px;
  position: absolute;
}
ul#starting_11 .highlight {
  opacity: 0.7;
}
ul#starting_11 .selected {
  opacity: 1;
  z-index: 2;
}
ul#starting_11 .selected img {
  z-index: -1;
}



</style>

<script type="text/javascript">
</script>