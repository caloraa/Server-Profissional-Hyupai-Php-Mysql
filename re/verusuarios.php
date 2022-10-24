<?php 
    include 'data.php';
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ver Usuarios</title>
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
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
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

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Usuarios Registrados:</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Usuario</th>
                                            <th>Senha</th>
                                            <th>Vendedor</th>
                                            <th>Devices</th>
                                            <th>Registro</th>
                                            <th>Validade</th>
                                            <th>Dias Restantes</th>
                                            <th>Status</th>
                                             <th>Resetar</th>
                                              <th>Apagar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
$fetchqry = "SELECT * FROM `$tabela` WHERE `Vendedor` = '$name'";
$result=mysqli_query($conn,$fetchqry);
$num=mysqli_num_rows($result);
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { 
    $devices = $row['devices'];?>
                                        <tr>
                                           <td><?php echo $row['Username'];?></td>
                                                    <td><?php echo $row['Password'];?></td>
                                                    <td><?php echo $row['Vendedor'];?></td>
                                            <td><?php if ($row['UID'] == NULL && $row['UID2'] == NULL) {
                                                 echo "Devices 0/$devices";
                                                 } else if ($row['UID'] != NULL && $row['UID2'] == NULL){
                                                   
                                                   echo "1/$devices";
                                                     
                                                 } else if ($row['UID'] == NULL && $row['UID2'] != NULL){
                                                   
                                                   echo "1/$devices"; 
                                               } else if ($row['UID'] != NULL && $row['UID2'] != NULL){
                                                   
                                                   echo "2/$devices"; } ?>
                                                     </td>
                                             <td><?php if($row['StartDate'] == "0000-00-00 00:00:00") {echo "Não Iniciado"; } else { echo $row['StartDate'];}?></td>
                                                    <td><?php if($row['EndDate'] == "0000-00-00 00:00:00") {echo "Não Iniciado"; } else { echo $row['EndDate'];}?></td>
                                                     <td> <?php if ($row['StartDate'] == "0000-00-00 00:00:00") {echo "Não Iniciado";} else {
$database = date_create($row['EndDate']);
$datadehoje = date_create();
$resultado = date_diff($database, $datadehoje);

echo date_interval_format($resultado, '%a');

        }?></td>
                                             <td>
                                                        <?php if(strtotime(date('Y/m/d')) < strtotime($row['EndDate']) && $row['status'] != "paused") { $username = $row['Username'];$update = "UPDATE $tabela SET `status` = 'on' WHERE `Username` = '$username'";
                                                        $rupdate=mysqli_query($conn,$update);} else { 
                                                            $username = $row['Username'];
                                                            $update = "UPDATE `$tabela` SET `status` = 'off' WHERE `Username` = '$username";$rupdate=mysqli_query($conn,$update);
                                                    } if($row['status'] == "on") {
                                                        echo "<span class='badge badge-success'>Online</span>";
                                                    } else if ($row['status'] == "off") {
                                                        echo "<span class='badge badge-danger'>Offline</span>";
                                                    } else if ($row['status'] == "paused") {
                                                        echo "<span class='badge badge-warning'>Pendente</span>";
                                                    }?> </span>
                                                    </td>
                                            <td><?php echo "<a href='act1.php?no=".$row['Username']."'><button type='button' class='btn btn-danger'>Resetar</button></a>";?></td>
                                             <td><?php echo "<a href='act2.php?no=".$row['Username']."'><button type='button' class='btn btn-danger'>Apagar</button></a>";?></td>
                                        </tr>
                                        <?php } ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
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
    <script src="assets/assets/js/main.js"></script>


    <script src="assets/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/assets/js/init/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>


</body>
</html>
