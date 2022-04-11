<?php
$usuarios = array("user1", "user2", "user3");
$ubicaciones = array("Cocina", "Baño", "Salón");
// $fechainicial = mktime(0, 0, 0, 3, 28, 2022);
// time();
// echo "<BR>";
// echo $fechainicial;

# Se podra modificar con conexión de bbdd
function calculofecha()
{
    $fechainicial = mktime(0, 0, 0, 3, 28, 2022);
    $calculo = time()-$fechainicial;
    $semanas = $calculo/604800;
    return($semanas);
}
function Desordenararray($array){
    $contador = 0;
    while ($contador < calculofecha()) {
        $temporal = array_shift($array);
        array_push($array, $temporal);
        $contador = $contador + 1;
    }
    return $array;
}
function escogerdeARRAY($dato,$array){
foreach($array as $key => $value){
    if ($dato ==$value){
        return $key;
    }
}
}
function devolverdatos($dato){
    $usuarios = array("user1", "user2", "user3");
    $ubicaciones = array("Cocina", "Baño", "Salón");
    $ubicaciones = Desordenararray($ubicaciones);
    $claveuser = escogerdeARRAY($dato,$usuarios);
    # Escoger la limpieza de la proxima semana
    if ($claveuser >= (count($ubicaciones)-1)){
        $nextweek = 0;
    }
    else{
        $nextweek = $claveuser+1;
    }
    $timetable = array($ubicaciones[$claveuser],$ubicaciones[$nextweek]);
    return $timetable;
}
?>
