<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variables y constante en PHP</title>
</head>
<body>
    <h1>variables y constante en PHP</h1>
    <?php
    //las variables se representan anteponiendo el simbolo $ a la palabra que se usa como variable
    //PHP es sensitive case
    //las variables no pueden empezar con un numero
    // en PHP no es necesario especificar el tipo de variable pero si se debe saber cuando utilizar las comillas "", para el caso de variables en tipo cadena 
    //asignamos a la variable a el valor 5
    $a = 5; 
    $b = "7";
    echo"<h2>variables</h2>";
    //mostrar el valor de a
    echo($a) ;
    echo"<br>";
    //mostrar el valor de b
    echo($b);
    echo "<br>";
    echo"<h2>constantes</h2>";
    /*el valor de una constantes no cambia o se mantiene fijo durante la ejecución de la pagina */ 
    //la forma de definir las constantes en PHP es mediante el uso de la instrucción define
        define("capital_colombia",  value: "bogota") 
    ?>
</body>
</html>