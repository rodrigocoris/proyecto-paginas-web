<?php
include("crudconexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM formusuario WHERE id='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
     <link href="actualizarusuarioagencia.css" rel="stylesheet"> 
    <!--<link rel="stylesheet" href="http://localhost/Legendary Motorsport/proyecto paginas web\crudproducto.css" />-->
    <title>Actualizar</title>
   
    <link rel="icon" href="img/Logos/carro-deportivo.png">
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


<section id="content">


<a href="consultusuarioagencia.php" class="btn" type="submit" name="registar"><h2><p style="color: black;">Volver a cliente</h2> </p></a>
</a>
<br>
<h2><p style="color: black;">Actualizar Cliente</h2> </p></a>
<div class="contenedor-imagenes">
    <img src="img/Logos/agencia.png" width="80px" height="95px" >
  
    <p><img src="img/Logos/admin.png" width="95px" height="80px"></p>
  </div><!--Argupacion de imagenes-->


<div class="container mt-5">
        <form action="updateusuarioagencia.php" method="POST">
            
           
        
            <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
            <h2><p style="color: white;">Nombre:</h2> </p>
            <input type="text" class="form-control-sm" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']  ?>">
            <h2><p style="color: white;">Correo:</h2> </p>
            <input type="text" class="form-control-sm" name="correo" placeholder="correo" value="<?php echo $row['correo']  ?>">
            <h2><p style="color: white;">Telefono:</h2> </p>
            <input type="text" class="form-control-sm" name="telefono" placeholder="telefono" value="<?php echo $row['telefono']  ?>">
            <h2><p style="color: white;">Sexo:</h2> </p>
            <input type="text" class="form-control-sm" name="sexo" placeholder="sexo" value="<?php echo $row['sexo']  ?>">
            <br>
            <br>
            <br>
            <button type="text" class="btn" type="submit" name="registar" id="registrar"><h2><p style="color: black   ;">Actualizar Cliente</h2> </p></button>
        </form>

    </div>
</section>


























</body>

</html>