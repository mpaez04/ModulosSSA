<?php include('bd.php'); ?>

<?php







if($_POST){
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
        case 'insertar':
            $objConexion=new Conexion();
            $sql="INSERT INTO `profesional` (`id`, `nombre`, `apellidoP`, `apellidoM`, `correo`, `telefono`, `nivelTecnico`, `nivelCertificacion`, `capacitacion`, `experiencia`, `municipio`) VALUES (NULL,'$nombre','$apellidop','$apellidom','$correo','$telefono','$nivelTecnico','$nivelCertificacion','$capacitacion','$experiencia','$municipio');";
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
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/estiloCampos.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>
    <br>
    <br>
<form class="row g-3" action="registroP.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="apellidop" id="nombre" aria-describedby="helpId" placeholder="Apellido Paterno">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="apellidom" id="nombre" aria-describedby="helpId" placeholder="Apellido Materno">
                                </div>
                            </div>
                            <div class="row">
                                
                                <div class="col-md-4">
                                    <input type="email" class="form-control" name="correo" id="correo" aria-describedby="emailHelpId" placeholder="Correo electrónico">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="telefono" id="telefono" aria-describedby="helpId" placeholder="Numero de teléfono">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" name="experiencia" id="anios" aria-describedby="helpId" placeholder="Años de experiencia">
                                </div>
                                
                            </div>
                            <div class="row">
                            <div class="col-md-4">
                                    <label>Técnico en Atencion Medica Prehospitalaria:</label>
                                    <select class="form-select" name="nivelTecnico" id="lang">
                                        <option value="Básico">Nivel Básico</option>
                                        <option value="Intermedio">Nivel Intermedio</option>
                                        <option value="Avanzado">Nivel Avanzado</option>
                                        <option value="Médico">Médico</option>
                                        <option value="Otro">Otro</option>                   
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="">Nivel de Certificación:</label>
                                    <select class="form-select" name="nivelCertificacion" id="lang">
                                        <option value="CONOCER ECO0307.01">CONOCER ECO0307.01</option>
                                        <option value="T. Universitario">Técnico Superior Universitario</option>
                                        <option value="Licenciatura">Licenciatura</option>
                                        <option value="T. Urgencias médicas">Técnico en Urgencias Médicas</option>
                                        <option value="Otro">Otro</option>                   
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label >Capacitación Continua:</label>
                                    <select class="form-select" name="capacitacion" id="lang">
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
                            <div class="row">
                                
                                <div class="col-md-4">
                                    <label >Municipio de Residencia</label>
                                <select class="form-select" name="municipio" id="lang">
                                    <option value="Mexicali">Mexicali</option>
                                    <option value="Tecate">Tecate</option>
                                    <option value="Tijuana">Tijuana</option>
                                    <option value="Playas de Rosarito">Playas de Rosarito</option>
                                    <option value="Ensenada">Ensenada</option>
                                    <option value="San Quintín">San Quintín</option>
                                    <option value="San Felipe">San Felipe</option>              
                                </select>
                                </div>
                                <br>
                                <div class="btn-group  col-md-4" role="group" aria-label="Button group name">
                                    <button type="submit" name="accion" value="insertar" class="btn btn-success">Guardar</button>
                                    <button type="submit" name="accion" value="regresar" class="btn btn-danger">Cancelar</button>
                                </div>
                            </div>               
                        </form>
</body>
</html>