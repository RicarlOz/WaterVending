<?php
    include('ConnectionDB.php');

    $alias = $_POST['Alias'];
    
    $sql = "SELECT * FROM machines";

    if($resultado = consultDB($sql)) {
        while($row = mysqli_fetch_array($resultado))
        {
            if($alias == $row['Alias'])
            {
                $status = $row['Estatus'];
                $brand = $row['Marca'];
                $model = $row['Modelo'];
                $product = $row['Producto'];
                $sensor = $row['SensorIncluido'];
                $state = $row['Estado'];
                $city = $row['Municipio'];
                $colina = $row['Colonia'];
                $street = $row['Calle'];

                echo "$alias,$status,$brand,$model,$product,$sensor,$state,$city,$colina,$street";
            }
        }
    }
?>