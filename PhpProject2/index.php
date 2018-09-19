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
        <pre>
        <?php
            $lenguajes=['html','css','JavaScript'];
            print_r($lenguajes);
            echo '<br>';
            var_dump($lenguajes);
            
         ?>
        </pre>
        <h1>
            <?php
        
            
          //---Funcion sin parametros 
                function saludar(){
                    echo '<h2>'."Hola ....".'</h2>';
                }
                 saludar ();
              
            //------Funcion con parametros
                function usuario($nombres,$tel){
                    foreach($nombres as $nombre){
                    echo 'Nombre:'.$nombre.'<br>';
                    }
                    echo 'Telefono:'.$tel.'<br>';
                }
                echo '<br>';
                $usuarios=["juan","Felipe","Alejandro"];
                usuario ($usuarios,12345);
                
                echo"<br>";
                function suma ($num1 ,$num2){
                    //$sumar=$num1+$num2;
                    //return $sumar;
                    return $num1+$num2;
                }
                $result=suma(2,4);
                 echo "suma:".$result."<br>";
                 
                 //Acceder a variables globales desde funcion
                 $agenda=array();
                 function agendar($nombre,$tel){
                    global  $agenda;//Accedo a la varible global agenda
                    $agenda []=$nombre;
                    $agenda []=$tel;
                 }
                 agendar("Alejandro",12345);
                 print_r ($agenda);
                
             ?>
        </h1>    
       
    </body>
</html>

