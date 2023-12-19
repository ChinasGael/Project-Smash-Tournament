<?php
    $servidor =  "localhost";
    $dbUsuario= "root";
    $dbpassword = "";
    $dbname = "ProyectoBase";
    $conn= mysqli_connect($servidor,$dbUsuario,$dbpassword,$dbname);

    if(isset($_POST['enviar'])){
        
        if(strlen ($_POST['nombre'])>=1 &&
       strlen( $_POST['nombre'])>=1 &&
        strlen($_POST['nickname'])>=1 &&
        strlen($_POST['edad'])>=1 &&
        strlen($_POST['email'])>=1 &&
        strlen( $_POST['nacionalidad'])>=1 &&
        strlen($_POST['telefono'])>=1){


    $nombre = trim($_POST['nombre']);
    $nickname =trim($_POST['nickname']);
    $edad = trim($_POST['edad']);
    $email =trim( $_POST['email']);
    $nacionalidad =trim( $_POST['nacionalidad']);
    $telefono =trim($_POST['telefono']);
    
    $consulta = "INSERT INTO Usuario (nombre, nickname, edad, email, nacionalidad, telefono) VALUES ('$nombre', '$nickname', '$edad', '$email', '$nacionalidad', '$telefono')";
    $resultado= mysqli_query($conn,$consulta);

    if ($resultado) {
       ?>
      <h3 class="ok"> Te has Registrado Correctamente</h3>
       <?php
      
    }

     }else {
        ?>
      <h3 class="bad">No te registraste bien </h3>
       <?php
     }
    }

?>