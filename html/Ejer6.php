<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer6</title>
</head>
<body>
    
    <table border = 1>
    <td>X</td>

    <?php
        $numeros = 1;
        
        for ($i = 1;$i <=10;$i++)
        {
    
    ?>
            <td><?php echo $i ?></td>

        <?php
        }
        ?>

    <?php
        $n = 1;
        
        for ($i = 1;$i <=10;$i++)
        {
            echo "<tr><td>". $i ."</td></tr>";
        
    ?>
        
        <tr>
            <?php
                $mul = 0;
                
                for ($x = 1;$x <=10;$x++) 
                {
                    $mul++;
                    $total= $mul * $i;
                    
                   // echo "<td>". $x ."</td>";
                }

            ?>

        </tr>
        <?php
        }
        ?>

        <?php
        
        ?> 
            
    </table>

</body>
</html>