<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrimerPhp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <h1 class="h1">Crud con PHP</h1>
    <form action="formulario.php" method="post" class="row g-3">
        <div class="col-md-6">
        <label for="" class="form-label">Identificacion</label>
        <input type="text" name="Id" class="form-control" placeholder="Ingrese su cc">
        </input>
        </div>
        <div class=" col-md-6">
        <label for="" class="form-label">Ingrese su nombre completo</label>
        <input type="text" name="Nombre" class="form-control" placeholder="Ingrese su nombre completo">
        </input>
        </div>

        <div class="col-md-6">
        <label for="" class="form-label">Ingrese sus apellidos</label>
        <input type="text" name="Apellidos" class="form-control" placeholder="Ingrese su apellido completo">
        </input>
        </div>
        <div class="col-md-6">
        <label for="" class="form-label">Ingrese su telefono de contacto</label>
        <input type="text" name="Telefono" class="form-control" placeholder="Ingrese su telefono de contacto">
        </input>
        </div>
        <div class="col-md-6">
        <label for="" class="form-label">Fecha de nacimiento</label>
        <input type="date" name="Fecha" class="form-control" placeholder="Fecha de nacimiento">
        </input>
        </div>
        <div class="col-md-6">
        <label for=""class="form-label">Correo electronico</label>
        <input type="text" name="Correo" class="form-control" placeholder="correo electronico">
        </input>
        </div>
        </input>
        <div class="col-md-6">
            <input type="submit" value="Guardar" class="btn btn-danger" name="guardar"></button>
            </input>
    
    </form>
    <?php
        if (isset($_POST['guardar']))
        {
            include ('conexion.php');
            //Datos de entrada
            $id=$_POST['Id'];
            $nombre=$_POST['Nombre'];
            $apellidos=$_POST['Apellidos'];
            $telefono=$_POST['Telefono'];
            $fecha=$_POST['Fecha'];
            $correo=$_POST['Correo'];

            //Consulta a la base de datos: insert
            mysqli_query($conexion,"INSERT INTO registro (Id,Nombre,Apellidos,Telefono,Fecha,Correo)VALUES('$id', '$nombre', '$apellidos', '$telefono', '$fecha', $correo)");

            echo "Datos guardados correctamente";
        }
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>