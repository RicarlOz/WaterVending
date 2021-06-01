<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css" />
    <title>Login</title>
</head>
<header>

</header>

<body id="body-login">
    <div id="cent">
        <form action="" class="f-login" id="form-login">
            <h1 class="formHeader">Inicia sesión</h1>
            <div class="formBody">
                <fieldset class="f-login">

                    <div class="row">
                        <div class="col-100">
                            <input id="email" onkeypress="return tabE(this,event)" type="email" name="email" placeholder="Email" required autofocus autocapitalize="words" oninvalid="this.setCustomValidity('Ingrese su email')" oninput="setCustomValidity('')" />
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-100">
                            <input id="password" onkeypress="return tabE(this,event)" type="password" name="password" placeholder="Contraseña" required autofocus oninvalid="this.setCustomValidity('Ingrese su contraseña')" oninput="setCustomValidity('')" />
                        </div>
                    </div>
                    <br>
                    <div class="widget">
                        <input class="ui-button ui-widget ui-corner-all" type="submit" name="submit" id="submit" value="Ingresar">
                    </div>
                    <hr>
                    <div id="pw-forgotten" style="text-align: center;">
                        <a href="">¿Olvidaste tu contraseña?</a>
                    </div>
                </fieldset>

                <div class="col-100" style="text-align: center;" id="invalid-data">
                    <div>Esa combinación de email y contraseña es inválida, intente de nuevo.</div>
                </div>
                <br>
                <div style="text-align: center;" class="login-btn">
                    <button type="button" onclick="location.href='RegisterUser.php'">Crea una cuenta</button>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="js/registerMachines.js"></script>

<script>
    // Prevent reload
    $(document).ready(function() {
        $('#submit').click(function(e) {
            e.preventDefault();
        });

        $('#login').click(function(e) {
            e.preventDefault();
        });
    });

    // Try insert new user
    $('#submit').click(function() {
        var form = $("form")[0];
        form.checkValidity();
        form.reportValidity();

        if (form.reportValidity()) {

            var Email = document.getElementById('email').value;
            var Password = document.getElementById('password').value;

            var info = "email=" + Email + "&password=" + Password;
            var exists = false;

            console.log(info);

            $.ajax({
                url: "php/login.php",
                data: info,
                async: false,
                type: "POST",
                dataType: "text",
                success: function(data) {
                    exists = data;
                    console.log(data);
                }
            });

            if(exists) {
                window.location.href = "InfoMachines.php";
            } else {
                $('#invalid-data').show();
            }

        } else {
            return;
        }
    })
</script>

</html>