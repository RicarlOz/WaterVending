<?php
    include("ConnectionDB.php");

    $consult = "SELECT ID,Alias,Estatus,Direccion,Producto,Ganancias FROM monitoreodemaquinas";
    $result = consultDB($consult);

    if($result == FALSE)
        die(mysqli_error());

$n=1;
    while($row = mysqli_fetch_array($result))
    {
        $ID[$n] = $row['ID'];
        $Alias[$n] = $row['Alias'];
        $Estatus[$n] = $row['Estatus'];
        $Direccion[$n] = $row['Direccion'];
        $Producto[$n] = $row['Producto'];
        // $Ganancias[$n] = $row['Ganancias'];
        $Ganancias[$N] = $_SESSION["S_Email"];
        $n++;
    }
    

?>

<!DOCTYPE html>

<html>

<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <link rel="stylesheet" href="css/style.css" />

</head>

<body>
    <header>

        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menú</span>
    <div id="mySidenav1" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="InfoMachines.html">Página Principal</a>
        <a href="PaymentMethod.html">Método de Pago</a>
        <a href="RegisterMachines.html">Registro máquina</a>
        <a href="ModifyMachines.html">Modificar máquina</a>
    </div> 
        
    </header>
    <main>
        <fieldset class="showData">
        <h2 class="formHeader">Monitoreo Máquinas</h2>
        <div id="maquinaStatus">
            <table id="maquinaTable">
                <thead>
                    <tr>
                        <th>Alias</th>
                        <th>Estatus</th>
                        <th>Direccion</th>
                        <th>Producto</th>
                        <th>Ganancias</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $Alias[1];?></td>
                        <td><?php echo $Estatus[1];?></td>
                        <td><?php echo $Direccion[1];?></td>
                        <td><?php echo $Producto[1];?></td>
                        <td><?php echo $Ganancias[1];?></td>
                    </tr>
                    <tr>
                        <td><?php echo $Alias[2];?></td>
                        <td><?php echo $Estatus[2];?></td>
                        <td><?php echo $Direccion[2];?></td>
                        <td><?php echo $Producto[2];?></td>
                        <td><?php echo $Ganancias[2];?></td>
                    </tr>
                    <tr>
                        <td><?php echo $Alias[3];?></td>
                        <td><?php echo $Estatus[3];?></td>
                        <td><?php echo $Direccion[3];?></td>
                        <td><?php echo $Producto[3];?></td>
                        <td><?php echo $Ganancias[3];?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        </fieldset>
        <fieldset id="ingresos" class="showData">
            <h2 class="formHeader">Ingresos</h2>
            <ul class="toggle">
                <li>
                    <input type="radio" name="incomeBy" value=0 id="todosIncome" checked="checked" />
                    <label for="todosIncome">[*]Todos</label>
                </li>
                <li>
                <input type="radio" name="incomeBy" value=1 id="aguaIncome"/>
                <label for="aguaIncome">[1]Agua</label>
                </li>
                <li>
                <input type="radio" name="incomeBy" value=2 id="pinolIncome"/>
                <label for="pinolIncome">[2]Pinol</label>
                </li>
                <li>
                <input type="radio" name="incomeBy" value=3 id="cloroIncome"/>
                <label for="cloroIncome">[3]Cloro</label>
                </li>
                <li>
                <input type="radio" name="incomeBy" value=4 id="fabulosoIncome"/>
                <label for="fabulosoIncome">[4]Fabuloso</label>
                </li>
                <li>
                <input type="radio" name="incomeBy" value=5 id="suavitelIncome"/>
                <label for="suavitelIncome">[5]Suavitel</label>
                </li>
            </ul>
            <br>
            <br>
            <h3>Ingresos Hoy</h3>
            <p>$ 0</p>
        </fieldset>
    </main>
    <footer></footer>
</body>
<script src="js/registerMachines.js"></script>

</html>