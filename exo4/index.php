<?php

if(isset($_GET['language']) || isset($_GET['server'])){
    echo "Language utilisé " . $_GET['language'] . "<br>";
    echo "serveur utilisé " . $_GET['server'] . "<br>";
}


?>