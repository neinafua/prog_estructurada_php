<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funciones en PHP</title>
</head>
<body>
    <h1>funciones</h1>
    <p>una función es un bloque de codigo que introducimos en nuestra pagina y que puede ser utilizado a lo largo detodo nuestro codigo php. La principal ventaja de las funciones es que no permite ahorrar codigo. </p>
    <p>para definir funciones se emplea la sentencia function. Ejemplo: function suma($).</p>
    <p>las funciones pueden recibir tantos argumentos como sean necesarios, separandolos con comas.</p>
<?php
function sumar ($x , $y):mixed
{
    $z = $x + $y;
    return $z;
}
//invoco o llamo la función sumar 
$resultado = sumar(x: 5, y: 12);
echo "resultado: ". $resultado;
?>
</body>
</html>