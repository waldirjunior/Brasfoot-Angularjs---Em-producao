  <div class="row" data-toggle="isotope">

    <div class="calender">
      <div class="month">
        <h1>Janeiro - 2016 - 2017</h1>
        <span class="day">1</span>
        <span class="day">2</span>
        <span class="day">3</span>
        <span class="day">4</span>
        <span class="day">5</span>
        <span class="day">6</span>
        <span class="day">7</span>
        <span class="day">8</span>
        <span class="day">9</span>
        <span class="day">10</span>
        <span class="day">11</span>
        <span class="day">12</span>
        <span class="day">13</span>
        <span class="day">14</span>
        <span class="day">15</span>
        <span class="day">16</span>
        <span class="day">17</span>
        <span class="day">18</span>
        <span class="day">19</span>
        <span class="day">20</span>
        <span class="day">21</span>
        <span class="day">22</span>
        <span class="day">23</span>
        <span class="day current">24</span>
        <span class="day">25</span>
        <span class="day">26</span>
        <span class="day">27</span>
        <span class="day">28</span>
        <span class="day">29</span>
        <span class="day">30</span>
        <span class="day">31</span>
        <div class="clearfix"></div>
      </div>
    </div>

  </div>

  <br />
  <br />

  <style type="text/css" media="screen">
    @import url( https://fonts.googleapis.com/css?family=Montserrat );

  .clearfix{*zoom:1}.clearfix:before,.clearfix:after{display:table;line-height:0;content:""}.clearfix:after{clear:both}

  body{
    background: url('images/fundo/background2.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
  }

  .calender{
    margin:40px auto;
    width:70%;
    padding:20px;
    background:#f7f7f7;
    border:1px solid #ccc;
    color:rgb(0, 127, 114);
    position:relative;
  }

  .calender:before,
  .calender:after{
    content: '';
    position: absolute;
    z-index: -1;
    left: 0;
    top: 0;
    display: block;
    width: 100%;
    height: 100%;
    background: inherit;
    box-shadow: inherit;
    -webkit-transform: rotate(2deg);
    box-shadow:0 0 20px rgba(0,0,0,.4);
  }

  .calender::after{ -webkit-transform: rotate(-1deg) }

  .calender h1{
    font-family:'Montserrat';
    width:100%;
    text-align:center;
    text-shadow:1px 1px 0px rgba(0,0,0,.6);
  }

  .calender .day{
    display:block;
    width:13.5%;
    height:0;
    padding-top:6%;
    padding-bottom:8%;
    float:left;
    text-align:center;
    background:#ddd;
    border:1px solid #f7f7f7;
    font-family:sans-serif;
    font-size:1.4em;
    -webkit-transition: all .2s ease;
    cursor:pointer;
  }

  .calender .day:hover{
    background:rgb(0, 127, 114);
    color:#f7f7f7;
    box-shadow:inset 0 0 20px rgba(0,0,0,.4);
    text-shadow:1px 1px 2px rgba(0,0,0,.4);
  }

  .calender .day.current{
    background:rgba(236, 154, 24, 1);
    color:#f7f7f7;
    box-shadow:inset 0 0 20px rgba( 0,0,0, .4);
    text-shadow:1px 1px 2px rgba(0,0,0,.4);
  }
  </style>