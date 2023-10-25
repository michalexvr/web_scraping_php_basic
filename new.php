<html> 
<head><meta content="text/html; charset="iso-8859-1" http-equiv="Content-Type" /></head>
<body>
<?php
	$url= "https://url_to_scrap"
	
	
	$string = file_get_contents($url);
	$string2 = file_get_contents('http://localhost/proyectos/datos.txt');
	if($string){
		echo $string;
	}
	
	else echo "<br>el archivo no esta =S<br>";
	
	if(!strpos($string2,$string)){
	file_put_contents('datos.txt',$string2.'document.write("<br><br>");'.$string);
	
	echo $string2;
	} else echo "<br><br>repetida =S";
	
	echo '<br><br>¿podríamos hacer algo más? <br> <meta http-equiv="refresh" content="5" > <br>'.$_SERVER['SERVER_NAME'];
?>


</body>
</html>
