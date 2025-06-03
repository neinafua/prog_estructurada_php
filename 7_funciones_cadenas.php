<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones para manipular cadenas</title>
</head>
<body>
    <h1>funciones para manipular cadenas</h1>
    <h2>función substr()</h2>
    <p>La función <code>substr()</code> se utiliza para extraer una parte de una cadena (subcadena). Permite especificar la posición de inicio y, opcionalmente, la longitud de la subcadena a extraer.</p>
    <?php
$cadena = "Hola Mundo Programación";

// Obtener una subcadena desde la posición 5 con longitud 5
$subcadena1 = substr($cadena, 5, 5); // Resultado: "Mundo"
echo "Ejemplo substr():\n";
echo "Cadena original: \"$cadena\"\n";
echo "Subcadena (desde la posición 5, longitud 5): \"$subcadena1\"\n";

// Obtener una subcadena desde la posición 11 hasta el final
$subcadena2 = substr($cadena, 11); // Resultado: "Programación"
echo "Subcadena (desde la posición 11 hasta el final): \"$subcadena2\"\n";

// Obtener una subcadena usando una posición negativa (cuenta desde el final)
$subcadena3 = substr($cadena, -13, 12); // Resultado: "Programación"
echo "Subcadena (desde la posición -13, longitud 12): \"$subcadena3\"\n";
echo "\n";
?>
    <h2>función ord()</h2>
    <p>La función <code>ord()</code> devuelve el valor ASCII (o el valor del punto de código Unicode) del primer carácter de una cadena. Es útil para trabajar con la representación numérica de los caracteres.</p>
    <?php
$caracter1 = 'A';
$caracter2 = 'a';
$caracter3 = '€'; // Un carácter Unicode

echo "Ejemplo ord():\n";
echo "Valor ASCII de '$caracter1': " . ord($caracter1) . "\n"; // Resultado: 65
echo "Valor ASCII de '$caracter2': " . ord($caracter2) . "\n"; // Resultado: 97
echo "Valor Unicode de '$caracter3': " . ord($caracter3) . "\n"; // Resultado: 8364 (para UTF-8)
echo "\n";
?>
    <h2>función printf()</h2>
    <p>La función <code>printf()</code> imprime una cadena formateada directamente en la salida. Permite controlar el formato de variables (enteros, flotantes, cadenas) usando especificadores de formato.</p>
    <?php
$nombre = "Juan";
$edad = 30;
$altura = 1.75;
$saldo = 1234.567;

echo "Ejemplo printf():\n";
printf("Mi nombre es %s y tengo %d años.\n", $nombre, $edad); // Resultado: Mi nombre es Juan y tengo 30 años.
printf("Mi altura es %.2f metros.\n", $altura); // Resultado: Mi altura es 1.75 metros. (2 decimales)

// Corrección: Se utiliza number_format() para formatear el saldo y evitar el error del especificador %'f
// que puede no ser soportado por todas las configuraciones de PHP.
$saldo_formateado = number_format($saldo, 2, '.', ','); // 2 decimales, '.' como separador decimal, ',' como separador de miles
printf("Saldo actual (formateado con number_format): %s\n", $saldo_formateado);

printf("Saldo actual (con 2 decimales): %0.2f\n", $saldo); // Resultado: Saldo actual: 1234.57 (2 decimales con padding si aplica)
echo "\n";
?>
    <h2>función sprintf()</h2>
    <p>La función <code>sprintf()</code> es similar a <code>printf()</code>, pero en lugar de imprimir, devuelve la cadena formateada como un string. Esto es útil cuando necesitas almacenar la cadena formateada en una variable para uso posterior.</p>
    <?php
$producto = "Laptop";
$precio = 999.99;
$cantidad = 2;

echo "Ejemplo sprintf():\n";
$mensaje_compra = sprintf("Has comprado %d unidades de %s por un total de $%.2f.\n", $cantidad, $producto, $precio * $cantidad);
echo $mensaje_compra; // Resultado: Has comprado 2 unidades de Laptop por un total de $1999.98.

$datos_usuario = sprintf("Usuario: %s, Edad: %d", "Ana", 25);
echo $datos_usuario . "\n"; // Resultado: Usuario: Ana, Edad: 25
echo "\n";
?>
    <h2>función strtolower()</h2>
    <p>La función <code>strtolower()</code> convierte todos los caracteres alfabéticos de una cadena a minúsculas, lo que es útil para normalizar texto o realizar comparaciones insensibles a mayúsculas y minúsculas.</p>
    <?php
$cadenaOriginal = "HoLa MuNdO PyThOn";

echo "Ejemplo strtolower():\n";
$cadenaMinusc = strtolower($cadenaOriginal);
echo "Cadena original: \"$cadenaOriginal\"\n";
echo "Cadena en minúsculas: \"$cadenaMinusc\"\n"; // Resultado: "hola mundo python"
echo "\n";
?>
    <h2>función strtoupper()</h2>
    <p>La función <code>strtoupper()</code> convierte todos los caracteres alfabéticos de una cadena a mayúsculas, lo que puede ser útil para resaltar texto o para formatos específicos.</p>
    <?php
$cadenaOriginal = "eJeMpLo De TeXtO";

echo "Ejemplo strtoupper():\n";
$cadenaMayusc = strtoupper($cadenaOriginal);
echo "Cadena original: \"$cadenaOriginal\"\n";
echo "Cadena en mayúsculas: \"$cadenaMayusc\"\n"; // Resultado: "EJEMPLO DE TEXTO"
echo "\n";
?>
    <h2>función preg_match()</h2>
    <p>La función <code>preg_match()</code> realiza una búsqueda de una expresión regular compatible con Perl (PCRE) en una cadena. Es la alternativa moderna y recomendada a la obsoleta función <code>ereg()</code>. Devuelve 1 si se encuentra una coincidencia y 0 si no, y puede capturar subcadenas coincidentes.</p>
    <?php
// Ejemplo de preg_match()
$cadena = "El número de teléfono es 123-456-7890.";
$patron = "/([0-9]{3})-([0-9]{3})-([0-9]{4})/"; // Patrón para buscar un número de teléfono

echo "Ejemplo preg_match():\n";
if (preg_match($patron, $cadena, $matches)) {
    echo "Se encontró un número de teléfono: " . $matches[0] . "\n";
    echo "Prefijo: " . $matches[1] . "\n";
    echo "Medio: " . $matches[2] . "\n";
    echo "Sufijo: " . $matches[3] . "\n";
} else {
    echo "No se encontró ningún número de teléfono.\n";
}
echo "\n";
?>
    <h2>función preg_match_all()</h2>
    <p>La función <code>preg_match_all()</code> realiza una búsqueda global de todas las coincidencias de una expresión regular en una cadena. Es útil cuando necesitas encontrar múltiples ocurrencias de un patrón, a diferencia de <code>preg_match()</code> que solo encuentra la primera. Esta función reemplaza el uso de la obsoleta <code>eregi()</code> para búsquedas globales (especialmente si se combinaba con bucles) y permite búsquedas insensibles a mayúsculas/minúsculas usando la bandera <code>i</code>.</p>
    <?php
// Ejemplo de preg_match_all()
$cadena_multiple = "Mi correo es user1@example.com y el de mi amigo es user2@domain.net. También tengo info@test.org.";
$patron_correo = "/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/"; // Patrón para buscar correos electrónicos

echo "Ejemplo preg_match_all():\n";
if (preg_match_all($patron_correo, $cadena_multiple, $matches_all)) {
    echo "Se encontraron los siguientes correos electrónicos:\n";
    foreach ($matches_all[0] as $correo) {
        echo "- " . $correo . "\n";
    }
} else {
    echo "No se encontraron correos electrónicos.\n";
}

// Ejemplo de preg_match_all() con bandera 'i' (insensible a mayúsculas/minúsculas)
$cadena_case_insensitive = "PHP es genial. php es un lenguaje popular. PHP es muy usado.";
$patron_php = "/php/i"; // Patrón para buscar "php" ignorando mayúsculas/minúsculas

echo "\nEjemplo preg_match_all() con bandera 'i':\n";
if (preg_match_all($patron_php, $cadena_case_insensitive, $matches_case_insensitive)) {
    echo "Se encontraron las siguientes ocurrencias de 'php' (ignorando mayúsculas/minúsculas):\n";
    foreach ($matches_case_insensitive[0] as $match) {
        echo "- " . $match . "\n";
    }
} else {
    echo "No se encontraron ocurrencias de 'php'.\n";
}
echo "\n";
?>
</body>
</html>
