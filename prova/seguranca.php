<?php

function seguranca(){
    if(empty($_SESSION['NOME']) && empty($_SESSION['nivel'])){
        header("location: index.php");

    }else{

    }
}

seguranca();

?>