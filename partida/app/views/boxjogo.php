<div data-ng-controller="boxJogoApp">

{{count}}

<style type="text/css" media="screen">
  body {
    background-color: #ffffff !important;
    background-image:  none;
  }
</style>

  <div class="container-df" style="display: none">

        <div class="card">
            <div class="header">
                <div class="teams">
                    <!--<img src="https://upload.wikimedia.org/wikipedia/en/thumb/9/97/FIGC_logo.svg/706px-FIGC_logo.svg.png" />-->
                    <img src="{{timedacasa.escudos.maior}}" alt="">
                    <h2>{{timedacasa.abreviacao}}</h2>
                </div>
                <div class="info">
                    <h1>TEMPO DO JOGO</h1>
                    <p>{{count}}</p>
                </div>
                <div class="teams">
                    <!--<img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/a1/Royal_Netherlands_Football_Association_Logo.svg/300px-Royal_Netherlands_Football_Association_Logo.svg.png" />-->
                    <img src="{{timevisitante.escudos.maior}}" alt="">
                    <h2>{{timevisitante.abreviacao}}</h2>
                </div>
            </div>
            <div class="timeline">
                <div class="score">
                    <h3 class="winner">0</h3>
                    <h3>0</h3>
                </div>
                <div class="row">
                    <div class="col fl right">
                        <div class="event">
                            <span class="fr">Candreva <strong>87'</strong></span>
                            <img class="fr goal goal" src="https://d30y9cdsu7xlg0.cloudfront.net/png/55481-200.png" />
                        </div>
                        <div class="event">
                            <span class="fr">Darmian <strong>79'</strong></span>
                            <img class="fr" src="https://placeholdit.imgix.net/~text?txtsize=5&bg=ffde00&txtclr=ffde00&txt=10%C3%9715&w=10&h=15&txtpad=1" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col fr">
                        <div class="event">
                            <span class="fl"><strong>73'</strong> Robben</span>
                            <img class="fl" src="https://placeholdit.imgix.net/~text?txtsize=5&bg=ffde00&txtclr=ffde00&txt=10%C3%9715&w=10&h=15&txtpad=1" />
                        </div>
                        <div class="event">
                            <span class="fl"><strong>68'</strong> Blind</span>
                            <img class="fl" src="https://placeholdit.imgix.net/~text?txtsize=5&bg=ffde00&txtclr=ffde00&txt=10%C3%9715&w=10&h=15&txtpad=1" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col fl right">
                        <div class="event">
                            <span class="fr">Verratti <strong>65'</strong></span>
                            <img class="fr" src="https://placeholdit.imgix.net/~text?txtsize=5&bg=ffde00&txtclr=ffde00&txt=10%C3%9715&w=10&h=15&txtpad=1" />
                        </div>
                        <div class="event">
                            <span class="fr">Pelle <strong>57'</strong></span>
                            <img class="fr goal" src="https://d30y9cdsu7xlg0.cloudfront.net/png/55481-200.png" />
                        </div>
                    </div>
                </div>
            </div>
            <div id="nav">
                <a href="#"><img src="https://imgur.com/Hi0VyUQ.png" /></a>
                <a href="#"><img src="https://imgur.com/yJLdEnj.png" /></a>
                <a href="#"><img src="https://imgur.com/0mgB4mO.png" /></a>
                <a href="#"><img src="https://imgur.com/sskEO4R.png" /></a>
            </div>
        </div>

        <div class="card">
            <div class="header">
                <h1>SUBSTITUIÇÃO</h1>
                <div class="tabs">
                    <a href="#" class="selected">Em Campo</a>
                    <a href="#">Reservas</a>
                </div>
            </div>
            <div class="formation">
                <div class="field-df">
                    <div class="row">
                        <div class="player-df">
                            <img src="https://imgur.com/uEPm1rZ.png" />
                            <p>{{usuariopos1.apelido}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="player-df defense fl">
                            <img src="https://imgur.com/uEPm1rZ.png" />
                            <p>{{usuariopos2.apelido}}</p>
                        </div>
                        <div class="player-df defense fl">
                            <img src="https://imgur.com/uEPm1rZ.png" />
                            <p>{{usuariopos3.apelido}}</p>
                        </div>
                        <div class="player-df defense fl">
                            <img src="https://imgur.com/uEPm1rZ.png" />
                            <p>{{usuariopos4.apelido}}</p>
                        </div>
                        <div class="player-df defense fl">
                            <img src="https://imgur.com/uEPm1rZ.png" />
                            <p>{{usuariopos5.apelido}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="player-df midfield fl">
                            <img src="https://imgur.com/uEPm1rZ.png" />
                            <p>{{usuariopos6.apelido}}</p>
                        </div>
                        <div class="player-df midfield fl">
                            <img src="https://imgur.com/uEPm1rZ.png" />
                            <p>{{usuariopos7.apelido}}</p>
                        </div>
                        <div class="player-df midfield fl">
                            <img src="https://imgur.com/uEPm1rZ.png" />
                            <p>{{usuariopos8.apelido}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="player-df defense fl">
                        </div>
                        <div class="player-df defense fl">
                            <img src="https://imgur.com/uEPm1rZ.png" />
                            <p>{{usuariopos9.apelido}}</p>
                        </div>
                        <div class="player-df defense fl">
                            <img src="https://imgur.com/uEPm1rZ.png" />
                            <p>{{usuariopos10.apelido}}</p>
                        </div>
                        <div class="player-df defense fl">
                        </div>
                    </div>
                    <div class="row">
                        <div class="player-df">
                            <img src="https://imgur.com/uEPm1rZ.png" />
                            <p>{{usuariopos11.apelido}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="nav">
                <a href="#"><img src="https://imgur.com/PVrcIE1.png" /></a>
                <a href="#"><img src="https://imgur.com/Cpboqsh.png" /></a>
                <a href="#"><img src="https://imgur.com/0mgB4mO.png" /></a>
                <a href="#"><img src="https://imgur.com/sskEO4R.png" /></a>
            </div>
        </div>
    </div>

</div>


    <style type="text/css" media="screen">
    

    .container-df {
      margin: 50px auto;
      width: 70%;
      max-width: 885px;
    }

    .row {
      width: 100%;
      overflow: hidden;
    }

    .fl {
      float: left;
    }

    .fr {
      float: right;
    }

    .right {
      text-align: right;
    }

    .left {
      text-align: left;
    }

    .container-df .card {
      width: 380px;
      background: #fcfcfc;
      border-radius: 5px;
      margin-bottom: 100px;
      float: left;
      margin: 0 30px;
    }

    .container-df .header {
      width: 100%;
      height: 150px;
      background: #FFF;
      box-shadow: 0 1px 4px #eaeaea;
      border-radius: 5px 5px 0 0;
    }

    .container-df #nav {
      height: 70px;
      background: #313643;
      width: 100%;
      border-radius: 0 0 5px 5px;
      float: left;
    }
    #nav a {
      width: 25%;
      display: block;
      padding: 16px 20px;
      text-align: center;
      float: left;
    }
    #nav a img {
      width: 40px;
    }

    .teams, .info {
      float: left;
    }

    .teams {
      width: 105px;
      text-align: center;
      padding: 40px 34px 25px 34px;
    }
    .teams img {
      width: 100%;
    }
    .teams h2 {
      color: #333;
      font-size: 1em;
      margin: 8px 0 0 0;
    }

    .info {
      width: 170px;
      text-align: center;
      padding-top: 40px;
    }
    .info h1 {
      font-size: 1em;
      color: #8c8c8c;
      margin-top: 0;
    }
    .info p {
          font-size: 1.3em;
      margin: 5px 0;
    }

    .timeline {
      position: relative;
      padding: 60px 40px 20px 40px;
      float: left;
      width: 100%;
    }
    .timeline .score {
      width: 170px;
      height: 85px;
      overflow: hidden;
      position: absolute;
      top: -50px;
      left: 105px;
      box-shadow: 0 3px 15px #eaeaea;
    }

    .timeline .score h3 {
      font-size: 3em;
      color: #333;
      font-family: 'Quicksand', sans-serif;
      font-weight: 700;
      padding: 13px 20px;
      width: 50%;
      text-align: center;
      background: #fcfcfc;
      margin: 0;
      float: left;
    }
    .timeline .score .winner {
      background: #7533e2;
      color: #FFF;
    }
    .timeline .col {
      width: 50%;
    }
    .timeline .col .event {
      height: 40px;
      background: #FFF;
      box-shadow: 0 1px 4px #eaeaea;
      padding: 8px 10px;
      color: #8c8c8c;
      margin-bottom: 20px;
      display: inline-block;
    }
    .timeline .col .event span {
      display: block;
      margin-top: 3px;
      text-align: right;
    }
    .timeline .col .event span strong {
      color: #333;
    }
    .timeline .col .event img {
      width: 15px;
      margin-right: 9px;
    }
    .timeline .col .event img.fl {
      margin-right: 0;
      margin-left: 9px;
    }
    .timeline .col .event .goal {
      margin-top: 4px;
    }

    .container-df .header > h1 {
      text-align: center;
      font-size: 1em;
      color: #8c8c8c;
      margin: 0 0 50px 0;
      padding-top: 40px;
    }

    .container-df .tabs a {
      display: inline-block;
      width: 50%;
      color: #333;
      font-size: 1em;
      margin: 0;
      text-align: center;
      float: left;
      padding-bottom: 17px;
      text-decoration: none;
    }
    .container-df .tabs a.selected {
      border-bottom: 5px solid #7533e2;
    }

    .formation {
      height: 464px;
      padding: 40px;
    }
    .formation .field-df {
      background: url("https://i.imgur.com/pt3Qdcs.png") center center no-repeat;
      height: 386px;
      background-size: contain;
    }
    .formation .player-df {
      text-align: center;
      margin-bottom: 20px;
    }
    .formation .player-df img {
      width: 45px;
    }
    .formation .player-df p {
      text-align: center;
      margin: 0;
      font-size: 0.8em;
      color: #666;
    }
    .formation .defense {
      width: 25%;
    }
    .formation .midfield {
      width: 33.333%;
    }

    body {
      font-family: 'Montserrat', sans-serif;
    }

    * {
      box-sizing: border-box;
    }


    .row {
      width: 100%;
      overflow: hidden;
    }

    .fl {
      float: left;
    }

    .fr {
      float: right;
    }

    .right {
      text-align: right;
    }

    .left {
      text-align: left;
    }

    .container-df .card {
      width: 380px;
      background: #fcfcfc;
      border-radius: 5px;
      box-shadow: 0 4px 20px #999;
      margin-bottom: 100px;
      float: left;
      margin: 0 30px;
    }

    .container-df .header {
      width: 100%;
      height: 150px;
      background: #FFF;
      box-shadow: 0 1px 4px #eaeaea;
      border-radius: 5px 5px 0 0;
    }

    #nav {
      height: 70px;
      background: #313643;
      width: 100%;
      border-radius: 0 0 5px 5px;
      float: left;
    }
    #nav a {
      width: 25%;
      display: block;
      padding: 16px 20px;
      text-align: center;
      float: left;
    }
    #nav a img {
      width: 40px;
    }

    .teams,
    .info {
      float: left;
    }

    .teams {
      width: 105px;
      text-align: center;
      padding: 40px 34px 25px 34px;
    }
    .teams img {
      width: 100%;
    }
    .teams h2 {
      color: #333;
      font-size: 1em;
      margin: 8px 0 0 0;
    }

    .info {
      width: 170px;
      text-align: center;
      padding-top: 40px;
    }
    .info h1 {
      font-size: 1em;
      color: #8c8c8c;
      margin-top: 0;
    }
    .info p {
      font-size: 1.3em;
      margin: 5px 0;
    }

    .timeline {
      position: relative;
      padding: 60px 40px 20px 40px;
      float: left;
      width: 100%;
    }
    .timeline .score {
      width: 170px;
      height: 85px;
      overflow: hidden;
      position: absolute;
      top: -50px;
      left: 105px;
      box-shadow: 0 3px 15px #eaeaea;
    }
    .timeline .score h3 {
      font-size: 3em;
      color: #333;
      font-family: 'Quicksand', sans-serif;
      font-weight: 700;
      padding: 13px 20px;
      width: 50%;
      text-align: center;
      background: #fcfcfc;
      margin: 0;
      float: left;
    }
    .timeline .score .winner {
      background: #7533e2;
      color: #FFF;
    }
    .timeline .col {
      width: 50%;
    }
    .timeline .col .event {
      height: 40px;
      background: #FFF;
      box-shadow: 0 1px 4px #eaeaea;
      padding: 8px 10px;
      color: #8c8c8c;
      margin-bottom: 20px;
      display: inline-block;
    }
    .timeline .col .event span {
      display: block;
      margin-top: 3px;
      text-align: right;
    }
    .timeline .col .event span strong {
      color: #333;
    }
    .timeline .col .event img {
      width: 15px;
      margin-right: 10px;
    }
    .timeline .col .event img.fl {
      margin-right: 0;
      margin-left: 10px;
    }
    .timeline .col .event .goal {
      margin-top: 4px;
    }

    .container-df .header > h1 {
      text-align: center;
      font-size: 1em;
      color: #8c8c8c;
      margin: 0 0 50px 0;
      padding-top: 40px;
    }

    .tabs a {
      display: inline-block;
      width: 50%;
      color: #333;
      font-size: 1em;
      margin: 0;
      text-align: center;
      float: left;
      padding-bottom: 17px;
      text-decoration: none;
    }
    .tabs a.selected {
      border-bottom: 5px solid #7533e2;
    }

    .formation {
      height: 464px;
      padding: 40px;
    }
    .formation .field-df {
      background: url("https://i.imgur.com/pt3Qdcs.png") center center no-repeat;
      height: 386px;
      background-size: contain;
    }
    .formation .player-df {
      text-align: center;
      margin-bottom: 20px;
    }
    .formation .player-df img {
      width: 45px;
    }
    .formation .player-df p {
      text-align: center;
      margin: 0;
      font-size: 0.8em;
      color: #666;
    }
    .formation .defense {
      width: 25%;
    }
    .formation .midfield {
      width: 33.333%;
    }


    </style>
