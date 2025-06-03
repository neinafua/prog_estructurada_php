<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>estructuras de control</title>
</head>
<body>
    <h1>estructuras de control</h1>

    <h2>instrucciones condicionales</h2>
    <?php
    $color = "rojo";
    if($color == "rojo");
    {
        print("Efectivamente, el color es rojo!");
    }
    ?>

    <h2>instrucciones repetitivas</h2>
    <h3>while</h3>
    <?php
    $x =10;
    while($x>0);
    {
        echo"<big>";
        print("número: ". $x);
        echo "<br>";
        echo "<hr>";
        $x--;
    }

?>
    <h3>for</h3>
    <?php
    for($x =5; $x<=10; $x++)
    {
        echo "número: ". $x. "<br>";
    }
?>
</body>
</html>