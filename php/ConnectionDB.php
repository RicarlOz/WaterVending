<?php
// Server Data Base configuration

define("cServer", "localhost");
define("cUser", "prueba");
define("cPassword", "password");
define("cBd", "watervendingproject");

function consultDB($consult) {
    
    $connection = mysqli_connect(cServer, cUser, cPassword, cBd);
    $result = mysqli_query($connection, $consult);

    if($result)
        return $result;
    else
        return FALSE;

    msqli_close($connection);
    
}

?>