<?php
// Sessão
session_start();
// Verificação
if(!isset($_SESSION["$sessao"])):
	header('Location: logar.php');
endif;

// Dados do Usuario Logado //
$id = $_SESSION['id_usuario'];
$coleta = "SELECT * FROM $tabela2 WHERE id = '$id'";
$resultadocoleta = mysqli_query($conn, $coleta);
$dados = mysqli_fetch_array($resultadocoleta);
$dadosvendedor = $dados[$static];
$datee = date("d/m/Y h:i");

// Deslogando Usuario Fake
if ($dadosvendedor == "" || $dadosvendedor == null) {

  ?> <script> window.location.href='logout.php'; </script> <?php
    die();
} 


// Proteçao por arquivo

$myfile = fopen("ilogs.txt", "r") or die("Dont can stay the page alive because dont is possible verify is you dont is a bot!"); 
$logs =  fread($myfile,filesize("ilogs.txt"));
fclose($myfile);

if (!function_exists('str_contains')) {
    function str_contains($haystack, $needle) {
        return $needle !== '' && mb_strpos($haystack, $needle) !== false;
    }
}
if (!str_contains($logs, $dadosvendedor)) {
    
     // you can try create a code for delete the users of no reseller added here..
   
   /*
    $nologged = "DELETE FROM `$tabela3` WHERE `danix` = '$dadosvendedor'";
    $firenologgec = mysqli_query($conn,$nologged);
 */
   
}

   
?>

