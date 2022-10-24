<?php 
    include 'data.php';

    if($vendedorespodempausar == "Desativado") {
        die("Você não tem permissao para acessar essa pagina!");
    }
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pausar/ Retomar Usuarios</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/newserver2/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
      <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"><i class="menu-icon fa fa-laptop"></i>Inicio </a>
                    </li>
                    <li class="menu-title">Opções de Administração</li><!-- /.menu-title -->
                   

                   <li>
                        <a href='verusuarios.php'><i class='menu-icon ti-eye'></i>Ver Usuarios </a>
                    </li>
                    
                     <li>
                        <a href='registrarusuarios.php'><i class='menu-icon ti-user'></i>Registrar Usuarios </a>
                    </li>
                    
                     <li>
                        <a href='resetarusuarios.php'><i class='menu-icon ti-reload'></i>Resetar Usuarios </a>
                    </li>
                    
                     <li>
                        <a href='removerusuarios.php'><i class='menu-icon ti-trash'></i>Remover Usuarios </a>
                    </li>

                    <li>
                        <a href='editarusuarios.php'><i class='menu-icon ti-pencil-alt'></i>Editar Usuarios </a>
                    </li>
                    <li>
                    <?php if($vendedorespodemadicionardias == "Ativado") {
                        echo " 
                        <a href='dias.php'> <i class='menu-icon ti-time'></i>Adicionar Dias </a>
                   ";
                    } ?>
</li><li>
                    <?php if($vendedorespodempausar == "Ativado") {
                        echo " 
                        <a href='stopuser.php'> <i class='menu-icon ti-control-play'></i>Pausar/Retomar Usuarios </a>
                    ";
                    } ?>
                  </li>  
                    
                     
                    <li class="menu-title">Outras Ações</li><!-- /.menu-title -->
                    
                    
                     <li>
                        <a href="logout.php"> <i class="menu-icon ti-power-off"></i>Sair</a>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/icon.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                    
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

        
                </div>
            </div>
        </header>
        <!-- /#header -->

        

        <div class="content">
            <div class="animated fadeIn">


                <div class="row">
                    

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">Pausar/Retomar Usuarios</div>
                        <div class="card-body card-block">
                            <form action="#" method="post" class="">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input type="text" id="username" name="username" placeholder="Usuario" class="form-control" data-required="true" required>
                                    </div>
                                </div>
                            
                                <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-medium" name="action">Pausar/Retomar</button></div>
                            </form>
                        </div>
                    </div>
                      </div>
                        </div>

                


                         <?php  if(isset($_POST['action'])) {

            // coletando dados do formulario:

  $Username = $_POST['username'];
  $Vendedor = $name;
  $StartDate= date('Y-m-d H:i');

 $sqla = "SELECT Username FROM $tabela WHERE Username = '$Username' AND `Vendedor` = '$Vendedor'";
        $resultadoa = mysqli_query($conn, $sqla); 

        if(mysqli_num_rows($resultadoa) == 0) {
                    echo "<b>Usuario não existe ou não foi registrado por você";
                } else {

$cc4 = "SELECT * FROM $tabela WHERE Username = '$Username'";
$ccr4 = mysqli_query($conn, $cc4);
$dados4 = mysqli_fetch_array($ccr4);

$status = $dados4['status'];
$diasppp = $dados4['diasp'];
$diasp = $diasppp + 1;
$EndDatee = $dados4['EndDate'];



$database = date_create($dados4['EndDate']);
$datadehoje = date_create();
$resultado = date_diff($database, $datadehoje);
$dias = date_interval_format($resultado, '%a');

$newEnd = date('Y-m-d H:i', strtotime("+$diasp Days"));

if($EndDatee == "0000-00-00 00:00:00") {
    die("<b>Não é possivel pausar um usuario não iniciado!</b>");
}
if ($status == "paused") {

            
$update = "UPDATE $tabela SET `status` = 'on' WHERE `Username` = '$Username'"; 
$onupdate = mysqli_query($conn,$update);

$update2 = "UPDATE $tabela SET `EndDate` = '$newEnd' WHERE `Username` = '$Username'";
$onupdate2 = mysqli_query($conn,$update2);

$text = "$StartDate - O Usuario: $Username foi retomado por $Vendedor\n";
$text2 = "Retomado";

} else if ($status == "on"){
$update = "UPDATE $tabela SET `status` = 'paused' WHERE `Username` = '$Username'";
$onupdate = mysqli_query($conn,$update);

$update2 = "UPDATE $tabela SET `diasp` = '$dias' WHERE `Username` = '$Username'";
$onupdate2 = mysqli_query($conn,$update2);
$text2 = "Pausado";
$text = "$StartDate - O Usuario: $Username foi pausado por $Vendedor\n";

} else if($status == "off") {
    echo "<b>Não é possivel pausar um usuario offline</b>";
    $text = "";
}

if ($text != "") {
$name = '../logusers.txt';
$file = fopen($name, 'a');
fwrite($file, $text);
fclose($file);
}
?>
<script type="text/javascript">
    alert("<?php echo $text2;?>");
    window.location.href='index.php';
</script>
<?php


}
}
?>
               




        </div><!-- .animated -->
    </div><!-- .content -->

    <div class="clearfix"></div>

    <footer class="site-footer">
        <div class="footer-inner bg-white">
            <div class="row">
                <div class="col-sm-6">
                    Copyright &copy; 2018 Ela Admin
                </div>
                <div class="col-sm-6 text-right">
                    Designed by <a href="https://colorlib.com">Colorlib</a>
                </div>
            </div>
        </div>
    </footer>

</div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>


</body>
</html>
