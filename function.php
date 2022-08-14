<?php
include_once ("controller.php");
function checkLogin(){
    if(empty($_SESSION["login"])){
        header("location:login.php");
    }
}



?>