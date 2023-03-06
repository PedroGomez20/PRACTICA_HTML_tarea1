<?php
  
   session_start();
   if (!isset($_SESSION["logged"])){
       header("Location: login.php");
   }

    include ("connect.php");
    $user_id = $_POST["user_id"];
    $sql = "SELECT * from formulario where id=".$user_id;
    $query = mysqli_query($conn, $sql);
    if (!$row = mysqli_fetch_object($query)){
        echo "Usuario no existe<br>";
        echo "<a href='index.php'>Regresar</a>";
        exit ();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/style_formulario.css">
</head>
<body bgcolor="aqua">
<section class="cabez">
       
       <p class="indi"><a class="men" href="index.php"><span class="material-symbols-outlined">
           home
        </span>  INICIO</a></p>


       
       <!-- <ul>
           <li class="menus"> <a href="index.html"> MENU</a> </li>

       </ul> -->
   

   </section>


<!-- <form method="POST" action="update_user.php">
        <input type="hidden" name="user_id" value="<?php echo $row->id?>">
        <div class="row">
            <label>Nombre:</label>
            <input type="text" name="name" value="<?php echo $row->nombre?>"/>            
        </div>
        <div class="row">
            <label>APELLIDO P:</label>
            <input type="text" name="apellidop" value=" <?php echo $row->apellidop?>"/>
        </div>
        <div class="row">
            <label>APELLIDO M:</label>
            <input type="text" name="apellidom" value = "<?php echo $row->apellidom?>"/>
        </div>
        <div class="row">
            <label>SEMESTRE:</label>
            <input type="int" name="semestre" value = "<?php echo $row->semestre?>"/>
        </div>
        <div class="row">
            <label>calificacion:</label>
            <input type="int" name="calificacion" value = "<?php echo $row->calificacion?>"/>
        </div>
        <div class="row">
            <label>correo:</label>
            <input type="email" name="correo" value = "<?php echo $row->correo?>"/>
        </div>
        <div class="row">
            <button class="btnPrimary" type="submit">Guardar</button>
        </div>
    </form> -->




    <section class="form_alum">

<P class="nomb">DATOS PERSONALES</P>

<form action="update_user.php" method="POST">
<input type="hidden" name="user_id" value="<?php echo $row->id?>">
    <label for="nombre">NOMBRE:</label>
    <input type="text" name="name" value="<?php echo $row->nombre?>"/> 
    <br>
    <br>

    <label for="apellidoP">APELLIDO PATERNO:</label>
    <input type="text" name="apellidop" value=" <?php echo $row->apellidop?>"/>
    <br>
    <br>

    <label for="apellidoM">APELLIDO MATERNO:</label>
    <input type="text" name="apellidom" value = "<?php echo $row->apellidom?>"/>
    <br>
    <br>

    <label for="semestre">SEMESTRE:</label>
    <input type="int" name="semestre" value = "<?php echo $row->semestre?>"/>
    <br>
    <br>

    <label for="califi">CALIFICACION:</label>
    <input type="int" name="calificacion" value = "<?php echo $row->calificacion?>"/>
    <br>
    <br>

    <label for="correo">CORREO:</label>
    <input type="email" name="correo" value = "<?php echo $row->correo?>"/>
    <br>
    <br>

    <br>
    <button class="botns" type="submit"> ENVIAR</button>





</form>
<p class="terminos2">Acuerdo de terminos y condiciones</p>
<a class="links" href="terminos.html">terminos y condiciones</a>
</section>
</body>
</html>