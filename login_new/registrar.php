 <?php
    session_start();
    if (!isset($_SESSION["logged"])) {
        header("Location: ..//login.php");
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







             <form method="POST" action="../login_new/save.php">
                 
                     <label>Nombre:</label>
                     <input class="control" type="text" name="name" placeholder="Nombre" />

                 
                     <label>Usuario:</label>
                     <input class="control" type="text" name="user" placeholder="Usuario"/>
                 
                     <label>Password:</label>
                     <input class="control" type="password" name="password" placeholder="Contra" />
                 
                
                     <button class="btnPrimary" type="submit">Guardar</button>
                 
             </form>
             <p class="terminos2">Acuerdo de terminos y condiciones</p>
             <a class="links" href="terminos.html">terminos y condiciones</a>
         </section>
 </body>

 </html>