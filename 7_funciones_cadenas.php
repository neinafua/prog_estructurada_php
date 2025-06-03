<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones para manipular cadenas</title>
</head>
<body>
    <h1>Funciones para manipular cadenas</h1>

    <h2>función substr()</h2>
    <p>La función <code>substr()</code> se usa para sacar una parte de una cadena. Le dices desde dónde empezar y cuántos caracteres quieres.</p>
    <?php
$saludo = "Hola a todos";

// Sacar "Hola" (desde la posición 0, 4 caracteres)
$parte1 = substr($saludo, 0, 4);
echo "Ejemplo substr():\n";
echo "Cadena original: \"$saludo\"\n";
echo "Parte 1 (los primeros 4 caracteres): \"$parte1\"\n"; // Salida: "Hola"

// Sacar "todos" (desde la posición 8 hasta el final)
$parte2 = substr($saludo, 8);
echo "Parte 2 (desde el carácter 8 hasta el final): \"$parte2\"\n"; // Salida: "todos"
echo "\n";
?>

    <h2>función ord()</h2>
    <p>La función <code>ord()</code> te da el número que representa al primer carácter de una cadena. Cada letra o símbolo tiene un número asignado.</p>
    <?php
$letra1 = 'X';
$letra2 = 'c';
$numero_caracter = '5';

echo "Ejemplo ord():\n";
echo "El número de la letra '$letra1' es: " . ord($letra1) . "\n"; // Salida: 88
echo "El número de la letra '$letra2' es: " . ord($letra2) . "\n"; // Salida: 99
echo "El número del carácter '$numero_caracter' es: " . ord($numero_caracter) . "\n"; // Salida: 53
echo "\n";
?>

    <h2>función printf()</h2>
    <p>La función <code>printf()</code> imprime texto con un formato especial. Puedes insertar valores (números, texto) en lugares específicos de tu frase.</p>
    <?php
$nombre_persona = "María";
$edad_persona = 28;
$precio_producto = 150.75;

echo "Ejemplo printf():\n";
printf("La persona se llama %s y tiene %d años.\n", $nombre_persona, $edad_persona); // %s para texto, %d para número entero
printf("El producto cuesta %.2f pesos.\n", $precio_producto); // %.2f para número con 2 decimales
echo "\n";
?>

    <h2>función sprintf()</h2>
    <p>La función <code>sprintf()</code> es como <code>printf()</code>, pero en lugar de imprimir el texto, lo guarda en una variable para que lo uses después.</p>
    <?php
$ciudad = "Bogotá";
$temperatura = 20;

echo "Ejemplo sprintf():\n";
$mensaje_clima = sprintf("Hoy en %s la temperatura es de %d grados Celsius.", $ciudad, $temperatura);
echo $mensaje_clima . "\n"; // Imprimimos la variable que ahora contiene el mensaje formateado
echo "\n";
?>

    <h2>función strtolower()</h2>
    <p>La función <code>strtolower()</code> convierte todas las letras de una cadena a minúsculas.</p>
    <?php
$texto_mayusculas = "ESTE ES UN TEXTO EN MAYÚSCULAS";

echo "Ejemplo strtolower():\n";
$texto_minusculas = strtolower($texto_mayusculas);
echo "Original: \"$texto_mayusculas\"\n";
echo "En minúsculas: \"$texto_minusculas\"\n"; // Salida: "este es un texto en mayúsculas"
echo "\n";
?>

    <h2>función strtoupper()</h2>
    <p>La función <code>strtoupper()</code> convierte todas las letras de una cadena a mayúsculas.</p>
    <?php
$texto_minusculas_original = "este es un texto en minúsculas";

echo "Ejemplo strtoupper():\n";
$texto_mayusculas_convertido = strtoupper($texto_minusculas_original);
echo "Original: \"$texto_minusculas_original\"\n";
echo "En mayúsculas: \"$texto_mayusculas_convertido\"\n"; // Salida: "ESTE ES UN TEXTO EN MINÚSCULAS"
echo "\n";
?>

    <h2>función preg_match()</h2>
    <p>La función <code>preg_match()</code> busca un patrón específico dentro de una cadena. Es la forma moderna y recomendada de buscar texto usando "expresiones regulares" (que son como reglas de búsqueda avanzadas). Si encuentra el patrón, te dice que sí y puede sacar la parte que encontró.</p>
    <?php
$frase = "El carro es rojo.";
$patron_buscar = "/carro/"; // Buscamos la palabra "carro"

echo "Ejemplo preg_match():\n";
if (preg_match($patron_buscar, $frase)) {
    echo "¡Sí! La palabra 'carro' se encontró en la frase.\n";
} else {
    echo "No se encontró la palabra 'carro'.\n";
}

$frase_numero = "Mi número favorito es el 7.";
$patron_digito = "/[0-9]/"; // Buscamos cualquier dígito (número del 0 al 9)

if (preg_match($patron_digito, $frase_numero, $coincidencia)) {
    echo "Se encontró un dígito: " . $coincidencia[0] . "\n"; // Salida: "7"
} else {
    echo "No se encontró ningún dígito.\n";
}
echo "\n";
?>

    <h2>función preg_match_all()</h2>
    <p>La función <code>preg_match_all()</code> es como <code>preg_match()</code>, pero busca **todas** las veces que aparece un patrón en una cadena, no solo la primera. Es muy útil cuando necesitas encontrar todas las ocurrencias de algo. Puedes usar la letra 'i' al final del patrón (por ejemplo, <code>/palabra/i</code>) para que no le importe si son mayúsculas o minúsculas.</p>
    <?php
$texto_colores = "El color rojo, el color azul y el color ROJO son bonitos.";
$patron_color = "/rojo/i"; // Buscamos "rojo" sin importar mayúsculas/minúsculas

echo "Ejemplo preg_match_all():\n";
if (preg_match_all($patron_color, $texto_colores, $todas_coincidencias)) {
    echo "Se encontraron las siguientes veces la palabra 'rojo':\n";
    foreach ($todas_coincidencias[0] as $color_encontrado) {
        echo "- " . $color_encontrado . "\n"; // Salida: "- rojo", "- ROJO"
    }
} else {
    echo "No se encontró la palabra 'rojo'.\n";
}

$lista_frutas = "Manzana, Pera, Manzana, Uva, Manzana.";
$patron_fruta = "/Manzana/";

if (preg_match_all($patron_fruta, $lista_frutas, $frutas_encontradas)) {
    echo "\nSe encontraron las siguientes manzanas:\n";
    foreach ($frutas_encontradas[0] as $fruta) {
        echo "- " . $fruta . "\n"; // Salida: "- Manzana", "- Manzana", "- Manzana"
    }
} else {
    echo "No se encontraron manzanas.\n";
}
echo "\n";
?>
</body>
</html>
