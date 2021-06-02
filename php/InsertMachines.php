<?php
session_start();
include("ConnectionDB.php");

$email = $_SESSION["Email"];

$consult = "SELECT * FROM Users WHERE Email = '$email'";
$result = consultDB($consult);

if ($row = mysqli_fetch_array($result)) {
    $user = $row["UserID"];
}

$alias = $_POST['Alias'];
$FechaAlta = date("Y/m/d");
$status = $_POST['Estatus'];
$brand = $_POST['Brand'];
$model = $_POST['Model'];
$product = $_POST['Product'];
$sensor = $_POST['SensorIncluded'];
$state = $_POST['Estado'];
$city = $_POST['City'];
$colonia = $_POST['Colonia'];
$street = $_POST['Street'];

$consult = "INSERT INTO machines (
        Alias, 
        FechaAlta, 
        Estatus, 
        Marca, 
        Modelo, 
        Producto, 
        SensorIncluido, 
        Estado, 
        Municipio, 
        Colonia, 
        Calle, 
        UserID
        ) 
        VALUES(
            '$alias',
            '$FechaAlta',
            '$status',
            '$brand',
            '$model',
            '$product',
            $sensor,
            '$state',
            '$city',
            '$colonia',
            '$street',
            $user
            )";

$result = consultDB($consult);

$consult = "SELECT MAX(MachineID) AS MachineID FROM Machines WHERE UserID = $user";
$mach = consultDB($consult);

if ($row = mysqli_fetch_array($mach)) {
    $machine = $row["MachineID"];
}

$ganancias = rand(0, 1000);

$consult = "INSERT INTO machineearnings VALUES (
        $ganancias, 
        $machine
        )";

consultDB($consult);

if ($result == FALSE) {
    echo "Hubo un problema registrando los datos, por favor intentelo de nuevo.";
} else {
    echo "Gracias por su registro, los datos han sido guardados correctamente.";
}

?>