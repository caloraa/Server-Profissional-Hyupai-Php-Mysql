<?php 
    include 'data.php';
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Configurações do Servidor</title>
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
<style>

.atm {
    font-size: 18px;
    margin-right: 15px;
}

.atm2 {
    font-size: 18px;
    color: red;
    margin-right: 15px;
}


.atmx {
    color:red;
    font-size: 22px;
    margin-right: 15px;
}
.onoffswitch {
    position: relative; width: 86px;
    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}
.onoffswitch-checkbox {
    position: absolute;
    opacity: 0;
    pointer-events: none;
}
.onoffswitch-label {
    display: block; overflow: hidden; cursor: pointer;
    border: 2px solid #999999; border-radius: 50px;
}
.onoffswitch-inner {
    display: block; width: 200%; margin-left: -100%;
    transition: margin 0.3s ease-in 0s;
}
.onoffswitch-inner:before, .onoffswitch-inner:after {
    display: block; float: left; width: 50%; height: 24px; padding: 0; line-height: 24px;
    font-size: 18px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
    box-sizing: border-box;
}
.onoffswitch-inner:before {
    content: "ON";
    padding-left: 12px;
    background-color: #34A7C1; color: #FFFFFF;
}
.onoffswitch-inner:after {
    content: "OFF";
    padding-right: 12px;
    background-color: #EEEEEE; color: #999999;
    text-align: right;
}
.onoffswitch-switch {
    display: block; width: 30px; margin-top: -0px; margin-left: -0px; margin-right: 1px; margin-bottom: 10px;
    background: #FFFFFF;
    position: absolute; top: 0; bottom: 0;
    right: 58px;
    border: 2px solid #999999; border-radius: 50px;
    transition: all 0.3s ease-in 0s; 
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
    margin-left: 0;
}
.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
    right: 0px; 
}
</style>
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
                        <div class="card-header"><b class = "atmx">Configurações do Servidor</b></div>
                        <div class="card-body card-block">
                            <form method="post" class="">
                                <div class="form-group">
                                    <div class="input-group">
                                      
                                       <b class="atm">Status do Servidor -></b> <div class="onoffswitch">
    <input type="checkbox" name="status" class="onoffswitch-checkbox" id="myonoffswitch" tabindex="0" <?php if($status == "Ativado") { echo "checked"; } ?>>
    <label class="onoffswitch-label" for="myonoffswitch">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
    </label>
</div>                                    
</div>
</div>
                <div class="form-group">
                  <div class="input-group">
                                      
    <b class="atm">Ant Vpn -></b> <div class="onoffswitch">
    <input type="checkbox" name="antvpn" class="onoffswitch-checkbox" id="myonoffswitch2" tabindex="0" <?php if($antvpn == "Ativado") { echo "checked"; } ?>>
    <label class="onoffswitch-label" for="myonoffswitch2">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
    </label>
</div>                                    
</div>
</div>

    <div class="form-group">
    <div class="input-group">

    <b class="atm">Validade começa apos o primeiro login</b>

    <div class="onoffswitch">
    <input type="checkbox" name="flogin" class="onoffswitch-checkbox" id="myonoffswitch3" tabindex="0" <?php if($flogin == "Ativado") { echo "checked"; } ?>>
    <label class="onoffswitch-label" for="myonoffswitch3">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
    </label>
</div>
</div>
</div>

 <div class="form-group">
    <div class="input-group">

    <b class="atm">Vendedores podem adicionar dias -></b>

    <div class="onoffswitch">
    <input type="checkbox" name="dias" class="onoffswitch-checkbox" id="myonoffswitch4" tabindex="0" <?php if($vendedorespodemadicionardias == "Ativado") { echo "checked"; } ?>>
    <label class="onoffswitch-label" for="myonoffswitch4">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
    </label>
</div>
</div>
</div>

 <div class="form-group">
    <div class="input-group">

    <b class="atm">Vendedores podem pausar usuarios -></b>

    <div class="onoffswitch">
    <input type="checkbox" name="pausar" class="onoffswitch-checkbox" id="myonoffswitch5" tabindex="0" <?php if($vendedorespodempausar == "Ativado") { echo "checked"; } ?>>
    <label class="onoffswitch-label" for="myonoffswitch5">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
    </label>
</div>
</div>
</div><br>
<b class="atm2">Configuração dos Slots de Dias:</b><br><br>

    <div class="form-group">
     <div class="input-group">
                                    
    <input type="number" id="password" value="<?php echo $slot1; ?>"name="slot1" placeholder="Slot 1" min="1" max="999" class="form-control" data-required="true" required>
         </div>
        </div>

        <div class="form-group">
     <div class="input-group">
                                    
    <input type="number" id="password" name="slot2" min="1" max="999"placeholder="Slot 2" class="form-control" value="<?php echo $slot2; ?>"data-required="true" required>
         </div>
        </div>

        <div class="form-group">
     <div class="input-group">
                                    
    <input type="number" id="password" name="slot3" min="1" max="999"placeholder="Slot 3" class="form-control" value="<?php echo $slot3; ?>"data-required="true" required>
         </div>
        </div>

        <div class="form-group">
     <div class="input-group">
                                    
    <input type="number" id="password" name="slot4" min="1" max="999"placeholder="Slot 4" class="form-control" value="<?php echo $slot4; ?>" data-required="true" required>
         </div>
        </div>

        <b class="atm2">Configuração dos Slots de Creditos:</b><br><br>

    <div class="form-group">
     <div class="input-group">
                                    
    <input type="number" id="password" name="valor1" placeholder="Valor 1" min="1" max="99999" class="form-control" value="<?php echo $valor1; ?>"data-required="true" required>
         </div>
        </div>

        <div class="form-group">
     <div class="input-group">
                                    
    <input type="number" id="password" name="valor2" min="1" max="99999"placeholder="Valor 2" class="form-control" value="<?php echo $valor2; ?>"data-required="true" required>
         </div>
        </div>

        <div class="form-group">
     <div class="input-group">
                                    
    <input type="number" id="password" name="valor3" min="1" max="99999"placeholder="Valor 3" class="form-control" value="<?php echo $valor3; ?>"data-required="true" required>
         </div>
        </div>

        <div class="form-group">
     <div class="input-group">
                                    
    <input type="number" id="password" value="<?php echo $valor4; ?>"name="valor4" min="1" max="99999"placeholder="Valor 4" class="form-control" data-required="true" required>
         </div>
        </div>

 <b class="atm2">Configuração da mensagem de manutenção:</b><br><br>

                                 <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                        <input type="text" id="validade" name="message" placeholder="Mensagem" class="form-control" data-required="true"  value="<?php echo $message; ?>" data-error-message="Insira a mensagem"  maxlength="100" required>
                                    </div>
                                </div>
                                
                                <div class="form-actions form-group"><button type="submit" class="btn btn-success btn-sm" name ="action">Editar</button></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

          <?php  if(isset($_POST['action'])) {

            // coletando dados do formulario:

            $_POST['status'] = ( isset($_POST['status']) ) ? "Ativado" : "Desativado";
            $_POST['antvpn'] = ( isset($_POST['antvpn']) ) ? "Ativado" : "Desativado";
            $_POST['flogin'] = ( isset($_POST['flogin']) ) ? "Ativado" : "Desativado";
            $_POST['dias'] = ( isset($_POST['dias']) ) ? "Ativado" : "Desativado";
            $_POST['pausar'] = ( isset($_POST['pausar']) ) ? "Ativado" : "Desativado";

            $isstatus = $_POST['status'];
            $isantvpn = $_POST['antvpn'];
            $isflogin = $_POST['flogin'];
            $isdias = $_POST['dias'];
            $ispausar = $_POST['pausar'];

            $slott1 = $_POST['slot1'];
            $slott2 = $_POST['slot2'];
            $slott3 = $_POST['slot3'];
            $slott4 = $_POST['slot4'];

            $valorr1 = $_POST['valor1'];
            $valorr2 = $_POST['valor2'];
            $valorr3 = $_POST['valor3'];
            $valorr4 = $_POST['valor4'];

            $messagee = $_POST['message'];

     $update = "UPDATE `$tabela2` SET `status` = '$isstatus', `slot1` = '$slott1', `slot2` = '$slott2', `slot3` = '$slott3', `slot4` = '$slott4', `valor1` = '$valorr1', `valor2` = '$valorr2', `valor3` = '$valorr3', `valor4` = '$valorr4', `antvpn` = '$isantvpn', `flogin` = '$isflogin', `vendedorespodemadicionardias` = '$isdias', `vendedorespodempausar` = '$ispausar', `message` = '$messagee'  WHERE `id` = '2'";
        $onupdate = mysqli_query($conn,$update);

          ?>
<script type="text/javascript">
    alert("Configurações atualizadas");
    window.location.href='dadosgerais.php';
</script> <?php
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
