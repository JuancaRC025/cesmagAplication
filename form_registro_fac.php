<?php
include 'index.php';
include 'conexion.php';
?>

<div class="container" >
<!-- Default form login -->
<form class="text-center border border-light p-5" action="registrarFac.php" method="POST">

    <p class="h4 mb-4">Registrar Facultad</p>

     <!-- Codigo -->
     <input type="text" id="codigoFac" name="codigoFac" class="form-control mb-4" placeholder="Codigo">
     
    <!-- Nombre -->
    <input type="text" id="nombreFac" name=" nombreFac" class="form-control mb-4" placeholder="Nombre Facultad">

   


    <!-- Sign in button -->
    <button class="btn btn-info btn-block my-4" type="submit">Enviar</button>
</form>
<!-- Default form login -->
</div>