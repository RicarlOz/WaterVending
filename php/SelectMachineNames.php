<?php
    include('ConsultaBD.php');
    
    $sql = "SELECT * FROM machines";
    if($resultado = ConsultaBD($sql))
        while($row = mysqli_fetch_array($resultado))
        {
            echo "<option value=$row['MachineName']>$row['MachineName']</option>"
        }
?>