<?php
    $conn = mysqli_connect("localhost", "root", "", "form_beca");
    if (mysqli_connect_errno()){
        //header("Location: error.php");
        echo "NO SE PUDO CONECTAR: ". mysqli_error($conn);
        exit();
    }
?>
