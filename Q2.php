<?Php
	$estado = array("Bahia", "Pernambuco", "SÃo Paulo", "Amazonas", "Brasilia", "Porto Alegre");
	
	$numEstado = sizeof ($estado);
 
	$chances = round((1/$numEstado)*100);
	$sorteado = $estado [rand( 0, $numEstado-1)];
	
	echo "<b>Estado Sorteado</b> - " . $sorteado ;	
?>