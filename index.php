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
        <?php
     include_once './Cake.php';
     
     $stock = [new Cake('gato1', 100000), new Cake("gato2", 666666), 
         new Cake("gato3", 44444)];
     
         foreach ($stock as $c){
             echo $c;
         }
     
     
             
        ?>
    </body>
</html>
