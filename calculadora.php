<form method="get" action="">
        <input type="text" name="operando1"></br>
        <input type="text" name="operando2"></br>
		<select name="operador">
			<option value="+">+
			</option>
			<option value="-">-
			</option>
			<option value="*">*
			</option>
			<option value="/">/
			</option>
		</select>
		
		<input type="submit" value="enviar">
    </form>
    
<?php

$operando1 = $_GET['operando1'];
$operando2 = $_GET['operando2'];
$operador = $_GET['operador'];
	
if($operador == "+")
{
	$solucion = $operando1 + $operando2;
}
else if($operador == "-")
{
	$solucion = $operando1 - $operando2;
}
else if($operador == "*")
{
	$solucion = $operando1 * $operando2;
}
else if($operador == "/")
{
	$solucion = $operando1 / $operando2;
}
echo "La solución es: ".$solucion;
?>
