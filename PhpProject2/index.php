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
                
             ?>
        </h1>    
       
    </body>
</html>

