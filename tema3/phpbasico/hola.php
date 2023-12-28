<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Hola mundo", "<br>";
    for($i=0; $i<10; $i++){
        echo "linea" .$i, "<br>";
    }

    //Factorial de 6
    $n = 6;
    $f = 1;
    for($i=1; $i<=$n; $i++)
    {
        $f *= $i;
    }
    echo "<br><br>";
    echo "El factorial de " . $n . " es " . $f;
    ?>
</body>
</html>