<?php
    include('connect.php');

    $name = $_POST["nombre"];
    $apep = $_POST["apellidoP"];
    $apem = $_POST["apellidoM"];
    $semestre = $_POST["semestre"];
    $cali = $_POST["califi"];
    $corre = $_POST["correo"];
    
    if ($name == "" || $apep == "" || $apem == "" || $semestre == "" || $cali == "" || $corre == "")
    {
        echo "<h4>Faltaron datos</h4>";
        echo "<a href='registrar.php'>Regresar</a>";
        exit();
    }

    if ($query = mysqli_query($conn, "INSERT into formulario (nombre, apellidop, apellidom, semestre,calificacion, correo) values ('".$name."', '".$apep."', '".$apem."' , '".$semestre."' , '".$cali."' , '".$corre."')"))
    {
        echo "Usuario Registrado";
        echo "<a href='index.php'>Regresar</a>";    
    }else
        {
            echo "Usuario No Registrado";
            echo "<a href='registrar.php'>Regresar</a>";
        }
    mysqli_close($conn);

?>