<?php
    include ('connect.php');
    $user_id = $_POST["user_id"];
    $name = $_POST["name"];
    $apep = $_POST["apellidop"];
    $apem = $_POST["apellidom"];
    $semestre = $_POST["semestre"];
    $cali = $_POST["calificacion"];
    $corre = $_POST["correo"];

    $sql = "UPDATE formulario set 
    nombre = '".$name."', apellidop='".$apep."', apellidom='".$apem."' , semestre='".$semestre."' , calificacion='".$cali."', correo='".$corre."' where ID=".$user_id;
    if ($query = mysqli_query($conn, $sql))
        header("Location: index.php");
    else{
        echo "Usuario no pudo ser actualizado<br>";
        echo "<a href='index.php'>Regresar</a>";
    }
?>