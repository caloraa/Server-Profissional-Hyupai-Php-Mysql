<?php
include 'data.php';
     if ($status == "Ativado") {
     $conn->query("UPDATE `$tabela2` SET `status` = 'Desativado' Where `id` = '2'");
     $txt = "Server Off"  ;
} else {
      $conn->query("UPDATE `$tabela2` SET `status` = 'Ativado' Where `id` = '2'"); 
      $txt = "Server On";
}
?>
<script type="text/javascript">
	alert("<?php echo $txt; ?>")
	window.location.href='index.php';
</script>