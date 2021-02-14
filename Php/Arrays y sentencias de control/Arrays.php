<body bgcolor="white">		
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
	</head>
	<center>
<h2>Crea un array con el nombre de tus compañeros y selecciona uno de ellos al azar</h2>
<?php 

//array 
$companeros =[
	'Andrei',
	'Fabian',
	'Hector',
	'Gabriel',
	'Nury',
	'Agustina',
	'Jesus',
	'Ismael',
	'Jose',
	'Alfonso',
	'Javier',
	'Rodrigo.S',
	'Alvaro',
	'Darius',
	'Ivan',
	'Rodrigo.T',
];
$i= round(rand(0,15));
echo '<br/>';
//shuffle($companeros);
echo $companeros[$i];
//print_r($companeros);
?>

<div id="r"></div>
<script>

companeros = [
	'Andrei',
	'Fabian',
	'Hector',
	'Gabriel',
	'Nury',
	'Agustina',
	'Jesus',
	'Ismael',
	'Jose',
	'Alfonso',
	'Javier',
	'Rodrigo.S',
	'Alvaro',
	'Darius',
	'Ivan',
	'Rodrigo.T',
];

i=Math.random()*(companeros.length -1);
i=Math.round(i);
console.log(i);
document.getElementById('r').innerHTML =companeros[i];

</script>
<h2>Crea un array con los días de la semana y muestra uno de los días seleccionándolo al azar</h2>
<?php
//array 
$Dias =[
	'Lunes',
	'Martes',
	'Miercoles',
	'Jueves',
	'Viernes',
	'Sabado',
	'Domingo',
	];
$d= round(rand(0,6));
echo '<br/>';
//shuffle($companeros);
echo $Dias[$d];
//print_r($companeros);
?>

<div id="d"></div>
<script>

dias = [
	'Lunes',
	'Martes',
	'Miercoles',
	'Jueves',
	'Viernes',
	'Sabado',
	'Domingo',

]
i=Math.random()*(dias.length -1);
i=Math.round(i);
console.log(i);
document.getElementById('d').innerHTML =dias[i];
</script>


<h2>Crea una aplicación web para repasar la tabla de multiplicar haciendo uso de un array y un formulario</h2>

<?php  
if(!isset($_GET['marcador']))$_GET['marcador']=0;
if(isset($_GET['respuesta'])){
	if ($_GET['resultado']==$_GET['respuesta']){
			$_GET['marcador']++;
			
			echo '!!Bien¡¡';
	}
	else{
		$_GET['marcador']=0;
		echo 'lo siento, has fallado.Debes volver a empezar';
	
}
}
	echo $_GET['marcador'];
	echo '<br/>';
$a= rand(1,10);
$b= rand(1,10);
	echo $a.' x '. $b.' = ';($a*$b);
?>
<form>
<input name="respuesta"/>
<input type="hidden" name="resultado" value="<?=($a*$b)?>"/>
<input type="hidden" name="marcador" value="<?=$_GET['marcador']?>">
<button>Calcular</button>
</form>
</center>
</body>
</html>
