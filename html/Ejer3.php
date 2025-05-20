<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer3</title>
</head>
<body>
    
    <?php   
        $pais = array
        (
            "espana" => array
            (
                "nombre" => "España",
                "lengua" => "Castellano",
                "moneda" => "Euro"
            ) ,
            
            "francia" => array
            (
                "nombre" => "francia",
                "lengua" => "frances",
                "moneda" => "Euro"
            )
            );

            echo $pais ["espana"]["moneda"]; //Muestra por pantalla: Euro
    ?>

</body>
</html>