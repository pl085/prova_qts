<?php 

session_start();

?>

<form action="validacao.php"method = "post">
    <input type="email" name="login" placeholder="Digite seu email">
    <input type="password" name="senha" placeholder="Digite sua senha">
    <input type="submit" value="Entrar">
</form>

<?php

if(isset($_SESSION['loginError'])){
    echo $_SESSION['loginError'];
    echo $_SESSION['loginError'];
}

?>