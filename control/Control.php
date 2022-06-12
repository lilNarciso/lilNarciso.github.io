<?php
    session_start();
    
    require '../models/Usuario.php';
    require '../models/Familia.php';

    $_SESSION['userSession']=array();

    $administrador = new Usuario("Ignacio", "Echeverria", "Presidente", "No", "11.111.111-1", "Ninguno", "20/04/1998", "Hombre", "Casado", "nacho@gmail.com", "123", "912345678","1");
    $vecino1 = new Usuario("Diego", "Soto", "Jardinero", "No", "22.222.222-2", "Ninguno", "22/12/1999", "Hombre", "Soltero", "diego@gmail.com","123","987654321","2");
    $vecino2 = new Usuario("Fran", "Contreras", "Ingeniero", "No", "12.345.678-9", "Ninguno", "20/12/2002", "Hombre", "Viudo", "fran@gmail.com", "123", "9865321478","3");

    $listaUsuarios = array();
    array_push($listaUsuarios, $administrador);
    array_push($listaUsuarios, $vecino1);
    array_push($listaUsuarios, $vecino2);

    // Inicio de sesión

    if(isset($_REQUEST["login_submit"])){
        $usuario = $_REQUEST["login_email"];
        $contra = $_REQUEST["login_password"];

        if ($usuario == "nacho@gmail.com" and $contra == "123"){
            cargarUser($listaUsuarios,$usuario);
            header("Location:../views/adminNewHogar.php");
        }else{
            foreach($listaUsuarios as $o){
                if ($o->getCorreoElectronico() == $usuario and $o->getPassword() == $contra){
                    cargarUser($listaUsuarios,$usuario);
                    header("Location: ../views/vecinoNoticias.php");
                    break;
                }else{
                    header("Location: ../views/LogIn.php");
                }
            }
        }
    }
    


    // Funciones
    
    function cargarUser($listaUsuarios,$user){
        foreach($listaUsuarios as $u){
            if ($u->getCorreoElectronico() == $user){
                $_SESSION['userSession']['name']=$u->getNombres();
                $_SESSION['userSession']['apellidos']=$u->getApellidos();
                $_SESSION['userSession']['ocupacion']=$u->getOcupacion();
                $_SESSION['userSession']['discapacidad']=$u->getDiscapacidad();
                $_SESSION['userSession']['rut']=$u->getRut();
                $_SESSION['userSession']['etnia']=$u->getEtnia();
                $_SESSION['userSession']['fechNac']=$u->getFechNac();
                $_SESSION['userSession']['sexo']=$u->getSexo();
                $_SESSION['userSession']['estadoCivil']=$u->getEstadoCivil();
                $_SESSION['userSession']['email']=$u->getCorreoElectronico();
                $_SESSION['userSession']['telefono']=$u->getNumeroContacto();
                $_SESSION['userSession']['familia']=$u->getFamilia();
                break;
            }
        }
    }
?>