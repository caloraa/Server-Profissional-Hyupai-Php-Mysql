<?php 
    include 'data.php';
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro de Vendedores</title>
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
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
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
                    <li class="menu-title">Gerenciamento</li><!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-street-view"></i>Usuarios</a>
                        <ul class="sub-menu children dropdown-menu">
                             <li><i class="menu-icon fa fa-street-view"></i><a href="verusuarios.php">Ver Usuarios</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="registrarusuarios.php">Registrar Usuarios</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="dias.php">Adicionar Dias</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="diastodos.php">Adicionar Dias [todos]</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="editarusuarios.php">Editar Usuario</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="removerusuarios.php">Remover Usuarios</a></li>
                            <li><i class="menu-icon fa fa-street-view"></i><a href="resetar.php">Resetar Usuarios</a></li>
                             <li><i class="menu-icon fa fa-street-view"></i><a href="act3.php">Resetar [todos]</a></li>
                             <li><i class="menu-icon fa fa-street-view"></i><a href="restaurarusuarios.php">Restaurar Usuarios</a></li>
                             <li><i class="menu-icon fa fa-street-view"></i><a href="stopuser.php">Pausar/Retomar Usuarios</a></li>
                              <li><i class="menu-icon fa fa-street-view"></i><a href="banirdispositivo.php">Banir Dispositivo</a></li>
                              <li><i class="menu-icon fa fa-street-view"></i><a href="verdispositivo.php">Ver Dispositivos Banidos</a></li>
                              
                        </ul>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Vendedores</a>
                        <ul class="sub-menu children dropdown-menu">
                             <li><i class="menu-icon fa fa-users"></i><a href="vervendedores.php">Ver Vendedores</a></li>
                            <li><i class="menu-icon fa fa-users"></i><a href="registrarvendedores.php">Registar Vendedores</a></li>
                            <li><i class="menu-icon fa fa-users"></i><a href="removervendedores.php">Remover Vendedores</a></li>
                             <li><i class="menu-icon fa fa-users"></i><a href="editarvendedores.php">Editar Vendedores</a></li>
                              <li><i class="menu-icon fa fa-users"></i><a href="creditos.php">Adicionar Creditos</a></li>
                        </ul>
                    </li>

                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Dados</a>
                        <ul class="sub-menu children dropdown-menu">
                             <li><i class="menu-icon fa fa-bar-chart"></i><a href="logusers.txt">Log de Cadastros</a></li>
                            <li><i class="menu-icon fa fa-bar-chart"></i><a href="logsite.txt">Log de Logins do Site</a></li>
                            <li><i class="menu-icon fa fa-bar-chart"></i><a href="logapk.txt">Log de Logins do APK</a></li>
                            
                        </ul>
                    </li>


                    <li class="menu-title">Outras Ações</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-plus-square"></i>Mais</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-info"></i><a href="dadosgerais.php">Dados / Configurações</a></li>
                              <li><i class="menu-icon fa fa-bar-chart"></i><a href="act5.php">Limpar Logs</a></li>
                             <li><i class="menu-icon fa fa-sign-in"></i><a href="logout.php">Log Out</a></li>
                    
                        </ul>
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
                        <div class="card-header">Registro de Vendedores</div>
                        <div class="card-body card-block">
                            <form action="#" method="post" class="">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                        <input type="text" id="username" name="username" placeholder="Usuario" class="form-control" data-required="true" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                        <input type="password" id="password" name="password" placeholder="Senha" class="form-control" data-required="true" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                        <input type="number" id="creditos" name="creditos" placeholder="Creditos" class="form-control" data-required="true" required>
                                    </div>
                                </div>
                                
                                <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm" name="action">Registrar</button></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

<?php  if(isset($_POST['action'])) {

            

            // coletando dados do formulario:

            $Username = $_POST['username'];
            $Senha = $_POST['password'];
            $pass = md5($Senha);
            $Creditos = $_POST['creditos'];
            $StartDate= date('Y-m-d H:i');

            $sqla = "SELECT $static FROM $tabela3 WHERE $static = '$Username'";
        $resultadoa = mysqli_query($conn, $sqla); 

        if(mysqli_num_rows($resultadoa) > 0) {
                    echo "<b>Usuario ja existe";
                    die();
                }

                 $update = "INSERT INTO $tabela3 (`$static`, `senha`, `creditos`) VALUES ('$Username', '$pass', '$Creditos')";
                
$onupdate = mysqli_query($conn,$update);

            // escrevendo no ilogs.txt

$content = $Username."\n";
$namefile = 'ilogs.txt';
$filee = fopen($namefile, 'a');
fwrite($filee, $content);
fclose($filee);

$namees = 'logusers.txt';
$text = "$StartDate - O Vendedor: $Username foi registrado por $name\n";
$file = fopen($namees, 'a');
fwrite($file, $text);
fclose($file);

?>
<script type="text/javascript">
    alert("Registrado!");
    window.location.href='index.php';
</script>
<?php

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
