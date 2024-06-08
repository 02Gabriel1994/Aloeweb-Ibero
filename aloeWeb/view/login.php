<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar</title>
</head>

<body>
    <form action="?c=home&a=login" method="post">
        <div class="login">
            <div class="login-screen">
                <div class="app-title">
                    <h1>Iniciar Sesión</h1>
                </div>

                <div class="login-form">
                    <div class="control-group">
                        <input type="text" name="usuario" class="login-field" value="" placeholder="usuario" id="login-name">
                        <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>

                    <div class="control-group">
                        <input type="password" name="contrasena" class="login-field" value="" placeholder="contraseña" id="login-pass">
                        <label class="login-field-icon fui-lock" for="login-pass"></label>
                    </div>
                    <input type="submit" value="Ingresa" class="btn btn-primary btn-large btn-block" />
                    <a class="login-link" href="#">¿Olvidó su contraseña?</a>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
<link href="view/css/style.css" rel="stylesheet">