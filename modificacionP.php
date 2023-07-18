<?php include('bd.php'); ?>

<?php

$id="";

if($_GET){
    $id=base64_decode($_REQUEST['editar']);
    $nombre=base64_decode($_REQUEST['nombre']);
    $apellidop=base64_decode($_REQUEST['apellidop']);
    $apellidom=base64_decode($_REQUEST['apellidom']);
    $correo=base64_decode($_REQUEST['correo']);
    $telefono=base64_decode($_REQUEST['telefono']);
    $nivelTecnico=base64_decode($_REQUEST['nivelTecnico']);
    $nivelCertificacion=base64_decode($_REQUEST['nivelCertificacion']);
    $capacitacion=base64_decode($_REQUEST['capacitacion']);
    $experiencia=base64_decode($_REQUEST['experiencia']);
    $municipio=base64_decode($_REQUEST['municipio']);
}



if($_POST){
    $idInput=$_POST['id'];
    $accion=$_POST['accion'];
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
        case 'modificar':
            //UPDATE `profesional` SET `nombre` = 'Modificado' WHERE `profesional`.`id` = 1;
            $objConexion=new Conexion();
            $sql="UPDATE `profesional` SET `nombre` = '$nombre', `apellidoP` = '$apellidop', `apellidoM` = '$apellidom', `correo` = '$correo', `telefono` = '$telefono', `nivelTecnico`='$nivelTecnico',`nivelCertificacion`='$nivelCertificacion',`capacitacion`='$capacitacion',`experiencia` = '$experiencia',`municipio` = '$municipio' WHERE `profesional`.`id` =$idInput";
            $objConexion->ejecutar($sql);
            header('Location: profesionalPrehospitalario.php');
        break;
        case 'regresar':
            header('Location: profesionalPrehospitalario.php');
        break;
    } 
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificacion</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/estiloCampos.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1 align=center>Edición de registro</h1>
    <div class="container">
        <br>
        <br>
        <form class="row g-3" action="modificacionP.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                               
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="id" id="nombre" aria-describedby="helpId" value="<?php echo $id; ?>">
                                </div>
                              
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre" value="<?php echo $nombre; ?>">
                                </div>
                                <br>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="apellidop" id="nombre" aria-describedby="helpId" placeholder="Apellido Paterno" value="<?php echo $apellidop; ?>">
                                </div>
                                <br>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="apellidom" id="nombre" aria-describedby="helpId" placeholder="Apellido Materno" value="<?php echo $apellidom; ?>">
                                </div>
                                <br>
                                <div class="col-md-4">
                                    <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Correo electrónico" value="<?php echo $correo; ?>">
                                </div>
                                <br>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="Numero de teléfono" value="<?php echo $telefono; ?>">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Técnico en Atencion Medica Prehospitalaria:</label>
                                    <select class="form-select" name="nivelTecnico" id="lang" value="<?php echo $nivelTecnico; ?>">
                                        <option value="Básico">Nivel Básico</option>
                                        <option value="Intermedio">Nivel Intermedio</option>
                                        <option value="Avanzado">Nivel Avanzado</option>
                                        <option value="Médico">Médico</option>
                                        <option value="otro">Otro</option>                   
                                    </select>
                                </div>
                                <br>
                                <div class="col-md-4">
                                    <label class="">Nivel de Certificación:</label>
                                    <select class="form-select" name="nivelCertificacion" id="lang" value="<?php echo $nivelCertificacion; ?>">
                                        <option value="CONOCER ECO0307.01">CONOCER ECO0307.01</option>
                                        <option value="T. Universitario">Técnico Superior Universitario</option>
                                        <option value="Licenciatura">Licenciatura</option>
                                        <option value="T. Urgencias médicas">Técnico en Urgencias Médicas</option>
                                        <option value="Otro">Otro</option>                   
                                    </select>
                                </div>
                                <br>
                                <div class="col-md-4">
                                    <label >Capacitación Continua:</label>
                                    <select class="form-select" name="capacitacion" id="lang" value="<?php echo $capacitacion; ?>">
                                        <option value="BLS">BLS</option>
                                        <option value="PHTLS">PHTLS</option>
                                        <option value="ACLS">ACLS</option>
                                        <option value="AMLS">AMLS</option>
                                        <option value="PALS">PALS</option>
                                        <option value="NALS">NALS</option>
                                        <option value="PEPP">PEPP</option>
                                        <option value="GEMS">GEMS</option>
                                        <option value="Otros">Otros</option>                
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <label >Años de Experiencia:</label>
                                    <input type="text" class="form-control" name="experiencia" id="anios" aria-describedby="helpId" placeholder="Años de experiencia" value="<?php echo $experiencia; ?>">
                                </div>
                                <br>
                                <div class="col-md-4">
                                    <label >Municipio de Residencia</label>
                                <select class="form-select" name="municipio" id="lang" value="<?php echo $municipio; ?>">
                                    <option value="Mexicali">Mexicali</option>
                                    <option value="Tecate">Tecate</option>
                                    <option value="Tijuana">Tijuana</option>
                                    <option value="Playas de Rosarito">Playas de Rosarito</option>
                                    <option value="Ensenada">Ensenada</option>
                                    <option value="San Quintin">San Quintín</option>
                                    <option value="San Felipe">San Felipe</option>              
                                </select>
                                </div>

                                <br>
                                <div class="btn-group  col-md-4" role="group" aria-label="Button group name">
                                    <button type="submit" name="accion" value="modificar" class="btn btn-success">Guardar</button>
                                    <button type="submit" name="accion" value="regresar" class="btn btn-danger">Cancelar</button>
                                    
                                </div> 
                                </div>
                                
                               
                                
                                
                              
                                      
                        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
</body>
</html>