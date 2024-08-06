<?php

session_start();

$_SESSION["login"]="logined";


if (empty($_POST["email"]) && empty($_POST["password"])){
    echo "emailinizi yazin ve passwordunuzu yoxlayin";
}else{
    echo "Welcome ".$_POST["email"];
}
