$(document).ready(function() {
	//SECCION 1 UBICACION
  	$('.seccion1').mouseenter(
  		function() {
  			setTimeout(
  				function(){
		  			document.getElementById("empezar1").style.color = "White";
		  			document.getElementById("texto1").style.color = "White";
		  			document.getElementById("seccion11").style.background = "red";
		  		},40);
  		}
	);
	$('.seccion1').mouseleave(
  		function() {
  			setTimeout(
  				function(){
  					document.getElementById("empezar1").style.color = "black"; 
  					document.getElementById("texto1").style.color = "black";
  					document.getElementById("seccion11").style.background = "white";
  				},100); 			
  		}
	);
	//SECCION 2 VIVIENDA
	$('.seccion2').mouseenter(
  		function() {
  			setTimeout(
  				function(){
		  			document.getElementById("empezar2").style.color = "White";
		  			document.getElementById("texto2").style.color = "White";
		  			document.getElementById("seccion22").style.background = "red";
		  		},40);
  		}
	);
	$('.seccion2').mouseleave(
  		function() {
  			setTimeout(
  				function(){
  					document.getElementById("empezar2").style.color = "black"; 
  					document.getElementById("texto2").style.color = "black";
  					document.getElementById("seccion22").style.background = "white";
  				},100);  			
  		}
	);
	//SECCION 3 HOGAR
	$('.seccion3').mouseenter(
  		function() {
  			setTimeout(
  				function(){
		  			document.getElementById("empezar3").style.color = "White";
		  			document.getElementById("texto3").style.color = "White";
		  			document.getElementById("seccion33").style.background = "red";
		  		},40);
  		}
	);
	$('.seccion3').mouseleave(
  		function() {
  			setTimeout(
  				function(){
  					document.getElementById("empezar3").style.color = "black"; 
  					document.getElementById("texto3").style.color = "black";
  					document.getElementById("seccion33").style.background = "white";
  				},100);			
  		}
	);
	//SECCION 4 PERSONAS
	$('.seccion4').mouseenter(
  		function() {
  			setTimeout(
  				function(){
		  			document.getElementById("empezar4").style.color = "White";
		  			document.getElementById("texto4").style.color = "White";
		  			document.getElementById("seccion44").style.background = "red";
		  		},40);
  		}
	);
	$('.seccion4').mouseleave(
  		function() {
  			setTimeout(
  				function(){
  					document.getElementById("empezar4").style.color = "black"; 
  					document.getElementById("texto4").style.color = "black";
  					document.getElementById("seccion44").style.background = "white";
  				},100);	  			
  		}
	);
});