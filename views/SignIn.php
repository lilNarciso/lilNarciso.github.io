<!DOCTYPE html>
<html lang="en">
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
    <form class="container-signIn">
        <div class="container-signIn_personales">
            <label for="" class="index-sectionFrase_label" style="padding:40px 40px 0px;">Datos personales:</label>
            <div class="container-signIn_conjunto">
                <div class="signIn_personales_uno" style="padding:40px 20px 40px 40px">
                    <label for="" class="label_style">Nombres:</label>
                    <input type="text" class="input_text-dos" required>
                    <label for="" class="label_style">Apellidos:</label>
                    <input type="text" class="input_text-dos" required>
                    <label for="" class="label_style">Rut:</label>
                    <input type="text" class="input_text-dos" required>
                    <label for="" class="label_style">Fecha de nacimiento:</label>
                    <input type="date" class="input_text-dos" required>
                    <label for="" class="label_style">Estado civil:</label>
                    <select name="select" class="input_text-dos" style="cursor: pointer;" required>
                        <option value="value1">Casado/a</option>
                        <option value="value2">Divorciado/a</option>
                        <option value="value3">Viudo/a</option>
                        <option value="value4" selected>Soltero/a</option>
                    </select>
                </div>
                <div class="signIn_personales_uno" style="padding:40px 40px 40px 20px">
                    <label for="" class="label_style">Ocupación:</label>
                    <input type="text" class="input_text-dos" required>
                    <label for="" class="label_style">Discapacidad:</label>
                    <div class="signIn_personal_unoCBX">
                        <input type="radio" style="cursor: pointer;" name="discapacidad" value="" id="Si" />
                        <labelfor for="Si">Si</labelfor>
                        <input type="radio" style="cursor: pointer;" name="discapacidad" value="" id="No" />
                        <labelfor for="No">No</labelfor>
                    </div>
                    <label for="" class="label_style">Etnia:</label>
                    <select name="select" class="input_text-dos" style="cursor: pointer;" required>
                        <option value="value1">Mapuche</option>
                        <option value="value2">Aymara</option>
                        <option value="value3">Rapa Nui</option>
                        <option value="value3">Diaguitas</option>
                        <option value="value3">Atacameños</option>
                        <option value="value3">Quechuas</option>
                        <option value="value3">Collas</option>
                        <option value="value3">Changos</option>
                        <option value="value3">Kawashkar</option>
                        <option value="value3">Yagán</option>
                        <option value="value4" selected>Ninguno</option>
                    </select>
                    <label for="" class="label_style">Sexo:</label>
                    <select name="select" class="input_text-dos" style="cursor: pointer;" required>
                        <option value="value1" >Hombre</option>
                        <option value="value4" selected>Mujer</option>
                    </select>
                    <label for="" class="label_style">Familia:</label>
                    <select name="select" class="input_text-dos" style="cursor: pointer;" required>
                        <option value="value1">Automático</option>
                        
                    </select>
                </div>
            </div>
        </div>
        <div class="container-signIn_contacto">
            <label for="" class="signIn-sectionFrase_label">Datos de contacto:</label>
            <div class="signIn_personales_dos">
                <label for="" class="label_style">Correo electrónico:</label>
                <input type="text" class="input_text-dos" required>
                <label for="" class="label_style">Teléfono:</label>
                <input type="text" class="input_text-dos" required>
                <label for="" class="label_style">Contraseña:</label>
                <input type="password" class="input_text-dos" required>
                <label for="" class="label_style">Repetir contraseña:</label>
                <input type="password" class="input_text-dos" required>   
            </div>
            <input type="submit" class="input_botton-login" value="Ingresar" style="margin-top: 30px;">
            <div class="signIn_personales_volver">
                <a href="../index.html" class="formLogin-nav_a">Volver</a>
            </div>
        </div>
    </form>
</body>
</html>