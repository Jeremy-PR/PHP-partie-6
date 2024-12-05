<?php

if(isset($_GET['startDate']) || isset($_GET['endDate'])){
    echo "Date de début " . $_GET['startDate'] . "<br>";
    echo "Date de fin " . $_GET['endDate'] . "<br>";
}


?>