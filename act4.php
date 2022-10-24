<?php
include 'data.php';
$device = $_GET['no'];  
$user = $_GET['no2'];
$conn->query("DELETE FROM `$tabela4` WHERE `user` = '$user' AND `device` = '$device'"); $StartDate= date('Y-m-d H:i');
$Vendedor = $name;

$name = 'logusers.txt';
$text = "$StartDate - O Usuario: $Username teve seu dispositivo desbanido por $Vendedor\n";
$file = fopen($name, 'a');
fwrite($file, $text);
fclose($file);
?>

<script type="text/javascript">
	alert("<?php echo "$user teve o dispositivo $device desbanido!"?>")
	window.location.href='verdispositivo.php';
</script>