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
    <section>
        <form action="random.php" method="post">

            <select name="especialidad">
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

            <input type="number" name="cantidad" placeholder = 'nº personas' required>
            <button type="submit">RANDOM</button>
        </form>
    </section>

</body>

</html>