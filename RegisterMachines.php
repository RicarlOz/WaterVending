<?php
session_start();

if (!isset($_SESSION["Email"])) {
    header('Location: index.php');
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

</head>

<body>
    <header>
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menú</span>
        <div id="mySidenav1" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="InfoMachines.php">Página Principal</a>
            <a href="PaymentMethod.php">Método de Pago</a>
            <a href="#">Registro máquina</a>
            <a href="ModifyMachines.php">Modificar máquina</a>
        </div>
    </header>
    <main>
        <form action="">
            <h1 class="formHeader">Registro Máquina</h1>
            <div class="formBody">
                <fieldset id="fieldData">
                    <div class="row">
                        <div class="col-25">
                            <legend for="machineName">Nombre de la Máquina</legend>
                        </div>
                        <div class="col-75">
                            <input id="machineName" onkeypress="return tabE(this,event)" type="text" name="machineName" placeholder="Nombre" required autocapitalize="words" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="estatus">Estatus</legend>
                        </div>
                        <div class="col-75">
                            <select id="estatus" onkeypress="return tabE(this,event)" name="estatus">
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="brand">Marca</legend>
                        </div>
                        <div class="col-75">
                            <input id="brand" onkeypress="return tabE(this,event)" type="text" name="brand" placeholder="Marca" required autocapitalize="words" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="model">Modelo</legend>
                        </div>
                        <div class="col-75">
                            <input id="model" onkeypress="return tabE(this,event)" type="text" name="model" placeholder="Modelo" required />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="product">Producto</legend>
                        </div>
                        <div class="col-75">
                            <select id="product" onkeypress="return tabE(this,event)" name="product">
                                <option value="Agua">Agua</option>
                                <option value="Pinol">Pinol</option>
                                <option value="Cloro">Cloro</option>
                                <option value="Fabuloso">Fabuloso</option>
                                <option value="Suavitel">Suavitel</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="sensorIncluded">¿Incluye interfaz de sensores de peso?</legend>
                        </div>
                        <div class="col-75">
                            <input type="checkbox" id="sensorIncluded" onkeypress="return tabE(this,event)" name="sensorIncluded" value="sensorIncluded">
                        </div>
                    </div>
                </fieldset>
                <legend for="locationField"></legend>
                <fieldset id="locationField">
                    <div class="row">
                        <div class="col-25">
                            <legend for="state">Estado</legend>
                        </div>
                        <div class="col-75">
                            <input id="state" onkeypress="return tabE(this,event)" type="text" name="state" placeholder="Estado" required autocapitalize="words" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="city">Municipio</legend>
                        </div>
                        <div class="col-75">
                            <input id="city" onkeypress="return tabE(this,event)" type="text" name="city" placeholder="Municipio" required autocapitalize="words" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="colonia">Colonia</legend>
                        </div>
                        <div class="col-75">
                            <input id="colonia" onkeypress="return tabE(this,event)" type="text" name="colonia" placeholder="Colonia" required autocapitalize="words" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="street">Calle</legend>
                        </div>
                        <div class="col-75">
                            <input id="street" onkeypress="return tabE(this,event)" type="text" name="street" placeholder="Calle" required autocapitalize="words" />
                        </div>
                    </div>
                </fieldset>
                <div class="widget">
                    <br>
                    <input class="ui-button ui-widget ui-corner-all" type="submit" name="submit" id="submit" value="Enviar" />
                </div>
            </div>
            <p id="response" style="text-align: center;"></p>
            <div style="text-align: center;" class="register-other">
                <button id="other">Registrar otra máquina</button>
            </div>
            <br class="register-other">
        </form>
    </main>
    <footer></footer>
</body>
<script src="js/registerMachines.js"></script>

<script>
    $(document).ready(function() {
        $('.register-other').hide();

        $('#submit').click(function(e) {
            e.preventDefault();
        });

        $('#other').click(function(e) {
            e.preventDefault();
            window.location.reload();
        });
    });

    $('#submit').click(function() {
        var form = $("form")[0];
        form.checkValidity();
        form.reportValidity();

        if (form.reportValidity()) {
            var Alias = document.getElementById('machineName').value;
            var Estatus = document.getElementById('estatus').value;
            var Brand = document.getElementById('brand').value;
            var Model = document.getElementById('model').value;
            var Product = document.getElementById('product').value;
            var SensorIncluded = document.getElementById('sensorIncluded').value;
            SensorIncluded = (SensorIncluded = 'sensorIncluded')? true : false;
            var Estado = document.getElementById('state').value;
            var City = document.getElementById('city').value;
            var Colonia = document.getElementById('colonia').value;
            var Street = document.getElementById('street').value;

            var info = "Alias=" + Alias +
                "&Estatus=" + Estatus +
                "&Brand=" + Brand +
                "&Model=" + Model +
                "&Product=" + Product +
                "&SensorIncluded=" + SensorIncluded +
                "&Estado=" + Estado +
                "&City=" + City +
                "&Colonia=" + Colonia +
                "&Street=" + Street;

            $.ajax({
                    url: 'php/InsertMachines.php',
                    type: 'POST',
                    data: info,
                })
                .done(function(res) {
                    $(".formBody").hide();
                    $("#response").html(res);
                    $('.register-other').show();
                })

                .fail(function() {
                    console.log("Error.");
                })

                .always(function() {
                    console.log("Complete.");
                });
        }
    });
</script>

</html>