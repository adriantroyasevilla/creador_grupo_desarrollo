<?php

$alumnos = [
    'Jorge' => 'Laravel',
    'Julia' => 'PHP',
    'Jose' => 'HTML5/CSS3',
    'Mateo' => 'Javascript',
    'Jaume' => 'Java',
    'Cristian' => 'Laravel',
    'Lolo' => 'Java',
    'Adrian' => 'PHP',
    'Fran' => 'Laravel',
    'Alejandro' => 'HTML5/CSS3',
    'Petro' => 'HTML5/CSS3',
    'Jordi' => 'Sass/Less',
    'David' => 'Json/XML',
    'Luis' => 'Json/XML',
    'Alexis' => 'Python',
    'Toni' => 'Python'
];

$cantidad = $_POST['cantidad'];
$especialidad = $_POST['especialidad'];

$especialistas = [];

foreach($alumnos as $nombre => $valor){
    if($valor == $especialidad){

        //Almacena en memoria (en el array $especialistas) las personas aptas para la especialidad seleccionada en el formulario
        array_push($especialistas,$nombre);
    }
}

//Si el numero de especialistas es menor a la cantidad que nos indican en el formulario
if(count($especialistas) < $cantidad){
    echo 'No hay suficientes especialistas';
} else {
    for($i=0;$i<$cantidad;$i++){

        $especialista = $especialistas[rand(0, count($especialistas) -1)] . '<br>';
        echo $especialista;
        unset($especialistas[$especialista]);
    }
    array_rand($especialistas,$cantidad);

    
}

