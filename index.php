<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/estilos.css">
        <title>Trivial</title>
        <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <div class="titulo">
                <h2 class="text-center">Trivial</h2>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col-md-4 form col-xs-11">
                    <form action="iniciarSesion.php" method="post">
                        <div class="form-group">
                            <label for="user">Usuario:</label>
                            <input type="text" id="user" name="user" class="form-control" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <label for="pass">Contraseña:</label>
                            <input type="password" id="pass" name="pass" class="form-control" placeholder="Contraseña">
                        </div>
                        <div class="form-group">
                            <label class="custom-control custom-checkbox">
                                <input type="checkbox" id="check" onclick="showHidePass();" class="custom-control-input">
                                <span class="custom-control-indicator"></span>
                                <span class="custom-control-description">Mostrar Contraseñas</span>
                            </label>
                        </div>
                        <div class="form-group">
                            <input type="submit" id="submit" name="submit" class="btn btn-primary btn-block" value="Quiero Jugar!">
                        </div>
                        <div class="form-group">
                            <p class="text-center">¿No tienes cuenta? <strong><a href="registro.php">Registrate</a></strong></p>
                        </div>
                    </form>
                </div>
                <div class="col"></div>
            </div>
        </div>
        <script>
            function showHidePass() {
                var checkbox = document.getElementById('check');
                var passField = document.getElementById('pass');

                if (checkbox.checked == true) {
                    passField.type = "text";
                } else {
                    passField.type = "password";
                }
            }
        </script>
    </body>
</html>
