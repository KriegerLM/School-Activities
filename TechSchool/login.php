<?php

    require 'config/config.php';
    require 'config/ConeccionDB.php';
    $db = new Database();
    $con = $db->conectar();

    $errors = [];

    if(!empty($_POST)){
        
    }

?>