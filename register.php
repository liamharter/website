<?php
$login1 = $_POST['login'];
$senha1 = MD5($_POST['senha']);;
$connect = mysqli_connect('estoquesites.mysql.dbaas.com.br','estoquesites','Estoque@123');
$db = mysqli_select_db($connect, 'estoquesites') or die(mysqli_error($connect));


$result = mysqli_query($connect, "SELECT COUNT(*) FROM usuarios WHERE login = '{$login1}'");
$row = $result->fetch_row();


if ($row[0] <= 0){ 
    mysqli_query($connect, "Insert into usuarios (login,senha) values ('".$login1."','".$senha1."')");
   
}
      
?>