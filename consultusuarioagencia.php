<?php
include("crudconexion.php");
$con = conectar();

$sql = "SELECT *  FROM formusuario";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Autos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="consultusuarioagencia.css" rel="stylesheet"> 
    <!-- <link rel="stylesheet" href="http://localhost/Legendary Motorsport/proyecto paginas web\consultusuarioagencia.css" />-->                                            
    <link rel="icon" href="img/Logos/carro-deportivo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


</head>

<!--Barra de navegacion
<header>
    <section class="wrapper">
          <nav>
              <ul>
                    <br>
                  <li><img src = "img/Logos/Logo 2.png" height="50" ></li>
                  <li><a href="index.html">Inicio</a></li>
                  <li><a href="loginusuario.html">Iniciar Sesion</a></li>
                  <li><a href="formusuario.html">Registrarse</a></li>
                  <li><a href="formproductos.html">Registar Auto</a></li>
                  <li><a href="loginadmin.html">Administrador</a></li>
                  <li><a href="autos.html">Autos en exhibicion</a></li>
                  <li><a href="proveedores.html">Proveedores</a></li>
                  <li><a href="agencia.html">Agencia</a></li>
                  <li><a href="pruebas.html">pruebas</a></li>
              </ul>           
           </nav>
    </section>
</header>----------------------------------------------------------------->


<body>
    
    <div class="container mt-5">
        <div class="row">

            <div class="col-md-3">
                <a href="consultprodagencia.php">
                    
                    <a href="consultprodagencia.php" class="btn type="submit" name="registar"><h2><p style="color: #FFFFFF;">Regresar</h2> </p></a>
                    <br>
                </a>
                   <br>
           <h1><p style="color: #FFFFFF;">Clientes</h1> </p> 

                
<!-- Metodo de buscar
    -->              
<!--
                <form action="crudinsertar.php" method="POST">

                    <input type="text" class="form-control mb-3" name="color" placeholder="Ingresar color">
                    <input type="text" class="form-control mb-3" name="marca" placeholder="Ingresar  marca">
                    <input type="text" class="form-control mb-3" name="modelo" placeholder="Ingresar  modelo">
                    <input type="text" class="form-control mb-3" name="precio" placeholder="Ingresar  precio">
                    <input type="text" class="form-control mb-3" name="transmision" placeholder="Ingresar  transmision">
                    <input type="text" class="form-control mb-3" name="imagen" placeholder="Ingresar imagen">

                    <input type="submit" class="btn btn-outline-danger btn-lg" value="Registrar poducto">
                </form>
            </div>
 -->
            <div class="col-md-8">
                <table class="table table-hover  ">
                    <thead class="table table">
                        <tr>
                            <th scope="row"><p style="color: red;"> Id</th></p>
                            <th><p style="color: red;">Nombre</th></p>
                            <th><p style="color: red;">Correo</th></p>
                            <th><p style="color: red;">Telefono</th></p>
                            <th><p style="color: red;">Sexo</th></p>
                            <th></th>
                           <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $row['id'] ?></th>
                                <th><?php echo $row['nombre'] ?></th>
                                <th><?php echo $row['correo'] ?></th>
                                <th><?php echo $row['telefono'] ?></th>
                                <th><?php echo $row['sexo'] ?></th>        
                                <th><a href="eliminarusuarioagencia.php?id=<?php echo $row['id'] ?>" class="btn  "><h5><p style="color: #D81743  ;">Eliminar Cliente</h5> </p></a></th>
                                <th><a href="actualizarusuarioagencia.php?id=<?php echo $row['id'] ?>" class="btn "><h5><p style="color: #2AC012 ;">Editar Cliente</h5> </p></a></th>

                            </tr>
                            </center>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</body>

</html>