<?php
session_start();
include('php/ConnectionDB.php');

$found = FALSE;
$email = $_POST['email'];
$pwrd = $_POST['password'];
$_SESSION["Email"] = $email;
$_SESSION["Pwrd"] = $pwrd;

$sql = "SELECT * FROM users";

if (!($result = consultDB($sql))) {
    echo "Problemas con la conexión con la base de datos.";
} else {
    while ($row = mysqli_fetch_array($result)) {
        if ($email == $row["Email"] && $pwrd == $row["Contraseña"]) {
            $found = TRUE;
        }
    }
}
echo $found;
