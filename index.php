<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="contendor">
        <div class="formulario">
            <p class="titulo">Registrate</p>
            <form action="enviar_datos.php" method="post">
                <div class="form_group">
                    <label class="sub_titulo" for="nombre">Nombre</label>
                    <input placeholder="ingrese su nombre" name="nombre" class="form_style" type="text" required="">
                </div>
                <div class="form_group">
                    <label class="sub_titulo" for="correo">Correo</label>
                    <input placeholder="Ingrese su correo" name="correo" class="form_style" type="email" required="@">
                </div>
                <div class="form_group">
                    <label class="sub_titulo" for="contraseña">Contraseña</label>
                    <input placeholder="Cree una Contraseña" name="contraseña" class="form_style" type="password" required="">
                </div>
                <div>
                    <button type="submit" class="btn">Registrarse</button>
                    <p>Have an Account? <a class="link" href="">Login Here!</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>