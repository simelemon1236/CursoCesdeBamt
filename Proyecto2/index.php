<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>
            <?php
                // Esto es un Comentario
                $PrimeraVariable = 2;
                 $SegundaVariable = 5;
                 $Lenguaje = "HTML";
                echo $PrimeraVariable / $SegundaVariable . "<br>" ;
                if ($PrimeraVariable == 2 && $SegundaVariable == 5){
                    echo 'soy menor'. "<br>";
                }
                else{
                     echo 'soy mayor'. "<br>";
                }
                // -------switch------
                switch ($Lenguaje){
                    case "PHP":
                        echo 'PHP';
                        break;
                    case"JAVASCRIPT" :
                        echo 'JAVASCRIPT';
                        break;
                    case "HTML":
                        echo 'HTML';
                        break;
                }
                // ------ ARREGLOS-----
                echo '<br>';
                $arreglo = [2 , "Hola", 5 ];
                echo $arreglo [1] ;
                print_r($arreglo)
                //---------------------
               // $arreglo = array ("hola", 1,"hola")
                //echo $SegundaVariable + $SegundaVariable;
            ?>   
        </h1>
        <p>
            <h1>
                <?PHP
                    echo 'Esta es otra seccion';
                ?>
             </h1>
        </p>
        // ---------------imprimir areglos con posiciones las listas
        <pre>
            <?PHP
                 
                $dato=array_pop($arreglo);
                print_r($arreglo);
                //Arreglos asociativos
                $usuarios= array ('nombre'=>"juan","Apellido"=>"zabala","Cedula"=>1234);
                echo"<h1>".$usuarios ['nombre']."</h1>";
                //-------------------------------------------
                
                $existe= in_array ("juan",array_values($usuarios));
                var_dump($existe);
                //-----Foreach
                foreach ($usuarios as $user){
                    echo $user."<br>";
                }
                
            ?>
            <ul>
                <?php
                    foreach($usuarios as  $user);
                    echo "<li>".$user."</li>";
                ?>
                
            </ul>
        </pre>
    </body>
</html>

