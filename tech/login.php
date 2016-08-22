<?php
session_start();
?>
<?php require_once("back/session.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>Valkiria - Login</title>

    <!-- CSS  -->
    <link href="../css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../css/tech.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body style="background-color: #f5f5f5;">

    <div class="row" style="margin-top:5%;">
        <div class="col s8 offset-s2 m8 offset-m2">
            <div class="card">
                <div class="card-image">
                    <img src="../img/login.png">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <h3 class="center-align">Acceso</h3>
                        <p class="center-align">Ingresa tus datos para acceder al sistema.</p>
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="last_name" type="text" class="validate">
                                        <label for="last_name">Usuario</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password" type="password" class="validate">
                                        <label for="password">Contraseña</label>
                                    </div>
                                </div>
                                <div class="right-align">
                                    <button class="btn waves-effect waves-light light-blue darken-3" type="submit" name="action">Aceptar
                                        <i class="material-icons right">send</i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php include_once("front/footer.php") ?>
