<?php
session_start();

if (!isset($_SESSION["Email"])) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Metodo de Pago</title>
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
            <a href="InfoMachines.php">Página Principal</a>
            <a href="#">Método de Pago</a>
            <a href="RegisterMachines.php">Registro máquina</a>
            <a href="ModifyMachines.php">Modificar máquina</a>
        </div>
    </header>

    <main>
        <form method="POST" action="registroDatos.html">
            <h1 class="formHeader">Registro de Metodo de Pago</h1>
            <div class="formBody">
                <legend for="fieldName">Datos de la Tarjeta</legend>
                <fieldset id="fieldName">
                    <div class="row">
                        <div class="col-25">
                            <legend for="clientName">Nombre del Propietario de la Tarjeta</legend>
                        </div>
                        <div class="col-75">
                            <input id="clientName" onkeypress="return tabE(this,event)" type="text" name="clientName" placeholder="Nombre..." required autofocus autocapitalize="words" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="cardNum">Numero de Tarjeta</legend>
                        </div>

                        <div class="col-75">
                            <input id="cardNum" onkeypress="return tabE(this,event)" type="text" name="cardNum" pattern="\d*" title="Numbers only, please." required />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25">
                            <legend for="expDate">Fecha Expiracion</legend>
                        </div>
                        <div class="col-252">
                            <p>Mes</p>
                        </div>
                        <div class="col-752">
                            <select id="expMonth" onkeypress="return tabE(this,event)" name="expMonth">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>

                            </select>
                        </div>

                        <div class="col-2525">
                            <p>Año</p>
                        </div>
                        <div class="col-752">
                            <select id="expYear" onkeypress="return tabE(this,event)" name="expYear">
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">20251</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                                <option value="2028">2028</option>
                                <option value="2029">2029</option>
                                <option value="2030">2030</option>
                                <option value="2031">2031</option>
                                <option value="2032">2032</option>
                                <option value="2033">2033</option>
                                <option value="2034">2034</option>
                                <option value="2035">2035</option>
                                <option value="2036">2036</option>
                                <option value="2037">2037</option>
                                <option value="2038">2038</option>
                                <option value="2039">2039</option>
                                <option value="2040">2040</option>
                                <option value="2041">2041</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <legend for="safetyNum">Numeros de Seguridad</legend>
                        </div>

                        <div class="col-75">
                            <input id="safetyNum" onkeypress="return tabE(this,event)" type="text" name="safetyNum" pattern="\d*" title="Numbers only, please." required />
                        </div>
                    </div>


                </fieldset>


                <legend for="locationField">Direccion de Facturacion</legend>
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
                            <input id="cp" onkeypress="return tabE(this,event)" type="text" name="cp" pattern="\d*" title="Numbers only, please." required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <legend for="rfc">RFC</legend>
                        </div>
                        <div class="col-75">
                            <input id="rfc" onkeypress="return tabE(this,event)" type="text" name="rfc" pattern="\d*" title="Numbers only, please." required />
                        </div>
                    </div>
                </fieldset>
                <div class="widget">
                    <br>
                    <input class="ui-button ui-widget ui-corner-all" type="submit" name="submit" id="submit" value="submit" />
                </div>
            </div>
        </form>
    </main>
    <footer></footer>
</body>
<script src="js/registerMachines.js"></script>

</html>