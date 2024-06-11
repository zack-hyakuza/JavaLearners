<?php 

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['nome'])) {
    die("Você não está autorizado a acessar está página. Faça o <a href=\"index.php\">login</a>. ");
}
?>
