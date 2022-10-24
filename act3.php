<?php
include 'data.php';
$conn->query("UPDATE `$tabela` SET `UID` = NULL");  
$conn->query("UPDATE `$tabela` SET `UID2` = NULL");  
?>

<script type="text/javascript">
	alert("<?php echo "Todos foram resetados!"?>")
	window.location.href='index.php';
</script>