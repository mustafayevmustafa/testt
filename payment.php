<?php

session_start();


if (!isset($_SESSION["login"])){
    echo "zehmet olmasa get login ol";
}else{
    echo "Odenis ucun biz haziriq";
}

