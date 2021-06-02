<?php
    include('ConnectionDB.php');

    $alias = $_POST['Alias'];
    $status = $_POST['Estatus'];
    $brand = $_POST['Brand'];
    $model = $_POST['Model'];
    $product = $_POST['Product'];
    $sensor = $_POST['SensorIncluded'];
    $state = $_POST['Estado'];
    $city = $_POST['City'];
    $colonia = $_POST['Colonia'];
    $street = $_POST['Street'];
    $machine = $_POST['Machine'];

    $sql = "UPDATE machines SET 
        Alias = '$alias', 
        Estatus = '$status', 
        Marca = '$brand', 
        Modelo = '$model', 
        Producto = '$product', 
        SensorIncluido = '$sensor', 
        Estado = '$state', 
        Municipio = '$city', 
        Colonia = '$colonia', 
        Calle = '$street' 
        WHERE Alias = '$machine'";

    $result = consultDB($sql);

    // echo $sql;

    if ($result == FALSE) {
        echo "Hubo un problema registrando los datos, por favor intentelo de nuevo.";
    } else {
        echo "Gracias por su registro, los datos han sido guardados correctamente.";
    }

?>
