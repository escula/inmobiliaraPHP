<?php


include_once '../Model/Usuario.php';
session_start();
if(!isset($_SESSION['nombreUsuario'])){ // si no existe la session

    if(isset($_GET['username'])){
        include_once ('../Model/Usuario.php');
        $contrasenaForm=$_GET['username'];
        $passwordForm=$_GET['password'];
        $hashContra=password_hash($passwordForm,PASSWORD_ARGON2ID);


        $usuarioBD =Usuario::obtenerUsuario($_GET['username']);
        if($usuarioBD){
            $passwordBDHash=$usuarioBD->getPassword();

            echo $passwordBDHash;
            print_r(password_verify($passwordForm,$passwordBDHash));
            if(password_verify($passwordForm,$passwordBDHash)){
                session_start();
                $_SESSION['nombreUsuario']=$_GET['username'];

            }else{
                header('Location: ../view/loginMalIntroducidoView.php');
            }
        }else{
            header('Location: ../view/loginMalIntroducidoView.php');
        }
    }

}

// si no se mete a ningun header al ginal llega aqui
if($_GET['username']==='admin'){
    header('Location: ../view/principalAdminView.php');

}else{
    header('Location: ../view/principalClienteView.php');
}
