<?php
include('ConnectionDB.php');

$found = FALSE;
$email = $_POST['email'];

$sql = "SELECT * FROM users";

if (!($result = consultDB($sql))) {
    echo "Problemas con la conexión con la base de datos.";
}
else {
    while ($row = mysqli_fetch_array($result)) {
        if ($email == $row["Email"]) {
            $found = TRUE;
        }
    }
}
echo $found;

?>