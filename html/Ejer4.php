<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer4</title>
</head>
<body>
    
    <?php
        $cadena1 = "Comer verduras";
        $cadena2 = "es realmente sano";
        $cadena3 = $cadena1 ." ". $cadena2;
        echo $cadena3;
        $pos = strpos($cadena1 , "verduras");
        echo '<br>';
        echo 'La palabra "verduras" se encuentra en la posicion numero: '. $pos;
    ?>

</body>
</html>