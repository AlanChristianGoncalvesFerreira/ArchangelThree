
/*Função Menu ativar */
function menuativar() {
    var x = document.getElementById("menuvertical");
    if (x.className.indexOf("menuativa-show") == -1) {
      x.className += " menuativa-show";
    } else { 
      x.className = x.className.replace(" menuativa-show", "");
    }
  }

  /*Função chamada do conteúdo no container */

  function caller(n){
	
	switch(n){
	case 0: t="home.php " ;break;
	case 1: t=" servicos.php" ;break;
	case 2: t="contato.php" ;break;
	case 3: t="direitos.php" ;break;

	
	
	
	}
	
  httpreq=new XMLHttpRequest();	
 	
	  httpreq.onreadystatechange=function(){
		  
		
		if(httpreq.readyState==4){
			  document.getElementById('container').innerHTML=httpreq.responseText;
		  
		   
			
		  } 
	
		function browserVer4Detect()

{

  if(navigator.appVersion.substring(0,1) < 4)

    URLStr = "1.html";

  else

    URLStr = "2.html";

  window.location = URLStr;

}



		  
		  }
	
	  httpreq.open("GET",t,true)
	  httpreq.send(null)
	
	}

	

//carrega a função quando a janela for aberta
		//variáveis chamada dos botões  
		window.onload=function(){ 
			var chamada = new XMLHttpRequest();
	chamada.open('GET', 'home.php', true);
	chamada.send(null);
	chamada.onreadystatechange = function(){

		if ( this.readyState == 4 && this.status == 200 ) {
        var div = document.getElementById('container');
         div.innerHTML = this.responseText;
		}
	};
		
		};