<?php
  $login_cookie = isset($_COOKIE['login']); //BOOLEANO true ou falso
    
	if($login_cookie){
      echo"Bem-Vindo, $login_cookie <br>";
      echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
	  echo "<br> <a href='doLogout.php'>Fazer log out</a>";
    }else{
      echo"Bem-Vindo, convidado <br>";
      echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
      echo"<br><a href='login.html'>Faça Login</a> Para ler o conteúdo";
    }
?>