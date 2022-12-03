<?php
include("crudconexion.php");
$con = conectar();

$sql = "SELECT *  FROM formproductos";
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Autos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="consultprodprov.css" rel="stylesheet"> 
    <!-- <link rel="stylesheet" href="http://localhost/Legendary Motorsport/proyecto paginas web\crudproducto.css" />-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
<a href="loginproveedores.html" class="btn type="submit" name="registar"><h2><p style="color: #FFFFFF;">Volver al inicio</h2> </p></a>
    <div class="container mt-5">
        <div class="row">

            <div class="col-md-3">
               
                
                    <br>
                    <br>
               
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>

 
 

                
<!-- Metodo de buscar-->




<section id="content">

<div class="contenedor-imagenes">
    <img src="img/Logos/proveedores.png" width="80px" height="95px" >
  
    <p><img src="img/Logos/proveedores.png" width="80px" height="95px"></p>
  </div><!--Argupacion de imagenes-->


<h2><p style="color: black;">Registrar Producto</h2> </p></a>



<div class="container mt-5">
<form action="insertprodprov.php" method="POST">

<h4><p style="color: white;">Color:</h4> </p>
<input type="text" class="form-control  mb-3" name="color" placeholder="Ingresar color">
<h4><p style="color: white;">Marca:</h4> </p>
<input type="text" class="form-control mb-3" name="marca" placeholder="Ingresar  marca">
<h4><p style="color: white;">Modelo:</h4> </p>
<input type="text" class="form-control mb-3" name="modelo" placeholder="Ingresar  modelo">
<h4><p style="color: white;">Precio:</h4> </p>
<input type="text" class="form-control mb-3" name="precio" placeholder="Ingresar  precio">
<h4><p style="color: white;">Transmision:</h4> </p>
<input type="text" class="form-control mb-3" name="transmision" placeholder="Ingresar  transmision">
<h4><p style="color: white;">Imagen:</h4> </p>
<input type="text" class="form-control mb-3" name="imagen" placeholder="Ingresar imagen">
<center>
    <br>
<button type="text" class="btn type="submit" name="registar" id="registrar"><h3><p style="color: black  ;">Agregar Producto</h3> </p></button>
</form>

    </div>
</section>
<br>
</div>
</div>     

</div>
</div>


</div>

               
    </div>                


</center>


            <?php
if (!isset($_POST['buscar'])){$_POST['buscar'] = '';}
?>

<div class="container mt-50">
<div class="col-12">

<form method="POST" action="consultprodprov.php">
<div class="mb-3">
    <br>
    <label class="form-label"><h1><p style="color: #FFFFFF;">Buscar: </h1></label>
    <br>
    <input type="text" class="form" placeholder="Barra de busqueda" id="buscar" name="buscar">
    <button type="text" class="btn type="submit" name="registar" id="registrar"><h5><p style="color: red ;">Click aqui para buscar</h5> </p></button>
</div>
</div>
</form>


<div class="card col-12 mt-5">
<div class="card-body">
<!-- recuerda que si no te funciona con mysql_query tienes que cambiarlo por mysqli_query -->
<?php $busqueda=mysqli_query($con,"SELECT * FROM formproductos WHERE id LIKE LOWER('%".$_POST["buscar"]."%') OR color LIKE LOWER('%".$_POST["buscar"]."%')  OR marca LIKE LOWER('%".$_POST["buscar"]."%')  OR modelo LIKE LOWER('%".$_POST["buscar"]."%') OR precio LIKE LOWER('%".$_POST["buscar"]."%') OR transmision LIKE LOWER('%".$_POST["buscar"]."%') OR imagen LIKE LOWER('%".$_POST["buscar"]."%')"); 
$numero = mysqli_num_rows($busqueda); ?>
<h4 class="card-tittle">Productos  (<?php echo $numero; ?>)</h4>
<br>
<?php while ($resultado = mysqli_fetch_assoc($busqueda)){ ?>
<p class="card-tittle">Id: <?php echo $resultado["id"]; ?><br>Color: <?php echo $resultado["color"]; ?><br>Marca: <?php echo $resultado["marca"]; ?><br>Modelo: <?php echo $resultado["modelo"]; ?><br>Precio: <?php echo $resultado["precio"]; ?><br>Transmision: <?php echo $resultado["transmision"]; ?><br>Imagen: <?php echo $resultado["imagen"]; ?></p>
<?php } ?>
        

</body>

</html>