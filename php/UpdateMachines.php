<?php
    include('ConsultaBD.php');


    $num = $_POST['Num'];
    $nombre = $_POST['Nom'];
    $apellido = $_POST['Ape'];
    $nota = $_POST['Not'];
    
    //$sql = "SELECT * FROM estudiantes where Id = $num";

    $sql = "UPDATE estudiantes SET Nombre='$nombre', Apellido='$apellido', Nota=$nota WHERE Id=$num";

    if(!ConsultaBD($sql))
        echo "error al guardar los datos";
    else
        echo "<br><br>los siguientes datos han sido guardados correctamente nombre = ".$nombre.", apellido = ".$apellido.", nota = ".$nota;
?>
