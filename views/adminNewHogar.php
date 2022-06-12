<?php
    session_start();
?>
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
    <div class="full-viewport">
        <div class="container_Menu">
            <div class="headerMenu">
                <div class="headerMenu_logo">
                    <img src="../imgs/logoDonMateo.png" alt="" class="headerMenu_logo-uno">
                    <img src="../imgs/VillaDon Mateo.png" alt="" class="headerMenu_logo-dos">
                </div>
                <div class="headerMenu_user">
                    <label for="" class="label_style" style="font-weight: 400; font-size:15px">
                        <?php
                            if(isset($_SESSION['userSession']['name'])){
                                echo $_SESSION['userSession']['name'].'<label> </label>';
                                echo $_SESSION['userSession']['apellidos'];
                            }else{
                                echo 'No se guardó la sesión';
                            }
                        ?>
                    </label>
                    <div class="headerMenu_user-circle">
                        <?php
                            if(isset($_SESSION['userSession']['name'])){
                                $name = $_SESSION['userSession']['name'];
                                echo $name[0];
                            }else{
                                echo 'No se guardó la sesión';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <section class="sectionMenu_container">
                <nav class="sectionMenu_nav">
                    <label for="" class="sectionMenu_navegacion">Navegación</label>
                    <label for="" class="sectionMenu_label-uno">Administrador:</label>
                    <a href="adminNewHogar.php" class="sectionMenu_boton-static"><img class="sectionMenu_imgBoton" src="../imgs/home_FILL0_wght400_GRAD0_opsz48.png" alt=""> Creación de hogar</a>
                    <a href="adminNewReunion.php" class="sectionMenu_boton"><img class="sectionMenu_imgBoton" src="../imgs/groups_FILL0_wght400_GRAD0_opsz48.png" alt=""> Crear reunión</a>
                    <a href="adminNewNoticias.php" class="sectionMenu_boton"><img class="sectionMenu_imgBoton" src="../imgs/history_edu_FILL0_wght400_GRAD0_opsz48.png" alt=""> Crear noticia</a>
                    <a href="adminNewSolicitud.php" class="sectionMenu_boton"><img class="sectionMenu_imgBoton" src="../imgs/breaking_news_alt_1_FILL0_wght400_GRAD0_opsz48.png" alt=""> Ver solicitudes</a>
                    <label for="" class="sectionMenu_label-uno">Otras opciones:</label>
                    <a href="adminNoticias.php" class="sectionMenu_boton"><img class="sectionMenu_imgBoton" src="../imgs/newspaper_FILL0_wght400_GRAD0_opsz48.png" alt=""> Noticias</a>
                    <a href="adminGaleria.php" class="sectionMenu_boton"><img class="sectionMenu_imgBoton" src="../imgs/photo_library_FILL0_wght400_GRAD0_opsz48.png" alt=""> Galería</a>
                    <div class="sectionMenu_space"></div>
                    <a href="../index.html" class="sectionMenu_boton"><img class="sectionMenu_imgBoton" src="../imgs/logout_FILL0_wght400_GRAD0_opsz48.png" alt="">Cerrar sesión</a>
                </nav>
                <div class="sectionMenu_lienzo">

                </div>
            </section>
        </div>
    </div>
    <footer style="background: #F7F6F6;" class="footer_galeria">
        <div class="footer_section">
            <div class="footer_left">
                <img src="../imgs/logoDonMateoDark.png" alt="" class="footer_left-uno">
                <img src="../imgs/Villa_Don_MateoDark.png" alt="" class="footer_left-dos">
            </div>
            <div class="footer_center"></div>
            <div class="footer_right">
                <a href="#index" class="style-a">Inicio</a>
                <a href="#quienesSomos" class="style-a">Quiénes somos?</a>
                <a href="#contactenos" class="style-a">Contáctenos</a>
            </div>
        </div>
    </footer>    
</body>
</html>