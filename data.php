<?php 

include 'info.php';
include 'DB.php';
include 'verify.php';

// complementos
$complemento = "Plano";
$result = mysqli_query($conn, "SHOW TABLES LIKE '$tabela'");
$tokensvalid = $result && $result->num_rows > 0;

$result2 = mysqli_query($conn, "SHOW TABLES LIKE '$tabela3'");
$vendedoresvalid = $result2 && $result2->num_rows > 0;
// coletas
$cc0 = "SELECT * FROM $tabela2 WHERE id = '2'";
$ccr0 = mysqli_query($conn, $cc0);
$dados0 = mysqli_fetch_array($ccr0);

$antvpn = $dados0['antvpn'];
$plano = $dados0['plano'];
$compra = $dados0['compra'];
$nomedopainel = $dados0['nomedopainel'];
$garantia = $dados0['garantia'];

$database = date_create($garantia);
$datadehoje = date_create();
$resultado = date_diff($database, $datadehoje);
$dias = date_interval_format($resultado, '%a');


$vendedorespodemadicionardias = $dados0['vendedorespodemadicionardias'];
$vendedorespodempausar = $dados0['vendedorespodemadicionardias'];
$status = $dados0['status'];
$slot1 = $dados0['slot1'];
$slot2 = $dados0['slot2'];
$slot3 = $dados0['slot3'];
$slot4 = $dados0['slot4'];
$valor1 = $dados0['valor1'];
$valor2 = $dados0['valor2'];
$valor3 = $dados0['valor3'];
$valor4 = $dados0['valor4'];
$flogin = $dados0['flogin'];
$message = $dados0['message'];

// ===================================== //
$cc = "SELECT * FROM $tabela2 WHERE id = '$id'";
$ccr = mysqli_query($conn, $cc);
$dados = mysqli_fetch_array($ccr);

$name = $dados['login'];

$cc2 = "SELECT COUNT(*) FROM $tabela";
$ccr2 = mysqli_query($conn,$cc2);
    $rows1 = mysqli_fetch_row($ccr2);
    $numerodeusuarios = $rows1[0];

$cc3 = "SELECT COUNT(*) FROM $tabela3";
$ccr3 = mysqli_query($conn,$cc3);
    $rows2 = mysqli_fetch_row($ccr3);
    $numerodevendedores = $rows2[0];






?>
