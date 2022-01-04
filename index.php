<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Decision Simple</title>
    </head>
    <body>
        <br><h1> ---"USO DE VECTORES"---</h1></br> 
        <p> Son estructuras almacenadas que contienen números de variables bajo el mismo identificador.
        <p>Para la computadora eso significa que va a utilizar un numero definido de espacio que están en la memoria 
        para acceder a esta variable bajo el mismo identificador.</p>
        <br><h1> ---"DECLARACIÓN DE VECTORES"---</h1></br>
        <P>Son utiles para almacenar puntos de datos que tiene en relación entre sí o bien, cuando el mismo datos tiene diferentes valores.
        <p> por ejemplo: 
        <p>Edad de un grupo de personas.
        <p> Edades 20,17 y 13, los códigos de programación ya esta realizado y imprime el resultado aquí abajo.</p>
        
        <?php
    echo "<h3>________________</h3>";      
    echo "<h2>Decision Simple</h2>";
    echo "<h3>________________</h3><br>";  
    
$edad[0]= 20;
$edad[1]= 17;
$edad[2]= 13;
if ($edad [0]>=18) {
    
        echo "La persona 1 puede ser registrada<br>";
    }
    else {

        echo "La persona 1 no puede ser registrada<br>";
    }
    if ($edad[1]>=18) {

        echo "La persona 2 puede ser registrada<br>";
    }
    else {

        echo "La persona 2 no puede ser registrada<br>";
    }
    if ($edad[2]>=18) {

        echo "La persona 3 puede ser registrada<br>";
    }
    else {

        echo "La persona 3 no puede ser registrada<br>";
    }
?>
        <h1>THANKS YOU!</h1>
        
    </body>
</html>
