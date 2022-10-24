<?php 

include 'DB.php';
include 'info.php';

$cc0 = "SELECT * FROM $tabela2 WHERE id = '2'";
$ccr0 = mysqli_query($conn, $cc0);
$dados0 = mysqli_fetch_array($ccr0);

$antvpn = $dados0['antvpn'];
$status = $dados0['status'];
$message = $dados0['message'];




?>
