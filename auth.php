<?php
    session_start();
    include ('connect.php');
    $user = $_POST["usuario"];
    $password = $_POST["contra"];
    $sql = "SELECT * FROM login where usuario='".$user."' && contra='".$password."'";
    $query = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_object($query)){
        
        $_SESSION["logged"] = true;
        $_SESSION["user_id"]  = $row->id;
        $_SESSION["displayName"] = $row->nombre;
        $_SESSION["user"] = $row->usuario;

        header("Location: index.php");
    }
    else{

        echo "Datos no válidos / Vacios<br>";
        echo "<a href='login.php'>Regresar</a>";
    }
?>