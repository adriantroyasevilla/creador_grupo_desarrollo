<?php
require_once 'php/funciones.php';

if(!empty($_POST['numPersonas'])){

    $numPersonas = $_POST['numPersonas'];
}

if(!empty($_POST['especialidad'])){
$especialidad = $_POST['especialidad'];
}

?>
<!-- HTML5 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <!-- links externos -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Fontawesome -->
</head>

<body>

    <!-- HEADER -->
    <header>
        <h1>RESULTADOS:</h1>
    </header>
<div class="margenVertical"></div>
    <!-- SECTION -->
    <section class="zonaCentral">
        <?php
        if(!empty($numPersonas) & !empty($especialidad)){
            random($numPersonas,$especialidad,$alumnos);
        }
        ?>
    </section>

</body>

</html>