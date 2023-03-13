<?php
    include ('../connect.php');
    $user_id = $_POST["user_id"];
    $name = $_POST["name"];
    $username = $_POST["user"];
    $password = $_POST["password"];

   

    $query = mysqli_query($conn, "SELECT contra FROM login where contra='.$password' and id='user_id'");
    while ($row = mysqli_fetch_object($query)) {
        $row->$nombre1;
    }
 echo $sql;
if($password == $nombre1 ){
    $sql = "UPDATE login set 
    nombre = '".$name."', usuario='".$username."' where id=".$user_id;

    echo "sin contra modi";
} else {
    $password = md5($password."cursophp");

    $sql = "UPDATE login set 
    nombre = '".$name."', usuario='".$username."', contra='".$password."' where id=".$user_id;

echo "con contra modi";
}


    
    if ($query = mysqli_query($conn, $sql))
        header("Location: ../index.php");
    else{
        echo "Usuario no pudo ser actualizado<br>";
        echo "<a href='index.php'>Regresar</a>";
    }
?>