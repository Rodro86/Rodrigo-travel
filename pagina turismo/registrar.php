<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/formulario.css">
    <title>Rodrigo@travel</title>
</head>
<body>


<?php 




include('conexion.php');

if(isset($_POST['registro'])){
    if(strlen($_POST['name']) >= 1 &&
       strlen($_POST['email']) >= 1 &&
       strlen($_POST['phone']) >= 1 &&
       strlen($_POST['text']) >= 1 )
    {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $telefono = trim($_POST['phone']);
        $comentarios = trim($_POST['text']);
        $fecha = date('Y-m-d H:i:s');
        $consulta = "INSERT INTO datos(nombre, email, telefono, comentarios, fecha) VALUES ('$name','$email','$telefono','$comentarios', '$fecha')";
        $resultado = mysqli_query($conexion, $consulta);
        if($resultado){
            ?>
                <h3 class="ok"> ¡Pronto estaremos en contacto contigo!</h3>
            <?php 
        }else{
            ?>
                <h3 class="bad"> ¡Ups ha ocurrido un error!</h3>
            <?php 
        }
    }else{
        ?>
        <h3 class="bad"> ¡Por favor complete todos los campos !</h3>
        <?php 
       
    }
}

?>

</body>
</html>
