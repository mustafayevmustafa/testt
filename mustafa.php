<?php

session_start();



if(!isset($_SESSION["car"])){
    echo "session yoxdu";
}else{
    echo $_SESSION["car"];
}



