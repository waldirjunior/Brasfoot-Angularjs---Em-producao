<!DOCTYPE html>
<html data-ng-app="brasApp">

<head>
	<meta charset="UTF-8">
	<title>Partida Online - BrasPlay</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="author" content="SquirrelLabs"/>
	<meta name="keywords" content="SquirrelLabs"/>
	<meta name="description" content="SquirrelLabs"/>
	
	<!-- Favicon and touch icons -->
	<link rel="shortcut icon" href="assets/ico/favicon.html">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-57-precomposed.png">
	
	<!--stylesheets-->	
	<link rel="stylesheet" href="css/popup.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
</head>

<body data-ng-controller="principalApp">
	<div class="global-border"></div>
    <div class="left">
		<div class="content" data-ng-include="'app/views/texto.php'">

		</div>
    </div>
    <div class="right">
	    <div class="content">
			<div id="main">

			<main>
			    <div class="static">
			        <h1 class="js-heading">Equipes</h1>
			        <p class="js-subheading">Teste teste teste Teste teste teste Teste teste testeTeste teste teste.<br><span style="font-size: 11px">Currently buggy in Chrome, will fix soon :)</span></p>
			        <div class="js-switcher switcher">
			            <a href="#" class="js-switch disabled switch-btn">CASA</a><a href="#" class="js-switch switch-btn">FORA</a>
			        </div>
			    </div>
			    <div class="js-stage stage texture">
			        <div class="js-world world">
			            <div class="team js-team">
			                <!-- Team cards / icons goes here -->
			            </div>
			            <div class="terrain js-terrain">
			                <div class="field field--alt"></div>
			                <div class="field ground">
			                    <div class="field__texture field__texture--gradient"></div>
			                    <div class="field__texture field__texture--gradient-b"></div>
			                    <div class="field__texture field__texture--grass"></div>
			                    <div class="field__line field__line--goal"></div>
			                    <div class="field__line field__line--goal field__line--goal--far"></div>
			                    <div class="field__line field__line--outline"></div>
			                    <div class="field__line field__line--penalty"></div>
			                    <div class="field__line field__line--penalty-arc"></div>
			                    <div class="field__line field__line--penalty-arc field__line--penalty-arc--far"></div>
			                    <div class="field__line field__line--mid"></div>
			                    <div class="field__line field__line--circle"></div>
			                    <div class="field__line field__line--penalty field__line--penalty--far"></div>
			                </div>
			                <div class="field__side field__side--front"></div>
			                <div class="field__side field__side--left"></div>
			                <div class="field__side field__side--right"></div>
			                <div class="field__side field__side--back"></div>
			            </div>
			        </div>
			        <center><div class="loading js-loading" align="center">Por Favor Aguarde!...</div></center>
			    </div>
			</main>


			</div>
		</div>
    </div>
	<div class="clear"></div>
	<!-- info pop-up -->
	<a href="#" class="btn">i</a>
	<div class="overlay"></div>
	<div class="popup">
		<div class="popup__close">
			<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="10px" height="10px" viewBox="215.186 215.671 80.802 80.8" enable-background="new 215.186 215.671 80.802 80.8" xml:space="preserve">
			<polygon fill="#FFFFFF" points="280.486,296.466 255.586,271.566 230.686,296.471 215.19,280.964 240.086,256.066 215.186,231.17 
	230.69,215.674 255.586,240.566 280.475,215.671 295.985,231.169 271.089,256.064 295.987,280.96 "></polygon>
			</svg>
		</div>
		<div class="popup-i">
			<h2 class="popup__title">Animated popup</h2>
			<div class="popup__content">
				<p>It's time to change your 404 Error page!!!</p>
				<h2>Main Features:</h2>
				<ul>
				<li>Responsive Design,</li>
				<li>Real Game,</li>
				<li>Retina Ready,</li>
				<li>Customizing is easy even for beginners,</li>
				<li>Modern Layout,</li>
				<li>Valid HTML and CSS code,</li>
				<li>Font-Face Integration,</li>
				<li>Easily Customizable and nicely commented code,</li>
				<li>Documentation Included.</li>
				</ul>
				<p>Giving 5 star () if you enjoy the product!</p>
			</div>
		</div>
	</div><!-- end info pop-up -->
	


	<style class="cp-pen-styles">
	</style>





	<!-- JavaScript -->
	<script src='js/jquery.min.js' type="text/javascript"></script>
	<script src="js/popup.js" type="text/javascript"></script>

	<script type="text/javascript">
		"use strict";"object"!=typeof window.CP&&(window.CP={}),window.CP.PenTimer={programNoLongerBeingMonitored:!1,timeOfFirstCallToShouldStopLoop:0,_loopExits:{},_loopTimers:{},START_MONITORING_AFTER:2e3,STOP_ALL_MONITORING_TIMEOUT:5e3,MAX_TIME_IN_LOOP_WO_EXIT:2200,exitedLoop:function(o){this._loopExits[o]=!0},shouldStopLoop:function(o){if(this.programKilledSoStopMonitoring)return!0;if(this.programNoLongerBeingMonitored)return!1;if(this._loopExits[o])return!1;var t=this._getTime();if(0===this.timeOfFirstCallToShouldStopLoop)return this.timeOfFirstCallToShouldStopLoop=t,!1;var i=t-this.timeOfFirstCallToShouldStopLoop;if(i<this.START_MONITORING_AFTER)return!1;if(i>this.STOP_ALL_MONITORING_TIMEOUT)return this.programNoLongerBeingMonitored=!0,!1;try{this._checkOnInfiniteLoop(o,t)}catch(o){return this._sendErrorMessageToEditor(),this.programKilledSoStopMonitoring=!0,!0}return!1},_sendErrorMessageToEditor:function(){try{if(this._shouldPostMessage()){var o={action:"infinite-loop",line:this._findAroundLineNumber()};parent.postMessage(JSON.stringify(o),"*")}else this._throwAnErrorToStopPen()}catch(o){this._throwAnErrorToStopPen()}},_shouldPostMessage:function(){return document.location.href.match(/boomerang/)},_throwAnErrorToStopPen:function(){throw"We found an infinite loop in your Pen. We've stopped the Pen from running. Please correct it or contact support@codepen.io."},_findAroundLineNumber:function(){var o=new Error,t=0;if(o.stack){var i=o.stack.match(/boomerang\S+:(\d+):\d+/);i&&(t=i[1])}return t},_checkOnInfiniteLoop:function(o,t){if(!this._loopTimers[o])return this._loopTimers[o]=t,!1;var i=t-this._loopTimers[o];if(i>this.MAX_TIME_IN_LOOP_WO_EXIT)throw"Infinite Loop found on loop: "+o},_getTime:function(){return+new Date}},window.CP.shouldStopExecution=function(o){var t=window.CP.PenTimer.shouldStopLoop(o);return t===!0&&console.warn("[CodePen]: An infinite loop (or a loop taking too long) was detected, so we stopped its execution. Sorry!"),t},window.CP.exitedLoop=function(o){window.CP.PenTimer.exitedLoop(o)};
	</script>


	<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.2/velocity.min.js'></script>




	<script src="../js/angular/angular.min.js" type="text/javascript"></script>
	<script src="../js/angular/angular-ui-router.min.js"></script>

	<script src="app/app.js"></script>


</body>

</html>