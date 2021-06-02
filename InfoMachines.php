<?php
session_start();
include("php/ConnectionDB.php");

if (isset($_SESSION["Email"])) {
    $email = $_SESSION["Email"];
}
else {
    header('Location: index.php');
}
$machines = "(";

$Ingresos = 0;
$I_Agua = 0;
$I_Pinol = 0;
$I_Cloro = 0;
$I_Fabuloso = 0;
$I_Suavitel = 0;

$consult = "SELECT * FROM Users WHERE Email = '$email'";
$result = consultDB($consult);

if ($row = mysqli_fetch_array($result)) {
    $user = $row["UserID"];
}

$consult = "SELECT MachineID FROM Machines WHERE UserID = '$user'";
$result = consultDB($consult);

if ($result == FALSE)
    die(mysqli_error());

while ($row = mysqli_fetch_array($result)) {
    $machines = $machines . (string)$row["MachineID"] . ", ";
}

$machines = $machines . "0)";

$consult = "SELECT Alias, Estatus, Calle, Colonia, Municipio, Producto, Ganancias FROM machines JOIN machineearnings ON machines.MachineID = machineearnings.MachineID WHERE machines.MachineID IN $machines";
$result = consultDB($consult);
?>

<!DOCTYPE html>

<html>

<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css" />

</head>

<body>
    <header>

        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menú</span>
        <div id="mySidenav1" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">Página Principal</a>
            <a href="PaymentMethod.php">Método de Pago</a>
            <a href="RegisterMachines.php">Registro máquina</a>
            <a href="ModifyMachines.php">Modificar máquina</a>
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
                    <tbody id="info">
                        <?php
                        if ($result == FALSE)
                            die(mysqli_error());

                        while ($row = mysqli_fetch_array($result)) {
                            $Alias = $row['Alias'];
                            $Estatus = $row['Estatus'];
                            $Calle = $row['Calle'];
                            $Colonia = $row['Colonia'];
                            $Municipio = $row['Municipio'];
                            $Producto = $row['Producto'];
                            $Ganancias = $row['Ganancias'];

                            if ($Producto == "Agua") {
                                $I_Agua += $Ganancias;
                            } else if ($Producto == "Pinol") {
                                $I_Pinol += $Ganancias;
                            } else if ($Producto == "Cloro") {
                                $I_Cloro += $Ganancias;
                            } else if ($Producto == "Fabuloso") {
                                $I_Fabuloso += $Ganancias;
                            } else {
                                $I_Suavitel += $Ganancias;
                            }
                            $Ingresos += $Ganancias;

                            echo "<tr>";
                            echo "<td>" . $Alias . "</td>";
                            echo "<td>" . $Estatus . "</td>";
                            echo "<td>" . $Calle . ", " . $Colonia . ", " . $Municipio . "</td>";
                            echo "<td>" . $Producto . "</td>";
                            echo "<td>" . $Ganancias . "</td>";
                            echo "</tr>";
                        }

                        $Cantidad = $Ingresos;
                        ?>
                    </tbody>
                </table>
            </div>
        </fieldset>
        <fieldset id="ingresos" class="showData">
            <h2 class="formHeader">Ingresos</h2>
            <ul class="toggle">
                <li>
                    <input type="radio" name="incomeBy" value=0 id="todos" checked="checked" />
                    <label for="todosIncome">Todos</label>
                </li>
                <li>
                    <input type="radio" name="incomeBy" value=1 id="agua" />
                    <label for="aguaIncome">Agua</label>
                </li>
                <li>
                    <input type="radio" name="incomeBy" value=2 id="pinol" />
                    <label for="pinolIncome">Pinol</label>
                </li>
                <li>
                    <input type="radio" name="incomeBy" value=3 id="cloro" />
                    <label for="cloroIncome">Cloro</label>
                </li>
                <li>
                    <input type="radio" name="incomeBy" value=4 id="fabuloso" />
                    <label for="fabulosoIncome">Fabuloso</label>
                </li>
                <li>
                    <input type="radio" name="incomeBy" value=5 id="suavitel" />
                    <label for="suavitelIncome">Suavitel</label>
                </li>
            </ul>
            <br>
            <br>
            <h3>Ingresos Hoy</h3>
            <p id="cantidad"></p>
        </fieldset>
    </main>
    <footer></footer>
</body>
<script src="js/registerMachines.js"></script>
<script>
    $(document).ready(function() {
        $("#cantidad").html("$<?php print($Ingresos); ?>");
    });

    $("#todos").click(function() {
        $("#cantidad").html("$<?php print($Ingresos); ?>");
    });
    $("#agua").click(function() {
        $("#cantidad").html("$<?php print($I_Agua); ?>");
    });
    $("#pinol").click(function() {
        $("#cantidad").html("$<?php print($I_Pinol); ?>");
    });
    $("#cloro").click(function() {
        $("#cantidad").html("$<?php print($I_Cloro); ?>");
    });
    $("#fabuloso").click(function() {
        $("#cantidad").html("$<?php print($I_Fabuloso); ?>");
    });
    $("#suavitel").click(function() {
        $("#cantidad").html("$<?php print($I_Suavitel); ?>");
    });
</script>

</html>