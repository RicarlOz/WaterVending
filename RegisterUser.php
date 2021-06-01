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

<body id="body-register">
    <header>

    </header>
    <main>
        <form action="">
            <h1 class="formHeader">Registro usuario</h1>
            <div class="formBody">
                <fieldset id="clientData">
                    <div class="row">
                        <div class="col-25">
                            <legend for="firstName">Nombre</legend>
                        </div>
                        <div class="col-75">
                            <input id="firstName" onkeypress="return tabE(this,event)" type="text" name="firstName" placeholder="Nombre" required autofocus autocapitalize="words" oninvalid="this.setCustomValidity('Ingrese su nombre')" oninput="setCustomValidity('')" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="lastName">Apellido</legend>
                        </div>
                        <div class="col-75">
                            <input id="lastName" onkeypress="return tabE(this,event)" type="text" name="lastName" placeholder="Apellido" required autofocus autocapitalize="words" oninvalid="this.setCustomValidity('Ingrese su apellido')" oninput="setCustomValidity('')" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="email">Email</legend>
                        </div>
                        <div class="col-75">
                            <input id="email" onkeypress="return tabE(this,event)" type="email" name="email" placeholder="Email" required oninvalid="this.setCustomValidity('Ingrese su dirección de correo electrónico')" oninput="setCustomValidity('')" />
                        </div>
                    </div>
                    <div id="invalid-data" class="row">
                        <div class="col-25">
                            <legend for="email"></legend>
                        </div>
                        <div class="col-75">
                            <div>Ya existe una cuenta asociada a este correo electrónico, por favor intente con uno distinto.</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="password">Contraseña</legend>
                        </div>
                        <div class="col-75">
                            <input id="password" onkeypress="return tabE(this,event)" type="password" name="password" placeholder="Contraseña" required oninvalid="this.setCustomValidity('Ingrese una contraseña')" oninput="setCustomValidity('')" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="phone">Teléfono</legend>
                        </div>
                        <div class="col-75">
                            <input id="phone" onkeypress="return tabE(this,event)" maxlength="12" type="tel" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required oninvalid="this.setCustomValidity('Ingrese su número de teléfono')" oninput="setCustomValidity(''); this.value = this.value.replace(/[^0-9\-]/g, '');" />
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
                            <input id="state" onkeypress="return tabE(this,event)" type="text" name="state" placeholder="Estado" required autocapitalize="words" oninvalid="this.setCustomValidity('Ingrese su estado')" oninput="setCustomValidity('')" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="city">Municipio</legend>
                        </div>
                        <div class="col-75">
                            <input id="city" onkeypress="return tabE(this,event)" type="text" name="city" placeholder="Municipio" required autocapitalize="words" oninvalid="this.setCustomValidity('Ingrese su municipio')" oninput="setCustomValidity('')" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="colonia">Colonia</legend>
                        </div>
                        <div class="col-75">
                            <input id="colonia" onkeypress="return tabE(this,event)" type="text" name="colonia" placeholder="Colonia" required autocapitalize="words" oninvalid="this.setCustomValidity('Ingrese su colonia')" oninput="setCustomValidity('')" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="street">Calle</legend>
                        </div>
                        <div class="col-75">
                            <input id="street" onkeypress="return tabE(this,event)" type="text" name="street" placeholder="Calle" required autocapitalize="words" oninvalid="this.setCustomValidity('Ingrese su calle')" oninput="setCustomValidity('')" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="extNum">Número exterior</legend>
                        </div>
                        <div class="col-75">
                            <input id="extNum" onkeypress="return tabE(this,event)" type="text" name="extNum" placeholder="Número exterior" oninput="this.value = this.value.replace(/[^0-9]/g, '');" required />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="intNum">Número interior</legend>
                        </div>
                        <div class="col-75">
                            <input id="intNum" onkeypress="return tabE(this,event)" type="text" name="intNum" placeholder="Número interior" oninput="this.value = this.value.replace(/[^0-9]/g, '');" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="cp">Código Postal</legend>
                        </div>
                        <div class="col-75">
                            <input id="cp" onkeypress="return tabE(this,event)" maxlength="5" type="text" name="cp" placeholder="Código Postal" pattern="[0-9]{5}" title="Numbers only, please." required oninvalid="this.setCustomValidity('Ingrese su código postal')" oninput="setCustomValidity(''); this.value = this.value.replace(/[^0-9]/g, '');" />
                        </div>
                    </div>
                </fieldset>
                <div class="widget">
                    <br>
                    <input class="ui-button ui-widget ui-corner-all" type="submit" name="submit" id="submit" value="Enviar" />
                </div>
            </div>
            <p id="response" style="text-align: center;"></p>
            <div style="text-align: center;" class="login-btn">
                <button id="login">Iniciar Sesión</button>
            </div>
            <br class="login-btn">
        </form>
    </main>
    <footer></footer>
</body>
<script src="js/registerMachines.js"></script>

<script>
    // Prevent reload
    $(document).ready(function() {
        $('.login-btn').hide();

        $('#submit').click(function(e) {
            e.preventDefault();
        });

        $('#login').click(function(e) {
            e.preventDefault();
            window.location.href = "index.php";
        });
    });

    // Dash phone
    $('#phone').keyup(function() {
        $(this).val($(this).val().replace(/(\d{3})\-?(\d{1})/, '$1-$2'))
        $(this).val($(this).val().replace(/(\d{3})\-?(\d{3})\-?(\d{1})/, '$1-$2-$3'))
    });

    // Try insert new user
    $('#submit').click(function() {
        var form = $("form")[0];
        form.checkValidity();
        form.reportValidity();

        if (form.reportValidity()) {

            var email = "email=" + $('#email').val();
            var exists = true;

            $.ajax({
                url: "php/check_user.php",
                data: email,
                async: false,
                type: "POST",
                dataType: "text",
                success: function(data) {
                    exists = data;
                    console.log(data);
                }
            });

            if (!exists) {

                var Name = document.getElementById('firstName').value;
                var LName = document.getElementById('lastName').value;
                var Email = document.getElementById('email').value;
                var Password = document.getElementById('password').value;
                var Phone = document.getElementById('phone').value;
                var State = document.getElementById('state').value;
                var City = document.getElementById('city').value;
                var Neigh = document.getElementById('colonia').value;
                var Street = document.getElementById('street').value;
                var ExtNum = document.getElementById('extNum').value;
                var IntNum = document.getElementById('intNum').value;
                var CP = document.getElementById('cp').value;

                var info = "firstName=" + Name + "&lastName=" + LName + "&email=" + Email +
                    "&password=" + Password + "&phone=" + Phone + "&state=" + State + "&city=" + City +
                    "&colonia=" + Neigh + "&street=" + Street + "&extNum=" + ExtNum + "&intNum=" + IntNum + "&cp=" + CP;

                $.ajax({
                        url: "php/RegisterUserData.php",
                        type: "POST",
                        data: info
                    })
                    .done(function(res) {
                        $(".formBody").hide();
                        $("#response").html(res);
                        $('.login-btn').show();
                    })
                    .fail(function() {
                        $(".formBody").hide();
                        console.log("Error.");
                    })
                    .always(function() {
                        console.log("Complete.");
                    })
            } else {
                $('#invalid-data').show();
            }
        } else {
            return;
        }
    })
</script>

</html>