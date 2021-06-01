<?php
    include('ConsultaBD.php');

    $ClientName = $_POST['ClientName'];
    $ClientNum = $_POST['ClientNum'];
    $Phone = $_POST['Phone'];
    $MachineName = $_POST['MachineName'];
    $FechaAlta = $_POST['FechaAlta'];
    $Situation = $_POST['Situation'];
    $Brand = $_POST['Brand'];
    $Model = $_POST['Model'];
    $MachineType = $_POST['MachineType'];
    $SensorIncluded = $_POST['SensorIncluded'];
    $Street = $_POST['Street'];
    $Colonia = $_POST['Colonia'];
    $EntreCalles = $_POST['EntreCalles'];
    $CP = $_POST['CP'];    

    $sql = "INSERT INTO machines (ClientName, ClientNum, Phone, MachineName, FechaAlta, Situation, Brand, Model, MachineType, SensorIncluded, Street, Colonia, EntreCalles, CP) VALUES('$ClientName', '$ClientNum', '$Phone', '$MachineName', TO_DATE('$FechaAlta', 'DD/MM/YYYY'), '$Situation', '$Brand', '$Model', '$MachineType', $SensorIncluded, '$Street', '$Colonia', '$EntreCalles', $CP)";

    ConsultaBD($sql)
?>
