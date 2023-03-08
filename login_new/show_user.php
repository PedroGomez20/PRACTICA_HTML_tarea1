<?php
session_start();
if (!isset($_SESSION["logged"])) {
    header("Location: login.php");
}
include("../connect.php");
$user_id = $_POST["user_id"];
$sql = "SELECT * from login where id=" . $user_id;
$query = mysqli_query($conn, $sql);
if (!$row = mysqli_fetch_object($query)) {
    echo "Usuario no existe<br>";
    echo "<a href='index.php'>Regresar</a>";
    exit();
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
    <link rel="stylesheet" href="../css/style_formulario.css">
</head>

<body bgcolor="aqua">
    <section class="cabez">

        <p class="indi"><a class="men" href="../index.php"><span class="material-symbols-outlined">
                    home
                </span> INICIO</a></p>



        <!-- <ul>
           <li class="menus"> <a href="index.html"> MENU</a> </li>

       </ul> -->


        <section class="form_alum">

            <P class="nomb">DATOS PERSONALES</P>







            <form action="../login_new/update_user.php" method="POST">
                <input type="hidden" name="user_id" value="<?php echo $row->id ?>">
               
                <label for="nombre">NOMBRE:</label>
                <input type="text" name="name" value="<?php echo $row->nombre ?>" />
                <br>
                <br>

                <label for="usuario">usuario:</label>
                <input type="text" name="user" value="<?php echo $row->usuario ?>" />
                <br>
                <br>

                <label for="password">password:</label>
                <input type="password" name="password" value="<?php echo $row->contra ?>" />
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