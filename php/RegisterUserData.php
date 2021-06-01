<?php
session_start();
include("ConnectionDB.php");

/* Take data by $_POST function */
$name = $_POST['firstName'];
$lname = $_POST['lastName'];
$email = $_POST['email'];
$pswrd = $_POST['password'];
$phone = $_POST['phone'];
$state = $_POST['state'];
$city = $_POST['city'];
$neigh = $_POST['colonia'];
$street = $_POST['street'];
$extNum = $_POST['extNum'];
$intNum = $_POST['intNum'];
$cp = $_POST['cp'];

$consult = "INSERT INTO users (Nombre, Apellidos, Email, Contraseña, Telefono, Estado, Municipio, Colonia, Calle, Numero_Exterior, Numero_Interior, CP) VALUES('$name', '$lname', '$email', '$pswrd', '$phone', '$state', '$city', '$neigh', '$street', '$extNum', '$intNum', '$cp')";

$result = consultDB($consult);

if($result == FALSE) {
    echo "Hubo un problema registrando sus datos, por favor intentelo de nuevo.";
}
else {
    echo "Gracias por registrarse, sus datos han sido guardados correctamente.";
}

?>