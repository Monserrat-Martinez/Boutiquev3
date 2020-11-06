<?php
    require_once "header.php";
    
    function filtrado($datos){
        $datos = trim($datos); // Elimina espacios antes y después de los datos
        $datos = stripslashes($datos); // Elimina backslashes \
        $datos = htmlspecialchars($datos); // Traduce caracteres especiales en entidades HTML
        return $datos;
    }
    if (isset( $_REQUEST )) 
    {
        if (isset( $_REQUEST['nombre'], $_REQUEST['apellidos'], $_REQUEST['direccion'],
            $_REQUEST['email'], $_REQUEST['codigo'], $_REQUEST['ciudad']))
        {
            $nombre = filtrado($_REQUEST['nombre']);
            $apellidos = filtrado($_REQUEST['apellidos']);
            $direccion = filtrado($_REQUEST['direccion']);
            $email = filtrado($_REQUEST['email']);
            $codigo = filtrado($_REQUEST['codigo']);
            $ciudad = filtrado($_REQUEST['ciudad']);
            print '¡purchase made!  ';
            print 'PUEDE DEPOSITAR EN LA TARJETA DE MONSERRAT MARTINEZ CAÑAS';
            $time = time();
            queryMysql("INSERT INTO purchases VALUES('$nombre',
                '$apellidos','$direccion','$email','$codigo', '$ciudad')");
            
        } else {
            print 'Not all information was submitted.';
        }
    }
    
    

?>

<DOCTYPE html>
    <body>
    <head>
    </head>
    <body>
    <h2>DATOS DE ENVIO</h2><br>

    <form action="" class="col-sm-6"  <?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
        <fieldset>
            <label class="col-sm-2 col-form-label">Nombre:</label>
            <input class="form-control" type="text" name="nombre" required autofocus><br>
    
            <label class="col-sm-2 col-form-label">Apellidos:</label>
            <input class="form-control" type="text" name="apellidos" required><br>
    
            <label class="col-sm-2 col-form-label">Direccion:</label>
            <input class="form-control" type="text" name="direccion" required><br>
    
            <label class="col-sm-2 col-form-label">Email:</label>
            <input class="form-control" type="email" name="email" required><br>
    
            <label class="col-sm-2 col-form-label">Codigo postal:</label>
            <input class="form-control" type="text" name="codigo" required><br>
    
            <label class="col-sm-2 col-form-label">ciudad:</label>
            <input class="form-control" type="text" name="ciudad" required><br>
        </fieldset>
        <fieldset>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </fieldset>
    </form>
</body>
<html>    