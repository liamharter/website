<?php
session_start();
session_destroy();
session_start();
$_SESSION['login'] = $_GET['login'];
$_SESSION['senha'] = MD5($_GET['senha']);;

$connect = mysqli_connect('estoquesites.mysql.dbaas.com.br','estoquesites','Estoque@123');
$db = mysqli_select_db($connect, 'estoquesites') or die(mysqli_error($connect));

$resultado =mysqli_query($connect, "SELECT login FROM usuarios WHERE login='".$_SESSION['login']."' ORDER BY RAND() LIMIT 1");
$row = mysqli_fetch_array($resultado);
if ($_SESSION['login'] == $_POST['GET']){
    echo( "olá $_SESSION[login]" );
}



?>

