<?php include('bd.php'); ?>

<?php
$objConexion=new Conexion();
$establecimientos2=$objConexion->Consultar("SELECT * FROM `establecimientos`");

if(isset($_GET['borrar'])){
    $objConexion=new Conexion();
    $sql="DELETE FROM `establecimientos` WHERE `establecimientos`.`idEstablecimiento` = ".$_GET['borrar'];
    $objConexion->ejecutar($sql);
}

if($_POST){
    $accion=$_POST['accion'];
    $idEstablecimiento=$_POST['idEstablecimiento'];
    $tipoE=$_POST['tipoE'];
    $establecimiento=$_POST['establecimiento'];
    $nombreP=$_POST['nombreP'];
    $rfcP=$_POST['rfcP'];
    $curpP=$_POST['curpP'];
    $direccionP=$_POST['direccionP'];
    $coloniaP=$_POST['coloniaP'];
    $delegacionP=$_POST['delegacionP'];
    $localidadP=$_POST['localidadP'];
    $codigoP=$_POST['codigoP'];
    $entidadP=$_POST['entidadP'];
    $entreP=$_POST['entreP'];
    $telefonoP=$_POST['telefonoP'];
    $correoP=$_POST['correoP'];
    $nombreE=$_POST['nombreE'];
    $rfcE=$_POST['rfcE'];
    $direccionE=$_POST['direccionE'];
    $coloniaE=$_POST['coloniaE'];
    $delegacionE=$_POST['delegacionE'];
    $localidadE=$_POST['localidadE'];
    $codigoE=$_POST['codigoE'];
    $entidadE=$_POST['entidadE'];
    $entreE=$_POST['entreE'];
    $telefonoE=$_POST['telefonoE'];
    $correoE=$_POST['correoE'];
    $horarioE=$_POST['horarioE'];
    $fechaE=$_POST['fechaE'];
    $nombreR=$_POST['nombreR'];
    $curpR=$_POST['curpR'];
    $correoR=$_POST['correoR'];

    switch($accion){
        case 'insertar':
            $objConexion=new Conexion();
            $sql="INSERT INTO `establecimientos` (`idEstablecimiento`, `tipoE`, `establecimiento`, `nombreP`, `rfcP`, `curpP`, `direccionP`, `coloniaP`, `delegacionP`,`localidadP`,`codigoP`,`entidadP`,`entreP`,`telefonoP`,`correoP`,`nombreE`,`rfcE`,`direccionE`,`coloniaE`,`delegacionE`,`localidadE`,`codigoE`,`entidadE`,`entreE`,`telefonoE`,`correoE`,`horarioE`,`fechaE`,`nombreR`,`curpR`,`correoR`) VALUES (NULL, '$tipoE', '$establecimiento', '$nombreP', '$rfcP', '$curpP', '$direccionP', '$coloniaP', '$delegacionP','$localidadP','$codigoP','$entidadP','$entreP','$telefonoP','$correoP','$nombreE','$rfcE','$direccionE','$coloniaE','$delegacionE','$localidadE','$codigoE','$entidadE','$entreE','$telefonoE','$correoE','$horarioE','$fechaE','$nombreR','$curpR','$correoR');";
            $objConexion->ejecutar($sql);
        break;
        case 'modificar':
            $objConexion=new Conexion();
            $sql="UPDATE `establecimientos` SET `tipoE`='$tipoE', `establecimiento` = '$establecimiento', `nombreP` = '$nombreP', `rfcP` = '$rfcP', `curpP` = '$curpP', `direccionP` = '$direccionP', `coloniaP`='$coloniaP', `delegacionP` = '$delegacionP',`localidadP` = '$localidadP',`codigoP`='$codigoP',`entidadP` = '$entidadP',`entreP` = '$entreP',`telefonoP` = '$telefonoP',`correoP` = '$correoP',`nombreE`='$nombreE',`rfcE`='$rfcE',`direccionE` = '$direccionE',`coloniaE` = '$coloniaE',`delegacionE` = '$delegacionE',`localidadE` = '$localidadE',`codigoE` = '$codigoE',`entidadE`='$entidadE',`entreE`='$entreE',`telefonoE`='$telefonoE',`correoE`= '$correoE',`horarioE`='$horarioE',`fechaE`='$fechaE',`nombreR` = '$nombreR',`curpR` = '$curpR',`correoR` = '$correoR' WHERE `establecimientos`.`idEstablecimiento` = $idEstablecimiento;";
            $objConexion->ejecutar($sql);
        break;
        case 'eliminar':
            $objConexion=new Conexion();
            $sql="DELETE FROM `establecimientos` WHERE `establecimientos`.`idEstablecimiento` = $idEstablecimiento";
            $objConexion->ejecutar($sql);
        break;

    }
   

    
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Inicio - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/estiloCampos.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">CRUMBC</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Configuracion</a></li>
                        <li><a class="dropdown-item" href="#!">Actividad</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="login.html">Cerrar Sesion</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Inicio</div>
                                <a class="nav-link" href="index.html">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Perfil
                                </a>
                            <div class="sb-sidenav-menu-heading">Modulos</div>
                               
                                    <a class="nav-link" href="profesionalPrehospitalario.php">Profesional Prehospitalario</a>
                                    <a class="nav-link" href="establecimientos.php">Establecimientos</a>
                               
                            </div>
                        </div>
                   
                    <div class="sb-sidenav-footer">
                        <div class="small">Inicio de Sesion como:</div>
                        Profesional Prehospitalario
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <?php //Ventana Modal ?>
                    <div class="container">
                        <h1 class="mt-4">Establecimientos</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                            <li class="breadcrumb-item active">Establecimientos</li>
                        </ol>
                        <!-- Button trigger modal -->
<a href="registroE.php" class="btn btn-primary">
  Registrar establecimiento
</a>


<?php//Tabla Bootstrap?>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Panel  de establecimientos
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                    <th>Id</th>
                                    <th>Tipo de establecimiento</th>
                                    <th>Establecimiento</th>
                                    <th>Propietario</th>
                                    <th>RFC</th>
                                    <th>CURP</th>
                                    <th>Dirección</th>
                                    <th>Colonia</th>
                                    <th>Delegación</th>
                                    <th>Localidad</th>
                                    <th>Código Postal</th>
                                    <th>Entidad Federativa</th>
                                    <th>Entre Calle y Calle</th>
                                    <th>Teléfono</th>
                                    <th>Correo electrónico</th>
                                    <th>Establecimiento</th>
                                    <th>RFC</th>
                                    <th>Dirección</th>
                                    <th>Colonia</th>
                                    <th>Delegación</th>
                                    <th>Localidad</th>
                                    <th>Código Postal</th>
                                    <th>Entidad Federativa</th>
                                    <th>Entre Calle y Calle</th>
                                    <th>Telefono</th>
                                    <th>Correo electrónico</th>
                                    <th>Horario</th>
                                    <th>Inicio de Actividades</th>
                                    <th>Representante Legal</th>
                                    <th>CURP</th>
                                    <th>Correo electrónico</th>
                                    <th>Editar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($establecimientos2 as $establecimientos){ ?>
                                        <tr>
                                            <th scope="row"><?php echo $establecimientos['idEstablecimiento'] ?></th>
                                            <td><?php echo $establecimientos['tipoE'] ?></td>
                                            <td><?php echo $establecimientos['establecimiento'] ?></td>
                                            <td><?php echo $establecimientos['nombreP'] ?></td>
                                            <td><?php echo $establecimientos['rfcP'] ?></td>
                                            <td><?php echo $establecimientos['curpP'] ?></td>
                                            <td><?php echo $establecimientos['direccionP'] ?></td>
                                            <td><?php echo $establecimientos['coloniaP'] ?></td>
                                            <td><?php echo $establecimientos['delegacionP'] ?></td>
                                            <td><?php echo $establecimientos['localidadP'] ?></td>
                                            <td><?php echo $establecimientos['codigoP'] ?></td>
                                            <td><?php echo $establecimientos['entidadP'] ?></td>
                                            <td><?php echo $establecimientos['entreP'] ?></td>
                                            <td><?php echo $establecimientos['telefonoP'] ?></td>
                                            <td><?php echo $establecimientos['correoP'] ?></td>
                                            <td><?php echo $establecimientos['nombreE'] ?></td>
                                            <td><?php echo $establecimientos['rfcE'] ?></td>
                                            <td><?php echo $establecimientos['direccionE'] ?></td>
                                            <td><?php echo $establecimientos['coloniaE'] ?></td>
                                            <td><?php echo $establecimientos['delegacionE'] ?></td>
                                            <td><?php echo $establecimientos['localidadE'] ?></td>
                                            <td><?php echo $establecimientos['codigoE'] ?></td>
                                            <td><?php echo $establecimientos['entidadE'] ?></td>
                                            <td><?php echo $establecimientos['entreE'] ?></td>
                                            <td><?php echo $establecimientos['telefonoE'] ?></td>
                                            <td><?php echo $establecimientos['correoE'] ?></td>
                                            <td><?php echo $establecimientos['horarioE'] ?></td>
                                            <td><?php echo $establecimientos['fechaE'] ?></td>
                                            <td><?php echo $establecimientos['nombreR'] ?></td>
                                            <td><?php echo $establecimientos['curpR'] ?></td>
                                            <td><?php echo $establecimientos['correoR'] ?></td>
                                            <td>  
                                            <a href="modificacionE.php?editar=<?php echo base64_encode($establecimientos['idEstablecimiento']); ?>&tipoE=<?php echo base64_encode($establecimientos['tipoE']) ?>&establecimiento=<?php echo base64_encode($establecimientos['establecimiento']) ?>&nombreP=<?php echo base64_encode($establecimientos['nombreP'])?>&rfcP=<?php echo base64_encode($establecimientos['rfcP'])?>&curpP=<?php echo base64_encode($establecimientos['curpP'])?>&direccionP=<?php echo base64_encode($establecimientos['direccionP'])?>&coloniaP=<?php echo base64_encode($establecimientos['coloniaP'])?>&delegacionP=<?php echo base64_encode($establecimientos['delegacionP'])?>&localidadP=<?php echo base64_encode($establecimientos['localidadP'])?>&codigoP=<?php echo base64_encode($establecimientos['codigoP'])?>&entidadP=<?php echo base64_encode($establecimientos['entidadP'])?>&entreP=<?php echo base64_encode($establecimientos['entreP'])?>&telefonoP=<?php echo base64_encode($establecimientos['telefonoP'])?>&correoP=<?php echo base64_encode($establecimientos['correoP'])?>&nombreE=<?php echo base64_encode($establecimientos['nombreE'])?>&rfcE=<?php echo base64_encode($establecimientos['rfcE'])?>&direccionE=<?php echo base64_encode($establecimientos['direccionE'])?>&coloniaE=<?php echo base64_encode($establecimientos['coloniaE'])?>&delegacionE=<?php echo base64_encode($establecimientos['delegacionE'])?>&localidadE=<?php echo base64_encode($establecimientos['localidadE'])?>&codigoE=<?php echo base64_encode($establecimientos['codigoE'])?>&entidadE=<?php echo base64_encode($establecimientos['entidadE'])?>&entreE=<?php echo base64_encode($establecimientos['entreE'])?>&telefonoE=<?php echo base64_encode($establecimientos['telefonoE'])?>&correoE=<?php echo base64_encode($establecimientos['correoE'])?>&horarioE=<?php echo base64_encode($establecimientos['horarioE'])?>&fechaE=<?php echo base64_encode($establecimientos['fechaE'])?>&nombreR=<?php echo base64_encode($establecimientos['nombreR'])?>&curpR=<?php echo base64_encode($establecimientos['curpR'])?>&correoR=<?php echo base64_encode($establecimientos['correoR'])?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                            <a href="eliminacionE.php?borrar=<?php echo base64_encode($establecimientos['idEstablecimiento']); ?>&establecimiento=<?php echo base64_encode($establecimientos['establecimiento']) ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
                                  <?php } ?>
                                        </tr>
                                </tbody>
                            </table>    
                                                      
        </main>
            <br>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; 2023</div>
                        <div>
                            <a href="#">&middot; Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        </div>
                    
    </body>
</html>