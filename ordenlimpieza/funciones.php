<?php
    $usuarios=array("user1","user2","user3");
    $ubicaciones=array("Cocina","Baño","Salón");
    $contador = 0;
    while($contador < 10){
        $temporal=array_shift($ubicaciones);
        array_push($ubicaciones,$temporal);
        print_r($ubicaciones);
        $contador = $contador+1;
    }
?>