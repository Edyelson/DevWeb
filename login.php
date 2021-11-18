<?php
//TESTE DO BANCO DE DADOS
$login = $_POST['login']; //VARCHAR (30)
$entrar = $_POST['entrar']; //BOOLEANO
$senha = md5($_POST['senha']); //VARCHAR(40)
$connect = mysqli_connect('localhost','root','','usuarios');
$db = mysqli_select_db($connect,'usuarios');


  if (isset($entrar)) {
    $verifica = mysqli_query($connect,"SELECT * FROM usuarios WHERE login =
    '$login' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
      }else{
        setcookie("login",$login);
        header("Location:index.php");
      }
  }
?>