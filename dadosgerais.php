<?php 
    include 'data.php';
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dados Gerais / Configurações</title>
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
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

   <style>
.neon-bt {

background: #03e9f4;



  position: relative;

  display: inline-block;

  padding: 10px 20px;

  color: #ff0000;

  font-size: 16px;

  text-decoration: none;

  text-transform: uppercase;

  overflow: hidden;

  transition: 0.2s;

  margin-top: 40px;

  letter-spacing: 4px

}

 

.neon-bt:hover {

  background: #03e9f4;

  color: #fff;

  border-radius: 5px;

  box-shadow: 0 0 5px #03e9f4,

              0 0 25px #03e9f4,

              0 0 50px #03e9f4,

              0 0 100px #03e9f4;

}

 

 

/*animação do span para criar linhas*/

 

 

.neon-bt span {

  position: absolute;
  display: block;

}

 

 

/*span 1*/

.neon-bt span:nth-child(1) {

  top: 0;

  left: -100%;

  width: 100%;

  height: 2px;

  background: linear-gradient(90deg, transparent, #03e9f4);

  animation: btn-anim1 1s linear infinite;

}

 

@keyframes btn-anim1 {

  0% {

    left: -100%;

  }

  50%,100% {

    left: 100%;

  }

}

 

/*span 2*/

.neon-bt span:nth-child(2) {

  top: -100%;

  right: 0;

  width: 2px;

  height: 100%;

  background: linear-gradient(180deg, transparent, #03e9f4);

  animation: btn-anim2 1s linear infinite;

  animation-delay: .25s

}

 

@keyframes btn-anim2 {

  0% {

    top: -100%;

  }

  50%,100% {

    top: 100%;

  }

}

 

 

/*span 3*/

 

.neon-bt span:nth-child(3) {

  bottom: 0;

  right: -100%;

  width: 100%;

  height: 2px;

  background: linear-gradient(270deg, transparent, #03e9f4);

  animation: btn-anim3 1s linear infinite;

  animation-delay: .5s

}

 

@keyframes btn-anim3 {

  0% {

    right: -100%;

  }

  50%,100% {

    right: 100%;

  }

}

 

/*span 4*/

 

.neon-bt span:nth-child(4) {

  bottom: -100%;

  left: 0;

  width: 2px;

  height: 100%;

  background: linear-gradient(360deg, transparent, #03e9f4);

  animation: btn-anim4 1s linear infinite;

  animation-delay: .75s

}

 

@keyframes btn-anim4 {

  0% {

    bottom: -100%;

  }

  50%,100% {

    bottom: 100%;

  }

}
.switch {
  position: relative;
  display: inline-block;
  width: 40px;
  height: 24px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 15px;
  width: 15px;
  left: 1px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}

   hx {
color: red;
   }

   hy {
color: blue;
font-size: 20px;
font-style: bold;
   }

   hz {
color: green;
font-size: 20px;
font-style: bold;
   }

    hv {
color: red;
font-size: 20px;
font-style: bold;
   }

    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
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
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
              <!-- Widgets  -->
                <div class="row">
                   

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-cart"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php if ((strtotime(date("Y/m/d")) < strtotime($garantia))) { echo $dias; } else { echo "0"; } ?></span></div>
                                            <div class="stat-heading">dias de garantia restante</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-browser"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="text">Plano <?php echo $plano; ?></span></div>
                                            <div class="stat-heading"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $numerodeusuarios; ?></span></div>
                                            <div class="stat-heading">Usuarios Cadastrados</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-4">
                                        <i class="pe-7s-users"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count"><?php echo $numerodevendedores; ?></span></div>
                                            <div class="stat-heading">Vendedores Cadastrados</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /Widgets -->
                
                <div class="clearfix"></div>
                <!-- Orders -->
                <div class="orders">
                    <div class="card-body">
                        <?php if ($tokensvalid) {
                            echo "<div class='sufee-alert alert with-close alert-success alert-dismissible fade show'>
                                        <span class='badge badge-pill badge-success'>Sucesso!</span>
                                        Todas as informações sobre os usuarios foram carregadas!
                                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>";
                        } else {
echo "<div class='sufee-alert alert with-close alert-danger alert-dismissible fade show'>
                                        <span class='badge badge-pill badge-danger'>Falha!</span>
                                        Não foi possivel verificar seus dados!
                                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>";
                        } ?>
                                    
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="box-title">Sobre Seu Painel -></h4>
                                </div>
                                 <br>
                            <div class="card-header bg-dark">
                                <strong class="card-title text-light">Nome do Painel:<hx> <?php if ($nomedopainel == NULL) {
                                    echo "Desconhecido"; } else {
                                        echo $nomedopainel; } ?></hx></strong>
                            </div>

                             
                       <br>
                               
                            <div class="card-header bg-dark">
                                <strong class="card-title text-light">Nome de Usuario do Painel:<hx> <?php echo $name; ?></hx></strong>
                            </div>
                        
                    <br>
                            <div class="card-header bg-dark">
                                <strong class="card-title text-light">Vendedor:<hx> Cristiano</hx></strong>
                            </div>
                             
                       <br>
                         
                            <div class="card-header bg-dark">
                                <strong class="card-title text-light">Data de Compra:<hx> <?php if($compra == NULL || $compra == "") {
                                    echo "Desconhecida"; } else {
                                        echo $compra; }?></hx></strong>
                            </div>
                             
                        
                        <br>
                            <div class="card-header bg-dark">
                                <strong class="card-title text-light">Garantia restante:<hx> <?php if ((strtotime(date("Y/m/d")) < strtotime($garantia))) { echo $dias." Dias"; } else { echo "0"; } ?></hx></strong>
                            </div>
                             
                              <br>
                            <div class="card-header bg-dark">
                                <strong class="card-title text-light">Plano Adquirido:<hx> Plano <?php echo $plano; ?></hx></strong>
                            </div>
                        
                         <br>
                            <div class="card-header bg-dark">
                                <strong class="card-title text-light">Total de Usuarios Cadastrados:<hx> <?php echo $numerodeusuarios; ?></hx></strong>
                            </div>
                             
                       <br>
                        
                            <div class="card-header bg-dark">
                                <strong class="card-title text-light">Total de Vendedores Cadastrados:<hx> <?php echo $numerodevendedores; ?></hx></strong>
                            </div>
                             
                        
                    
                                </div>
                            </div> <!-- /.card -->
                        </div>  <!-- /.col-lg-8 -->

                        <div class="col-xl-4">
                            <div class="row">
                                <div class="col-lg-6 col-xl-12">
                                    
                                </div>

                                
                            </div>
                        </div> <!-- /.col-md-4 -->
                    </div>

                    <div class="row">
                        <div class="col-xl-8">
                            <br><br>
                             <h3 class="pb-2 display-5">Configurações do Servidor:
                             </h3><br>
                              ◉<hy> Status do Servidor:  </hy><?php if($status == "Ativado") {echo "<hz>Ativado</hz>";} else {echo "<hv>Desativado</hv>";} ?>  </hx><br><br>
                             ◉<hy> AntVPN: [em teste]  </hy><?php if($antvpn == "Ativado") {echo "<hz>Ativado</hz>";} else {echo "<hv>Desativado</hv>";} ?>  </hx><br><br>
                             ◉<hy> Validade começa a contar apos o primeiro login:  </hy><?php if($flogin == "Ativado") {echo "<hz>Ativado</hz>";} else {echo "<hv>Desativado</hv>";} ?>  </hx><br><br>
                              ◉<hy> Vendedores podem adicionar dias aos usuarios:  </hy><?php if($vendedorespodemadicionardias == "Ativado") {echo "<hz>Ativado</hz>";} else {echo "<hv>Desativado</hv>";} ?>  </hx><br><br>
                              ◉<hy> Vendedores podem pausar usuarios:  </hy><?php if($vendedorespodempausar == "Ativado") {echo "<hz>Ativado</hz>";} else {echo "<hv>Desativado</hv>";} ?>  </hx><br><br>
                              ◉<hy> Slots de tempo dos vendedores:  </hy><?php echo "<br><hv>Slot 1:</hv> <hz>$slot1 Dias</hz><br>
                              <hv>Slot 2:</hv> <hz>$slot2 Dias</hz><br>
                              <hv>Slot 3:</hv> <hz>$slot3 Dias</hz><br>
                              <hv>Slot 4:</hv> <hz>$slot4 Dias</hz><br>";?>  </hx><br><br>
                              ◉<hy> Creditos gastos ao criar logins:  </hy><?php echo"<br><hv>1 Dias:</hv> <hz>$valor1 Creditos</hz><br>
                            
                              <hv>$slot2 Dias:</hv> <hz>$valor3 Creditos</hz><br>
                              <hv>$slot3 Dias:</hv> <hz>$valor4 Creditos</hz><br>
                              <hv>$slot4 Dias:</hv> <hz>$valor4 Creditos</hz><br>";?>  </hx><br><br>

                              <a class="neon-bt" href="editarconfigs.php">

      <span></span>

      <span></span>

      <span></span>

      <span></span>

      Editar

    </a>  

    <a class="neon-bt" href="act7.php">

      <span></span>

      <span></span>

      <span></span>

      <span></span>

      Ativar/Desativar Servidor

    </a>


                        </div>
                    </div>

                 <div class="row">
                        <div class="col-xl-8">
                            <br><br>
                              <h3 class="pb-2 display-5">Para que server a opção de Restaurar o Usuario?</h3><h6 class="pb-4 display-5">
                             Resposta: Com essa função você pode "reiniciar o usuario com as configurações originais", ou seja reestabelecer sua validade anterior sem necessidade de criar outro usuario de 30 dias por exemplo.</h6>
                             <br><br>
                              <h3 class="pb-2 display-5">Para que server a opção de Pausar/Retomar o Usuario?</h3><h6 class="pb-4 display-5">
                             Resposta: Com essa função você pode pausar a validade do usuario, ou seja se ele tiver 6 dias restantes, esse numero fica pausado ate que ele seja retomado</h6>
                             <br><br>
                             <h3 class="pb-2 display-5">O que são os logs e o que eles representam?<br><h3><h6 class="pb-4 display-5">
                             Resposta: São os dados,movimentos do seu site em forma de texto.</h6>
                        </div>
                    </div>
                   
                        <div class="col-xl-4">
                            <div class="row">
                                <div class="col-lg-6 col-xl-12">
                                    
                                </div>

                                
                            </div>
                        </div> <!-- /.col-md-4 -->
                    </div>
                </div>
                <!-- /.orders -->
               
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
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
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="assets/js/init/fullcalendar-init.js"></script>

    <!--Local Stuff-->
    <script>
        jQuery(document).ready(function($) {
            "use strict";

           

            $.plot('#flotPie1', piedata, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.65,
                        label: {
                            show: true,
                            radius: 2/3,
                            threshold: 1
                        },
                        stroke: {
                            width: 0
                        }
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }
            });
            // Pie chart flotPie1  End
            // cellPaiChart
            var cellPaiChart = [
                { label: "Direct Sell", data: [[1,65]], color: '#5b83de'},
                { label: "Channel Sell", data: [[1,35]], color: '#00bfa5'}
            ];
            $.plot('#cellPaiChart', cellPaiChart, {
                series: {
                    pie: {
                        show: true,
                        stroke: {
                            width: 0
                        }
                    }
                },
                legend: {
                    show: false
                },grid: {
                    hoverable: true,
                    clickable: true
                }

            });
            // cellPaiChart End
            // Line Chart  #flotLine5
            var newCust = [[0, 3], [1, 5], [2,4], [3, 7], [4, 9], [5, 3], [6, 6], [7, 4], [8, 10]];

            var plot = $.plot($('#flotLine5'),[{
                data: newCust,
                label: 'New Data Flow',
                color: '#fff'
            }],
            {
                series: {
                    lines: {
                        show: true,
                        lineColor: '#fff',
                        lineWidth: 2
                    },
                    points: {
                        show: true,
                        fill: true,
                        fillColor: "#ffffff",
                        symbol: "circle",
                        radius: 3
                    },
                    shadowSize: 0
                },
                points: {
                    show: true,
                },
                legend: {
                    show: false
                },
                grid: {
                    show: false
                }
            });
            // Line Chart  #flotLine5 End
            // Traffic Chart using chartist
            if ($('#traffic-chart').length) {
                var chart = new Chartist.Line('#traffic-chart', {
                  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                  series: [
                  [0, 18000, 35000,  25000,  22000,  0],
                  [0, 33000, 15000,  20000,  15000,  300],
                  [0, 15000, 28000,  15000,  30000,  5000]
                  ]
              }, {
                  low: 0,
                  showArea: true,
                  showLine: false,
                  showPoint: false,
                  fullWidth: true,
                  axisX: {
                    showGrid: true
                }
            });

                chart.on('draw', function(data) {
                    if(data.type === 'line' || data.type === 'area') {
                        data.element.animate({
                            d: {
                                begin: 2000 * data.index,
                                dur: 2000,
                                from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                                to: data.path.clone().stringify(),
                                easing: Chartist.Svg.Easing.easeOutQuint
                            }
                        });
                    }
                });
            }
            // Traffic Chart using chartist End
            //Traffic chart chart-js
            if ($('#TrafficChart').length) {
                var ctx = document.getElementById( "TrafficChart" );
                ctx.height = 150;
                var myChart = new Chart( ctx, {
                    type: 'line',
                    data: {
                        labels: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul" ],
                        datasets: [
                        {
                            label: "Visit",
                            borderColor: "rgba(4, 73, 203,.09)",
                            borderWidth: "1",
                            backgroundColor: "rgba(4, 73, 203,.5)",
                            data: [ 0, 2900, 5000, 3300, 6000, 3250, 0 ]
                        },
                        {
                            label: "Bounce",
                            borderColor: "rgba(245, 23, 66, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(245, 23, 66,.5)",
                            pointHighlightStroke: "rgba(245, 23, 66,.5)",
                            data: [ 0, 4200, 4500, 1600, 4200, 1500, 4000 ]
                        },
                        {
                            label: "Targeted",
                            borderColor: "rgba(40, 169, 46, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(40, 169, 46, .5)",
                            pointHighlightStroke: "rgba(40, 169, 46,.5)",
                            data: [1000, 5200, 3600, 2600, 4200, 5300, 0 ]
                        }
                        ]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                } );
            }
            //Traffic chart chart-js  End
            // Bar Chart #flotBarChart
            $.plot("#flotBarChart", [{
                data: [[0, 18], [2, 8], [4, 5], [6, 13],[8,5], [10,7],[12,4], [14,6],[16,15], [18, 9],[20,17], [22,7],[24,4], [26,9],[28,11]],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fillColor: '#ffffff8a'
                }
            }], {
                grid: {
                    show: false
                }
            });
            // Bar Chart #flotBarChart End
        });
    </script>
</body>
</html>
