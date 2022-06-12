<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800;900&family=Quattrocento:wght@400;700&display=swap" rel="stylesheet">
    
    <link href="../imgs/iso_vdm.ico" rel="shortcut icon" type="image/x-icon" />

    <title>Villa Dón Mateo</title>
</head>
<body>
    <div class="container_login">
        <form action="../control/Control.php" class="form_login" metha="get">
            <label for="" class="index-sectionFrase_label" style="padding-bottom:15px ;">Ingresar:</label>
            <label for="" class="label_style">Correo electrónico:</label>
            <input type="email" class="input_text-dos" placeholder="Tu correo electrónico" name="login_email" required>
            <label for="" class="label_style">Contraseña:</label>
            <input type="password" class="input_text-dos" placeholder="Tu contraseña" name="login_password" required>
            <input type="submit" class="input_botton-login" value="Ingresar" name="login_submit">
            <div class="formLogin-nav">
                <a href="../index.html" class="formLogin-nav_a">Volver</a>
                <a href="../views/SignIn.php" class="formLogin-nav_a">Registrarse</a>
            </div>
        </form>
    </div>
</body>
</html>