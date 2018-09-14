<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Proyecto</title>
    </head>
    <body>
        
        <h1>
            <?php
                //Estp es un comentario
                $PrimeraVariable=2;
                $SegundaVariable=5;
                echo "<br>";
                echo $PrimeraVariable + $SegundaVariable;
                 echo "<br>";
                 $Lenguaje="PHP";
                if ($PrimeraVariable== 2 && $SegundaVariable==5){
                    echo 'Soy menor'."<br>";
                }
                else {
                    echo 'Soy Mayor'."<br>";
                }
                switch ($Lenguaje){
                    case "PHP":
                        echo 'PHP';
                        break;
                    case"Hmtl":
                        echo 'Html';
                        break;
                }
                    
            ?>
        </h1>
        <p>
            <h2>  
                <?php
                    echo 'Esto es otra sección';
                ?>
            </h2> 
        </p>
    </body>
</html>
