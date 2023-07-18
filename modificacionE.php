<?php include('bd.php'); ?>

<?php

$id="";

if($_GET){
    $id=base64_decode($_REQUEST['editar']);
    $establecimiento=base64_decode($_REQUEST['establecimiento']);
    $tipoE=base64_decode($_REQUEST['tipoE']);
    $establecimiento=base64_decode($_REQUEST['establecimiento']);
    $nombreP=base64_decode($_REQUEST['nombreP']);
    $rfcP=base64_decode($_REQUEST['rfcP']);
    $curpP=base64_decode($_REQUEST['curpP']);
    $direccionP=base64_decode($_REQUEST['direccionP']);
    $coloniaP=base64_decode($_REQUEST['coloniaP']);
    $delegacionP=base64_decode($_REQUEST['delegacionP']);
    $localidadP=base64_decode($_REQUEST['localidadP']);
    $codigoP=base64_decode($_REQUEST['codigoP']);
    $entidadP=base64_decode($_REQUEST['entidadP']);
    $entreP=base64_decode($_REQUEST['entreP']);
    $telefonoP=base64_decode($_REQUEST['telefonoP']);
    $correoP=base64_decode($_REQUEST['correoP']);
    $nombreE=base64_decode($_REQUEST['nombreE']);
    $rfcE=base64_decode($_REQUEST['rfcE']);
    $direccionE=base64_decode($_REQUEST['direccionE']);
    $coloniaE=base64_decode($_REQUEST['coloniaE']);
    $delegacionE=base64_decode($_REQUEST['delegacionE']);
    $localidadE=base64_decode($_REQUEST['localidadE']);
    $codigoE=base64_decode($_REQUEST['codigoE']);
    $entidadE=base64_decode($_REQUEST['entidadE']);
    $entreE=base64_decode($_REQUEST['entreE']);
    $telefonoE=base64_decode($_REQUEST['telefonoE']);
    $correoE=base64_decode($_REQUEST['correoE']);
    $horarioE=base64_decode($_REQUEST['horarioE']);
    $fechaE=base64_decode($_REQUEST['fechaE']);
    $nombreR=base64_decode($_REQUEST['nombreR']);
    $curpR=base64_decode($_REQUEST['curpR']);
    $correoR=base64_decode($_REQUEST['correoR']);
}


if($_POST){
    $accion=$_POST['accion'];
    $id=$_POST['idEstablecimiento'];
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
        
        case 'modificar':
            $objConexion=new Conexion();
            $sql="UPDATE `establecimientos` SET `tipoE`='$tipoE', `establecimiento` = '$establecimiento', `nombreP` = '$nombreP', `rfcP` = '$rfcP', `curpP` = '$curpP', `direccionP` = '$direccionP', `coloniaP`='$coloniaP', `delegacionP` = '$delegacionP',`localidadP` = '$localidadP',`codigoP`='$codigoP',`entidadP` = '$entidadP',`entreP` = '$entreP',`telefonoP` = '$telefonoP',`correoP` = '$correoP',`nombreE`='$nombreE',`rfcE`='$rfcE',`direccionE` = '$direccionE',`coloniaE` = '$coloniaE',`delegacionE` = '$delegacionE',`localidadE` = '$localidadE',`codigoE` = '$codigoE',`entidadE`='$entidadE',`entreE`='$entreE',`telefonoE`='$telefonoE',`correoE`= '$correoE',`horarioE`='$horarioE',`fechaE`='$fechaE',`nombreR` = '$nombreR',`curpR` = '$curpR',`correoR` = '$correoR' WHERE `establecimientos`.`idEstablecimiento` = $id";
            $objConexion->ejecutar($sql);
            header('Location: establecimientos.php');
        break;
        case 'regresar':
            header('Location: establecimientos.php');
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
<form class="row g-3" action="modificacionE.php" method="post">
                        <div class="row">
                        <div class="col-md-4">
                            <br>
                            <br>
                           
                                <input class="form-control" type="text"
                                                name="idEstablecimiento" id="empresatranslado" aria-describedby="helpId" placeholder="Nombre establecimiento" value="<?php echo $id; ?>">
                            </div>
                            <div class="col-md-4">
                                <label class="" for="">Seleccione el tipo de establecimiento que registrará:</label>
                                <br>
                                <br>
                                                <select class="form-select" name="tipoE" id="lang" value="<?php echo $tipoE; ?>">
                                                    <option value="Hospital">Hospital</option>
                                                    <option value="Empresa de traslados">Empresa de Traslados</option>
                                                    <option value="Asociación civil">Asociación Civil</option>
                                                    <option value="Dependencia">Dependencia Gubernamental</option>                
                                                </select>
                            </div>
                            <div class="col-md-4">
                            <br>
                            <br>
                           
                                <input class="form-control" type="text"
                                                name="establecimiento" id="empresatranslado" aria-describedby="helpId" placeholder="Nombre establecimiento" value="<?php echo $establecimiento; ?>">
                            </div>
                        </div>   
                        <br>
                        <br>

                            <h5>Datos del Propietario:</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                
                                    <input class="form-control" type="text"
                                                     name="nombreP" id="nombrepropie" aria-describedby="helpId" placeholder="Nombre del Propietario o Razón Social" value="<?php echo $nombreP; ?>">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control" type="text"
                                    name="rfcP" id="rfcpropie" aria-describedby="helpId" placeholder="RFC" value="<?php echo $rfcP; ?>">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control" type="text"
                                                     name="curpP" id="curppropie" aria-describedby="helpId" placeholder="CURP" value="<?php echo $curpP; ?>">
                                </div>
                            </div>
                            
                           
                        <div class="row">
                            
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="direccionP" id="direccionpropie" aria-describedby="helpId" placeholder="Dirección" value="<?php echo $direccionP; ?>">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="coloniaP" id="coloniapropie" aria-describedby="helpId" placeholder="Colonia" value="<?php echo $coloniaP; ?>">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="delegacionP" id="delegacionpropie" aria-describedby="helpId" placeholder="Delegación" value="<?php echo $delegacionP; ?>">
                            </div>
                        </div> 
                        <div class="row">
                            
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="localidadP" id="localidadpropie" aria-describedby="helpId" placeholder="Localidad" value="<?php echo $localidadP; ?>">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                name="codigoP" id="codigopostalpropie" aria-describedby="helpId" placeholder="Código Postal" value="<?php echo $codigoP; ?>">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="entidadP" id="entidadfepropie" aria-describedby="helpId" placeholder="Entidad Federativa" value="<?php echo $entidadP; ?>">
                            </div>
                        </div> 
                        <div class="row">
                            
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                name="entreP" id="entrecallepropie" aria-describedby="helpId" placeholder="Entre Calle y Calle" value="<?php echo $entreP; ?>">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="telefonoP" id="telefonopropie" aria-describedby="helpId" placeholder="Teléfono" value="<?php echo $telefonoP; ?>">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                 name="correoP" id="correopropie" aria-describedby="helpId" placeholder="Correo electrónico" value="<?php echo $correoP; ?>">
                            </div>
                        </div> 
                        <br>
                        <br>
                            
                            <h5>Datos del Establecimiento:</h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
   
                                           
                                    <input class="form-control" type="text"
                                     name="nombreE" id="nombreestable" aria-describedby="helpId" placeholder="Razón Social o Denominación del Establecimiento" value="<?php echo $nombreE; ?>">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control" type="text"
                                     name="rfcE" id="rfcestable" aria-describedby="helpId" placeholder="RFC" value="<?php echo $rfcE; ?>">
                                </div>
                                <div class="col-md-4">
                                    <input class="form-control" type="text"
                                                     name="direccionE" id="direccionestable" aria-describedby="helpId" placeholder="Dirección" value="<?php echo $direccionE; ?>">
                                </div>
                            </div>
                            
                                 
                        <div class="row">
                            
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="coloniaE" id="coloniaestable" aria-describedby="helpId" placeholder="Colonia" value="<?php echo $coloniaE; ?>">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="delegacionE" id="delegacionestable" aria-describedby="helpId" placeholder="Delegación" value="<?php echo $coloniaE; ?>">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="localidadE" id="localidadestable" aria-describedby="helpId" placeholder="Dirección" value="<?php echo $localidadE; ?>">
                            </div>
                        </div>         
                        <div class="row">
                            
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="codigoE" id="codigopostaestable" aria-describedby="helpId" placeholder="Código Postal" value="<?php echo $codigoE; ?>">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="entidadE" id="entidadestable" aria-describedby="helpId" placeholder="Entidad Federativa" value="<?php echo $entidadE; ?>">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="entreE" id="entrecalleestable" aria-describedby="helpId" placeholder="Entre Calle y Calle" value="<?php echo $entreE; ?>">
                            </div>
                        </div>            
                        <div class="row">
                            
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="telefonoE" id="telefonoestable" aria-describedby="helpId" placeholder="Teléfono" value="<?php echo $telefonoE; ?>">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                                 name="correoE" id="correoestable" aria-describedby="helpId" placeholder="Correo electrónico" value="<?php echo $correoE; ?>">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                name="horarioE" id="horarioestable" aria-describedby="helpId" placeholder="Horario" value="<?php echo $horarioE; ?>">
                            </div>
                        </div>                 
                        <div class="row">
                           
                            <div class="col-md-4">
                                <input class="form-control" type="text"
                                name="fechaE" id="fechaestable" aria-describedby="helpId" placeholder="Fecha de inicio de actividades" value="<?php echo $fechaE; ?>">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text" name="nombreR" id="nomrepresestable" aria-describedby="helpId" placeholder="Nombre del Representante Legal" value="<?php echo $nombreR; ?>">
                            </div>
                            <div class="col-md-4">
                                <input class="form-control" type="text" name="curpR" id="curpreprestable" aria-describedby="helpId" placeholder="CURP" value="<?php echo $curpR; ?>">
                            </div>
                        </div>  
                        <div class="row">
                            
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="correoR" id="correorepresestable" aria-describedby="helpId" placeholder="Correo electrónico" value="<?php echo $curpR; ?>">
                            </div>
                        </div>                 
                        <br>
                        <div class="btn-group  col-md-4" role="group" aria-label="Button group name">
                                    <button type="submit" name="accion" value="modificar" class="btn btn-success">Guardar</button>  
                                    <button type="submit" name="accion" value="regresar" class="btn btn-danger">Cancelar</button>
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