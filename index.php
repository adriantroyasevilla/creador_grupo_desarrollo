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
        <h1>CREADOR GRUPO DESARROLLO</h1>
    </header>
<div class="margenVertical"></div>
    <!-- SECTION -->
    <section class="zonaCentral">
        <form class="formulario" action="resultado.php" method="post">

            <select name="especialidad" required>
                <option selected="true" disabled="disabled">Selecciona una especialidad</option>
                <option value="HTML5/CSS3">HTML5/CSS3</option>
                <option value="Javascript">Javascript</option>
                <option value="PHP">PHP</option>
                <option value="Json/XML">Json/XML</option>
                <option value="Python">Python</option>
                <option value="Java">Java</option>
                <option value="Sass/Less">Sass/Less</option>
                <option value="Laravel">Laravel</option>
            </select>
            <div class="margenVertical2"></div>
            <input type="number" name="numPersonas" placeholder = 'nº personas' required>
            <div class="margenVertical2"></div>
            <div class="boton">
            <button class="boton_submit" type="submit">RANDOM</button>
            </div>
        </form>   
    </section>

</body>

</html>