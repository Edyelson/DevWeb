<?php
//session_start();
//session_destroy();
//header('Location: index.php');
//exit; 
session_start();
unset($_SESSION);
session_destroy();
session_write_close();
header('Location: index.php');
die;
//echo 'Você fez log out. <a href="index.php">Voltar ao início</a>';
?>