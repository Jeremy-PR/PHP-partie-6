<?php

if(isset($_GET['building']) || isset($_GET['room'])){
    echo "Numéro du fucking building : " . $_GET['building'] . "<br>";
    echo "Numéro de chambre :  " . $_GET['room'] . "<br>";
}


?>