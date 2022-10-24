<?php include 'data.php'; error_reporting(0);?>
<?php $servername = "altaproo";?>
<html>
<head>
<meta charset="utf-8">
<title>Delete Lib</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" type="text/css" href="../includes/chx/nunito-font.css">

<link rel="stylesheet" href="style.css" />
<style>
    h2, p {
        padding-left: 20px;
    }
</style>
</head>
<body class="form-v9">
<div class="page-content">
<div class="form-v9-content" style="background-image: url('https://i.imgur.com/q2VYwim.jpg')">
<form class="form-detail" action="#" method="post">
<h2>Delete uma LIB</h2>
<div class="form-row-total">
</div>
<div class="form-row">
<input type="text" name="file" id="file" class="input-text" placeholder="Nome da LIB" required>
</div>

<div class="form-row-last">
<input type="submit" name="register" class="register" value="Deletar">
</div>
</form>



<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"version":"2021.4.0","si":10,"rayId":"64102027ca8b4b35"}'></script>

<?php
 if(isset($_POST['register'])){
   $filename = $_POST['file'];
$target_file = "$servername/libs/";

if (file_exists($target_file)) {
  ?> <script>window.alert("Arquivo deletado")</script><?php
    //echo "<p>Arquivo ja exitia faça upload novamente!";
 unlink($target_file . $filename);  
} else {
     ?> <script>window.alert("Não encontramos o diretorio!!")</script><?php
}

 }
?>

 </div>
 </div>
</body>
</html>