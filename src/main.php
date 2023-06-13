<?php

include_once(__DIR__."/../vendor/autoload.php");

use App\model\Usuario;

if(!isset($_SESSION['uLogado'])){
    $_SESSION['uLogado'] = "";
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['name'] == 'GabrielM' && $_POST['pass'] == 'Min1234*'){
        $uAdminPadrao = new Usuario();
        $uAdminPadrao-> setName('Min1234*');
        $uAdminPadrao-> setPass('Min1234*');
        $_SESSION['uLogado'] = $uAdminPadrao->getName();
        echo "Login Realizado com Sucesso";
    } 
    else{   
        echo "Falha no Login";
    }
}