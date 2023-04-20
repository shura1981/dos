<?php
require('funciones.php');
$multiplicador = $_POST['multiplicador'];
$multiplos = fibonacciArray($multiplicador);
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
                <h1>TALLER PHP</h1>
                <p class=" mb-4">Ingresa el número que deseas multiplicar en la función fibonnaci:</p>
                <!-- formulario de registro -->
                <form action="fibonnaci.php" method="post">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input required type="number" id="form1Example1" name="multiplicador" class="form-control" />
                        <label class="form-label" for="form1Example1">Número a multiplicar</label>
                    </div>


                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary btn-block">Calcular</button>
                    </div>
                </form>
                <!-- mensaje de registro -->
                <?php if (count($multiplos) > 1): ?>
                    <h2 class="mt-5">
                        La secuencia fibonnaci hasta el número
                        <?php echo $multiplicador; ?> es:
                    </h2>
                    <ul class="list-group list-group-light text-center">
                        <?php include_once('partials/foreachFibonnaci.php') ?>
                    </ul>

                <?php endif; ?>

                <?php if (count($multiplos) > 1): ?>
                    <button type="button" class="btn btn-danger btn-block mb-5">Reiniciar</button>
                <?php endif; ?>
            </div>


        </div>

    </div>

    <script>
        btnReiniciar = document.querySelector('.btn-danger');
        if (btnReiniciar) {
            btnReiniciar.addEventListener('click', () => {
                window.location.href = 'fibonnaci.php';
            })
        }

    </script>

</body>

</html>