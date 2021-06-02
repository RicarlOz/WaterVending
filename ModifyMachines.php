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
            <a href="InfoMachines.php">Página Principal</a>
            <a href="PaymentMethod.php">Método de Pago</a>
            <a href="RegisterMachines.php">Registro máquina</a>
            <a href="#">Modificar máquina</a>
        </div>
    </header>

    <main>

        <form id="respuesta" method="POST" action="ModifyDatos.html">
            <h1 class="formHeader">Modificar Máquina</h1>
            <div class="formBody">
                <fieldset id="fieldMachine">
                    <div class="row">
                        <div class="col-25">
                            <legend for="selMachine">Máquina a modificar</legend>
                        </div>
                        <div class="col-75">
                            <select id="selMachine" onkeypress="return tabE(this,event)" name="selMachine">

                            </select>
                        </div>
                    </div>
                </fieldset>
                <legend for="fieldData"></legend>
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
                                <option value="activo">Activo</option>
                                <option value="inactivo">Inactivo</option>
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
                <button id="other">Modificar otra máquina</button>
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

        $.ajax({
                url: 'php/SelectMachineNames.php',
                async: false,
                type: 'POST'
            })
            .done(function(res) {
                $('#selMachine').html(res);
                //go to next screen
            })

            .fail(function() {
                console.log("error");
            })

            .always(function() {
                console.log("complete");
            });

        var Alias = document.getElementById('selMachine').value;
        var info = "Alias=" + Alias;

        $.ajax({
                url: 'php/SelectMachineData.php',
                type: 'POST',
                data: info,
            })
            .done(function(res) {
                console.log("Entra");
                var array = res.split(",");
                var sensor = (array[5] == 1) ? true : false;
                $('#machineName').val(array[0]);
                $('#estatus').val(array[1].toLowerCase());
                $('#brand').val(array[2]);
                $('#model').val(array[3]);
                $('#product').val(array[4]);
                $('#sensorIncluded').prop('checked', sensor);
                $('#state').val(array[6]);
                $('#city').val(array[7]);
                $('#colonia').val(array[8]);
                $('#street').val(array[9]);
            })

            .fail(function() {
                console.log("Error.");
            })

            .always(function() {
                console.log("Complete.");
            });
    });

    $('#selMachine').change(function() {
        var Alias = document.getElementById('selMachine').value;
        var info = "Alias=" + Alias;

        $.ajax({
                url: 'php/SelectMachineData.php',
                type: 'POST',
                data: info,
            })
            .done(function(res) {
                var array = res.split(",");
                var sensor = (array[5] == 1) ? true : false;
                $('#machineName').val(array[0]);
                $('#estatus').val(array[1].toLowerCase());
                $('#brand').val(array[2]);
                $('#model').val(array[3]);
                $('#product').val(array[4]);
                $('#sensorIncluded').prop('checked', sensor);
                $('#state').val(array[6]);
                $('#city').val(array[7]);
                $('#colonia').val(array[8]);
                $('#street').val(array[9]);
            })

            .fail(function() {
                console.log("Error.");
            })

            .always(function() {
                console.log("Complete.");
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
            SensorIncluded = (SensorIncluded = 'sensorIncluded') ? true : false;
            var Estado = document.getElementById('state').value;
            var City = document.getElementById('city').value;
            var Colonia = document.getElementById('colonia').value;
            var Street = document.getElementById('street').value;
            var Machine = document.getElementById('selMachine').value;

            var info = "Alias=" + Alias +
                "&Estatus=" + Estatus +
                "&Brand=" + Brand +
                "&Model=" + Model +
                "&Product=" + Product +
                "&SensorIncluded=" + SensorIncluded +
                "&Estado=" + Estado +
                "&City=" + City +
                "&Colonia=" + Colonia +
                "&Street=" + Street +
                "&Machine=" + Machine;

            $.ajax({
                    url: 'php/UpdateMachines.php',
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