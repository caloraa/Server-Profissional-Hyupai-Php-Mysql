<?php
include 'data.php';

$coleta = "SELECT * FROM $tabela3 WHERE id = '".$_GET['no']."'";
$resultadocoleta = mysqli_query($conn, $coleta);
$dados = mysqli_fetch_array($resultadocoleta);
$dadosvendedor = $dados[$static];

     $a = 'ilogs.txt';
     $b = file_get_contents('ilogs.txt');
     $c = str_replace($dadosvendedor,null,$b);
     file_put_contents($a, $c); 
     
     
     $conn->query("DELETE FROM `$tabela3` WHERE `id` = '".$_GET['no']."'");  
?>
<script type="text/javascript">
	alert("<?php echo "$dadosvendedor foi eliminado!"?>")
	window.location.href='vervendedores.php';
</script>