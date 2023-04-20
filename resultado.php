<?php
require('funciones.php');
$multiplicador = $_POST['multiplicador'];
$limite = $_POST['limite'];
$multiplos = calcularMultiplos($multiplicador, $limite);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular tabla de multiplicar</title>
    <?php include_once('partials/header.php') ?>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5 ">
            <div class="col-12 col-md-6">
                <h2>La tabla de multiplicar del
                    <?php echo $multiplicador; ?> hasta el
                    <?php echo $limite; ?> es:
                </h2>
                <!-- mensaje de registro -->
                <ul class="list-group list-group-light text-center">
                <?php include_once('partials/foreach.php')  ?>
                </ul>

            </div>


        </div>

    </div>



</body>

</html>