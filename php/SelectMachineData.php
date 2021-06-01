<?php
    include('ConsultaBD.php');

    $MachineName = $_POST['MachineName'];
    
    //$sql = "SELECT * FROM estudiantes where Id = $num";
    $sql = "SELECT * FROM machines";

    if($resultado = ConsultaBD($sql))
        while($row = mysqli_fetch_array($resultado))
        {
            if($MachineName == $row['MachineName'])
            {
                echo  "$row['ClientName'];$row['ClientNum'];$row['Phone'];$row['MachineName'];$row['FechaAlta'];$row['Situation'];$row['Brand'];$row['Model'];$row['MachineType'];$row['SensorIncluded'];$row['Street'];$row['Colonia'];$row['EntreCalles'];$row['CP']"; 
            }
        }
?>