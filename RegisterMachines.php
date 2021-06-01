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
        <a href="InfoMachines.html">Página Principal</a>
        <a href="PaymentMethod.html">Método de Pago</a>
        <a href="RegisterMachines.html">Registro máquina</a>
        <a href="ModifyMachines.html">Modificar máquina</a>
    </div> 
    </header>
    <main>
        <form method="POST" action="RegistroDatos.html">
            <h1 class="formHeader">Registro Máquina</h1>
            <div class="formBody">
                <legend for="fieldName">Datos del Cliente</legend>
                <fieldset id="fieldName">
                    <div class="row">
                        <div class="col-25">
                            <legend for="clientName">Nombre</legend>
                        </div>
                        <div class="col-75">
                            <input id="clientName" onkeypress="return tabE(this,event)" type="text" name="clientName" placeholder="Nombre..." required autofocus autocapitalize="words" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="clientNum">Num. Cliente</legend>
                        </div>

                        <div class="col-75">
                            <input id="clientNum" onkeypress="return tabE(this,event)" type="text" name="clientNum" pattern="\d*" title="Numbers only, please." required/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="phone">Teléfono</legend>
                        </div>

                        <div class="col-75">
                            <input id="phone" onkeypress="return tabE(this,event)" type="tel" name="phone" required/>
                        </div>
                    </div>
                </fieldset>
                <legend for="fieldData">Datos de la Máquina</legend>
                <fieldset id="fieldData">
                    <div class="row">
                        <div class="col-25">
                            <legend for="machineName">Nombre de la Maquina</legend>
                        </div>
                        <div class="col-75">
                            <input id="machineName" onkeypress="return tabE(this,event)" type="text" name="machineName" placeholder="Nombre..." required autocapitalize="words" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="fechaAlta">Fecha de Alta</legend>
                        </div>
                        <div class="col-75">
                            <input id="fechaAlta" onkeypress="return tabE(this,event)" type="date" name="fechaAlta" required/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="situation">Situación</legend>
                        </div>
                        <div class="col-75">
                            <select id="situation" onkeypress="return tabE(this,event)" name="situation">
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
                            <input id="brand" onkeypress="return tabE(this,event)" type="text" name="brand" placeholder="Marca..." required autocapitalize="words" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="model">Modelo</legend>
                        </div>
                        <div class="col-75">
                            <input id="model" onkeypress="return tabE(this,event)" type="text" name="model" placeholder="Modelo..." required/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="machineType">Tipo de máquina</legend>
                        </div>
                        <div class="col-75">
                            <select id="machineType" onkeypress="return tabE(this,event)" name="machineType">
                                    <option value="agua">Agua</option>
                                    <option value="limpiadores5">Limpiadores 5</option>
                                    <option value="limpiadores10">Limpiadores 10</option>
                                </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="sensorIncluded"> Incluye interfaz de sensores de peso</legend>
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
                            <legend for="street">Calle</legend>
                        </div>
                        <div class="col-75">
                            <input id="street" onkeypress="return tabE(this,event)" type="text" name="street" placeholder="Calle 123" required autocapitalize="words" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="colonia">Colonia</legend>
                        </div>
                        <div class="col-75">
                            <input id="colonia" onkeypress="return tabE(this,event)" type="text" name="colonia" placeholder="Colonia..." required autocapitalize="words" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="street">Entre Calles</legend>
                        </div>
                        <div class="col-75">
                            <input id="entreCalles" onkeypress="return tabE(this,event)" type="text" name="entreCalles" placeholder="Entre Calles..." required autocapitalize="words" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="cp">C.P.</legend>
                        </div>
                        <div class="col-75">
                            <input id="cp" onkeypress="return tabE(this,event)" type="text" name="cp" pattern="\d*" title="Numbers only, please." required/>
                        </div>
                    </div>
                </fieldset>
                <div class="widget">
                    <br>
                    <button class="ui-button ui-widget ui-corner-all" name="submit" id="submit">Enviar</button>
                </div>
            </div>
        </form>
    </main>
    <footer></footer>
</body>
<script src="js/registerMachines.js"></script>

<script>
    $('#submit').click(function(){
        var ClientName = document.getElementById('clientName').value;
        var ClientNum = document.getElementById('clientNum').value;
        var Phone = document.getElementById('phone').value;
        var MachineName = document.getElementById('machineName').value;
        var FechaAlta = document.getElementById('fechaAlta').value;
        var Situation = document.getElementById('situation').value;
        var Brand = document.getElementById('brand').value;
        var Model = document.getElementById('model').value;
        var MachineType = document.getElementById('machineType').value;
        var SensorIncluded = document.getElementById('sensorIncluded').value;
        var Street = document.getElementById('street').value;
        var Colonia = document.getElementById('colonia').value;
        var EntreCalles = document.getElementById('entreCalles').value;
        var CP = document.getElementById('cp').value;

        var ruta = "ClientName="+ClientName+
                   "&ClientNum="+ClientNum+
                   "&Phone="+Phone+
                   "&MachineName="+MachineName+
                   "&FechaAlta="+FechaAlta+
                   "&Situation="+Situation+
                   "&Brand="+Brand+
                   "&Model="+Model+
                   "&MachineType="+MachineType+
                   "&SensorIncluded="+SensorIncluded+
                   "&Street="+Street+
                   "&Colonia="+Colonia+
                   "&EntreCalles="+EntreCalles+
                   "&CP="+CP;

        $.ajax({
            url: 'php/InsertMachines.php',
            type: 'POST',
            data:ruta,
        })
        .done(function(res){
            //$('#respuesta').html(res);
            //go to next screen
        })

        .fail(function() {
            console.log("error");
        })

        .always(function() {
            console.log("complete");
        });
    });
</script>

</html>