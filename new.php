<html> 
<head><meta content="text/html; charset="iso-8859-1" http-equiv="Content-Type" /></head>
<body>
<?php
	/*$archivo = fopen("http://www.elfrancotirador.cl/cita_js.php","r");
	
	if($archivo){
		while (!feof($archivo))
		{
			$line = fgets($archivo, 1024);  // este bloque sólo funciona si todo está en una línea 
			if (eregi("(.*)", $line, $out))
			{
				$title = $out[1];
				echo $line;
				break;
			}
			
		}
		
		fclose($archivo);
	}*/
	
	
	$string = file_get_contents('http://www.elfrancotirador.cl/cita_js.php');
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
