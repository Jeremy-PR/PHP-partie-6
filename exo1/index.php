<?php

if(isset($_GET['lastname']) || isset($_GET['firstname'])){
    echo "Nom " . $_GET['lastname'] . "<br>";
    echo "Prénom " . $_GET['firstname'] . "<br>";
}


?>