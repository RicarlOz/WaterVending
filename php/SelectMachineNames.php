<?php
    include('ConnectionDB.php');
    
    $sql = "SELECT * FROM machines";
    if($resultado = consultDB($sql))
        while($row = mysqli_fetch_array($resultado))
        {
            $alias = $row['Alias'];
            echo "<option value=".$alias.">".$alias."</option>";
        }
?>