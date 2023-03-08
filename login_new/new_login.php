

<?php

include("../connect.php");
// $user_id = $_POST["user_id"];
$sql = "SELECT * from login ";
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
    <title>TABLA ALUMNOS</title>

    <link rel="stylesheet" href="../css/syle_alumnos.css">


</head>

<body class="cuerpo_fondo">

    <section>

        <p class="indi"><a class="men" href="../index.php"><span class="material-symbols-outlined">
                    home
                </span> INICIO</a></p>

        <p class="indi"><a class="men" href="../logout.php"><span class="material-symbols-outlined">
                    logout
                </span> CERRAR SESION</a></p>
        <!-- <ul>
            <li> <a href="index.html"> MENU</a> </li>

        </ul> -->

    </section>



    <section class="seci">
        <p class="encabezado">TABLA LOGIN </p>

        <table class="table1">


            <thead>
                <tr class="titulos">
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Password</th>
                    <th>Operaciones</th>
                </tr>

            </thead>


            <tbody class="celdas">
                <?php

                if ($conn = mysqli_connect("localhost", "root", "", "form_beca")) {
                    $query = mysqli_query($conn, "SELECT * FROM login");
                    while ($row = mysqli_fetch_object($query)) {
                        echo "<tr><td> {$row->nombre}</td><td> {$row->usuario}</td><td> {$row->contra}</td><td>
        <form method='POST' action='delete_user.php'> 
        
        <button type='submit'> <span class='material-symbols-outlined'>
        delete
        </span> Borrar  </button>
        
        <input type='hidden' name='user_id' value='" . $row->id . "'/></form>
        
        <form method='POST' action='show_user.php'>
        <input type='hidden' name='user_id' value='" . $row->id . "'>

        <button type='submit'><span class='material-symbols-outlined'>
        edit
        </span>  Editar</button>

        </form>
        </td>

        </tr>";
                    }
                } else {
                    echo "no se pudo conectar";
                }



                ?>












            </tbody>


        </table>

    </section>

</body>

<footer>
<div class="ADD">

<a class="men" href="../login_new/registrar.php"><span class="material-symbols-outlined">
person_add
</span> NUEVO USUARIO</a>



            </div>


</footer>

</html>