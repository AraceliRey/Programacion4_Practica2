<?php

$CAn = $_GET['CAn'];
$Des = $_GET['Des'];
$PU = $_GET['PU'];


$CAn1 = $_GET['CAn1'];
$Des1 = $_GET['Des1'];
$PU1 = $_GET['PU1'];


$CAn2 = $_GET['CAn2'];
$Des2 = $_GET['Des2'];
$PU2 = $_GET['PU2'];

$Resultado1 = $CAn * $PU;
$Resultado2 = $CAn1 * $PU1;
$Resultado3 = $CAn2 * $PU2;

$subtotal = $Resultado1 + $Resultado2 + $Resultado3;

define('iva', 0.16);
$iva =  iva * ($subtotal) ;
$total= $subtotal * iva + $subtotal;



?>


<html>
<body>
<fieldset>
<table>
<p>

<tr>
<td> 
	<?php echo  $CAn; ?>

</td>
<td> 
	<?php echo  $Des; ?>

</td>
<td> 
	<?php echo  $Resultado1; ?>

</td>
</tr>

<tr>
<td> 
	<?php echo  $CAn1; ?>

</td>
<td> 
	<?php echo  $Des1; ?>

</td>
<td> 
	<?php echo  $Resultado2; ?>

</td>
</tr>

<tr>
<td> 
	<?php echo  $CAn2; ?>

</td>
<td> 
	<?php echo  $Des2; ?>

</td>
<td> 
	<?php echo  $Resultado3; ?>

</td>
</tr>
</table>


</p>

	
	
<?php
	echo $subtotal;
	echo"<br>"


?>
<?php
	echo $iva;
	echo"<br>"


?>

<?php

	echo $total;
	echo"<br>"

?>
	

</fieldset>


</body>
</html>
