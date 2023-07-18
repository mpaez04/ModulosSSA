<?php include('bd.php'); ?>

<?php

$id="";
if($_GET){
    $id=base64_decode($_REQUEST['borrar']);
    $establecimiento=base64_decode($_REQUEST['establecimiento']);
}


if($_POST){
    $idInput=$_POST['id'];
    $accion=$_POST['accion'];
    switch($accion){
        case 'eliminar':
            $objConexion=new Conexion();
            $sql="DELETE FROM `establecimientos` WHERE `establecimientos`.`idEstablecimiento` =$idInput";
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
    <h1 align=center>Borrar registro</h1>
    <div class="container">
        <br>
        <br>
        <form class="row g-3" action="eliminacionE.php" method="post" enctype="multipart/form-data">
            <div class="row">
            <div class="col-md-4">
                                    
                </div>
                <div class="col-md-4">
                                    <input type="text" class="form-control" name="id" id="nombre" aria-describedby="helpId" value="<?php echo $id; ?>">
                                    <br>
                </div>
                <div class="col-md-4">
                                    
                </div>
                </div>
            <div class="row">
                
            
            <h3 align=center>Deseas eliminar el registro de <?php echo $establecimiento; ?>?</h3>
            <div class="col-md-4"></div>
                                <div class="btn-group  col-md-4" role="group" aria-label="Button group name">
                                    <button type="submit" name="accion" value="eliminar" class="btn btn-success">Si</button>
                                    <button type="submit" name="accion" value="regresar" class="btn btn-danger">No</button>
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