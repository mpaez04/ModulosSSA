<?php include('bd.php'); ?>

<?php

$objConexion=new Conexion();
$profesionales=$objConexion->Consultar("SELECT * FROM `profesional`");
$apellido=[];

if(isset($_GET['borrar'])){
    $objConexion=new Conexion();
    $sql="DELETE FROM `profesional` WHERE `profesional`.`id` =".$_GET['borrar'];
    $objConexion->ejecutar($sql);
}

if(!empty($_GET['id'])){
  $id=$_GET['id'];
  echo $id;
}

if($_POST){
    $accion=$_POST['accion'];
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $apellidop=$_POST['apellidop'];
    $apellidom=$_POST['apellidom'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $nivelTecnico=$_POST['nivelTecnico'];
    $nivelCertificacion=$_POST['nivelCertificacion'];
    $capacitacion=$_POST['capacitacion'];
    $experiencia=$_POST['experiencia'];
    $municipio=$_POST['municipio'];
    switch($accion){
        case 'insertar':
            $objConexion=new Conexion();
            $sql="INSERT INTO `profesional` (`id`, `nombre`, `apellidoP`, `apellidoM`, `correo`, `telefono`, `nivelTecnico`, `nivelCertificacion`, `capacitacion`, `experiencia`, `municipio`) VALUES (NULL,'$nombre','$apellidop','$apellidom','$correo','$telefono','$nivelTecnico','$nivelCertificacion','$capacitacion','$experiencia','$municipio');";
            $objConexion->ejecutar($sql);
        break;
        case 'modificar':
            //UPDATE `profesional` SET `nombre` = 'Modificado' WHERE `profesional`.`id` = 1;
            $objConexion=new Conexion();
            $sql="UPDATE `profesional` SET `nombre` = '$nombre', `apellidoP` = '$apellidop', `apellidoM` = '$apellidom', `correo` = '$correo', `telefono` = '$telefono', `nivelTecnico`='$nivelTecnico',`nivelCertificacion`='$nivelCertificacion',`capacitacion`='$capacitacion',`experiencia` = '$experiencia' WHERE `profesional`.`id` = $id;";
            $objConexion->ejecutar($sql);
        break;
        case 'eliminar':
            $objConexion=new Conexion();
            //DELETE FROM `profesional` WHERE `profesional`.`id` = 36
            $sql="DELETE FROM `profesional` WHERE `profesional`.`id` = $id";
            $objConexion->ejecutar($sql);
        break;
        case 'buscar':
            $objConexion=new Conexion();
            //$sql="SELECT * FROM `profesional` WHERE `apellidoP`='$buscando'";
            $apellido=$objConexion->Consultar("SELECT * FROM `profesional` WHERE `apellidoP`='$apellidop'");
            //$objConexion->ejecutar($sql);
        break;
        case'eliminarf':
            $objConexion=new Conexion();
            $sql="DELETE FROM 'profesional'";
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
                              
                                    <a class="nav-link" href="profesionalPrehospitalario.html">Profesional Prehospitalario</a>
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
                        <h1 class="mt-4">Profesional Prehospitalario</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
                            <li class="breadcrumb-item active">Profesional Prehospitalario</li>
                        </ol>
                        <!-- Button trigger modal -->
<a href="registroP.php" class="btn btn-primary">
  Registrar de cursos prehospitalarios
</a>


<br>
                        <br>
                        <?php//Tabla Bootstrap?>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Panel prehospitalarios
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Apellido Paterno</th>
                                    <th>Apellido Materno</th>
                                    <th>Correo</th>
                                    <th>Teléfono</th>
                                    <th>Técnico en Atención Médica Prehospitalaria</th>
                                    <th>Nivel de Certificación</th>
                                    <th>Capacitación Continua</th>
                                    <th>Años de Experiencia en el Sistema de Atención Médica Prehospitalaria</th>
                                    <th>Municipio de Residencia</th>
                                    <th>Editar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($profesionales as $profesional){ ?>
                                        <tr>
                                            <th scope="row"><?php echo $profesional['id'] ?></th>
                                            <td><?php echo $profesional['nombre'] ?></td>
                                            <td><?php echo $profesional['apellidoP'] ?></td>
                                            <td><?php echo $profesional['apellidoM'] ?></td>
                                            <td><?php echo $profesional['correo'] ?></td>
                                            <td><?php echo $profesional['telefono'] ?></td>
                                            <td><?php echo $profesional['nivelTecnico'] ?></td>
                                            <td><?php echo $profesional['nivelCertificacion'] ?></td>
                                            <td><?php echo $profesional['capacitacion'] ?></td>
                                            <td><?php echo $profesional['experiencia'] ?></td>
                                            <td><?php echo $profesional['municipio'] ?></td>
                                            <td>  
                                            
                                            <a href="modificacionP.php?editar=<?php echo base64_encode($profesional['id']); ?>&nombre=<?php echo base64_encode($profesional['nombre']) ?>&apellidop=<?php echo base64_encode($profesional['apellidoP'])?>&apellidom=<?php echo base64_encode($profesional['apellidoM'])?>&correo=<?php echo base64_encode($profesional['correo'])?>&telefono=<?php echo base64_encode($profesional['telefono'])?>&nivelTecnico=<?php echo base64_encode($profesional['nivelTecnico'])?>&nivelCertificacion=<?php echo base64_encode($profesional['nivelCertificacion'])?>&capacitacion=<?php echo base64_encode($profesional['capacitacion'])?>&experiencia=<?php echo base64_encode($profesional['experiencia'])?>&municipio=<?php echo base64_encode($profesional['municipio'])?>"  class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                            <a href="eliminacionP.php?borrar=<?php echo base64_encode($profesional['id']) ?>&nombre=<?php echo base64_encode($profesional['nombre']); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>
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