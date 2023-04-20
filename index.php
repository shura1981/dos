<?php
require('funciones.php');
$multiplicador = $_POST['multiplicador'];
$limite = $_POST['limite'];
$multiplos = calcularMultiplos($multiplicador, $limite);
$destino = 1;
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
                <p class=" mb-4">Ingresa el número que deseas multiplicar y el límite de multplicación:</p>
                <!-- formulario de registro -->
                <form action="<?php echo $destino === 1 ? 'index.php' : 'resultado.php' ?>" method="post">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input required type="number" id="form1Example1" name="multiplicador" class="form-control" />
                        <label class="form-label" for="form1Example1">Número a multiplicar</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input required type="numbre" id="form1Example2" name="limite" class="form-control" />
                        <label class="form-label" for="form1Example2">Límite de multiplicación</label>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary btn-block">Calcular</button>
                    </div>
                </form>
                <!-- mensaje de registro -->
                <?php if (count($multiplos) > 0): ?>
                    <h2 class="mt-5">La tabla de multiplicar del
                        <?php echo $multiplicador; ?> hasta el
                        <?php echo $limite; ?> es:
                    </h2>
                    <ul class="list-group list-group-light text-center">
                        <?php include_once('partials/foreach.php') ?>
                    </ul>

                <?php endif; ?>

                <?php if (count($multiplos) > 0): ?>
                    <button type="button" class="btn btn-danger btn-block mb-5">Reiniciar</button>
                <?php endif; ?>
            </div>


        </div>

    </div>

    <script>
        btnReiniciar = document.querySelector('.btn-danger');
        if (btnReiniciar) {
            btnReiniciar.addEventListener('click', () => {
                window.location.href = 'index.php';
            })
        }

    </script>

</body>

</html>