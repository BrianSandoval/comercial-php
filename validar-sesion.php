<?php

session_name("SisComercial-2016II");
session_start();

if (!isset($_SESSION["s_nombres"])) {  //issset = si esta cargada o tiene algun valor
//el usuario no ha iniciado sesion
    require_once '../util/funciones/Funciones.clase.php';
    Funciones::mensaje("No has iniciado Sesion", "e", "index.php", 5);
    exit;
}
$s_nombreUsuario = ucwords(strtolower($_SESSION["s_nombres_p"]));
//strtolower = todo a minuscula; ucwords = la primera letra en mayusculas
$s_foto_usuario = $_SESSION["s_foto_usuario"];
