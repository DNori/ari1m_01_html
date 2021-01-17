<h1><center>VARIABLES</h1>
<h2>Se quiere poner césped artificial en un sector de una pista de lanzamiento de jabalina circular. El ángulo del sector es de 90 grados y el radio 5 metros. ¿Qué superficie será necesario cubrir? </h2> <image  height = 30%  
src = " imagenes\parcela.jpg " /> </ center >
<form>

Radio <input placeholder="Radio" value="25" id="r" name="r"
onkeyup="calcular()"/>
Sector <input placeholder="sector" id="s" name="s" value="90" 
onkeyup="calcular()"/>





<button onclick="calcular()">Calcular</button>
</form>
<div id="A"style="
	padding:20px;
	background-color:cyan;
">
Resultado
</div>	

<script>

function calcular(){
	r=document.getElementById('r').value;
	s=document.getElementById('s').value;
	A=(3.14*r*s)/360;
	document.getElementById('A'). innerHTML=A+' m2';
}
calcular();
</script>


<?php
if( isset ( $_GET [ 'r' ])) {
	$r = $_GET [ 'r' ];
	$s= $_GET [ 's' ];
	echo  'area:' . ((3.14*$r*$s)/360);
}
?>

<h2>Una lata de refresco tiene una altura de 15 cm y el diámetro de la base es de 8 cm. ¿Cuál es el volumen de la lata? Si queremos envasar 1000 l de refresco, ¿cuántas latas necesitamos? </h2> <image  height = 30%  
src = " imagenes\lata.jpg " /> </ center >
<form>

Radio al cuadrado<input placeholder="Radio" value="16" id="r2" name="r2"
onkeyup="calcular()"/>
altura <input placeholder="altura" id="h" name="h" value="15" 
onkeyup="calcular()"/>
litros a rellenar <input placeholder="Rellenar" id="R" name="R" value="1000" 
onkeyup="calcular()"/>




<button onclick="calcular()">Calcular</button>
</form>
<div id="V"style="
	padding:20px;
	background-color:cyan;
">
Resultado
</div>	
<div id="l"style="
	padding:20px;
	background-color:cyan;
">
Resultado
</div>	
<script>

function calcular(){
	r2=document.getElementById('r2').value;
	h=document.getElementById('h').value;
	R=document.getElementById('R').value;
	V=(3.14*r2*h);
	document.getElementById('V'). innerHTML=V+' cm3';
    l= R/(V/1000);
	document.getElementById('l'). innerHTML=l+' latas';
}
calcular();
</script>


<?php
if( isset ( $_GET [ 'r2' ])){
	$r2 = $_GET [ 'r2' ];
	$h= $_GET [ 'h' ];
	$R= $_GET [ 'R' ];
	echo 'Volumen:' . (3.14*$r2*$h); 
	echo'Latas:' . ($R/(3.14*$r2*$h/1000)); }
?>
