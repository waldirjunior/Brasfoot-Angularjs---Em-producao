app.controller('planodejogoCtl', function($scope, $http,$location, $stateParams,getJson, $element,$log) {

	$scope.titulares = [];


    $scope.planodeJogo = function(){
    	$scope.decisaofatal = 0;
    	if($scope.pos1 != null){//COMECO DO IF
    		if($scope.pos2 != null){
    			if($scope.pos3 != null){
    				if($scope.pos4 != null){
	    				if($scope.pos5 != null){
		    				if($scope.pos6 != null){
		    					if($scope.pos7 != null){
		    						if($scope.pos8 != null){
		    							if($scope.pos9 != null){
		    								if($scope.pos10 != null){
						    					if($scope.pos11 != null){
						    						$scope.decisaofatal = 1;
				    							}
    										}
    									}
    								}
    							}
		    				}
	    				}
    				}
    			}
    		}
    	}//Fim do IF
    	//console.log($scope.decisaofatal);

    	if($scope.decisaofatal == 1){

			$scope.titulares = { 

	            pos1: $scope.pos1,
	            pos2: $scope.pos2,
	            pos3: $scope.pos3,
	            pos4: $scope.pos4,
	            pos5: $scope.pos5,
	            pos6: $scope.pos6,
	            pos7: $scope.pos7,
	            pos8: $scope.pos8,
	            pos9: $scope.pos9,
	            pos10: $scope.pos10,
	            pos11: $scope.pos11,
	            idtime: $scope.idDoTimeDoUsuario,

			};

			$http({
				  method: 'POST',
			      data: $scope.titulares,
			      url: '/brasfoot/backend/class/titularesequipes.php',
			      headers: { 'Content-Type': 'application/json' },
				}).then(function successCallback(response) {
					console.log(response.data);
				});

			//$window.location.href = '/brasfoot/partida/prejogo.php';

				
    	}else{
    		swal("Faltou algum jogador! Verifique.");
    	}

    };


    //console.log(angular.element(document.querySelector('#pos1')));

	getJson.dadosJogador().then(function(response){
		$scope.jogadores = response.data;
		$scope.meujogadores = [];
	       angular.forEach($scope.jogadores, function(item){
	          if(item.time == $scope.idDoTimeDoUsuario){
	            if(item.status.posicao != 6){
	              $scope.meujogadores.push(item);
	              $scope.meujogadores;
	            }
	          }
	    });

        $scope.goleiroar = []; //1
        $scope.lateralar = []; //2
        $scope.zagueiroar = []; //3

        $scope.zagageral = [];

        $scope.meiaar = []; //4
        $scope.atacantear = []; //5
        $scope.zeroar = []; //0

        //Minha Equipe separada por posição
		angular.forEach($scope.meujogadores, function(item){
          if(item.status.posicao == 1){
            $scope.goleiroar.push(item);
          }
          else if(item.status.posicao == 2 ){
          	$scope.lateralar.push(item);
          	$scope.zagageral.push(item);
          }
          else if(item.status.posicao == 3 ){
          	$scope.zagueiroar.push(item);
          	$scope.zagageral.push(item);
          }

          else if(item.status.posicao == 4 ){
          	$scope.meiaar.push(item);
          }
          else if(item.status.posicao == 5 ){
          	$scope.atacantear.push(item);
          }else{
          	$scope.zeroar.push(item);
          }
        });

	});



	var wc_team = wc_team || {};

	wc_team.pitch = function(){
	  
	  var field = function(){
	    
	    // Pitch outer bounds
	    path.call(this, { move : [100, 20], 
	                      lines: [[100, 20],[20, 560], [560, 560], [460, 20]]
	                    }
	             );
	 
	    var grd = this.createLinearGradient(0,0,0,400);
	    grd.addColorStop(0.1, '#238C27');
	    grd.addColorStop(1,"#2CC932");
	    this.fillStyle = grd;
	    this.fill();
	    this.strokeStyle = "black";
	    this.lineWidth ="5";
	    this.stroke();
	  },
	  
	  markings = function(){
	    
	    // Pitch Outline
	    path.call(this, { move  : [110, 30], 
	                      lines : [[30, 550],[550, 550], [450, 30]],
	                      style : ["white", "3"] 
	                    }
	             );
	    
	    //  Half way line
	    path.call(this, { move  : [76, 260], 
	                      lines : [[495, 260]],
	                      style : ["white", "3"] 
	                    }
	             );
	    
	    // Center circle    
	    this.beginPath(); 
	    this.arc(280,267, 75, 30, 0, true);
	    this.strokeStyle = "white";
	    this.stroke(); 
	    
	    // Away goal
	    path.call(this, { move  : [130, 550], 
	                      lines : [[145, 440], [435,440], [450,550]],
	                      style : ["white", "3"] 
	                    }
	             );
	    
	      // Penalty arc
	    this.beginPath(); 
	    this.arc(285, 463, 75, 1.1 * Math.PI, 1.9 * Math.PI, false);
	    this.closePath();
	    this.strokeStyle = "white";
	    this.stroke();  
	    
	      // 6 yard box
	    path.call(this, { move  : [210, 550], 
	                      lines : [[215, 500], [365,500], [370,550]],
	                      style : ["white", "3"] 
	                    }
	             );    
	    
	    // Home goal
	    path.call(this, { move  : [175, 30], 
	                      lines : [[165, 100], [400,100], [390,30]],
	                      style : ["white", "3"] 
	                    }
	             );
	    
	      // Penalty arc
	    this.beginPath(); 
	    this.arc(285, 81, 60, -1.1 * Math.PI, -1.9 * Math.PI, true);
	    this.strokeStyle = "white";
	    this.stroke();
	    
	      // 6 Yard box
	    path.call(this, { move  : [233, 30], 
	                      lines : [[230, 60], [343,60], [340,30]],
	                      style : ["white", "3"] 
	                    }
	             );  
	  } 
	      
	  path = function(){

	    this.beginPath();
	    
	    move.call(this, arguments[0].move);
	    lines.call(this, arguments[0].lines);
	    
	    this.closePath();
	    
	    if(arguments[0].style !== undefined){
	       attr.call(this, arguments[0].style); 
	    }
	  },
	    
	  move = function(){
	    var args = arguments[0];
	    this.moveTo(args[0],args[1]);
	  },
	    
	  attr = function(){
	    var args = arguments[0];
	    this.strokeStyle = args[0];
	    this.lineWidth = args[1];
	    this.stroke();
	  }
	      
	  lines = function(){

	    var that = this,
	        args = arguments[0];
	    
	    for(var i = 0; i < args.length; i++){
	        this.lineTo(args[i][0], args[i][1]);
	    }
	  }
	  
	  return{
	    field : field,
	    markings : markings
	  }
	}();

	wc_team.dragDrap = function(){
	  
	  var position, 
	      dragSrc,
	  
	  // Select new team
	  init = function(){
	    var players = document.querySelectorAll(".positions ul");
	  
	    for(var p=0; p < players.length; p++){
	    	players[p].addEventListener("dragstart", dragStart, true);
	    	players[p].addEventListener("dragend", dragEnd, false);
	    }
	    
	    position = document.querySelectorAll('#starting_11 li');
	    
	    for(var i=0; i < position.length; i++){
	      position[i].addEventListener('drop', drop, false);
	      position[i].addEventListener('dragenter', cancel, false);
	      position[i].addEventListener('dragover', cancel, false);
	    }
	  },
	      
	  dragStart = function(e){
	    
	    dragSrc = e;
	    
	    e.dataTransfer.setData("text/html", e.target.outerHTML);
	    e.dataTransfer.effectAllowed = "copy";
	    e.dataTransfer.dropEffect = "copy";
	    
	    // Limit droppable player to there positions on pitch
	    for(var i = 0; i < position.length; i++){
	      if(e.currentTarget.dataset.pos === position[i].dataset.pos){
	     	 var id = position[i].id;
	      	document.getElementById(id).classList.add("highlight");
	      }
	    }
	  },
	      
	  dragStartOver = function(e){
	    
	    dragSrc = e;
	    
	    console.log(e);

	    e.dataTransfer.setData("text/html", this.innerHTML);
	    e.dataTransfer.effectAllowed = "move";
	    e.dataTransfer.dropEffect = "move";
	    
	    // Limit droppable player to there positions on pitch
	    for(var i = 0; i < position.length; i++){
	      if(e.currentTarget.dataset.pos === position[i].dataset.pos){
	     	 var id = position[i].id;
	      	document.getElementById(id).classList.add("highlight");
	      }
	    }
	  },

	  drop = function(e){
	    cancel(e);

	    var data = e.dataTransfer.getData("text/html"),
	        target = e.currentTarget;

	    // reenable drag for outgoing player
	    if(target.innerHTML !== ""){
	      //console.log(target.id);
	      if(target.id == "pos1"){
	      	$scope.pos1 = target.lastChild.dataset.player;
	      }
	      else if(target.id == "pos2"){
	      	$scope.pos2 = target.lastChild.dataset.player;
	      }
	      else if(target.id == "pos3"){
	      	$scope.pos3 = target.lastChild.dataset.player;
	      }
	      else if(target.id == "pos4"){
	      	$scope.pos4 = target.lastChild.dataset.player;
	      }
	      else if(target.id == "pos5"){
	      	$scope.pos5 = target.lastChild.dataset.player;
	      }
	      else if(target.id == "pos6"){
	      	$scope.pos6 = target.lastChild.dataset.player;
	      }
	      else if(target.id == "pos7"){
	      	$scope.pos7 = target.lastChild.dataset.player;
	      }
	      else if(target.id == "pos8"){
	      	$scope.pos8 = target.lastChild.dataset.player;
	      }
	      else if(target.id == "pos9"){
	      	$scope.pos9 = target.lastChild.dataset.player;
	      }
	       else if(target.id == "pos10"){
	      	$scope.pos10 = target.lastChild.dataset.player;
	      }
	      else if(target.id == "pos11"){
	      	$scope.pos11 = target.lastChild.dataset.player;
	      }
	      else{
	      	alert("Erro valores scope posição!");
	      }


	      dragReset(target.lastChild.dataset.player);
	    }
	    
	    if(dragSrc.srcElement.parentNode.id === 'starting_11'){
	      // Reorder player      
	      var dragSrcClass = dragSrc.target.className,
	          targetClass = target.className;
	      
	      dragSrc.target.innerHTML = this.innerHTML;
	      dragSrc.target.className = targetClass;
	        
	      target.innerHTML = data;
	      target.className = dragSrcClass;
	      
	      console.log(dragSrc, target);
	    }
	    else{
	      // Set new player data
	      target.innerHTML = '<a class="remove"></a>' + data;
	      document.getElementById(target.id).classList.add('selected');  
	      
	      // Disable draggale property to stop duplicates
	      dragSrc.target.draggable = false;
	      target.lastChild.setAttribute('draggable', 'false');
	    }

	    dragEnd();
	    target.addEventListener("dragstart", dragStartOver, false);
	  },
	      
	  dragEnd = function(){
	    for(var i = 0; i < position.length; i++){
	      var id = position[i].id;
	      document.getElementById(id).classList.remove('highlight');
	    } 
	  },
	      
	  cancel = function(e){
	    
	    if(e.preventDefault){
	      e.preventDefault();
	    }
	    
	    if(e.stopPropagation){
	      e.stopPropagation();
	    }
	      
	     return false;
	  },
	  
	  // reset players draggable attr
	  dragReset = function(name){
	    
	    var player = document.querySelector('.positions div[data-player="'+name+'"]');
	    player.draggable = true;
	  }
	  
	  return {
	    init : init
	  }
	}();

	wc_team.init = function(){
	  //Save common elements
	    var c = document.getElementById("pitch"),
	        ctx = c.getContext("2d");
	    
	    wc_team.pitch.field.call(ctx);
	    wc_team.pitch.markings.call(ctx);
	  
	    wc_team.dragDrap.init();
	    //wc_team.formation.init();
	}


	// Create the pitch
	wc_team.init();



});